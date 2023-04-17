<?php
include("dbconnect.php");
include("navbar.php");

// Retrieve the animal's ID from the query parameter
$id = $_GET['id'];

// Retrieve the animal's information from the database
$sql = "SELECT * FROM animal WHERE animalID = $id";
$result = mysqli_query($dbconnection, $sql);
$row = mysqli_fetch_assoc($result);
$dbconnection->close();

?>

<link rel="stylesheet" type="text/css" href="animal-profile/styles.css?v=1">

<div class='animal-header'>
  <h1>Edit Animal</h1>
  <div class='animal-buttons'>
    <a href='animalProfile.php?id=<?php echo $id; ?>' class='button'>Cancel</a>    
  </div>
</div>

<div class='animal-info'>
  <form action='updateAnimal.php?id=<?php echo $id; ?>' method='post'>
    <p><strong>ID:</strong> <?php echo $row['animalID']; ?></p>
    <p><strong>Name:</strong> <input type='text' name='name' value='<?php echo $row['name']; ?>' required></p>
    <p><strong>Type:</strong> <input type='text' name='type' value='<?php echo $row['type']; ?>' required></p>
    <p><strong>Date:</strong> <input type='date' name='dob' value='<?php echo $row['date']; ?>' required></p>
    <p><strong>Date of Birth:</strong> <input type='date' name='dob' value='<?php echo $row['dateOfBirth']; ?>' required></p>
    <p><strong>Sex:</strong> <input type='radio' name='sex' value='M' <?php if ($row['sex'] == "M") {echo "checked";} ?>> Male<input type='radio' name='sex' value='F' <?php if ($row['sex'] == "F") {echo "checked";} ?>> Female</p>
    <p><strong>Breed:</strong> <input type='text' name='breed' value='<?php echo $row['breed']; ?>'></p>
    <p><strong>Color:</strong> <input type='text' name='color' value='<?php echo $row['color']; ?>'></p>
    <p><strong>Weight:</strong> <input type='number' name='weight' min='0' max='999' step='.01' value='<?php echo $row['weight']; ?>'> lbs</p>
    <p><strong>Altered:</strong> <input type='checkbox' name='altered' value='1' <?php if ($row['altered'] == "1") {echo "checked";} ?>></p>
    <p><strong>Microchip:</strong> <input type='checkbox' name='microchip' value='1' <?php if ($row['microchip'] == "1") {echo "checked";} ?>></p>
    <p><strong>Brought In:</strong> <?php echo $row['broughtIn']; ?></p>
    <p><strong>Location:</strong> <?php echo $row['location']; ?></p>
    <p><strong>Owner:</strong> <input type='text' name='owner' value='<?php echo $row['owner']; ?>'></p>
    <p><strong>Phone:</strong> <input type='text' name='phone' value='<?php echo $row['phone']; ?>'></p>
    <p><strong>Address:</strong> <input type='text' name='address' value='<?php echo $row['address']; ?>'></p>
    <p><strong>City:</strong> <input type='text' name='city' value='<?php echo $row['city']; ?>'></p>
    <p><strong>State:</strong> <input type='text' name='state' value='<?php echo $row['state']; ?>'></p>
    <p><strong>Zip:</strong> <input type='text' name='zip' value='<?php echo $row['zipcode']; ?>'></p>
    <p><strong>Rabies Vaccination:</strong> <input type='checkbox' name='rabiesVacc' value='1' <?php if ($row['rabiesVacc'] == "1") {echo "checked";} ?>></p>
    <p><strong>Rabies Vaccination Year:</strong> <input type='number' name='rabiesYear' min='1900' max='2099' value='<?php echo $row['rabiesYear'] ?>'></p>
    <p><strong>Distemper Vaccination:</strong> <input type='checkbox' name='distemperVacc' value='1' <?php if ($row['distemperVacc'] == "1") {echo "checked";} ?>></p>
    <p><strong>Distemper Vaccination Year:</strong> <input type='number' name='distemperYear' min='1900' max='2099' value='<?php echo $row['distemperYear'] ?>'></p>
    <p><strong>Spayed/Neutered:</strong> <input type='checkbox' name='spayedNeutered' value='1' <?php if ($row['spayedNeutered'] == "1") {echo "checked";} ?>></p>
    <p><strong>Tag Number:</strong> <input type='text' name='tagNumber' value='<?php echo $row['tagNumber'] ?>'></p>
    <input type='submit' value='Save Changes'>
  </form>
</div>


$dbconnection->close();
?>
<link rel="stylesheet" type="text/css" href="animal-profile/styles.css?v=1">
