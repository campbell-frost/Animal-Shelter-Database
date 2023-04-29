<?php
	session_start(); //start session
	session_destroy(); //destroy current session
?>
<html>
<head>
	<!-- LogOut Page Title -->
	<title>Logout</title>
	<link rel="stylesheet" type="text/css" href="StyleSheets/logout.css">
</head>
<body>
	<!-- Message for Logging Out -->
	<div id="center-box">
		<h1>Indian Lake Animal Shelter</h1>
		<p>You have successfully logged out.</p>
	</div>
</body>
</html>
<script>
  setTimeout(function(){ //set a timer for redirection
    window.location.href = "index.php"; //redirect to the index page
  }, 3500); //delay in milliseconds. 3500 = 3.5 seconds
</script>
