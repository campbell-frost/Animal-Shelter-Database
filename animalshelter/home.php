<?php
	include("navbar.php");
?>
<link rel="stylesheet" type="text/css" href="StyleSheets/home.css?v=2">
<p class="title"> Welcome to our Website! </p>
<main>
  <div class="creators">
    <div>
      <img src="Images/ronisha.jfif" alt="Ronisha">
      <p>Ronisha Genwright</p>
    </div>
    <div>
      <img src="Images/scrumdeasy.jfif" alt="Scrumdeasy">
      <p>Campbell Frost</p>
    </div>
    <div>
      <img src="Images/nick.jfif" alt="Nick">
      <p>Nick Palumbo</p>
    </div>
    <div>
      <img src="Images/tyler.jpg" alt="Tyler">
      <p>Tyler Ard</p>
    </div>
    <div>
      <img src="Images/nyah.jfif" alt="Nyah">
      <p>Nyah Pee</p>
    </div>
  </div>
</main>
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
<?php
	include("footer.php");
?>