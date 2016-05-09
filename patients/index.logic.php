<?php

	$db = new mysqli('localhost','root','','hospital');

	$column = isset($_GET['column']) ? $_GET['column'] : null;
	$sort = isset($_GET['sort']) ? $_GET['sort'] : null;
	$displaysort = isset($sort) && $sort == "asc" ? "desc" : "asc";
	$columnsort = $column && $sort ? "ORDER BY " . $column . " " . $sort : "";

	 $query = "SELECT patient.id, patient.name, patient.status, patient.gender, species.name AS species, clients.name AS clients
    		FROM patient
    		INNER JOIN species
    		ON species.id = patient.species_id
    		INNER JOIN clients
    		ON clients.id = patient.clients_id " . $columnsort;


	$result = $db->query($query);

	$patients = $result->fetch_all(MYSQLI_ASSOC);