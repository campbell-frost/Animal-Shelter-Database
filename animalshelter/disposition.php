<?php
include('dbconnect.php');
session_start();
include("accountType.php");

// Check connection
if (!$dbconnection) {
	die("Connection failed: " . mysqli_connect_error());
}

// Define regular expressions to match against user input
$alpha_numeric = "/^[a-zA-Z0-9]+$/";
$address_regex = "/^[a-zA-Z0-9 ]+$/";
$alpha_w_space = "/^[a-zA-Z ]+$/";
$alpha_w_spaceNum= "/^[a-zA-Z0-9\s]+$/";
$alpha = "/^[a-zA-Z]+$/";
$numeric = "/^[0-9]+$/";
$weight = "/^[0-9.]+$/";
$phone_regex = "/^[0-9]{10}$/";

// Retrieve animal IDs from the database
$animalSQL = "SELECT animal_ID, name FROM animal";
$result = mysqli_query($dbconnection, $animalSQL);

// Generate HTML code for the animal ID dropdown list
$animal_options = "";
while ($row = mysqli_fetch_assoc($result)) {
	$animal_options .= "<option value='" . $row['animal_ID'] . "'>" . $row['name'] . "</option>";
}

/// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Retrieve form data
	$animal_id = $_POST['animal_id'];
	$exit_reason = $_POST['exit_reason'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];

	if (!preg_match($numeric, $animal_id)) {
		echo "<script>
                window.alert('Animal ID is required and can only contain numerical!');
                history.back(1);
            </script>";
		exit;
	}
	if (!preg_match($alpha_w_spaceNum, $name)) {
		echo "<script>
                window.alert('Name is required and can only alpabetical letters!');
                history.back(1);
            </script>";
		exit;
	}
	if (!preg_match($phone_regex, $phone)) {
		echo "<script>
                window.alert('Phone can only contain up to 10 numerical values!');
                history.back(1);
            </script>";
		exit;
	}
	if (!preg_match($address_regex, $address)) {
		echo "<script>
                window.alert('Address can only contain Alphabetical characters and numerical values!');
                history.back(1);
                </script>";
		exit;
	}
	if (!empty($city) && !preg_match($alpha, $city)) {
		echo "<script>
                window.alert('City is required and can only contain alphabetical characters!');
                history.back(1);
                </script>";
		exit;
	}
	if (!empty($state) && !preg_match($alpha, $state) && strlen($state) > 2) {
		echo "<script>
                window.alert('State is required and must be abbreviated while only containing alphabetical characters!');
                history.back(1);
                </script>";
		exit;
	} else if (!empty($zip) && !preg_match($numeric, $zip)) {
		echo "<script>
                window.alert('Zip is required and should only contain numerical values!');
                history.back(1);
                </script>";
		exit;
	}

	// Insert owner information into the database
	$sql = "INSERT INTO owner (name, phone, address, city, state, zip) VALUES ('$name', '$phone', '$address', '$city', '$state', '$zip')";
	mysqli_query($dbconnection, $sql);

	// Retrieve the last inserted owner_ID
	$owner_id = mysqli_insert_id($dbconnection);

	// Insert disposition information into the database
	$sql = "INSERT INTO disposition (animal_ID, exitReason, owner_ID) VALUES ('$animal_id','$exit_reason', '$owner_id')";
	mysqli_query($dbconnection, $sql);

	// Close database connection
	mysqli_close($dbconnection);
}

// Generate unique disposition ID



?>
<html>
<link rel="stylesheet" type="text/css" href="StyleSheets/disposition.css?v=1">

<head>
	<title>Animal Disposition</title>
</head>

<body>
	<h1>Animal Disposition</h1>
	<form method="post" action="">
		<label for="animal_id">Animal ID:</label>
		<select name="animal_id" id="animal_id">
			<?php echo $animal_options; ?>
		</select>
		<br>
		<label for="exit_reason">Exit Reason:</label>
		<select name="exit_reason" id="exit_reason">
			<option value="Adopted">Adopted</option>
			<option value="Reclaimed">Reclaimed</option>
			<option value="Auctioned">Auction</option>
			<option value="Euthanized">Euthanized</option>
		</select>
		<br>
		<label for="name">Name:</label>
		<input type="text" name="name" id="name">
		<br>
		<label for="phone">Phone:</label>
		<input type="text" name="phone" id="phone">
		<br>
		<label for="address">Address:</label>
		<input type="text" name="address" id="address">
		<br>
		<label for="city">City:</label>
		<input type="text" name="city" id="city">
		<br>
		<label for="state">State:</label>
		<input type="text" name="state" id="state">
		<br>
		<label for="zip">Zip:</label>
		<input type="text" name="zip" id="zip">
		<br>
		<input type="submit" value="Submit">
	</form>
</body>

</html>