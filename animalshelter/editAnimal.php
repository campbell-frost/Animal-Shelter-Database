<?php
// Start session
session_start();

// Include database connection file
include('accountType.php');
include('dbconnect.php');


// Define regular expressions to match against user input
$alpha_numeric = "/^[a-zA-Z0-9]+$/";
$address_regex = "/^[a-zA-Z0-9 ]+$/";
$alpha_w_space = "/^[a-zA-Z ]+$/";
$alpha = "/^[a-zA-Z]+$/";
$numeric = "/^[0-9]+$/";
$weight = "/^[0-9.]+$/";
$phone = "/^[0-9]{10}$/";

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

  if (!empty($name) && !preg_match($alpha_w_space, $name)) {
    echo "<script>
            window.alert('Animal name can only contain alphabetical characters!');
            history.back(1);
          </script>";
    exit;
  } else if (!empty($breed) && !preg_match($alpha, $breed)) {
    echo "<script>
            window.alert('Breed can only contain alphabetical characters.');
            history.back(1);
          </script>";
    exit;
  } else if (!empty($color) && !preg_match($alpha, $color)) {
    echo "<script>
            window.alert('Color can only contain alphabetical characters.');
            history.back(1);
          </script>";
    exit;
  } else if (!empty($sex) && !preg_match($alpha, $sex) && strlen($sex) > 1) {
    echo "<script>
            window.alert('Color can only contain alphabetical characters.');
            history.back(1);
          </script>";
    exit;
  } else if (!empty($broughtIn) && !preg_match($alpha_numeric, $broughtIn)) {
    echo "<script>
            window.alert('BroughtIn can only contain alphabetical characters for citizen name or numerical values for the badge number.');
            history.back(1);
          </script>";
    exit;
  } else if (!empty($broughtIn) && !preg_match($numeric, $weight)) {
    echo "<script>
            window.alert('Weight can only contain numerical values.');
            history.back(1);
          </script>";
    exit;
  } else if (!preg_match($alpha, $location)) {
    echo "<script>
            window.alert('Location can only contain alphabetical characters!');
            history.back(1);
          </script>";
    exit;
  } else if (!preg_match($alpha, $distempervacc)) {
    echo "<script>
                window.alert('DistemperVacc can only contain yes or no!');
                history.back(1);
              </script>";
    exit;
  } else if (!preg_match($alpha, $rabiesvacc)) {
    echo "<script>
                window.alert('Rabiesvacc can only contain yes or no!');
                history.back(1);
              </script>";
    exit;
  } else if (!preg_match($numeric, $rabiesyear) && strlen($rabiesyear) > 4) {
    echo "<script>
                window.alert('rabiesYear can only contain 4 numerical values!');
                history.back(1);
              </script>";
    exit;
  } else if (!preg_match($numeric, $distemperYear) && strlen($distemperyear) > 4) {
    echo "<script>
                window.alert('DistemperYear can only contain 4 numerical values!');
                history.back(1);
              </script>";
    exit;
  } else if (!empty($spayedNutered)) {
    echo "<script>
                window.alert('spayedNeutered is required!');
                history.back(1);
            </script>";
    exit;
  } else if (!preg_match($numeric, $tagnumber)) {
    echo "<script>
                window.alert('Tag number can only contain numerical values!');
                history.back(1);
            </script>";
    exit;
  } else if (!empty($TagNumber)) {
    echo "<script>
                window.alert('Tag number is required!');
                history.back(1);
            </script>";
    exit;
  }
  if (!empty($clinic) && !preg_match($alpha_w_space, $clinic)) {
    echo "<script>
                  window.alert('Clinic name can only contain alphabetical characters and spaces!');
                  history.back(1);
              </script>";
    exit;
  }
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
  <link rel="stylesheet" type="text/css" href="StyleSheets/editAnimal.css?v=2">
</head>

<body>
  <h1>Edit Animal</h1>
  <form method="post" action="">
    <div class="button-container">
      <a class="uniqueButton linkButton" href="viewAnimals.php">Back</a>
      <input class="uniqueButton" type="submit" value="Save">
    </div>
    <br>
    <div class="container">
      <div class="container1">
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

      </div>
      <div class="container2">
        <label for="broughtin">Brought In:</label>
        <input type="text" id="broughtin" name="broughtin" value="<?php echo $animal['broughtin']; ?>"><br>
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
        <input type="text" id="spayedneutered" name="spayedneutered"
          value="<?php echo $animal['spayedNutered']; ?>"><br>
        <label for="tagnumber">Tag Number:</label>
        <input type="text" id="TagNumber" name="TagNumber" value="<?php echo $animal['tagNumber']; ?>"><br>
        <label for="clinic">Clinic:</label>
        <input type="text" id="clinic" name="clinic" value="<?php echo $animal['clinic']; ?>"><br>
      </div>
    </div>

</html>