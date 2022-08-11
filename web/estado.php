<?php
setcookie("nome", "eriton", time() + 3600);
if(isset($_COOKIE['nome'])){
	$nome = $_COOKIE['nome'];
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
<h1>ola, <?= $nome; ?></h1>
</body>
</html>
