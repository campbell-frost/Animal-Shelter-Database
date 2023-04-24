<?php
include("navbar.php");
?>
<link rel="stylesheet" type="text/css" href="StyleSheets/animalIntake.css?v=2">
<script>
    function showOwnerInfo() {
        var hasOwner = document.getElementById("hasOwner");
        var ownerInfo = document.getElementById("ownerInfo");
        if (hasOwner.value == "Yes") {
            ownerInfo.style.display = "block";
        } else {
            ownerInfo.style.display = "none";
        }
    }
</script>
<form action="animalIntakePost.php" method="post">
    <!-- Date field for current date entered by selecting a date in a calendar -->
    <label>Date:</label><input type="date" name="date"><br>

    <!-- Dropdown selection for selecting animal type -->
    <label>Animal Type:</label>
    <select name="type">
        <option value=""></option>
        <option value="Dog">Dog</option>
        <option value="Cat">Cat</option>
        <option value="Livestock">Livestock</option>
    </select><br>

    <!-- Animal name field entered in a textbox -->
    <label>Animal Name:</label><input type="text" name="name"><br>

    <!-- Date of birth field entered by selecting a date in a calendar -->
    <label>Date of Birth:</label><input type="date" name="dateOfBirth"><br>

    <!-- Dropdown selection for selecting animal sex -->
    <label>Sex:</label>
    <select name="sex">
        <option value=""></option>
        <option value="M">M</option>
        <option value="F">F</option>
    </select><br>

    <!-- Breed of animal field entered in a textbox -->
    <label>Breed:</label><input type="text" name="breed"><br>

    <!-- Color of animal field entered in a textbox -->
    <label>Color:</label><input type="text" name="color"><br>

    <!-- Weight of animal field entered in a textbox -->
    <label>Weight:</label><input type="text" name="weight"><br>

    <!-- Dropdown selection for selecting whether animal has been altered -->
    <label>Altered:</label>
    <select name="altered">
        <option value=""></option>
        <option value="Y">Y</option>
        <option value="N">N</option>
    </select><br>

    <!-- Dropdown selection for selecting whether animal has a microchip -->
    <label>Microchip:</label>
    <select name="microchip">
        <option value=""></option>
        <option value="Y">Y</option>
        <option value="N">N</option>
    </select><br>

    <!-- Field indicating whether animal has been brought in by an animal control
            officer or citizen which is entered in a textbox -->
    <label>Brought in by ACO (badge number) or Citizen:</label><input type="text" name="broughtIn"><br>

    <!-- Location of animal field entered in a textbox which the text below indicates 
            the desired input if animal is housed at the animal shelter or off-site -->
    <label>Location:</label><input type="text" name="location">
    <p>(Shelter Cage number or Veterinarian number if animal is housed off-site)</p><br>

    <!-- Dropdown selection for selecting whether animal has had rabies vaccination -->
    <label>Rabies Vaccination:</label>
    <select name="rabiesVacc">
        <option value=""></option>
        <optionvalue="Y">Y</option>
            <option value="N">N</option>
    </select><br>

    <label for="rabiesYear">Rabies Year:</label>
    <input type="text" id="rabiesYear" name="rabiesYear"><br><br>

    <label for="distempVacc">Distemper Vaccination:</label>
    <select id="distempVacc" name="distempVacc">
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select><br><br>

    <label for="distempYear">Distemper Year:</label>
    <input type="text" id="distempYear" name="distempYear"><br><br>

    <label for="spayedNeutered">Spayed/Neutered:</label>
    <select id="spayedNeutered" name="spayedNeutered">
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select><br><br>

    <label for="tagNumber">Tag Number:</label>
    <input type="text" id="tagNumber" name="tagNumber"><br><br>

    <label for="clinic">Clinic:</label>
    <input type="text" id="clinic" name="clinic"><br><br>

    <!-- Field indicating whether animal has an owner which is entered in a textbox -->
    <label>Does the animal have an owner?</label>
    <select name="hasOwner" id="hasOwner" onchange="showOwnerInfo()">
        <option value=""></option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select><br>
    <!-- If the animal has an owner, fields for owner name, phone number, and address are shown -->
    <div id="ownerInfo" style="display:none;">
        <label>Owner Name:</label><input type="text" name="ownerName"><br>
        <label>Phone:</label><input type="text" name="phone"><br>
        <label>Email:</label><input type="text" name="email"><br>
        <label>Address:</label><input type="text" name="address"><br>
        <label>City:</label><input type="text" name="city"><br>
        <label>State:</label><input type="text" name="state"><br>
        <label>Zip:</label><input type="text" name="zip"><br>

    </div>

    <!-- Submit button to submit the form data to animalIntakePost.php -->
    <input type="submit" name="submit" value="Submit">
</form>