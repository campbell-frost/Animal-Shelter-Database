<?php
session_start();
include("accountType.php");
include("incidentInsert.php");

?>
<script>
	//Gets the current time 
    var timeInput = document.getElementById("timeInput")
    var currentTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    timeInput.value = currentTime;
	//Function For Displaying Owner Information 
	function showOwnerInfo() 
	{
		// Get the hasOwner and ownerInfo elements from the HTML document
		var hasOwner = document.getElementById("hasOwner");
		var ownerInfo = document.getElementById("ownerInfo");
		// If the user selects "Yes" for hasOwner, show the ownerInfo element
		if (hasOwner.value == "Yes")
		{
			ownerInfo.style.display = "block";
		} 
		// Otherwise, hide the ownerInfo element
		else
		{
			ownerInfo.style.display = "none";
		}
	}
</script>
<link rel="stylesheet" type="text/css" href="StyleSheets/incidentReport.css?v=8">
<html>

<head>
    <title>Incident Report</title>
</head>

<body>
    <h1>Incident Report</h1>
    <div class="container">
        <div class="incident">
            <form action="incidentInsert.php" method="post">
                <!-- Animal Intake Number text field-->
                <label>Intake Number:</label><input type="text" name="intakeNumber"><br>

                <!-- Animal Control Officer Badge Number -->
                <label>ACO Badge Number:</label><input type="text" name="badgeNumber"><br>

                <!-- Current date text field -->
                <label>Date:</label><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"><br>

                <!-- Current time text field -->
                <label>Time:</label><input type="time" name="time" id="timeInput"><br>
                <!-- Description of weather when animal is being collected  -->
                <label>Weather:</label><input type="text" name="weather"><br>
                <label for="animal_id">Animal Name:</label>
                <select name="animal_id" id="animal_id">
                    <?php echo $animal_options; ?>
                </select>
                <br>
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
        </div>
        <div class="incident2">
            <!-- Color of animal field entered in a textbox -->
            <label>Color:</label><input type="text" name="color"><br>

            <!-- Name of owner of animal field entered in a textbox -->
            <label>Does the animal have an owner?</label>
            <select name="hasOwner" id="hasOwner" onchange="showOwnerInfo()">
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select><br>
            <div id="ownerInfo" style="display:none;">

                <label>Owner Name:</label><input type="text" name="ownerName"><br>
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
            </div>
        </div>
        <!-- Textbox for the description of the circumstances surrounding when an animal is collected
         and the amount of text displayed will have a maximun compacity of 5 rows and 50 columns -->
        <div class='none'>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="5" cols="50">
        </textarea>
        </div>

    </div>

    <!-- Submit button user clicks to add the information from completed form to the database -->
    <button class="button-container" type="submit" name="submit">Submit</button>


</body>

</html>