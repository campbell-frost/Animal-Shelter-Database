<?php
	include('dbconnect.php');
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$accountType=$_POST['accountType'];
	// Validate username
	if (strlen($username) !== 8)
	{
		echo "<script>
            window.alert('Please enter a valid username with exactly 8 characters.');
            history.back(1);
          </script>";
		exit;
	}

	// Validate password
	if (strlen($password) < 8 || !preg_match('/[0-9]/', $password) || !preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $password))
	{
		echo "<script>
            window.alert('Please enter a valid password with at least 8 characters, one number, and one special character.');
            history.back(1);
          </script>";
		exit;
	}

	$query="insert into user(username, password, accountType) values ('$username','$password','$accountType')";

	
// Code to insert username, password, and account type into the database
// ...

	mysqli_query($dbconnection, $query);
	mysqli_close($dbconnection);
	
?>
<script>
	location.href="index.php";
</script>
