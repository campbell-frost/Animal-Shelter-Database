<?php
// Connect to the database
$db = mysqli_connect("hostname", "username", "password", "database_name");

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Get the values from the form
    $username = mysqli_real_escape_string($db, $_POST["username"]);
    $password = mysqli_real_escape_string($db, $_POST["password"]);
    
    // Check if the user exists in the database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);
    
    // If the user exists, redirect to the dashboard
    if($user){
        session_start();
        $_SESSION["username"] = $user["username"];
        header("location: dashboard.php");
    }else{
        echo "Invalid username or password dipshit";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username">
  <label for="password">Password:</label>
  <input type="password" id="password" name="password">
  <input type="submit" value="Login">
</form>
