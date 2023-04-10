<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "animalprofileinsert";


$conn = mysqli_connect($server , $username , $password , $dbname);
// Condition when the user clicks submit on the form
if(isset($_POST['submit']))
{
    if(!empty($_POST['name']) && !empty($_POST['id']) && !empty($_POST['cage #']) && !empty($_POST['type']) && !empty($_POST['breed']) && !empty($_POST['sex']) && !empty($_POST['age']) && !empty($_POST['date brought into shelter']) && !empty($_POST['weight']) && !empty($_POST['color']) && !empty($_POST['altered']) && !empty($_POST['microchip']) && !empty($_POST['brought in by ACO(badge #) or citizen']) && !empty($_POST['add photo']))
    {
        // Values entered in the form by the user
        $name = $_POST['name'] ;
        $id = $_POST['id'] ;
        $cageNum = $_POST['cage #'] ;
        $type = $_POST['type'] ;
        $breed = $_POST['breed'] ;
        $sex = $_POST['sex'] ;
        $age = $_POST['age'] ;
        $dateBroughtIntoShelter = $_POST['date brought into shelter'] ;
        $weight = $_POST['weight'] ;
        $color = $_POST['color'] ;
        $altered = $_POST['altered'] ;
        $microchip = $_POST['microchip'] ;
        $broughtInByACO_OrCitizen = $_POST['brought in by ACO(badge #) or citizen'] ;
        $addPhoto = $_POST['add photo'] ;


        // Form a query passing in the values from the user to the form attributes
        $query = "insert into form(name, id, cage #, type, breed, sex, age, date brought into shelter, weight, color, altered, microchip, brought in by ACO(badge #) or citizen) values('$name', '$id', '$cageNum', '$type', '$breed', '$sex', '$age', '$dateBroughtIntoShelter', '$weight', '$color', '$altered', '$microchip', '$broughtInByACO_OrCitizen', '$addPhoto')";

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