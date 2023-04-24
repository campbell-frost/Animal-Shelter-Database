<?php
include("dbconnect.php");

// Action that is taken when the user clicks 'submit' on the form for the animal intake page
if (isset($_POST['submit'])) {
    // Action that is taken when the fields for 'name', 'breed', 'color', and 'type' are filled in the animal intake page
    if (!empty($_POST['name']) && !empty($_POST['breed']) && !empty($_POST['color']) && !empty($_POST['type'])) {
        // Get animal information
        $type = $_POST['type'];
        $name = $_POST['name'];
        $date = $_POST['date'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $sex = $_POST['sex'];
        $breed = $_POST['breed'];
        $color = $_POST['color'];
        $weight = $_POST['weight'];
        $altered = $_POST['altered'];
        $microchip = $_POST['microchip'];
        $broughtIn = $_POST['broughtIn'];
        $location = $_POST['location'];
        $rabiesVacc = $_POST['rabiesVacc'];
        $rabiesYear = $_POST['rabiesYear'];
        $distemperVacc = $_POST['distempVacc'];
        $distemperYear = $_POST['distempYear'];
        $spayedNutered = $_POST['spayedNeutered'];
        $tagNumber = $_POST['tagNumber'];
        $clinic = $_POST['clinic'];

        // Check if the user entered owner information
        if ($_POST['hasOwner'] == 'Yes') {
            $ownerName = $_POST['ownerName'];
            $ownerPhone = $_POST['phone'];
            $ownerAddress = $_POST['address'];
            $ownerCity = $_POST['city'];
            $ownerState = $_POST['state'];
            $ownerZip = $_POST['zip'];

            // Insert owner information into the owner table
            $insertOwnerQuery = "INSERT INTO owner (name, phone, address, city, state, zip) VALUES ('$ownerName', '$ownerPhone', '$ownerAddress', '$ownerCity', '$ownerState', '$ownerZip')";
            if (!mysqli_query($dbconnection, $insertOwnerQuery)) {
                die('Error: ' . mysqli_error($dbconnection));
            }
            echo $insertOwnerQuery;

            // Get the ID of the newly inserted owner
            $ownerId = mysqli_insert_id($dbconnection);

            // Insert animal information into the animal table with owner ID
            $insertAnimalQuery = "INSERT INTO animal (type, name, date, dateOfBirth, sex, breed, color, weight, altered, microchip, broughtIn, location, rabiesVacc, rabiesYear, distemperVacc, distemperYear, spayedNutered, tagNumber, clinic, owner_id) VALUES ('$type', '$name', '$date', '$dateOfBirth', '$sex', '$breed', '$color', '$weight', '$altered', '$microchip', '$broughtIn', '$location', '$rabiesVacc', '$rabiesYear', '$distemperVacc', '$distemperYear', '$spayedNutered', '$tagNumber', '$clinic', '$ownerId')";
            if (!mysqli_query($dbconnection, $insertAnimalQuery)) {
                die('Error: ' . mysqli_error($dbconnection));
            }

            // Redirect to the success page
            header('Location: viewAnimals.php');
        } else {
            // Insert animal information into the animal table without owner ID
            $insertAnimalQuery = "INSERT INTO animal (type, name, date, dateOfBirth, sex, breed, color, weight, altered, microchip, broughtIn, location, rabiesVacc, rabiesYear, distemperVacc, distemperYear, spayedNutered, tagNumber, clinic) VALUES ('$type', '$name', '$date', '$dateOfBirth', '$sex', '$breed', '$color', '$weight', '$altered', '$microchip', '$broughtIn', '$location', '$rabiesVacc', '$rabiesYear', '$distemperVacc', '$distemperYear', '$spayedNutered', '$tagNumber', '$clinic')";
            if (!mysqli_query($dbconnection, $insertAnimalQuery)) {
                die('Error: ' . mysqli_error($dbconnection));
            } // Redirect to the success page
            header('Location: viewAnimals.php');
        }
    } else {
        // Redirect to the error page if any required fields are empty
        header('Location: error.php');
    }
} else {
    // Redirect to the error page if the user did not click 'submit'
    header('Location: error.php');
}
?>