<?php

	$db = new mysqli('localhost','root','','hospital');

	if ($_SERVER["REQUEST_METHOD"] == "GET") {

		$speciesQuery = "select * from species";
		$clientsQuery = "select * from clients";

		$speciesResult = $db->query($speciesQuery);
		$clientsResult = $db->query($clientsQuery);

		$species = $speciesResult->fetch_all(MYSQLI_ASSOC);
		$clients = $clientsResult->fetch_all(MYSQLI_ASSOC);
	
	} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$species_id = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$gender = $db->escape_string($_POST["gender"]);
		$clients_id = $db->escape_string($_POST["clients"]);
		
		// Prepare query and execute
		$query = "INSERT INTO patient (name, status, gender, species_id, clients_id) values ('$name','$status','$gender','$species_id','$clients_id')";
		$result = $db->query($query);
		
	    // Tell the browser to go back to the index page.
	    header("Location: ./");
	    exit();

	}

?>	