<?php
if(isset($_FILES['arq'])){
	$file = $_FILES['arq'];
	print_r($file);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width-device=width, initial-scale=1.0"  />
<title>Eriton</title>
</head>
<body>
<form action="index.php" method="POST" enctype="multipart/form-data"
<div><input type="file" name="arq"/></div>
<div>
<button type="submit" name="enviar">enviar</button>
</div>
</form>
</body>
</html>
