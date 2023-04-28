<?php
include("dbconnect.php");

// Action that is taken when the user clicks 'submit' on the form for the animal intake page
if (isset($_POST['submit'])) 
{
    // Action that is taken when the fields for 'name', 'breed', 'color', and 'type' are filled in the animal intake page
        // Check if the user entered owner information
            $ownerName = $_POST['name'];
            $ownerPhone = $_POST['phone'];
            $ownerAddress = $_POST['address'];
            $ownerCity = $_POST['city'];
            $ownerState = $_POST['state'];
            $ownerZip = $_POST['zip'];

            // Insert owner information into the owner table'
            $insertOwnerQuery = "INSERT INTO owner (name, phone, address, city, state, zip) VALUES ('$ownerName', '$ownerPhone', '$ownerAddress', '$ownerCity', '$ownerState', '$ownerZip')";
			$result = mysqli_query($dbconnection, $insertOwnerQuery);
			echo $insertOwnerQuery;
}

?>