<?php
include("dbconnect.php");

// Action that is taken when the user clicks 'submit' on the form for the animal intake page
if (isset($_POST['submit'])) {
    // Action that is taken when the fields for 'name', 'breed', 'color', and 'type' are filled in the animal intake page
    if (!empty($_POST['badgeNumber'])) {
        // Get animal information
        $badgeNumber = $_POST['badgeNumber'];
        $incident_id = $_POST['intakeNumber'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $weather = $_POST['weather'];
        $description = $_POST['description'];
        $animal_id = $_POST['animal_id'];


           // Insert animal information into the animal table with owner ID
           $insertIncidentQuery = "INSERT INTO incident (badgeNumber, incident_ID, date, time, weather, description, animal_ID) VALUES ('$badgeNumber', '$incident_id', '$date', '$time', '$weather','$description', '$animal_id')";           
           if (!mysqli_query($dbconnection, $insertIncidentQuery)) {
              die('Error: ' . mysqli_error($dbconnection));
          }
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

         

            // Redirect to the success page
            header('Location: reports.php');
        } else {
            
            header('Location: reports.php');
        }
    } else {
echo "error";
    }
} else {
    echo "error";
}
?>