<?php
include("dbconnect.php");
include("navbar.php");

if(!empty($_GET['name']) && !empty($_GET['breed']) && !empty($_GET['color']) && !empty($_GET['type']) && !empty($_GET['dateOfBirth']) && !empty($_GET['sex']) && !empty($_GET['weight']) && !empty($_GET['rabiesVacc']) && !empty($_GET['rabiesYear']) && !empty($_GET['spayedNeutered']) && !empty($_GET['tagNumber']))
    {
        // Values retrieved from the 'animalintake' table
        $type = $_GET['type'] ;
        $name = $_GET['name'] ;
        $dateOfBirth = $_GET['dateOfBirth'] ;
        $sex = $_GET['sex'] ;
        $breed = $_GET['breed'] ;
        $color= $_GET['color'] ;
        $weight= $_GET['weight'] ;
        $altered = $_GET['altered'] ;
        $microchip = $_GET['microchip'] ;
        $spayedNeutered = $_GET['spayedNeutered'] ;
        $owner = $_GET['owner'] ;
        $tagNumber = $_GET['tagNumber'] ;
    }
?>

<html>
	<link rel="stylesheet" type="text/css" href="style.css">
    <head>
        <!--Gives the file the name View Animals-->
        <title>View Animals</title>

    </head>
    
    <body>
    </div>
            <h1>View Animals</h1>
            <h2>Results</h2>
    <!--<div id="body"> -->
            <!--Adds each characteristic as a header for each animal's attributes in the list as a table-->
            <!--border = 1 width = 150-->
            <table>
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
            <!--<br>-->
            <hr>
                    <?php
                        $sql = "SELECT * FROM animal;" ;
                        //$results = mysqli_query($dbconnection, $sql) ;
                        $results = $dbconnection->query($sql) ;
                        //$resultsCheck = mysqli_num_rows($results) ;

                        // Checks that there is still results to add to the row
                        if($results-> num_rows > 0)
                        {
                        // Shows the parameters of animals from the database
                            while($row = $results-> fetch_assoc())
                            {                 // <a class = 'btn btn-primary btn-sm' href = 'animalProfileWebpage.html'>SELECT</a>
                                              // <td> <button type = 'button' class = 'btn btn-primary btn-sm' href = 'animalProfileWebpage.html'>SELECT</button>
                                echo "<tr>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["type"] . "</td>
                                    <td>" . $row["dateOfBirth"] . "</td>
                                    <td>" . $row["sex"] . "</td>
                                    <td>" . $row["breed"] . "</td>
                                    <td>" . $row["color"] . "</td>
                                    <td>" . $row["weight"] . "</td>
                                    <td>" . $row["altered"] . "</td>
                                    <td>" . $row["microchip"] . "</td>
                                    <td>" . $row["spayedNeutered"] . "</td>
                                    <td>" . $row["owner"] . "</td>
                                    <td>" . $row["tagNumber"] . "</td></tr><br>";

                            }
                        }
                        else
                        {
                            echo "No results";
                        }
                        $dbconnection->close();
                    ?>
                </tr>
            </table>
    </body>
</html>