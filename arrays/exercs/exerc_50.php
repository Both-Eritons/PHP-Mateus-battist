<?php
$pessoas = [
	"eriton" => 18,
	"mateus" => 29,
	"bryan" => 19,
	"maria" => 84,
	"rafael" => 25
]
?>
<table>
	<tr>
		<th>nome</th>
		<th>idade</th>
	</tr>
	<?php foreach($pessoas as $nome => $idade): ?>
		<tr>
			<td><?= $nome; ?></td>
			<td><?= $idade; ?></td>
		</tr>
	<?php endforeach; ?>
</table>
