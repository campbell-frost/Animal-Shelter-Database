<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "animalshelter";


$conn = mysqli_connect($server , $username , $password , $dbname);
// Condition when the user clicks submit on the form
if(isset($_POST['submit']))
{
    // Checks that the required fields are completed
    if(!empty($_POST['badgeNumber']), !empty($_POST['intakeNumber']), !empty($_POST['date']), 
    !empty($_POST['time']), !empty($_POST['weather']), !empty($_POST['type']), !empty($_POST['sex']), 
    !empty($_POST['color']), !empty($_POST['description']))
    {
        // Values entered in the form by the user
        $badgeNumber = $_POST['badgeNumber'] ;
        $intakeNumber = $_POST['intakeNumber'] ;
        $date = $_POST['date'] ;
        $time = $_POST['time'] ;
        $weather = $_POST['weather'] ;
        $type = $_POST['type'] ;
        $sex = $_POST['sex'] ;
        $color = $_POST['color'] ;
        $owner = $_POST['owner'] ;
        $phone = $_POST['phone'] ;
        $address = $_POST['address'] ;
        $city = $_POST['city'] ;
        $state = $_POST['state'] ;
        $zipcode = $_POST['zipcode'] ;
        $description = $_POST['description'] ;       

        // Form a query passing in the values from the user to the form attributes
        $query = "insert into incidentreport(badgeNumber, intakeNumber, date, time, weather, type, 
        sex, color, owner, phone, address, city, state, zipcode, description) values('$badgeNumber', 
        '$intakeNumber', '$date', '$time', '$weather', '$type', '$sex', '$color', '$owner', '$phone', 
        '$address', '$city', '$state', '$zipcode', '$description')";

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
