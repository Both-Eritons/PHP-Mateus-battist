<?php
require_once("templates/header.php");
require_once("models/User.php");

$user = new User();
$userData = $userDAO->verifyToken(true); $fullName =
$user->getFullName($userData); if($userData->image == ""){ $userData->image =
"user.png"; } ?>

<div id="main-container" class="container-fluid edit-profile-page">
  <div class="col-md-12">
    <form
      action="<?=$BASE_URL?>user_process.php"
      method="POST"
      enctype="multipart/form-data"
    >
      <input type="hidden" name="type" value="update" />
      <div class="row">
        <div class="col-md-4">
          <h1><?= $fullName ?></h1>
          <p class="page-description">
            altere seus dados no formulario abaixo:
          </p>
          <div class="form-group">
            <label for="name">Nome: </label>
            <input
              type="text"
              class="bold form-control"
              name="name"
              id="name"
              placeholder="digite seu nome"
              value="<?=$userData->name?>"
            />
          </div>
          <div class="form-group">
            <label for="lastname">sobrenome: </label>
            <input
              type="text"
              class="bold form-control"
              name="lastname"
              id="lastname"
              placeholder="digite seu SobreNome"
              value="<?=$userData->lastname?>"
            />
          </div>

          <div class="form-group">
            <label for="email">E-mail: </label>
            <input
              type="text"
              readonly
              class="bold form-control disabled"
              name="email"
              id="email"
              placeholder="digite seu email"
              value="<?=$userData->email?>"
            />
          </div>
          <button type="submit" class="btn card-btn">Alterar</button>
        </div>
        <div class="col-md-4">
          <div
            id="profile-image-container"
            style="
              background-image: url('<?=$BASE_URL?>img/users/<?=$userData->image?>');"
          ></div>
          <div class="form-group">
            <label for="image">Foto:</label>
            <input
              type="file"
              class="bold form-control-file"
              name="image"
              id="image"
            />
          </div>
          <div class="form-group">
            <label for="bio">sobre você:</label>
            <textarea
              class="bold form-control"
              rows="5"
              name="bio"
              id="bio"
              placeholder="conte quem voce é!"
            >
<?= $userData->bio ?></textarea
            >
          </div>
        </div>
      </div>
    </form>
    <div class="row" id="change-password-container">
      <div class="col-md-4">
        <h2>alterar senha</h2>
        <p class="page-description">
          digite a nova senha e confirme parq alterar sua senha!
        </p>
        <form action="<?=$BASE_URL?>user_process.php" method="POST">
          <input type="hidden" name="type" value="changepassword" />
          <div class="form-group">
            <label for="password">nova senha: </label>
            <input
              type="password"
              class="bold form-control"
              name="password"
              id="password"
              placeholder="digite sua nova senha"
            />
          </div>
          <div class="form-group">
            <label for="confirmpassword">confirmação de senha:</label>
            <input
              type="password"
              class="bold form-control"
              name="confirmpassword"
              id="confirmpassword"
              placeholder="confirme sua nova senha"
            />
          </div>
          <button type="submit" class="btn card-btn">Alterar senha</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require_once("templates/footer.php");?>
