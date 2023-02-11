<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "animalshelter";


$conn = mysqli_connect($server , $username , $password , $dbname);
// Condition when the user clicks submit on the form
if(isset($_POST['submit']))
{
    if(!empty($_POST['date']) && !empty($_POST['type']) && !empty($_POST['name']) && !empty($_POST['sex']) &&
    !empty($_POST['breed']) && !empty($_POST['altered']) && !empty($_POST['microchip']) && !empty($_POST['broughtin']) &&
    !empty($_POST['location']) && !empty($_POST['age']) && !empty($_POST['distemper']) && !empty($_POST['rabies']) && 
    !empty($_POST['spayedneutered']) && !empty($_POST['dateofbirth']))
    {
        // Values entered in the form by the user
        $date = $_POST['date'] ;
        $type= $_POST['type'] ;
        $name = $_POST['name'] ;
        $sex = $_POST['sex'] ;
        $breed = $_POST['breed'] ;
        $altered = $_POST['altered'] ;
        $microchip = $_POST['microchip'] ;
        $broughtin = $_POST['broughtin'] ;
        $location = $_POST['location'] ;
        $owner = $_POST['owner'] ;
        $phonenumber = $_POST['phonenumber'] ;
        $address = $_POST['address'] ;
        $city = $_POST['city'] ;
        $state = $_POST['state'] ;
        $zipcode = $_POST['zipcode'] ;
        $rabies = $_POST['age'] ;
        $distemper = $_POST['distemper'] ;
        $spayedneutured = $_POST['spayedneutered'] ;
        $tagnumber = $_POST['tagnumber'] ;
        $clinic = $_POST['clinic'] ;
        $dateofbirth = $_POST['dateofbirth'] ;
        // $file = $_POST['file'] ;
       
        // Form a query passing in the values from the user to the intake attributes
        $query = "animalshelter into intake(date, type, name, sex, breed, altered, microchip, broughtin, location,
        owner, phonenumber, address, city, state, zipcode, rabies, distemper, spayedneutered, tagnumber, 
        clinic, dateofbirth) values('$date', '$type', '$name', '$sex', '$breed', '$altered', '$microchip',
        '$broughtin', '$location', '$owner', '$phonenumber', '$address', '$city', '$state', '$zipcode', 
        '$rabies', '$distemper', '$spayedneutered', '$tagnumber', '$clinic', '$dateofbirth')";

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

<!-- && !empty($_POST['type']) && !empty($_POST['name']) && !empty($_POST['sex']) &&
    !empty($_POST['breed']) && !empty($_POST['altered']) && !empty($_POST['microchip']) && !empty($_POST['broughtin']) &&
    !empty($_POST['location']) && !empty($_POST['age']) && !empty($_POST['distemper']) && !empty($_POST['rabies']) && 
    !empty($_POST['spayedneutered']) && !empty($_POST['dateofbirth']))
    -->
