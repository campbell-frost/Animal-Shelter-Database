!DOCTYPE html>
<html>
<head>
    <title>Insert form value into database</title>
</head>
<body>
    <form action="testAnimalIntakeInsert.php" method="post">
        <label>Today's Date:</label><input type="text" name="date" placeholder="MM-DD-YYYY"><br>
        <label>Animal Type:</label><input type="text" name="type"><br>
        <label>Animal Name:</label><input type="text" name="name"><br>
        <label>Date of Birth:</label><input type="text" name="dateOfBirth" placeholder="MM-DD-YYYY"><br>
        <label>Sex:</label><input type="text" name="sex"><br>
        <label>Breed:</label><input type="text" name="breed"><br>
        <label>Color:</label><input type="text" name="color"><br>
        <label>Weight:</label><input type="text" name="weight"><br>
        <label>Altered:</label><input type="text" name="altered"><br>
        <label>Microchip:</label><input type="text" name="microchip"><br>
        <label>Brought in by ACO (badge number) or Citizen:</label><input type="text" name="broughtIn"><br>
        <label>Location:</label><input type="text" name="location">
        <p>(Shelter Cage number or Veterinarian number if animal is housed off-site)</p><br>
        <label>Owner(if known):</label><input type="text" name="owner"><br>
        <label>Phone Number:</label><input type="text" name="phone"><br> 
        <label>Address:</label><input type="text" name="address"><br> 
        <label>City:</label><input type="text" name="city"><br>
        <label>State:</label><input type="text" name="state"><br>
        <label>Zipcode:</label><input type="text" name="zipcode"><br>
        <label>Rabies Vaccination:</label><input type="text" name="rabiesVacc"><br>
        <label>Year:</label><input type="text" name="rabiesYear"><br>
        <label>Distemper Vaccination:</label><input type="text" name="distemperVacc"><br>
        <label>Year:</label><input type="text" name="distemperYear"><br>
        <label>Spayed/Neutered:</label><input type="text" name="spayedNeutered"><br>
        <label>Tag Number:</label><input type="text" name="tagNumber"><br>
        <label>Clinic:</label><input type="text" name="clinic"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>


