<?php
// Default host, user and password installed into mySQL the database name corresponds to the database we created
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "animal_shelter";

$dbconnection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$dbconnection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($dbconnection);
?>