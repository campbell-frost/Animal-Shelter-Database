<!DOCTYPE html>
<html>
<head>
    <title>Insert form value into database</title>
</head>
<body>
    <form action = "insert.php" method = "post">

        <label>Name:</label><input type = "text" name="name"><br>
        <label>ID:</label><input type = "text" name="id"><br>
        <label>Cage #:</label><input type = "text" name="cage #"><br>
        <label>Type:</label><input type = "text" name="type"><br>
        <label>Breed:</label><input type = "text" name = "breed"><br>
        <label>Sex:</label><input type = "text" name = "sex"><br>
        <label>Age:</label><input type = "text" name = "age"><br>
        <label>Date brought into shelter:</label><input type = "text" name = "date brought into shelter"><br>
        <label>Weight:</label><input type = "text" name = "weight"><br>
        <label>Color:</label><input type = "text" name = "color"><br>
        <label>Altered:</label><input type = "text" name = "altered"><br>
        <label>Microchip:</label><input type = "text" name = "microchip"><br>
        <label>Brought in by ACO(badge #) or citizen:</label><input type = "text" name = "brought in by ACO(badge #) or citizen"><br>
        <label>Add Photo:</label><input type = "file" name = "add photo"><br>
        
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
