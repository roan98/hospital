<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$speciesQuery = "SELECT * FROM species ";
			$clientsQuery = "SELECT * FROM clients ";
			$patientsQuery = "SELECT * FROM patient where id=$id";

			$speciesResult = $db->query($speciesQuery);
			$clientsResult = $db->query($clientsQuery);
			$patientsResult = $db->query($patientsQuery);

			$species = $speciesResult->fetch_all(MYSQLI_ASSOC);
			$clients = $clientsResult->fetch_all(MYSQLI_ASSOC);
			$patient = $patientsResult->fetch_assoc();		
		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$species_id = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$clients_id = $db->escape_string($_POST["clients"]);
		
		// Prepare query and execute
		$query = "UPDATE patient 
		SET name='$name', species_id='$species_id', status='$status', clients_id='$clients_id' 
		WHERE id=$id";
		
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>