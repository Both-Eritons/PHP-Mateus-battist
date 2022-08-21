<?php
require_once("globals.php");
require_once("db.php");
require_once("templates/header.php");
?>
<div id="main-container" class="container-fluid">
<div class="col-md-12">
<div class="row" id="auth-row">
<div class="col-md-4" id="login-container">
<h2>Entrar</h2>
<form action="<?= $BASE_URL?>auth_process.php" method="POST">
<input type="hidden" value="login" name="type">
<div class="form-group">
<label for="email">Email: </label>
<input class="form-control" type="email" placeholder="digite seu email" name="email" id="email">
</div>
<div class="form-group">
<label for="password">Senha: </label>
<input class="form-control" type="password" placeholder="digite sua senha" name="password" id="password">
</div>
<button type="submit"class="btn card-btn">Entrar</button>
</form>
</div>
<div class="col-md-4" id="register-container">
<h2>criar conta</h2>
<form action="<?= $BASE_URL?>auth_process.php" method="POST">
<input type="hidden" value="register" name="type">
<div class="form-group">
<label for="email">Email: </label>
<input class="form-control" type="email" placeholder="digite seu email" name="email" id="email">
</div>
<div class="form-group">
<label for="name">Nome: </label>
<input class="form-control" type="text" placeholder="digite seu nome" name="name" id="name">
</div>
<div class="form-group">
<label for="lastname">Sobrenome: </label>
<input class="form-control" type="text" placeholder="digite seu sobre nome" name="lastname" id="lastname">
</div>
<div class="form-group">
<label for="password">Senha: </label>
<input class="form-control" type="password" placeholder="digite sua senha" name="password" id="password">
</div>
<div class="form-group">
<label for="confirmpassword">confirme a Senha:</label>
<input class="form-control" type="password" placeholder="confirme a senha" name="confirmpassword" id="confirmpassword">
</div>
<button class="btn card-btn" type="submit">Registrar</button>
</form>
</div>

</div>
</div>
</div>

<?php require_once("templates/footer.php");?>
