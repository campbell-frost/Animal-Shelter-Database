<html>
  <head>
    <title>Indian Lake Animal Shelter</title>
        <link rel="stylesheet" type="text/css" href="home/styles.css?v=2">
    <meta name = "viwport" content ="width=device-width, initial-scale="1.0">
  </head>
  
<body>
  <div id="banner">
    <div id="title">Indian Lake Animal Shelter</div>
    	<div id="buttons">
      <button id="create-account-button">Create Account</button>
      <button id="login-button">Login</button>
      <button id="logout-button">Logout</button>
    </div>
  </div>
    
      <ul>
	      <li><a href="animal-intake.php">Animal Intake</a></li>
        <li><a href="viewAnimals.php">View Animals</a></li>
        <li><a href="reports.php">Reports</a></li> 
        <li><a href="incident.php">File Incident Report</a></li> 
		<li><a href="disposition.php">Dispositions</a></li> 
		    <li><a href="fees-receipt.php">Fees Receipt</a></li> 
    </ul>
  
</body>
  
  </div>  
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