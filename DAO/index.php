<?php
include_once("./db.php");
include_once("dao/CarDAO.php");

$carDao = new CarDAO($conn);

$cars = $carDao->findAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sexo</title>
</head>
<body>
<h1>
insira um carro
</h1>
<form action="process.php" method="POST">
<div>
<label for="brand">marca do carro: </label></br>
<input type="text" name="brand" placeholder="insira a marca">
</div>

<div>
<label for="km">kilometragem: </label></br>
<input type="text" name="km" placeholder="insira a kilometragem">
</div>
<div>
<label for="color">cor do carro: </label></br>
<input type="text" name="color" placeholder="insira a cor">
<button type="submit">Salvar</button>
</div>

</form>
<ul>
<?php foreach($cars as $car): ?>
<li><?= $car->getBrand()?> - <?= $car->getKM()?> - <?= $car->getColor()?></li>
<?php endforeach; ?>
</ul>
</body>
</html>
