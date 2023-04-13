<?php
	session_start();
?>

<?php

	include('dbconnect.php');
	
	$user_id=$_POST['user_id'];
	$password=$_POST['password'];

	$query="select * from users where user_id='$user_id'";
	$result=mysqli_query($dbconnection, $query);
	
	$data=mysqli_fetch_assoc($result);
	
	if(!$user_id)
	{
		echo "<script>
			window.alert('Please enter your user_id.');
			history.back(1);
			</script>";
			exit;
	}
	if($data['user_id']!=$user_id)
	{
		echo "<script>
			window.alert('Please enter valid user_id');
			history.back(1);
			</script>";
			exit;
	}
	
	if($data['password']!=$password)
	{
		echo "<script>
			window.alert('Please enter valid password.');
			history.back(1);
			</script>";
			exit;
	}
	$_SESSION['name']=$data['name'];
	mysqli_close($dbconnection);
?>
<script>
	location.href='home.php';
</script>
