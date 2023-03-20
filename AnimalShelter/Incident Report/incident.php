<!DOCTYPE html>
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
        
        <!-- Animal Control Officer Badge Number -->
        <label>Sex:</label>
        <select name="sex">
            <option value=""></option>
            <option value="M">M</option>
            <option value="F">F</option>
        </select><br>
        <label>Color:</label><input type="text" name="color"><br>
        <label>Animal Owner (if known):</label><input type="text" name="owner"><br>
        <label>Phone Number:</label><input type="text" name="phone"><br> 
        <label>Address:</label><input type="text" name="address"><br> 
        <label>City:</label><input type="text" name="city"><br>
        <label>State:</label><input type="text" name="state"><br>
        <label>Zipcode:</label><input type="text" name="zipcode"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="5" cols="50">
            
        </textarea>
        <button type="submit" name="submit">Submit</button>
        <button type="text/css" media="print" name="print">Print</button>
    </form>
</body>
</html>
