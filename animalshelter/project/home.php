<html>
<head>
  <title>Indian Lake Animal Shelter</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <meta name = "viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div id="banner">
    <div id="title">Indian Lake Animal Shelter</div>
	<div id="buttons">
      <button id="create-account-button">Create Account</button>
      <button id="login-button">Login</button>
	  <button id="logout-button">Logout</button>
    </div>
	<div id="search-bar"> 
	<input type="text" placeholder="Search...">
	</div>
  </div>
    <nav>
      <ul>
	    <li><a href="animal-intake.html">Animal Intake</a></li>
        <li><a href="view-animals.php">View Animals</a></li>
        <li><a href="reclaim-animals.php">Reclaim Animals</a></li> 
        <li><a href="reports.php">Reports</a></li> 
        <li><a href="incident-reports.php">File Incident Report</a></li> 
		<li><a href="dispositions.php">Dispositions</a></li> 
		<li><a href="fees-reciept.php">Fees Receipt</a></li> 
    </ul>
  </nav>
  </div>
</div>
</body>

	
</html>
<script>
  document.getElementById("create-account-button").addEventListener("click", function() {
    window.location.href = "createAccount.php";
  });
  document.getElementById("login-button").addEventListener("click", function() {
    window.location.href = "login.php";
  });
  document.getElementById("logout-button").addEventListener("click", function() {
    window.location.href = "logout.php";
  });
</script>