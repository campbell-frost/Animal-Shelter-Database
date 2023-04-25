<?php
include("navbar.php");
?>
<script>
    var timeInput = document.getElementById("timeInput")
    var currentTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    timeInput.value = currentTime;
</script>
<link rel="stylesheet" type="text/css" href="StyleSheets/incidentReport.css?v=4">
<html>

<head>
    <title>Incident Report</title>
</head>

<body>
    <h1>Incident Report</h1>
    <div class="container">
        <div class="container1">
            <form action="incidentInsert.php" method="post">
                <!-- Animal Control Officer Badge Number -->
                <label>ACO Badge Number:</label><input type="text" name="badgeNumber"><br>

                <!-- Animal Intake Number text field-->
                <label>Intake Number:</label><input type="text" name="intakeNumber"><br>

                <!-- Current date text field -->
                <label>Date:</label><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"><br>

                <!-- Current time text field -->
                <label>Time:</label><input type="time" name="time" id="timeInput"><br>
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
        </div>
        <div class="container2">
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
    <button type="submit" name="submit">Submit</button>


</body>

</html>