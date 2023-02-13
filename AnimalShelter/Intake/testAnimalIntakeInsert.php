<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "animalshelter";


$conn = mysqli_connect($server , $username , $password , $dbname);
// Condition when the user clicks submit on the form
if(isset($_POST['submit']))
{
    if(!empty($_POST['name']) && !empty($_POST['breed']) && !empty($_POST['color']) && !empty($_POST['address']))
    {
        // Values entered in the form by the user
        $type = $_POST['type'] ;
        $name = $_POST['name'] ;
        $sex = $_POST['sex'] ;
        $breed = $_POST['breed'] ;
        $color= $_POST['color'] ;
        $weight= $_POST['weight'] ;
        $altered= $_POST['altered'] ;
        $microchip= $_POST['microchip'] ;
        $address = $_POST['address'] ;
        $city = $_POST['city'] ;
        $state = $_POST['state'] ;
        $rabiesVacc = $_POST['rabiesVacc'] ;
        $rabiesYear = $_POST['rabiesYear'] ;
        $distemperVacc = $_POST['distemperVacc'] ;
        $distemperYear = $_POST['distemperYear'] ;

        // Form a query passing in the values from the user to the form attributes
        $query = "insert into animalintake(type, name, sex, breed, color, weight, altered, microchip, address, city, state, rabiesVacc, rabiesYear, 
        distemperVacc, distemperYear) values('$type', '$name', '$sex', '$breed', '$color', '$weight', '$altered', '$microchip', '$address', '$city', 
        '$state', '$rabiesVacc', '$rabiesYear', '$distemperVacc', '$distemperYear')";

        // Incase query will not run it will throw an error
        $run = mysqli_query($conn, $query) or die(mysqli_error());

        // If the query will run, we will submit a request that the form was submitted successfully
        if($run) 
        {
            echo " Form submitted successfully";
        }

        // If the query does not run, form was not submitted successfully
        else
        {
            echo "Form not submitted";
        }
    }
    // If error occurs, then this notifies that the form was not completed entirely
    else 
    {
        echo " all fields required" ;
    }
}

?>