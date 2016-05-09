<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Patiënts</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th><a href="index.php?column=name&sort=<?= $displaysort; ?>">Name</a></th>
				<th>Status</th>
				<th><a href="index.php?column=species&sort=<?= $displaysort; ?>">Species</a></th>
				<th><a href="index.php?column=clients&sort=<?= $displaysort; ?>">Client</a></th>
				<th>Gender</th>
				<th colspan="2"></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['name']?></td>
				<td><?=$patient['status']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['clients']?></td>
				<td><?=$patient['gender']?></td>
				<td><a href="edit.php?id=<?=$patient['id']?>">edit</a></td>
				<td><a href="delete.php?id=<?=$patient['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>