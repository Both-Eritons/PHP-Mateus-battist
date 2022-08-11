<?php
if(isset($_POST['ingredientes'])){
	$ingredientes = $_POST['ingredientes'];
	print_r($ingredientes);
}
?>
<html>
<head>
</head>
<body>
<form action="index.php" method="POST">
<div><input type="checkbox" name="ingredientes[]" value="tomate" />tomate</div>
<div><input type="checkbox" name="ingredientes[]" value="ababora" />ababora</div>
<div><input type="checkbox" name="ingredientes[]" value="limao" />limao</div>
<div>
<button type="submit" name="enviar">enviar</button>
</div>
</form>
</body>
</html>
