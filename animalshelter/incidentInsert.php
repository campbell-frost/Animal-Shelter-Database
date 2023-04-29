<?php
include("dbconnect.php");

// Define regular expressions to match against user input
$alpha_numeric = "/^[a-zA-Z0-9]+$/";
$address_regex = "/^[a-zA-Z0-9 ]+$/";
$alpha_w_space = "/^[a-zA-Z ]+$/";
$alpha = "/^[a-zA-Z]+$/";
$numeric = "/^[0-9]+$/";
$weight = "/^[0-9.]+$/";
$phone = "/^[0-9]{10}$/";

$animalSQL = "SELECT animal_ID, name FROM animal";
$result = mysqli_query($dbconnection, $animalSQL);

// Generating HTML code for the animal ID dropdown list
$animal_options = "";
while ($row = mysqli_fetch_assoc($result)) {
    $animal_options .= "<option value='" . $row['animal_ID'] . "'>" . $row['name'] . "</option>";
}

// Action that is taken when the user clicks 'submit' on the form for the incident reports page
if (isset($_POST['submit'])) {
    // Action that is taken when the fields for 'badgeNumber' is submitted
    if (!empty($_POST['badgeNumber'])) {
        // Get intake information
        $intakeNumber = $_POST['intakeNumber'];
        $badgeNumber = $_POST['badgeNumber'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $weather = $_POST['weather'];
        $description = $_POST['description'];
        $animal_id = $_POST['animal_id'];

        if (!empty($intakeNumber) && !preg_match($numeric, $intakeNumber)) {
            echo "<script>
            window.alert('Intake Number can only contain numerical values!');
            history.back(1);
          </script>";
            exit;
        }

        if (!empty($badgeNumber) && !preg_match($numeric, $badgeNumber)) {
            echo "<script>
            window.alert('Badge number can only contain numerical values!');
            history.back(1);
          </script>";
            exit;
        }

        if (!isset($date)) {
            echo "<script>
            window.alert('Date is required!');
            history.back(1);
          </script>";
            exit;
        }
        if (!isset($time)) {
            echo "<script>
            window.alert('Time is required!');
            history.back(1);
          </script>";
            exit;
        }
        if (!empty($weather) && !preg_match($alpha_w_space, $weather)) {
            echo "<script>
            window.alert('Weather can only contain alphabetical characters.');
            history.back(1);
          </script>";
            exit;
        }
        if (!isset($description)) {
            echo "<script>
            window.alert('Description is required!');
            history.back(1);
            </script>";
            exit;
        } else if (strlen($description) > 500) {
            echo "<script>
            window.alert('Description must not exceed 500 characters!');
            history.back(1);
            </script>";
            exit;
        }
        if (!empty($animal_id) && !preg_match($numeric, $animal_id)) {
            echo "<script>
            window.alert('Animal ID can only contain numerical values!');
            history.back(1);
          </script>";
            exit;
        }
        // Insert animal information into the animal table with owner ID
        $insertIncidentQuery = "INSERT INTO incident (intakeNumber, badgeNumber, date, time, weather, description, animal_ID) VALUES ('$intakeNumber', '$badgeNumber', '$date', '$time', '$weather','$description', '$animal_id')";
        if (!mysqli_query($dbconnection, $insertIncidentQuery)) {
            die('Error: ' . mysqli_error($dbconnection));
        }

        // Check if the user entered owner information
        if ($_POST['hasOwner'] == 'Yes') {
            $ownerName = $_POST['ownerName'];
            $ownerPhone = $_POST['phone'];
            $ownerAddress = $_POST['address'];
            $ownerCity = $_POST['city'];
            $ownerState = $_POST['state'];
            $ownerZip = $_POST['zip'];

            if (!preg_match($alpha_w_space, $ownerName)) {
                echo "<script>
                window.alert('Name can only contain alphabetical characters!');
                history.back(1);
            </script>";
                exit;
            }
            if (!preg_match($phone, $ownerPhone)) {
                echo "<script>
                window.alert('Phone can only contain up to 10 numerical values!');
                history.back(1);
            </script>";
                exit;
            }
            if (!preg_match($address_regex, $ownerAddress)) {
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
            if (!preg_match($alpha, $ownerCity)) {
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
            if (!preg_match($alpha, $ownerState)) {
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

            // Insert owner information into the owner table
            $insertOwnerQuery = "INSERT INTO owner (name, phone, address, city, state, zip) VALUES ('$ownerName', '$ownerPhone', '$ownerAddress', '$ownerCity', '$ownerState', '$ownerZip')";
            if (!mysqli_query($dbconnection, $insertOwnerQuery)) {
                die('Error: ' . mysqli_error($dbconnection));
            }
            echo $insertOwnerQuery;

            // Get the ID of the newly inserted owner
            $ownerId = mysqli_insert_id($dbconnection);



            // Redirect to the success page
            header('Location: reports.php');
        } else {

            header('Location: reports.php');
        }
    } else {
        echo "<script>
                window.alert('Input is required!');
                history.back(1);
                </script>";
        exit;
    }
}
?>