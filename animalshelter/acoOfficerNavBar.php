<!-- This is an HTML file that contains a navbar for the Indian Lake Animal Shelter website -->
<html>
    <!-- This line links to an external stylesheet that styles the navbar -->
    <link rel="stylesheet" type="text/css" href="StyleSheets/navbar.css?v=2">
    <!-- This line sets the viewport for the webpage -->
    <meta name = "viwport" content ="width=device-width, initial-scale="1.0">  
<body>
    <!-- This div contains the banner at the top of the page -->
    <div id="banner">
        <!-- This div contains the title of the website and links to the home page -->
        <div id="title"><a href="home.php">Indian Lake Animal Shelter</a></div>
        <!-- This div contains the buttons in the navbar -->
    	<div id="buttons">
            <!-- This button links to the create account page -->
            <button id="create-account-button">Create Account</button>
            <!-- This button links to the login page -->
            <button id="login-button">Login</button>
            <!-- This button logs the user out of the website -->
            <button id="logout-button">Logout</button>
        </div>
    </div>
    <!-- This unordered list contains links to other pages on the website -->
    <ul>
        <!-- This list item links to the reports page -->
        <li><a href="reports.php">Reports</a></li> 
        <!-- This list item links to the incident report page -->
        <li><a href="incident.php">File Incident Report</a></li> 
    </ul>
</body>
<!-- This is the closing div tag for the banner div -->
</div>  
<!-- This script contains event listeners for the navbar buttons -->
<script>
    // This event listener redirects the user to the create account page when the create account button is clicked
    document.getElementById("create-account-button").addEventListener("click", function() {
        window.location.href = "createAccount.php";
    });
    // This event listener redirects the user to the login page when the login button is clicked
    document.getElementById("login-button").addEventListener("click", function() {
        window.location.href = "index.php";
    });
    // This event listener logs the user out of the website when the logout button is clicked
    document.getElementById("logout-button").addEventListener("click", function() {
        window.location.href = "logout.php";
    });
</script>