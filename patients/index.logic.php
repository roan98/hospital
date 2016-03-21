<?php

$db = new mysqli('localhost','root','','hospital');

 $result = $db->query("SELECT patient.id,patient.name as pname,patient.species,patient.status,patient.clients, clients.name as cname FROM patient LEFT JOIN clients ON patient.clients=clients.name");
 $patients = $result->fetch_all(MYSQLI_ASSOC);
?>