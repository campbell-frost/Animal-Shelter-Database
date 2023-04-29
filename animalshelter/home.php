<?php
// Start the session to allow for use of session variables
session_start();
// Include the file that checks the user's account type
include("accountType.php");
?>

<!-- Link the CSS stylesheet to format the webpage -->
<link rel="stylesheet" type="text/css" href="StyleSheets/home.css?v=2">

<!-- Create a title for the webpage -->
<p class="title"> Welcome to our Website! </p>

<!-- Create a main content section for the webpage -->
<main>
  <!-- Create a section to display the creators of the website -->
  <div class="creators">
    <div>
      <!-- Display Ronisha's image and name -->
      <img src="Images/ronisha.jfif" alt="Ronisha">
      <p>Ronisha Genwright</p>
    </div>
    <div>
      <!-- Display Campbell's image and name -->
      <img src="Images/scrumdeasy.jpg" alt="Scrumdeasy">
      <p>Campbell Frost</p>
    </div>
    <div>
      <!-- Display Nick's image and name -->
      <img src="Images/nick.jfif" alt="Nick">
      <p>Nick Palumbo</p>
    </div>
    <div>
      <!-- Display Tyler's image and name -->
      <img src="Images/tyler.jpg" alt="Tyler">
      <p>Tyler Ard</p>
    </div>
    <div>
      <!-- Display Nyah's image and name -->
      <img src="Images/nyah.jfif" alt="Nyah">
      <p>Nyah Pee</p>
    </div>
  </div>
</main>

<!-- Create a script to handle button clicks -->
<script>
  // When the create account button is clicked, redirect to the createAccount.php page
  document.getElementById("create-account-button").addEventListener("click", function () {
    window.location.href = "createAccount.php";
  });
  // When the login button is clicked, redirect to the index.php page
  document.getElementById("login-button").addEventListener("click", function () {
    window.location.href = "index.php";
  });
  // When the logout button is clicked, redirect to the logout.php page
  document.getElementById("logout-button").addEventListener("click", function () {
    window.location.href = "logout.php";
  });
</script>

<?php
// Include the footer file to display the website footer
include("footer.php");
?>
