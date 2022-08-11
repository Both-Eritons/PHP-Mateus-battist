<?php
$validacoes = [];
if(count($_POST) > 0){

	if($_POST['nome'] === ""){
		$validacoes[] = "por favor, coloque seu nome!";
	}
	if($_POST['email'] === ""){
		$validacoes[] = "por favor, coloque seu email!";
	}
	if($_POST['senha'] !== $_POST['confirmar']){
		$validacoes[] = "as senhas nao sao iguais.";
	}


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
<?php if(count($validacoes)): ?>
<ul>
<?php foreach($validacoes as $err): ?>
<li><?= $err; ?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
<form action="validacao.php" method="POST">
<div><input type="text" name="nome" placeholder="digite seu nome"/></div>
<div><input type="text" name="email" placeholder="digite seu email"/></div>
<div><input type="text" name="senha" placeholder="digite sua senha"/></div>
<div><input type="text" name="confirmar" placeholder="digite sua senha novamentie"/></div>
<div>
<button type="submit" name="enviar">enviar</button>
</div>
</form>
</body>
</html>
