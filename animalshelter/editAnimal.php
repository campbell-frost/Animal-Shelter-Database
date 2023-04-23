<?php
// Start session
session_start();

// Include database connection file
include('navbar.php');
include('dbconnect.php');

// Check if animal ID is set
if (isset($_GET['animal_id'])) {
  // Get animal ID from URL
  $animal_id = $_GET['animal_id'];

  // Retrieve animal information from database
  $query = "SELECT * FROM animal WHERE Animal_ID = $animal_id";
  $result = mysqli_query($dbconnection, $query);

  // Check if query was successful
  if ($result) {
    // Get animal data
    $animal = mysqli_fetch_assoc($result);

    // Close database connection
  } else {
    // Display error message
    $_SESSION['error'] = 'Error retrieving animal information from database.';
    header('Location: viewAnimals.php');
    exit();
  }
} else {
  // Redirect user to view animals page if no animal ID is set
  header('Location: viewAnimals.php');
  exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $name = $_POST['name'];
  $type = $_POST['type'];
  $date = $_POST['date'];
  $dob = $_POST['dob'];
  $sex = $_POST['sex'];
  $breed = $_POST['breed'];
  $color = $_POST['color'];
  $weight = $_POST['weight'];
  $altered = $_POST['altered'];
  $microchip = $_POST['microchip'];
  $broughtin = $_POST['broughtin'];
  $location = $_POST['location'];
  $rabiesvacc = $_POST['rabiesvacc'];
  $rabiesyear = $_POST['rabiesyear'];
  $distempervacc = $_POST['distempervacc'];
  $distemperyear = $_POST['distemperyear'];
  $spayedneutered = $_POST['spayedneutered'];
  $tagnumber = $_POST['TagNumber'];
  $clinic = $_POST['clinic'];


  // Update animal information in database
  $query = "UPDATE animal SET Name = '$name', Type = '$type', Date = '$date', DateOfBirth = '$dob', Sex = '$sex', Breed = '$breed', Color = '$color', Weight = '$weight', Altered = '$altered', Microchip = '$microchip', Broughtin = '$broughtin', Location = '$location', RabiesVacc = '$rabiesvacc', RabiesYear = '$rabiesyear', DistemperVacc = '$distempervacc', DistemperYear = '$distemperyear', SpayedNutered = '$spayedneutered', TagNumber = '$tagnumber', Clinic = '$clinic'  WHERE Animal_ID = $animal_id";
  $result = mysqli_query($dbconnection, $query);

  // Check if query was successful
  if ($result) {
    // Redirect user to view animals page
    header('Location: viewAnimals.php');
    exit();
  } else {
    // Display error message
    $_SESSION['error'] = 'Error updating animal information in database.';
    header('Location: editAnimal.php?animal_id=' . $animal_id);
    exit();
  }
}

// Display edit animal form
?>
<html>

<head>
  <title>Edit Animal</title>
	<link rel="stylesheet" type="text/css" href="StyleSheets/editAnimal.css">
</head>

<body>
  <h1>Edit Animal</h1>
  <form method="post" action="">
    <button onclick="history.back()">Back</button>
    <input type="submit" value="Save">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $animal['name']; ?>"><br>
    <label for="type">Type:</label>
    <input type="text" id="type" name="type" value="<?php echo $animal['type']; ?>"><br>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" value="<?php echo $animal['date']; ?>"><br>
    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" value="<?php echo $animal['dateOfBirth']; ?>"><br>
    <label for="sex">Sex:</label>
    <input type="text" id="sex" name="sex" value="<?php echo $animal['sex']; ?>"><br>
    <label for="breed">Breed:</label>
    <input type="text" id="breed" name="breed" value="<?php echo $animal['breed']; ?>"><br>
    <label for="color">Color:</label>
    <input type="text" id="color" name="color" value="<?php echo $animal['color']; ?>"><br>
    <label for="weight">Weight:</label>
    <input type="text" id="weight" name="weight" value="<?php echo $animal['weight']; ?>"><br>
    <label for="altered">Altered:</label>
    <input type="text" id="altered" name="altered" value="<?php echo $animal['altered']; ?>"><br>
    <label for="microchip">Microchip:</label>
    <input type="text" id="microchip" name="microchip" value="<?php echo $animal['microchip']; ?>"><br>
    <label for="broughtin">Brought In:</label>
    <input type="date" id="broughtin" name="broughtin" value="<?php echo $animal['broughtin']; ?>"><br>
    <label for="location">Location:</label>
    <input type="text" id="location" name="location" value="<?php echo $animal['location']; ?>"><br>
    <label for="rabiesvacc">Rabies Vaccination:</label>
    <input type="text" id="rabiesvacc" name="rabiesvacc" value="<?php echo $animal['rabiesVacc']; ?>"><br>
    <label for="rabiesyear">Rabies Year:</label>
    <input type="text" id="rabiesyear" name="rabiesyear" value="<?php echo $animal['rabiesYear']; ?>"><br>
    <label for="distempervacc">Distemper Vaccination:</label>
    <input type="text" id="distempervacc" name="distempervacc" value="<?php echo $animal['distemperVacc']; ?>"><br>
    <label for="distemperyear">Distemper Year:</label>
    <input type="text" id="distemperyear" name="distemperyear" value="<?php echo $animal['distemperYear']; ?>"><br>
    <label for="spayedneutered">Spayed/Neutered:</label>
    <input type="text" id="spayedneutered" name="spayedneutered" value="<?php echo $animal['spayedNutered']; ?>"><br>
    <label for="tagnumber">Tag Number:</label>
    <input type="text" id="TagNumber" name="TagNumber" value="<?php echo $animal['tagNumber']; ?>"><br>
    <label for="clinic">Clinic:</label>
    <input type="text" id="clinic" name="clinic" value="<?php echo $animal['clinic']; ?>"><br>


</html>