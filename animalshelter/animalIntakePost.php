<?php
include("dbconnect.php");
// Define regular expressions to match against user input
$alpha_numeric = "/^[a-zA-Z0-9]+$/";
$address_regex = "/^[a-zA-Z0-9 ]+$/";
$alpha_w_space = "/^[a-zA-Z ]+$/";
$alpha_w_spaceNum= "/^[a-zA-Z0-9\s]+$/";
$alpha = "/^[a-zA-Z]+$/";
$numeric = "/^[0-9]+$/";
$weight = "/^[0-9.]+$/";
$phone = "/^[0-9]{10}$/";

// Action that is taken when the user clicks 'submit' on the form for the animal intake page
if (isset($_POST['submit'])) {
    // Action that is taken when the fields for 'name', 'breed', 'color', and 'type' are filled in the animal intake page
    if (!empty($_POST['name']) && !empty($_POST['breed']) && !empty($_POST['color']) && !empty($_POST['type'])) {
        // Get animal information
        $type = $_POST['type'];
        $name = $_POST['name'];
        $date = $_POST['date'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $sex = $_POST['sex'];
        $breed = $_POST['breed'];
        $color = $_POST['color'];
        $weight = $_POST['weight'];
        $altered = $_POST['altered'];
        $microchip = $_POST['microchip'];
        $broughtIn = $_POST['broughtIn'];
        $location = $_POST['location'];

        if (!empty($name) && !preg_match($alpha_w_space, $name)) {
            echo "<script>
            window.alert('Animal name can only contain alphabetical characters and spaces!');
            history.back(1);
          </script>";
            exit;
        } else if (!empty($breed) && !preg_match($alpha, $breed)) {
            echo "<script>
            window.alert('Breed can only contain alphabetical characters.');
            history.back(1);
          </script>";
            exit;
        } else if (!empty($color) && !preg_match($alpha, $color)) {
            echo "<script>
            window.alert('Color can only contain alphabetical characters.');
            history.back(1);
          </script>";
            exit;
        } else if (!isset($dateOfBirth) && !preg_match($numeric, $dateOfBirth)) {
            echo "<script>
            window.alert('Date of birth can only contain alphabetical characters and numerical values.');
            history.back(1);
          </script>";
            exit;
        } else if (!preg_match($alpha, $location)) {
            echo "<script>
            window.alert('Location can only contain alphabetical characters!');
            history.back(1);
          </script>";
            exit;
        }

        // Check if the user entered owner information
        if ($_POST['hasOwner'] == 'Yes') {
            $ownerName = $_POST['ownerName'];
            $ownerPhone = $_POST['phone'];
            $ownerAddress = $_POST['address'];
            $ownerCity = $_POST['city'];
            $ownerState = $_POST['state'];
            $ownerZip = $_POST['zip'];
            $rabiesVacc = $_POST['rabiesVacc'];
            $rabiesYear = $_POST['rabiesYear'];
            $distemperVacc = $_POST['distempVacc'];
            $distemperYear = $_POST['distempYear'];
            $spayedNutered = $_POST['spayedNeutered'];
            $tagNumber = $_POST['tagNumber'];
            $clinic = $_POST['clinic'];

            if (!preg_match($alpha, $ownerName)) {
                echo "<script>
                window.alert('Owner name can only contain alphabetical characters!');
                history.back(1);
              </script>";
                exit;
            } else if (empty($ownerName)) {
                echo "<script>
                window.alert('Owner name is required!');
                history.back(1);
              </script>";
                exit;
            }
            if (!preg_match($phone, $ownerPhone)) {
                echo "<script>
                window.alert('Phone number can only contain numerical values!');
                history.back(1);
              </script>";
                exit;
            } else if (empty($ownerPhone)) {
                echo "<script>
                window.alert('Phone number is required!');
                history.back(1);
              </script>";
                exit;
            }
            if (!preg_match($alpha_w_spaceNum, $ownerAddress)) {
                echo "<script>
                window.alert('Address can only contain Alphabetical characters and numerical values!');
                history.back(1);
              </script>";
                exit;
            } else if (empty($ownerAddress)) {
                echo "<script>
                window.alert('Address is required!');
                history.back(1);
              </script>";
                exit;
            }
            if (!preg_match($alpha_w_space, $ownerCity)) {
                echo "<script>
                window.alert('City can only contain alphabetical characters!');
                history.back(1);
              </script>";
                exit;
            } else if (empty($ownerCity)) {
                echo "<script>
                window.alert('City is required!');
                history.back(1);
              </script>";
                exit;
            }
            if (!preg_match($alpha, $ownerState) && strlen($ownerState) > 2) {
                echo "<script>
                window.alert('State can only contain alphabetical characters!');
                history.back(1);
              </script>";
                exit;
            } else if (empty($ownerState)) {
                echo "<script>
                window.alert('State is required!');
                history.back(1);
              </script>";
                exit;
            }
            if (!preg_match($numeric, $ownerZip)) {
                echo "<script>
                window.alert('Zipcode can only contain numerical values!');
                history.back(1);
              </script>";
                exit;
            } else if (empty($ownerZip)) {
                echo "<script>
                window.alert('Zipcode is required!');
                history.back(1);
              </script>";
                exit;
            } else if (empty($rabiesVacc)) {
                echo "<script>
                window.alert('rabiesVacc is required!');
                history.back(1);
            </script>";
                exit;
  
  
            } else if (empty($distemperVacc)) {
                echo "<script>
                window.alert('distemperVacc is required!');
                history.back(1);
            </script>";
                exit;
            } else if (empty($spayedNutered)) {
                echo "<script>
                window.alert('spayedNeutered is required!');
                history.back(1);
            </script>";
                exit;
            } else if (!preg_match($numeric, $tagNumber)) {
                echo "<script>
                window.alert('Tag number can only contain numerical values!');
                history.back(1);
            </script>";
                exit;
            } else if (empty($tagNumber)) {
                echo "<script>
                window.alert('Tag number is required!');
                history.back(1);
            </script>";
                exit;
            } else if (!preg_match($alpha_w_spaceNum, $clinic)) {
                echo "<script>
                window.alert('Clinic can only contain alphabetical characters!');
                history.back(1);
            </script>";
                exit;
            } else if (empty($clinic)) {
                echo "<script>
                window.alert('Clinic is required!');
                history.back(1);
            </script>";
                exit;
            }

            // Insert owner information into the owner table
            $insertOwnerQuery = "INSERT INTO owner (name, phone, address, city, state, zip) VALUES ('$ownerName', '$ownerPhone', '$ownerAddress', '$ownerCity', '$ownerState', '$ownerZip')";
            if (!mysqli_query($dbconnection, $insertOwnerQuery)) {
                die('Error: ' . mysqli_error($dbconnection));
            }
            echo $insertOwnerQuery;

            // Get the ID of the newly inserted owner
            $ownerId = mysqli_insert_id($dbconnection);

            // Insert animal information into the animal table with owner ID
            $insertAnimalQuery = "INSERT INTO animal (type, name, date, dateOfBirth, sex, breed, color, weight, altered, microchip, broughtIn, location, rabiesVacc, rabiesYear, distemperVacc, distemperYear, spayedNutered, tagNumber, clinic, owner_id) VALUES ('$type', '$name', '$date', '$dateOfBirth', '$sex', '$breed', '$color', '$weight', '$altered', '$microchip', '$broughtIn', '$location', '$rabiesVacc', '$rabiesYear', '$distemperVacc', '$distemperYear', '$spayedNutered', '$tagNumber', '$clinic', '$ownerId')";
            if (!mysqli_query($dbconnection, $insertAnimalQuery)) {
                die('Error: ' . mysqli_error($dbconnection));
            }

            // Redirect to the success page
            header('Location: viewAnimals.php');
        } else {
            // Insert animal information into the animal table without owner ID
            $insertAnimalQuery = "INSERT INTO animal (type, name, date, dateOfBirth, sex, breed, color, weight, altered, microchip, broughtIn, location, rabiesVacc, rabiesYear, distemperVacc, distemperYear, spayedNutered, tagNumber, clinic) VALUES ('$type', '$name', '$date', '$dateOfBirth', '$sex', '$breed', '$color', '$weight', '$altered', '$microchip', '$broughtIn', '$location', '$rabiesVacc', '$rabiesYear', '$distemperVacc', '$distemperYear', '$spayedNutered', '$tagNumber', '$clinic')";
            if (!mysqli_query($dbconnection, $insertAnimalQuery)) {
                die('Error: ' . mysqli_error($dbconnection));
            } // Redirect to the success page
            header('Location: viewAnimals.php');
        }
    } else {
        // Redirect to the error page if any required fields are empty
        echo "<script>
                window.alert('Fields Are Required!');
                history.back(1);
            </script>";
    }
} else {
    // Redirect to the error page if the user did not click 'submit'
    echo "<script>
                window.alert('Fields Are Required!');
                history.back(1);
            </script>";
}
?>