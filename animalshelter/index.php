<?php
	session_start();
?>
<html>
<head>
  <!-- Set the title of the page -->
  <title>Indian Lake Animal Shelter</title>
  <!-- Link to a stylesheet for the login form -->
  <link rel="stylesheet" type="text/css" href="StyleSheets/login.css?v=1">
</head>
<body>
  <!-- Main container that centers the page elements -->
  <div id="center-box">
    <!-- Container for the left side of the page -->
    <div id="left-box">
      <!-- Container for the login form -->
      <div id="login-box">
        <!-- The name of the animal shelter -->
        <div id="shelter-name">Indian Lake Animal Shelter</div>
        <!-- Login form -->
        <form action='loginpost.php' method='POST'>
          <!-- Username input field -->
          <input type="text" id="username" name="username" placeholder="Username">
          <!-- Password input field -->
          <input type="password" id="password" name="password" placeholder="Password">
          <!-- Dropdown menu for selecting the account type -->
          <select name="accountType" id="accountType">
            <option value="">Account Type</option>
            <option value="Administrative Assistant">Administrative Assistant</option>
            <option value="ACO Officer">ACO Officer</option>
            <option value="Shelter Director">Shelter Director</option>
          </select>
          <!-- Submit button for the login form -->
          <input type="submit" value="Login">
        </form>
        <!-- Button to redirect to the create account page -->
        <button onclick="location.href='createAccount.php'">Create Account</button>
      </div>
    </div>
    <!-- Container for the right side of the page -->
    <div id="right-box">
      <!-- Image of a dog named Champ -->
      <img src="Images\champ.jpg" alt="image">
    </div>
  </div>
</body>
</html>