<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>clients</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Edit</th>
				<th>Delete</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($clients as $clients):
?>
			<tr>
				<td><?=$clients['name']?></td>
				<td class="center"><a href="edit.php?id=<?=$clients['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$clients['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>