<?php
include("dbconnect.php");

// Retrieve the animal's ID from the query parameter
$id = $_GET['id'];

// Retrieve the animal's information from the database
$sql = "SELECT * FROM animal WHERE animalID = $id";
$result = mysqli_query($dbconnection, $sql);
$row = mysqli_fetch_assoc($reusult);

// If the user has submitted the form, update the animal's information in the database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $dob = $_POST['dob'];
    $sex = $_POST['sex'];
    $breed = $_POST['breed'];
    $color = $_POST['color'];
    $weight = $_POST['weight'];
    $altered = $_POST['altered'];
    $microchip = $_POST['microchip'];
    $spayed_neutered = $_POST['spayed_neutered'];
    $owner = $_POST['owner'];
    $tag_number = $_POST['tag_number'];
    
    $sql = "UPDATE animal SET name='$name', type='$type', dateOfBirth='$dob', sex='$sex', breed='$breed', color='$color', weight='$weight', altered='$altered', microchip='$microchip', spayedNeutered='$spayed_neutered', owner='$owner', tagNumber='$tag_number' WHERE animalID = $id";

    if ($dbconnection->query($sql) === TRUE) {
        header("Location: animalProfile.php?id=$id");
    } else {
        echo "Error updating record: " . $dbconnection->error;
    }
}

$dbconnection->close();
?>
