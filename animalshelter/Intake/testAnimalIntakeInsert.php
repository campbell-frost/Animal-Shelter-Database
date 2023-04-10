<?php
// Assigns server, username, password, and database name to variables to be used to create a connection to the database for what the user inputs  
$server = "localhost";
$username = "root";
$password = "";
$dbname = "animalshelter";

// Creates connection to the database by passing the variables into the mysqli_connect() method
$conn = mysqli_connect($server , $username , $password , $dbname);

// Action that is taken when the user clicks 'submit' on the form for the animal intake page
if(isset($_POST['submit']))
{
    // Action that is taken when the fields for 'name', 'breed', 'color', and 'type' are filled in the animal intake page
    if(!empty($_POST['name']) && !empty($_POST['breed']) && !empty($_POST['color']) && !empty($_POST['type']))
    {
        // Values entered in the form by the user are 
        $date = $_POST['date'] ;
        $type = $_POST['type'] ;
        $name = $_POST['name'] ;
        $dateOfBirth = $_POST['dateOfBirth'] ;
        $sex = $_POST['sex'] ;
        $breed = $_POST['breed'] ;
        $color= $_POST['color'] ;
        $weight= $_POST['weight'] ;
        $altered= $_POST['altered'] ;
        $microchip= $_POST['microchip'] ;
        $broughtIn = $_POST['broughtIn'] ;
        $location = $_POST['location'];
        $owner = $_POST['owner'] ;
        $phone = $_POST['phone'] ;
        $address = $_POST['address'] ;
        $city = $_POST['city'] ;
        $state = $_POST['state'] ;
        $zipcode = $_POST['zipcode'] ;
        $rabiesVacc = $_POST['rabiesVacc'] ;
        $rabiesYear = $_POST['rabiesYear'] ;
        $distemperVacc = $_POST['distemperVacc'] ;
        $distemperYear = $_POST['distemperYear'] ;
        $spayedNeutered = $_POST['spayedNeutered'] ;
        $tagNumber = $_POST['tagNumber'] ;
        $clinic = $_POST['clinic'] ;
        $file = $_POST['file'] ;

        // Form a query passing in the values from the user to the form attributes
        $query = "insert into animal(date, type, name, dateOfBirth, sex, breed, color, weight, altered, microchip, broughtIn, location, owner, phone, address, city, state, zipcode, rabiesVacc, rabiesYear, 
        distemperVacc, distemperYear, spayedNeutered, tagNumber, clinic, file) values('$date', '$type', '$name', '$dateOfBirth', '$sex', '$breed', '$color', '$weight', '$altered', '$microchip', '$broughtIn', '$location', '$owner', '$phone', '$address', '$city', 
        '$state', '$zipcode', '$rabiesVacc', '$rabiesYear', '$distemperVacc', '$distemperYear', '$spayedNeutered', '$tagNumber', '$clinic', '$file')";

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
