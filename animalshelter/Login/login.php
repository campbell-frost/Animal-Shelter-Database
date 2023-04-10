
<?php
    //connect to the MySQL server and select the database
    $link = mysqli_connect("localhost", "username", "password", "database_name");
    
    //check if the connection was successful
    if (!$link) {
        die("Error: Unable to connect to MySQL." . PHP_EOL);
    }
    
    //check if the form has been submitted
    if(isset($_POST['submit'])) {
        //get the values from the form
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        //create the query to check if the username and password match any records in the table
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        
        //run the query
        $result = mysqli_query($link, $query);
        
        //check if any records were returned
        if(mysqli_num_rows($result) > 0) {
            //login was successful, redirect the user to the logged-in page
            header("Location: loggedin.php");
            exit();
        } else {
            //login was not successful, display an error message
            echo "Invalid username or password.";
        }
    }
?>
