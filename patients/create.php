<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label for="name">Gender:</label><br>
			<label for="name">Male:</label>
			<input type="radio" name="gender" value="Male" checked></input><br>
			<label for="name">Female:</label>
			<input type="radio" name="gender" value="Female"></input><br>
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