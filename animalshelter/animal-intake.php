<?php
include("navbar.php");
?>
<link rel="stylesheet" type="text/css" href="StyleSheets/animalIntake.css?v=6">
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
    function showRabiesInfo() {
        var hasRabies = document.getElementById("rabiesVacc");
        var rabiesYear = document.getElementById("rabiesYear");
        if (hasRabies.value == "Yes") {
            rabiesYear.style.display = "block";
        } else {
            rabiesYear.style.display = "none";
        }
    }

    function showDistemperInfo() {
        var hasDistemper = document.getElementById("distempVacc");
        var distemperYear = document.getElementById("distempYear");
        if (hasDistemper.value == "Yes") {
            distemperYear.style.display = "block";
        } else {
            distemperYear.style.display = "none";
        }
    }


</script>
<h1>Animal Intake</h1>  
<form action="animalIntakePost.php" method="post">
    <br>

    <!-- Date field for current date entered by selecting a date in a calendar -->
    <label>Date:</label><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"><br>
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
        <option value="Yes">Y</option>
        <option value="No">N</option>
    </select><br>

    <!-- Dropdown selection for selecting whether animal has a microchip -->
    <label>Microchip:</label>
    <select name="microchip">
        <option value=""></option>
        <option value="Yes">Y</option>
        <option value="No">N</option>
    </select><br>

    <!-- Field indicating whether animal has been brought in by an animal control
            officer or citizen which is entered in a textbox -->
    <label>Brought in by ACO (badge number) or Citizen:</label><input type="text" name="broughtIn"><br>

    <!-- Location of animal field entered in a textbox which the text below indicates 
            the desired input if animal is housed at the animal shelter or off-site -->
    <label>Location:</label><input type="text" name="location">
    <p>(Shelter Cage number or Veterinarian number if animal is housed off-site)</p><br>


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


        <!-- Date of birth field entered by selecting a date in a calendar -->
        <label>Date of Birth:</label><input type="date" name="dateOfBirth"><br>
        <!-- Dropdown selection for selecting whether animal has had rabies vaccination -->
        <label>Rabies Vaccination:</label>
        <select id="rabiesVacc" name="rabiesVacc" onchange="showRabiesInfo()">
            <option value=""></option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select><br>

        <!-- If the animal has had a rabies vaccination, display field for the year -->
        <div id="rabiesYear" style="display:none">
            <label>Rabies Vaccination Year:</label><input type="text" name="rabiesYear"><br>
        </div>

        <!-- Dropdown selection for selecting whether animal has had distemper vaccination -->
        <label>Distemper Vaccination:</label>
        <select id="distempVacc" name="distempVacc" onchange="showDistemperInfo()">
            <option value=""></option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select><br>

        <!-- If the animal has had a distemper vaccination, display field for the year -->
        <div id="distempYear" style="display:none">
            <label>Distemper Vaccination Year:</label><input type="text" name="distemperYear"><br>
        </div>
        <label for="spayedNeutered">Spayed/Neutered:</label>
        <select id="spayedNeutered" name="spayedNeutered">
            <option value=""></option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select><br><br>

        <label for="tagNumber">Tag Number:</label>
        <input type="text" id="tagNumber" name="tagNumber"><br><br>

        <label for="clinic">Clinic:</label>
        <input type="text" id="clinic" name="clinic"><br><br>


    </div>

    <!-- Submit button to submit the form data to animalIntakePost.php -->
    <input type="submit" name="submit" value="Submit">
</form>