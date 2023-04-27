<html>
    <link rel="stylesheet" type="text/css" href="StyleSheets/navbar.css?v=2">
    <meta name = "viwport" content ="width=device-width, initial-scale="1.0">  
<body>
  <div id="banner">
    <div id="title"><a href="home.php">Indian Lake Animal Shelter</a></div>
    	<div id="buttons">
      <button id="create-account-button">Create Account</button>
      <button id="login-button">Login</button>
      <button id="logout-button">Logout</button>
    </div>
  </div>
      <ul>
        <li><a href="reports.php">Reports</a></li> 
        <li><a href="incident.php">File Incident Report</a></li> 
    </ul>
</body>
  
  </div>  
</html>
<script>
  document.getElementById("create-account-button").addEventListener("click", function() {
    window.location.href = "createAccount.php";
  });
  document.getElementById("login-button").addEventListener("click", function() {
    window.location.href = "index.php";
  });
  document.getElementById("logout-button").addEventListener("click", function() {
    window.location.href = "logout.php";
  });
</script>