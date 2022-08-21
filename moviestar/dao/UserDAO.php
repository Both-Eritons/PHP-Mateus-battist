<?php

require_once("models/User.php");
require_once("models/Message.php");

class UserDAO implements UserDAOInterface{
	private $conn;
	private $url;
	private $message;

	public function __construct(PDO $conn, $url){
		$this->conn = $conn;
		$this->url = $url;
		$this->message = new Message($url);
	}
	public function buildUser($data){
		$user = new User();
		$user->id = $data["id"];
		$user->name = $data["name"];
		$user->lastname = $data["lastname"];
		$user->email = $data["email"];
		$user->password = $data["password"];
		$user->image = $data["image"];
		$user->bio = $data["bio"];
		$user->token = $data["token"];

		return $user;
	}
	public function create(User $user, $authUser = false){
		$sql = "INSERT INTO users(name, lastname, email, password, token) VALUES(:name, :lastname, :email,:password, :token)";
		$stmt = $this->conn->prepare($sql);
	$stmt->bindValue(":name", $user->name);	
	$stmt->bindValue(":lastname", $user->lastname);	
	$stmt->bindValue(":email", $user->email);	
	$stmt->bindValue(":password", $user->password);	
	$stmt->bindValue(":token", $user->token);

	$stmt->execute();

	//authenticar usuario caso auth seja true
	if($authUser){
		$this->setTokenToSession($user->token);
	}	

	}
	public function update(User $user, $redirect = true){
		$stmt = $this->conn->prepare("UPDATE users SET
			name = :name,
			lastname = :lastname,
			email = :email,
			image = :image,
			bio = :bio,
			token = :token
			WHERE id = :id
		");
		$stmt->bindValue(":name",$user->name);
		$stmt->bindValue(":lastname", $user->lastname);
		$stmt->bindValue(":email", $user->email);
		$stmt->bindValue(":image", $user->image);
		$stmt->bindValue(":bio", $user->bio);
		$stmt->bindValue(":token", $user->token);
		$stmt->bindValue(":id", $user->id);
		$stmt->execute();
		if($redirect){
			//redireciona para o perfil do usuario
			$this->message->setMessage("dados atualizados com sucesso!", "success", "editprofile.php");
		}

	}
	public function verifyToken($protected = false){

		if(!empty($_SESSION["token"])){
			//pega o token da session

			$token = $_SESSION["token"];

			$user = $this->findByToken($token);

			if($user){

				return $user;
			} else if($protected){
				$this->message->setMessage("voce precisa logar para acessar esta pagina!", "error", "index.php");
			}

		} else if($protected){
			$this->message->setMessage("voce precisa logar para acessar esta pagina!", "error", "index.php");
		}
	}

	public function setTokenToSession($token, $redirect = true)
	{
		//SALVAR TOKEN NA SESSION
		$_SESSION["token"] = $token;

		if($redirect)
		{
			//redireciona para o perfil do usuario
			$this->message->setMessage("seja bem vindo!", "success", "editprofile.php");
		}
	}
	public function authenticateUser($email, $password){
		$user = $this->findByEmail($email);

		if($user){
			//checar se a senha se batem;
			if(password_verify($password, $user->password)){
				//gerar token e inserir na sessão
				$token = $user->generateToken();

				$this->setTokenToSession($token,false);

				//atualizar token no usuario
				$user->token = $token;
				$this->update($user, false);
				return true;
			}else{
				return false;
			}

		} else{
			return false;
		}
	}

	public function findByEmail($email){
		if($email != ""){
			$sql = "SELECT * FROM users WHERE email = :email";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(":email", $email);
			$stmt->execute();

			if($stmt->rowCount() > 0){

				$data = $stmt->fetch();
				$user = $this->buildUser($data);
				return $user;

			} else{
				return false;
			}
		}else{
			return false;
		}
	}
	public function findById($id){
	}
	public function findByToken($token){
		if($token != ""){
			$sql = "SELECT * FROM users WHERE token = :token";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(":token", $token);
			$stmt->execute();

			if($stmt->rowCount() > 0){

				$data = $stmt->fetch();
				$user = $this->buildUser($data);
				return $user;

			} else{
				return false;
			}
		}else{
			return false;
		}

	}

	public function destroyToken(){
		//remove o token da sessao
		$_SESSION["token"] = "";
		//redireciona e apresenta msg de sucesso!
		$this->message->setMessage("você fez logout com sucesso!", "success", "index.php");
	}
	public function changePassword(User $user){}
}
