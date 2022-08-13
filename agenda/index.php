<?php
include_once("./config/URL.php");
include_once("./templates/header.php");
?>

<div class="container">
<?php if(isset($printMsg) && $printMsg != ""):?>
<p id="msg"><?=$printMsg;?></p>
<?php endif; ?>
<h1 id="main-title">Minha Agenda</h1>
<?php if(count($contacts) > 0): ?>
<table id="contacts-table" class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nome</th>
			<th scope="col">Telefone</th>
			<th scope="col"></th>
		</tr>
	</thead>
	<tbody class="">
	<?php foreach($contacts as $contact): ?>
		<tr>
			<td scope="row"><?= $contact["id"] ?></td>
			<td scope="row"><?= $contact["name"] ?></td>
			<td scope="row"><?= $contact["phone"] ?></td>
			<td class="actions">
			<a href="<?= $BASE_URL?>show.php?id=<?=$contact['id']?>">
				<i class="fas fa-eye check-icon"></i>
			</a>
				<a href="<?= $BASE_URL?>edit.php?id=<?=$contact['id']?>">
					<i class="fas fa-edit edit-icon"></i>
				</a>
				<form action="<?=$BASE_URL?>config/process.php" method="POST">
					<input type="hidden" name="type" value="delete" />
					<input type="hidden" name="id" value="<?= $contact['id']?>" />
					<button class="button" type="submit"><i class="fas fa-times delete-icon"></i></button>
				</form>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php else: ?>
<p id="empty-list-text">ainda nao há contatos na sua agenda, 
<a href="<?= $BASE_URL?>create.php">clique aqui para adicionar</a>.
</p>
<?php endif;?>
</div>

<?php
include_once("./templates/footer.php");
?>
