<?php
require_once("globals.php");
require_once("db.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");
$userDAO = new UserDAO($conn, $BASE_URL);
if($userDAO){
	$userDAO->destroyToken();
}
?>
