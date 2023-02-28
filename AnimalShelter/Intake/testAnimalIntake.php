<!DOCTYPE html>
<html>
<head>
    <title>Insert form value into database</title>
</head>
<body>
    <form action="testAnimalIntakeInsert.php" method="post">
        <!-- Date field for current date entered by selecting a date in a calender -->
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
        
        <!-- Date of birth field entered by selecting a date in a calender -->
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
        <label>Brought in by ACO (badge number) or Citizen:</label><input type="text" name="broughtIn"><br>
        <label>Location:</label><input type="text" name="location">
        <p>(Shelter Cage number or Veterinarian number if animal is housed off-site)</p><br>
        <!-- Dropdown selection for selecting whether animal has had rabies vaccination -->
        <label>Rabies Vaccination:</label>
        <select name="rabiesVacc">
            <option value=""></option>
            <option value="Y">Y</option>
            <option value="N">N</option>
        </select><br>
        <label>Year:</label><input type="text" name="rabiesYear"><br>
        <!-- Dropdown selection for selecting whether animal has had distemper vaccination -->
        <label>Distemper Vaccination:</label>
        <select name="distemperVacc">
            <option value=""></option>
            <option value="Y">Y</option>
            <option value="N">N</option>
        </select><br>
        <label>Year:</label><input type="text" name="distemperYear"><br>
        <!-- Dropdown selection for selecting whether animal has been spayed or neutered -->
        <label>Spayed/Neutered:</label><input type="text" name="spayedNeutered"><br>
        <select name="spayedNeutered">
            <option value=""></option>
            <option value="Y">Y</option>
            <option value="N">N</option>
        </select><br>
        <label>Tag Number:</label><input type="text" name="tagNumber"><br>
        <label>Clinic:</label><input type="text" name="clinic"><br>
        <label>Image:</label><input type="file" name="file"><br>
        <label>Owner(if known):</label><input type="text" name="owner"><br>
        <label>Phone Number:</label><input type="text" name="phone"><br> 
        <label>Address:</label><input type="text" name="address"><br> 
        <label>City:</label><input type="text" name="city"><br>
        <label>State:</label><input type="text" name="state"><br>
        <label>Zipcode:</label><input type="text" name="zipcode"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
