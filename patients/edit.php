<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['name']?>">
		</div>		
		<div>
			<label for="name">status:</label>
			<textarea id="status" name="status"><?=$patient['status']?></textarea>
		</div>
		<div>
			<label for="name">Species:</label>
			<select name="species" id="species">
				<?php foreach ($species as $specie) { ?>}
				<option value=<?php echo $specie['id'];?>><?php echo $specie['name'];?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label for="name">Clients:</label>
			<select name="clients" id="clients">
				<?php foreach ($clients as $client) { ?>}
				<option value=<?php echo $client['id'];?>><?php echo $client['name'];?></option>
				<?php } ?>
			</select>
		</div>			
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>