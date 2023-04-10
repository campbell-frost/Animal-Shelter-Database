<?php
	include('dbconnect.php');
	
	$name=$_POST['name'];
	$user_id=$_POST['user_id'];
	$password=$_POST['password'];
	
	$query="insert into users(name, user_id, password) values ('$name','$user_id','$password')";
	
	mysqli_query($dbconnection, $query);
	mysqli_close($dbconnection);
	
?>

<script>
	//cation.href='home.html';
</script>