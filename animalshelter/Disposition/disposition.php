<!DOCTYPE html>
<html>
<head>
    <title>Disposition Form</title>
    <h1>Indian Lake Animal Shelter</h1>
    <h2>Disposition Form</h2>
</head>
<body>
    <form action="dispositionInsert.php" method="post">
        <p><label>Animal Name:</label><input type="text" name="animalName">  <label>Animal ID:</label><input type="text" name="animalID"></p>
       
        <p>Please Select Reason for Disposition <p>
            <p> <input type="checkbox" name="reason" value="Adoption">  Adopted (Include Information Below) </p>
            <p> <input type="checkbox" name="reason" value="Reclaimed">  Reclaimed (Within 30 days, Include Information Below)</p>
            <p> <input type="checkbox" name="reason" value="Auction"> Auction (Provide Auction Location </p>
            <p> <input type="checkbox" name="reason" value="Euthanized"> Euthanized (Include Vet Information Below) </p>
      
        <button type="submit" name="submit">Submit</button>
        <button type="text/css" media="print" name="print">Print</button>
    </form>
</body>
</html>
