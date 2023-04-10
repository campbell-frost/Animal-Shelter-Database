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
            <option value="Y">Y</option>
            <option value="N">N</option>
        </select><br>
        
        <!-- Year of rabies vaccination entered in a textbox -->
        <label>Year:</label><input type="text" name="rabiesYear"><br>
        
        <!-- Dropdown selection for selecting whether animal has had distemper vaccination -->
        <label>Distemper Vaccination:</label>
        <select name="distemperVacc">
            <option value=""></option>
            <option value="Y">Y</option>
            <option value="N">N</option>
        </select><br>
        
        <!-- Year of distemper vaccination entered in a textbox -->
        <label>Year:</label><input type="text" name="distemperYear"><br>
        <!-- Dropdown selection for selecting whether animal has been spayed or neutered -->
        <label>Spayed/Neutered:</label><input type="text" name="spayedNeutered"><br>
        <select name="spayedNeutered">
            <option value=""></option>
            <option value="Y">Y</option>
            <option value="N">N</option>
        </select><br>
        
        <!-- Tagnumber of animal field entered in a textbox -->
        <label>Tag Number:</label><input type="text" name="tagNumber"><br>
       
        <!-- Clinic of animal field entered in a textbox -->
        <label>Clinic:</label><input type="text" name="clinic"><br>
        
        <!-- Image of animal field uploaded from the local computer as a file -->
        <label>Image:</label><input type="file" name="file"><br>
        
        <!-- Name of owner of animal field entered in a textbox -->
        <label>Owner(if known):</label><input type="text" name="owner"><br>
        
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
        
        <!-- Submit button user clicks to add the information from completed form to the database -->
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
