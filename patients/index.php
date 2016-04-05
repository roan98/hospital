<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Patiënts</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Status</th>
				<th>Species</th>
				<th>Client</th>
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