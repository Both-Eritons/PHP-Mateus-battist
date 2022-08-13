<?php
include_once("./config/URL.php");
include_once("./templates/header.php");
?>
<div id="view-contact-container" class="container">
<?php include_once("templates/backbtn.html"); ?>
<h1 id="main-title"><?= $contact['name'] ?></h1>
<p class="bold">telefone: </p>
<p><?= $contact['phone']?></p>
<p class="bold">observações: </p>
<p><?= $contact['obs']?></p>
</div>
<?php
include_once("./templates/footer.php");
?>
