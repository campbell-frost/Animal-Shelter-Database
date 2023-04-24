<?php
include("dbconnect.php");
include("navbar.php");

$sql = "SELECT animal.animal_ID, animal.name, animal.type, animal.dateOfBirth, animal.sex, animal.breed, animal.color, animal.weight, animal.altered, animal.microchip, animal.spayedNutered, animal.tagNumber, disposition_ID, owner.name AS owner_name, IF((SELECT COUNT(*) FROM disposition WHERE disposition.animal_ID = animal.animal_ID AND disposition.disposition_id IS NOT NULL) > 0, 'Yes', 'No') AS disposed
            FROM animal
            LEFT JOIN owner 
            ON animal.owner_ID = owner.owner_ID";


$results = mysqli_query($dbconnection, $sql);

if (!$results) {
    die("Query failed: " . mysqli_error($dbconnection));
}

if (mysqli_num_rows($results) === 0) {
    $sql2 = "SELECT animal_ID, name, type, dateOfBirth, sex, breed, color, weight, altered, microchip, spayedNutered, tagNumber, disposition_ID 
             FROM animal 
             WHERE owner_ID IS NULL";
    $results2 = mysqli_query($dbconnection, $sql2);

    if (!$results2) {
        die("Query failed: " . mysqli_error($dbconnection));
    }
} else {
    $results2 = null;
}

?>

<html>

<head>
    <title>Animal Information</title>
    <link rel="stylesheet" type="text/css" href="StyleSheets/viewAnimals.css?v=3">
</head>

<body>
    <h1>Animal Information</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
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
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($results)) { ?>
                <tr>
                    <td>
                        <?php echo $row['animal_ID']; ?>
                    </td>
                    <td>
                        <?php echo $row['name']; ?>
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
                        <?php echo $row['altered'] ?>
                    </td>
                    <td>
                        <?php echo $row['microchip']; ?>
                    </td>
                    <td>
                        <?php echo $row['spayedNutered'] ?>
                    </td>
                    <td>
                        <?php echo $row['owner_name']; ?>
                    </td>
                    <td>
                        <?php echo $row['tagNumber']; ?>
                    </td>
                    <td>
                        <?php echo $row['disposed']; ?>
                    </td>
                    <td><a class="edit-btn" href="editAnimal.php?animal_id=<?php echo $row['animal_ID']; ?>">Edit</a></td>
                </tr>
            <?php } ?>
            <?php if ($results2 && mysqli_num_rows($results2) > 0) {
                while ($row2 = mysqli_fetch_assoc($results2)) { ?>
                    <tr>
                        <td>
                            <?php echo $row2['animal_ID']; ?>
                        </td>
                        <td>
                            <?php echo $row2['type']; ?>
                        </td>
                        <td>
                            <?php echo $row2['dateOfBirth']; ?>
                        </td>
                        <td>
                            <?php echo $row2['sex']; ?>
                        </td>
                        <td>
                            <?php echo $row2['breed']; ?>
                        </td>
                        <td>
                            <?php echo $row2['color']; ?>
                        </td>
                        <td>
                            <?php echo $row2['weight']; ?>
                        </td>
                        <td>
                            <?php echo $row2['altered'] ?>
                        </td>
                        <td>
                            <?php echo $row2['microchip']; ?>
                        </td>
                        <td>
                            <?php echo $row2['spayedNutered'] == 'Yes' ? 'Yes' : 'No'; ?>
                        </td>
                        <td>
                            <?php echo "N/A"; ?>
                        </td>
                        <td>
                            <?php echo $row2['tagNumber']; ?>
                        </td>
                        <td>
                            <?php echo "disposed"; ?>
                        </td>
                        <td><a class="edit-btn" href="editAnimal.php?animal_id=<?php echo $row['animal_ID']; ?>">Edit</a></td>

                    </tr>
                <?php }
            } ?>
        </tbody>
    </table>