<!-- This is an HTML file that contains a navbar for the Indian Lake Animal Shelter website -->
<!-- Linking to an external stylesheet for navbar styling -->
<html>
<link rel="stylesheet" type="text/css" href="StyleSheets/navbar.css?v=4">
<!-- Setting the viewport for responsive design -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
  <!-- Creating the banner for the navbar -->
  <div id="banner">
    <div id="title"><a href="home.php">Indian Lake Animal Shelter</a></div>
    <!-- Creating buttons for user interaction -->
    <div id="buttons">
      <button id="create-account-button">Create Account</button>
      <button id="login-button">Login</button>
      <button id="logout-button">Logout</button>
    </div>
  </div>
  <!-- Creating a list of links for page navigation -->
  <ul>
    <li><a href="animal-intake.php">Animal Intake</a></li>
    <li><a href="viewAnimals.php">View Animals</a></li>
    <li><a href="disposition.php">Dispositions</a></li> 
    <li><a href="fees-receipt.php">Fees Receipt</a></li> 
  </ul>
</body>
<!-- Script for button functionality -->
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
</html>





