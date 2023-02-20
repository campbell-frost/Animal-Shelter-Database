<?php
include("viewAnimals.php");

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
        $rabiesVacc = $_GET['rabiesVacc'] ;
        $rabiesYear = $_GET['rabiesYear'] ;
        $spayedNeutered = $_GET['spayedNeutered'] ;
        $tagNumber = $_GET['tagNumber'] ;
    }
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

        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <div id="search-bar">
            <input type="text" placeholder="Search...">
          </div>
          <!--Displays "View Animals" in the top-center of the page and Results just below it-->
       <!-- <div class = "center"> -->
     <!--  <div id="banner"> -->
    <!-- <div id="title">View Animal</div>
    <div id="search-bar">
      <input type="text" placeholder="Search..."></div>
      
    </div> 
    <nav>
      <ul>
        <li><a href="animal-intake.php">Animal Intake</a></li>
        <li><a href="view-animals.php">View Animals</a></li>
        <li><a href="reclaim-animals.php">Reclaim Animals</a></li> 
        <li><a href="reports.php">Reports</a></li> 
        <li><a href="incident-reports.php">File Incident Report</a></li> 
      <li><a href="dispositions.php">Dispositions</a></li> 
      <li><a href="fees-reciept.php">Fees Receipt</a></li> 
      
    </ul>
  </nav> -->
    </div>
            <h1>View Animals</h1>
            <h2>Results</h2>
    <div id="body">
            <!--Adds each characteristic as a header for each animal's attributes in the list as a table-->
            <table>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Date Of Birth</th>
                    <th>Sex</th>
                    <th>Breed</th>
                    <th>Color</th>
                    <th>Weight</th>
                    <th>Rabies Vacc</th>
                    <th>Rabies Year</th>
                    <th>Spayed/Neutered</th>
                    <th>Tag Number</th>
                </tr>
            </table>
            <?php
                $sql = "SELECT * FROM animals;" ;
                //$results = mysqli_query($conn, $sql) ;
                $results = $conn->query($sql) ;
                //$resultsCheck = mysqli_num_rows($results) ;

                // Checks that there is still results to add to the row
                if($results-> num_rows > 0)
                {
                // Shows the parameters of animals from the database
                    while($row = $results-> fetch_assoc())
                    {
                        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["type"] . "</td><td>" . $row["dateOfBirth"] . "</td><td>" . $row["sex"] . "</td><td>" . $row["breed"] . "</td><td>" . $row["color"] . "</td><td>" . $row["weight"] . "</td><td>" . $row["rabiesVacc"] . "</td><td>" . "</td><td>" . $row["rabiesYear"] . "</td><td>" . "</td><td>" . $row["spayedNeutered"] . "</td><td>" . "</td><td>" . $row["tagNumber"] . "</td><td>";
                    }
                }
                else
                {
                    echo "No results";
                }
                $conn->close();
            ?>
         <!--Placeholder animal-->  <!-- <p>Mittens&emsp;&emsp;&emsp;&emsp;<img src = "grayCat.jpg">&emsp;&emsp;&emsp;&emsp;001&emsp;&emsp;&emsp;&emsp;13&emsp;&emsp;&emsp;&emsp;Cat&emsp;&emsp;&emsp;&emsp;Breed&emsp;&emsp;&emsp;&emsp;F&emsp;&emsp;&emsp;&emsp;1 yr 0 m&emsp;&emsp;&emsp;&emsp;Gray&emsp;&emsp;&emsp;&emsp;11/17/22</p> -->
        <!-- </div> -->
        </div>
    </body>
</html>
