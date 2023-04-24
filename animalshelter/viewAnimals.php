<?php
include("dbconnect.php");
include("navbar.php");

$sql = "SELECT animal.animal_ID, animal.name, animal.type, animal.dateOfBirth, animal.sex, animal.breed, animal.color, animal.weight, animal.altered, animal.microchip, animal.SpayedNutered, animal.tagNumber, owner.name AS owner_name 
        FROM animal 
        INNER JOIN owner 
        ON animal.owner_ID = owner.owner_ID";

$results = mysqli_query($dbconnection, $sql);

if (!$results) {
    die("Query failed: " . mysqli_error($dbconnection));
}
?>

<html>

<head>
    <title>Animal Information</title>
    <link rel="stylesheet" type="text/css" href="StyleSheets/viewAnimals.css?v=2">
</head>

<body>
    <h1>Animal Information</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>D.O.B</th>
                <th>Sex</th>
                <th>Breed</th>
                <th>Color</th>
                <th>Weight (lbs.)</th>
                <th>Altered</th>
                <th>Microchip</th>
                <th>Spayed/Neutered</th>
                <th>Owner</th>
                <th>Tag Number</th>
                <th>Disposed</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($results)) { ?>
                <tr>
                <td><a class="edit-btn" href="editAnimal.php?animal_id=<?php echo $row['animal_ID']; ?>"><?php echo $row['name']; ?></a></td>
                    </td>
                    <td>
                        <?php echo $row['type']; ?>
                    </td>
                    <td>
                        <?php echo $row['dateOfBirth']; ?>
                    </td>
                    <td>
                        <?php echo $row['sex']; ?>
                    </td>
                    <td>
                        <?php echo $row['breed']; ?>
                    </td>
                    <td>
                        <?php echo $row['color']; ?>
                    </td>
                    <td>
                        <?php echo $row['weight']; ?>
                    </td>
                    <td>
                        <?php echo $row['altered']; ?>
                    </td>
                    <td>
                        <?php echo $row['microchip']; ?>
                    </td>
                    <td>
                        <?php echo $row['SpayedNutered']; ?>
                    </td>
                    <td>
                        <?php echo $row['owner_name']; ?>
                    </td>
                    <td>
                        <?php echo $row['tagNumber']; ?>
                    </td>
                 
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <?php mysqli_free_result($results); ?>
</body>

</html>