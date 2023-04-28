<?php
	session_start();
	include("accountType.php");
?>

<?php

	include('dbconnect.php');
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$accountType=$_POST['accountType'];
	if (!$username || !$password || !$accountType) 
	{
		echo "<script>
			window.alert('Please enter all the required fields.');
			history.back(1);
		</script>";
		exit;
	}
	$query="SELECT * from user WHERE username='$username' and password='$password'";
	$result=mysqli_query($dbconnection, $query);
	$loginInfo=mysqli_fetch_assoc($result);
	if (!$loginInfo) 
	{
		echo "<script>
        window.alert('Invalid username or password.');
        history.back(1);
		</script>";
		exit;
	}
	if ($loginInfo['accountType'] !== $accountType) 
	{
		echo "<script>
        window.alert('Invalid Account Type.');
        history.back(1);
		</script>";
		exit;
	}
	$_SESSION['accountType'] = $accountType;
	mysqli_close($dbconnection);
?>
<script>
	location.href='home.php';
</script>
