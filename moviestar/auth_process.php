<?php

require_once("globals.php");
require_once("db.php");

require_once("models/User.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message($BASE_URL);
$userDAO = new UserDAO($conn, $BASE_URL);

//resgata o tipo do formulario
$type = filter_input(INPUT_POST, "type");

//verificação do tipo do formulario
if($type === "register"){

	
	$name = filter_input(INPUT_POST, "name");
	$lastname = filter_input(INPUT_POST, "lastname");
	$email = filter_input(INPUT_POST, "email");
	$password = filter_input(INPUT_POST, "password");
	$confirmpassword = filter_input(INPUT_POST, "confirmpassword");

	//verificação de dados minimos
	if($name && $lastname && $email && $password){
		//verificar se as senhas se batem
		if($password === $confirmpassword){

			//verificar se o email ja esta cadastrado no sistema

			if($userDAO->findByEmail($email) === false){
				$user = new User();

				//criação de token e senha
				$userToken = $user->generateToken();
				$finalPass = $user->generatePassword($password);

				$user->name = $name;
				$user->lastname = $lastname;
				$user->email = $email;
				$user->password = $finalPass;
				$user->token = $userToken;

				$auth = true;

				$userDAO->create($user, $auth);
			}else{
				
				$message->setMessage("usuario ja cadastrado, mude as informações!", "error", "back");
			}

		}else{
			$message->setMessage("as senhas devem ser iguais.", "error", "back");
		}
	}else{
		//mensagem de erro
		$message->setMessage("por favor preencha todos os campos!", "error", "back");

	}

}
else if($type === "login"){
	$email = filter_input(INPUT_POST, "email");
	$password = filter_input(INPUT_POST, "password");

	if($userDAO->authenticateUser($email, $password)){

		$message->setMessage("seja bem vindo!", "success", "editprofile.php");
		

	}else{
		$message->setMessage("senha ou nome de usuario nao se batem!","error","back");

	}
}else{
	$message->setMessage("informações inválidas!","error","index.php");
}
