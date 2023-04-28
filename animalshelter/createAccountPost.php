<?php
include('dbconnect.php'); // include database connection file

$username = $_POST['username']; // retrieve username from form
$password = $_POST['password']; // retrieve password from form
$accountType = $_POST['accountType']; // retrieve account type from form

// Validate username
if (strlen($username) <= 8) // check if username length is less than or equal to 8 characters
{
	// Display an alert message and redirect back to the previous page
	echo "<script>
            window.alert('Please enter a valid username with greater than 8 characters.');
            history.back(1);
          </script>";
	exit; // terminate script execution
}

// Validate password
if (strlen($password) < 8 || !preg_match('/[0-9]/', $password) || !preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $password)) {
	// Display an alert message and redirect back to the previous page
	echo "<script>
            window.alert('Please enter a valid password with at least 8 characters, one number, and one special character.');
            history.back(1);
          </script>";
	exit; // terminate script execution
}

// Create the SQL query to insert username, password, and account type into the database
$query = "insert into user(username, password, accountType) values ('$username','$password','$accountType')";


// Execute the SQL query
mysqli_query($dbconnection, $query);

// Close the database connection
mysqli_close($dbconnection);

?>
<script>
	location.href = "index.php"; // Redirect to the home page
</script>