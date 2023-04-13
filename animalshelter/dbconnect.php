<?php
// Default host, user and password installed into mySQL the database name corresponds to the database we created
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "animalshelter";

$dbconnection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

?>