<?php

$db = new mysqli('localhost','root','','hospital');

 $query = "SELECT patient.id, patient.name, patient.status, species.name AS species, clients.name AS clients
    	FROM patient
    	INNER JOIN species
    	ON species.id = patient.species_id
    	INNER JOIN clients
    	ON clients.id = patient.clients_id";

 $result = $db->query($query);
 $patients = $result->fetch_all(MYSQLI_ASSOC);
?>