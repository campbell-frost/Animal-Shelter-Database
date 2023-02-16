<?php
include("viewAnimals.php");

//if(!empty($_GET['name']) && !empty($_GET['breed']) && !empty($_GET['color']) && !empty($_GET['type']))
  //  {
        // Values retrieved from the 'animalintake' table
        $date = $_GET['date'] ;
        $type = $_GET['type'] ;
        $name = $_GET['name'] ;
        $dateOfBirth = $_GET['dateOfBirth'] ;
        $sex = $_GET['sex'] ;
        $breed = $_GET['breed'] ;
        $color= $_GET['color'] ;
        $weight= $_GET['weight'] ;
        $altered= $_GET['altered'] ;
        $microchip= $_GET['microchip'] ;
        $broughtIn = $_GET['broughtIn'] ;
        $location = $_GET['location'];
        $owner = $_GET['owner'] ;
        $phone = $_GET['phone'] ;
        $address = $_GET['address'] ;
        $city = $_GET['city'] ;
        $state = $_GET['state'] ;
        $zipcode = $_GET['zipcode'] ;
        $rabiesVacc = $_GET['rabiesVacc'] ;
        $rabiesYear = $_GET['rabiesYear'] ;
        $distemperVacc = $_GET['distemperVacc'] ;
        $distemperYear = $_GET['distemperYear'] ;
        $spayedNeutered = $_GET['spayedNeutered'] ;
        $tagNumber = $_GET['tagNumber'] ;
        $clinic = $_GET['clinic'] ;
  //  }
?>

<!DOCTYPE html>
<html>
    <style>
        div.center{
            text-align: center;
        }
    </style>

    <head>
        <!--Gives the file the name View Animals-->
        <title>View Animals</title>

        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    
    <body>
        <div id="search-bar">
            <input type="text" placeholder="Search...">
          </div>
          <!--Displays "View Animals" in the top-center of the page and Results just below it-->
        <div class = "center">
            <h1>View Animals</h1>
            <h2>Results</h2>
            <!--Adds each characteristic as a header for each animal's attributes in the list as a table-->
            <table>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Date Of Birth</th>
                    <th>Sex</th>
                    <th>Breed</th>
                    <th>Color</th>
                    <th>Weight</th>
                    <th>Altered</th>
                    <th>Microchip</th>
                    <th>Brought In</th>
                    <th>Location</th>
                    <th>Owner</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zipcode</th>
                    <th>Rabies Vacc</th>
                    <th>Rabies Year</th>
                    <th>Distemper Vacc</th>
                    <th>Distemper Year</th>
                    <th>Spayed/Neutered</th>
                    <th>Tag Number</th>
                    <th>Clinic</th>
                </tr>
            </table>
            <?php
                $sql = "SELECT * FROM animals;" ;
                //$results = mysqli_query($conn, $sql) ;
                $results = $conn->query($sql) ;
                //$resultsCheck = mysqli_num_rows($results) ;

                if($results-> num_rows > 0)
                {
                    while($row = $results-> fetch_assoc())
                    {
                        echo "<tr><td>" . row["name"] . "</td><td>" . row["type"] . "</td><td>" . row["date"] . "</td><td>" . row["dateOfBirth"] ;//. "</td><td>""<tr><td>" . row["name"] . "</td><td>""<tr><td>" . row["name"] . "</td><td>""<tr><td>" . row["name"] . "</td><td>""<tr><td>" . row["name"] . "</td><td>""<tr><td>" . row["name"] . "</td><td>""<tr><td>" . row["name"] . "</td><td>""<tr><td>" . row["name"] . "</td><td>""<tr><td>" . row["name"] . "</td><td>""<tr><td>" . row["name"] . "</td><td>""<tr><td>" . row["name"] . "</td><td>""<tr><td>" . row["name"] . "</td><td>";
                    }
                }
                else
                {
                    echo "No results";
                }
                $conn->close();
            ?>
         <!--Placeholder animal-->  <!-- <p>Mittens&emsp;&emsp;&emsp;&emsp;<img src = "grayCat.jpg">&emsp;&emsp;&emsp;&emsp;001&emsp;&emsp;&emsp;&emsp;13&emsp;&emsp;&emsp;&emsp;Cat&emsp;&emsp;&emsp;&emsp;Breed&emsp;&emsp;&emsp;&emsp;F&emsp;&emsp;&emsp;&emsp;1 yr 0 m&emsp;&emsp;&emsp;&emsp;Gray&emsp;&emsp;&emsp;&emsp;11/17/22</p> -->
        </div>
    </body>
</html>
