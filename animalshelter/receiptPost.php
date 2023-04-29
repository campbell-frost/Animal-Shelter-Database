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
//Get Owner Information Using POST Method
$ownerName = $_POST['name'];
$ownerPhone = $_POST['phone'];
$ownerAddress = $_POST['address'];
$ownerCity = $_POST['city'];
$ownerState = $_POST['state'];
$ownerZip = $_POST['zip'];

if (empty($ownerName)) {
    echo "<script>
                window.alert('Owner name is required!');
                history.back(1);
                </script>";
    exit;
} else if (!preg_match($alpha_w_space, $ownerName)) {
    echo "<script>
                window.alert('Owner name can only contain alphabetical characters!');
                history.back(1);
                </script>";
    exit;
}
if (empty($ownerPhone)) {
    echo "<script>
                window.alert('Phone number is required!');
                history.back(1);
                </script>";
    exit;
} else if (!preg_match($phone, $ownerPhone)) {
    echo "<script>
                window.alert('Phone number can only contain numerical values!');
                history.back(1);
                </script>";
    exit;
}
if (empty($ownerAddress)) {
    echo "<script>
                window.alert('Address is required!');
                history.back(1);
                </script>";
    exit;
} else if (!preg_match($address_regex, $ownerAddress)) {
    echo "<script>
                window.alert('Address can only contain alphabetical characters and numerical values!');
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
}
if (empty($ownerCity)) {
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
}
if (empty($ownerState)) {
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
}
if (empty($ownerZip)) {
    echo "<script>
                window.alert('Zipcode is required!');
                history.back(1);
              </script>";
    exit;
}


// Insert owner information into the owner table
$insertOwnerQuery = "INSERT INTO owner (name, phone, address, city, state, zip) VALUES ('$ownerName', '$ownerPhone', '$ownerAddress', '$ownerCity', '$ownerState', '$ownerZip')";
$result = mysqli_query($dbconnection, $insertOwnerQuery);

// Retrieve the newly inserted owner ID
$ownerID = mysqli_insert_id($dbconnection);

// Action that is taken when the user clicks 'submit' on the form for the animal intake page
if (isset($_POST['submitTotalRecovery'])) {
    $total = $_POST['totalRecoveryFee'];
    $insertTotalRecoveryQuery = "INSERT INTO fee (total, owner_ID) VALUES ('$total', '$ownerID')";
    $result = mysqli_query($dbconnection, $insertTotalRecoveryQuery);
    if (!$result) {
        die('Error: ' . mysqli_error($dbconnection));
    }
    echo "$result";

} else {
    $total = $_POST['totalAdoptionFee'];
    $insertTotalAdoptedQuery = "INSERT INTO fee (total, owner_ID) VALUES ('$total', '$ownerID')";
    $result = mysqli_query($dbconnection, $insertTotalAdoptedQuery);
    if (!$result) {
        die('Error: ' . mysqli_error($dbconnection));
    }
    echo "$result";
}
?>
<script>
    location.href = "reports.php";
</script>