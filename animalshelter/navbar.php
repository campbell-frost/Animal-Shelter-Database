<!-- Start HTML code -->
<html>
<!-- Add stylesheet for navigation bar -->
<link rel="stylesheet" type="text/css" href="StyleSheets/navbar.css?v=8">
<!-- Add meta tag for responsive design -->
<meta name="viwport" content="width=device-width, initial-scale=" 1.0">
<body>
  <!-- Create banner for the webpage -->
  <div id="banner">
    <!-- Add title for the webpage and set it to home.php when clicked -->
    <a id="title" href="home.php">Indian Lake Animal Shelter</a>
    <!-- Add buttons for create account, login and logout -->
    <div id="buttons">
      <button id="create-account-button">Create Account</button>
      <button id="login-button">Login</button>
      <button id="logout-button">Logout</button>
    </div>
  </div>
  <!-- Add navigation bar with links to different pages -->
  <ul>
    <li><a href="animal-intake.php" id = "pageButton">Animal Intake</a></li>
    <li><a href="viewAnimals.php" id = "pageButton">View Animals</a></li>
    <li><a href="reports.php" id = "pageButton">Reports</a></li>
    <li><a href="incident.php" id = "pageButton">File Incident Report</a></li>
    <li><a href="disposition.php" id = "pageButton">Dispositions</a></li>
    <li><a href="fees-receipt.php" id = "pageButton">Fees Receipt</a></li>
  </ul>
</body>
<!-- End body tag -->
</div>
<!-- End div tag -->
</html>
<!-- End HTML code -->
<!-- Add script tag to create event listeners for the buttons -->
<script>
  document.getElementById("create-account-button").addEventListener("click", function () {
    window.location.href = "createAccount.php";
  });
  document.getElementById("login-button").addEventListener("click", function () {
    window.location.href = "index.php";
  });
  document.getElementById("logout-button").addEventListener("click", function () {
    window.location.href = "logout.php";
  });
</script>




