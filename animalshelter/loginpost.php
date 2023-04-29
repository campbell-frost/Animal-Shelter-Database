<?php
	session_start(); // Starts a session
	include("accountType.php"); // Includes the file with account type constants
?>

<?php
	include('dbconnect.php'); // Connects to the database

	$username=$_POST['username']; // Assigns the entered username to a variable
	$password=$_POST['password']; // Assigns the entered password to a variable
	$accountType=$_POST['accountType']; // Assigns the selected account type to a variable

	// Checks if all required fields are filled out
	if (!$username || !$password || !$accountType) 
	{
		echo "<script>
			window.alert('Please enter all the required fields.');
			history.back(1);
		</script>";
		exit; // Stops executing the code
	}

	// Queries the database to find a user with the entered username and password
	$query="SELECT * from user WHERE username='$username' and password='$password'";
	$result=mysqli_query($dbconnection, $query);
	$loginInfo=mysqli_fetch_assoc($result);

	// If no user with the entered username and password is found, display an error message and stop executing the code
	if (!$loginInfo) 
	{
		echo "<script>
        window.alert('Invalid username or password.');
        history.back(1);
		</script>";
		exit;
	}

	// If the selected account type does not match the account type of the logged-in user, display an error message and stop executing the code
	if ($loginInfo['accountType'] !== $accountType) 
	{
		echo "<script>
        window.alert('Invalid Account Type.');
        history.back(1);
		</script>";
		exit;
	}

	// Sets the session accountType variable to the selected account type
	$_SESSION['accountType'] = $accountType;

	mysqli_close($dbconnection); // Closes the database connection
?>

<script>
	location.href='home.php'; // Redirects the user to the home page
</script>
