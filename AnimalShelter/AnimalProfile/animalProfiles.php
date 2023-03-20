<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "animalshelter";

$conn = new mysqli($server, $username, $password, $dbname) ;

// Check connection
if($conn -> connect_error)
{
   die("Connection failed: " . $conn -> connect_error);
}

// Check exit reason and update the necessary fields
if ($exit_reason == "Auction") {
    $sql = "UPDATE disposition SET date = NOW(), address = '$auction_location' WHERE animal_id = '$animal_id'";
} elseif ($exit_reason == "Euthanized") {
    $sql = "UPDATE disposition SET date = NOW(), vet = '$vet_info' WHERE animal_id = '$animal_id'";
} elseif ($exit_reason == "Reclaimed by Owner" || $exit_reason == "Adopted by") {
    $sql = "UPDATE disposition SET date = NOW(), name = '$contact_name', address = '$contact_address', city = '$contact_city', state = '$contact_state', zip = '$contact_zip', phone = '$contact_phone', email = '$contact_email' WHERE animal_id = '$animal_id'";
}

// Execute query and check for errors
if ($conn->query($sql) === TRUE) {
    echo "Disposition updated successfully";
} else {
    echo "Error updating disposition: " . $conn->error;
}

// Close database connection
$conn->close();

require("ViewAnimalPage.php") ;

function getAnimalInfo($id)
{
    $array = array();
    $animalProfile = mysql_query("SELECT * FROM 'animal' WHERE 'animalID'=".$id);

    while($row = mysql_fetch_assoc($animalProfile))
    {
        $array['animalID'] = $row['animalID'] ;
        $array['date'] = $row['date'] ;
        $array['type'] = $row['type'] ;
        $array['name'] = $row['name'] ;
        $array['dateOfBirth'] = $row['dateOfBirth'] ;
        $array['sex'] = $row['sex'] ;
        $array['breed'] = $row['breed'] ;
        $array['color'] = $row['color'] ;
        $array['weight'] = $row['weight'] ;
        $array['altered'] = $row['altered'] ;
        $array['microchip'] = $row['microchip'] ;
        $array['broughtIn'] = $row['broughtIn'] ;
        $array['location'] = $row['location'] ;
        $array['owner'] = $row['owner'] ;
        $array['phone'] = $row['phone'] ;
        $array['address'] = $row['address'] ;
        $array['city'] = $row['city'] ;
        $array['state'] = $row['state'] ;
        $array['zipcode'] = $row['zipcode'] ;
        $array['rabiesVacc'] = $row['rabiesVacc'] ;
        $array['rabiesYear'] = $row['rabiesYear'] ;
        $array['distemperVacc'] = $row['distemperVacc'] ;
        $array['distemperYear'] = $row['distemperYear'] ;
        $array['spayedNeutered'] = $row['spayedNeutered'] ;
        $array['tagNumber'] = $row['tagNumber'] ;
        $array['clinic'] = $row['clinic'] ;
        $array['file'] = $row['file'] ;
    }
    return $array ;
}


?>