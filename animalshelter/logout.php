<?php
	session_start();
	session_destroy();
?>
<html>
<head>
	<title>Logout</title>
	<link rel="stylesheet" type="text/css" href="StyleSheets/logout.css">
</head>
<body>
	<div id="center-box">
		<h1>Indian Lake Animal Shelter</h1>
		<p>You have successfully logged out.</p>
	</div>
</body>
</html>
<script>
  setTimeout(function(){
    window.location.href = "index.php";
  }, 3500); //delay in milliseconds. 3500 = 3.5 seconds
</script>
