<?php
	include("navbar.php");
?>
<link rel="stylesheet" type="text/css" href="incident/styles.css?v=2">
<html>
<head>
    <title>Incident Report</title>
</head>
<body>
    <form action="incidentInsert.php" method="post">
         <!-- Animal Control Officer Badge Number -->
        <label>ACO Badge Number:</label><input type="text" name="badgeNumber"><br>
        
        <!-- Animal Intake Number text field-->
        <label>Intake Number:</label><input type="text" name="intakeNumber"><br>
        
        <!-- Current date text field -->
        <label>Date:</label><input type="date" name="date"><br>
        
        <!-- Current time text field -->
        <label>Time:</label><input type="time" name="time"><br>
        
        <!-- Description of weather when animal is being collected  -->
        <label>Weather:</label><input type="text" name="weather"><br>
        <label>Animal Type:</label>
        <select name="type">
            <option value=""></option>
            <option value="Dog">Dog</option>
            <option value="Cat">Cat</option>
            <option value="Livestock">Livestock</option>
        </select><br>
        
        <!-- Dropdown selection for selecting animal sex -->
        <label>Sex:</label>
        <select name="sex">
            <option value=""></option>
            <option value="M">M</option>
            <option value="F">F</option>
        </select><br>
        
        <!-- Color of animal field entered in a textbox -->
        <label>Color:</label><input type="text" name="color"><br>
        
        <!-- Name of owner of animal field entered in a textbox -->
        <label>Animal Owner (if known):</label><input type="text" name="owner"><br>
        
        <!-- Phone number of animal owner field entered in a textbox -->
        <label>Phone Number:</label><input type="text" name="phone"><br>
        
        <!-- Address of animal owner field entered in a textbox -->
        <label>Address:</label><input type="text" name="address"><br> 
        
        <!-- City of animal owner field entered in a textbox -->
        <label>City:</label><input type="text" name="city"><br>
        
         <!-- State of animal owner field entered in a textbox -->
        <label>State:</label><input type="text" name="state"><br>
        
        <!-- Zipcode of animal owner field entered in a textbox -->
        <label>Zipcode:</label><input type="text" name="zipcode"><br>
       
         <!-- Textbox for the description of the circumstances surrounding when an animal is collected
         and the amount of text displayed will have a maximun compacity of 5 rows and 50 columns -->
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="5" cols="50">
            
        </textarea>
        
        <!-- Submit button user clicks to add the information from completed form to the database -->
        <button type="submit" name="submit">Submit</button>
        
        <!-- Print button user clicks to print the incident report form -->
        <button type="text/css" media="print" name="print">Print</button>
    </form>
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
