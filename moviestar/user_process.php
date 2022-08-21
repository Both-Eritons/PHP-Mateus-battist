<?php
require_once("globals.php");
require_once("db.php");

require_once("models/User.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message($BASE_URL);
$userDAO = new UserDAO($conn, $BASE_URL);

//resgata o tipo de form
$type = filter_input(INPUT_POST, "type");

//atualizar usuario
if($type === "update"){
	//resgata dados do usuario
	$userData = $userDAO->verifyToken();
	// criando instancia de user
	$name = filter_input(INPUT_POST, "name");
	$lastname = filter_input(INPUT_POST, "lastname");
	$email = filter_input(INPUT_POST, "email");
	$bio = filter_input(INPUT_POST, "bio");


	// receber dados do post
	$user = new User();


	//preencher dados do usuario
	$userData->name = $name;
	$userData->lastname = $lastname;
	$userData->email = $email;
	$userData->bio = $bio;

	// Upload de imagem
	if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){

		$image = $_FILES["image"];
		//tipos de dados permitidos para upload
		$imagetypes = ["image/jpeg", "image/jpg", "image/png"];
		$jpgArray = ["image/jpeg", "image/jpg"];


		//checagem do tipo
		if(in_array($image["type"], $imagetypes)){
			// Verificar se é jpg
			if(in_array($image, $jpgArray)){

				$imageFile = imagecreatefromjpeg($image["tmp_name"]);

			}else{
				// Imagem é PNG
				$imageFile = imagecreatefrompng($image["tmp_name"]);
			}
			$imageName = $user->imageGenerateName();

			imagejpeg($imageFile, "./img/users/".$imageName,100);

			$userData->image = $imageName;


		}else{
			$message->setMessage("esse tipo de arquivo nao é permitido!", "error", "back");
		}

	}else{
		$message->setMessage("informações inválidas!", "error", "index.php");
	}
	// atualizando os dados
	$userDAO->update($userData);

}
//atualizar senha de usuario
else if($type === "changepassword"){

}else{
	$message->setMessage("informações inválidas!", "error", "index.php");
}	
