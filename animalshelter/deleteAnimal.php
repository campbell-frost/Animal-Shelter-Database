<?php
include("dbconnect.php");

// Retrieve the animal's ID from the query parameter
$id = $_GET['id'];

// Delete the animal from the database
$sql = "DELETE FROM animal WHERE animalID = $id";
$result = $dbconnection->query($sql);

// Redirect to the view animals page
header("Location: viewAnimals.php");
exit;
?>