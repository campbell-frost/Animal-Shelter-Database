<!DOCTYPE html>
<html>
<head>
    <title>Animal Profile</title>
     <link rel="stylesheet" href="/animalProfile.css" />
  
</head>
<body>
    <h1>Animal Profile</h1>
  
  <div class="details-bar">
    <p>Details</p>
  </div>
    <form action = "insert.php" method = "post">
        <img 
          id="profile-img"
          src="https://cdn.glitch.global/c872be46-a769-4ed0-b479-5b07afcd61d4/Pawprint.jpeg?v=1675798502918"
          alt="A picture of a pawprint"
          width="200px"
        />
        <label>Add Photo:</label><input type = "file" name = "add photo"><br>
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
    </form>
  
  <div id="save">
      <button type="save" name="save">Save</button>
  </div>
</body>
</html>
