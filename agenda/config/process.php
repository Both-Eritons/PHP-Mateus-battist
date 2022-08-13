<?php

session_start();

include_once("connection.php");
include_once("URL.php");

$data = $_POST;
// MODIDICAÇÕES NO BANCO
if(!empty($data)){
	// CRIAR CONTATO
	if($data["type"] === "create"){
		$query = "INSERT INTO contacts(name, phone, obs) VALUES(:name, :phone, :obs)";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(":name", $data["name"]);
		$stmt->bindParam(":phone", $data["phone"]);
		$stmt->bindParam(":obs", $data["obs"]);
		try{
			$stmt->execute();
			$_SESSION['msg'] = "contato criado com sucesso";
		} catch(PDOException $err){
			echo "erro acusado: ".$err->getMessage();
		}
	}
	else if($data['type'] === 'edit'){

		$query = "UPDATE contacts SET name = :name, phone = :phone, obs = :obs WHERE id = :id";

		$stmt = $conn->prepare($query);

		$stmt->bindParam(":name", $data["name"]);

		$stmt->bindParam(":phone", $data["phone"]);

		$stmt->bindParam(":obs", $data["obs"]);

		$stmt->bindParam(":id", $data["id"]);

		try{

			$stmt->execute();

			$_SESSION['msg'] = "contato atualizado com sucesso";

		} catch(PDOException $err){

			echo "erro acusado: ".$err->getMessage();

		}
	}
	else if($data["type"] === "delete"){

		$query = "DELETE FROM contacts WHERE id = :id";

		$stmt = $conn->prepare($query);

		$stmt->bindParam(":id", $data["id"]);

		try{
			$stmt->execute();

			$_SESSION['msg'] = "contato deletado com sucesso!";

		} catch(PDOException $err){

			echo "erro acusado: ".$err->getMessage();
		}
	}
	header("Location:".$BASE_URL."../index.php");
	// SELEÇÃO DE DADOS
}else{
$id;

// RETORNA UM CONTATO
if(!empty($_GET)){
	$id = $_GET['id'];
}
if(!empty($id)){
	$query = "SELECT * FROM contacts WHERE id = :id";

	$stat = $conn->prepare($query);

	$stat->bindParam(":id", $id);

	$stat->execute();

	$contact = $stat->fetch(PDO::FETCH_ASSOC);
}else{
// RETORNA TODOS OS CONTATOS
	$contacts = [];

	$query = "SELECT * FROM contacts";

	$stmt = $conn->prepare($query);
	$stmt->execute();
	$contacts = $stmt->fetchAll();
}
}

//FECHAR CONEXÃO
$conn = null;
