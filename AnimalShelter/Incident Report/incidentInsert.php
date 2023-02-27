<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "animalshelter";


$conn = mysqli_connect($server , $username , $password , $dbname);
// Condition when the user clicks submit on the form
if(isset($_POST['submit']))
{
    if(!empty($_POST['badgeNumber', 'intakeNumber']))
    {
        // Values entered in the form by the user
        $badgeNumber = $_POST['badgeNumber'] ;
        $intakeNumber = $_POST['intakeNumber'] ;
        $date =  $_POST['date'] ;
        $time = $_POST['time'];
        $weather = $_POST['weather'];
        $type = $_POST['type'];
        $sex = $_POST['sex'];
        $color = $_POST['color'];
        $owner = $_POST


        
       

        // Form a query passing in the values from the user to the form attributes
        $query = "insert into incidentreport(badeNumber, intakeNumber, date, time, weather, type) values('$badgeNumber', '$intakeNumber', '$date', '$time', '$weather', '$type')";

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
