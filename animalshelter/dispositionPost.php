<?php
	include('dbconnect.php');
	if(isset($_POST['submit']))
	{
		if(!empty($_POST['name']) && !empty($_POST['date']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['exit_reason']))
		{
			$name=$_POST['name'];
			$date=$_POST['date'];
			$address=$_POST['address'];
			$city=$_POST['city'];
			$state=$_POST['state'];
			$zip=$_POST['zip'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$exit_reason = $_POST['exit_reason'];
		}
	}
	$query = "insert into disposition(name, date, address, city, state, zip, phone, email, exit_reason) values ('$name','$date','$address', '$city', '$state', '$zip', '$phone', '$email', '$exit_reason')";
	
	mysqli_query($dbconnection, $query);
	mysqli_close($dbconnection);
?>
<script>
	location.href = "disposition.php";
</script>
