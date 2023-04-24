<html>

<head>
  <title>Indian Lake Animal Shelter</title>
  <link rel="stylesheet" type="text/css" href="StyleSheets/login.css?v=1">
</head>

<body>
  <div id="center-box">
    <div id="left-box">
      <div id="login-box">
        <div id="shelter-name">Indian Lake Animal Shelter</div>
        <form action='loginpost.php' method='POST'>
          <input type="text" id="username" name="username" placeholder="Username">
          <input type="password" id="password" name="password" placeholder="Password">
          <select name="accountType" id="accountType">
            <option value="" disabled selected>Account Type</option>
            <option value="Shelter Director">Shelter Director</option>
            <option value="ACO Officer">ACO Officer</option>
            <option value="Shelter Personnel">Shelter Personnel</option>
          </select>

          </select><br>
          <input type="submit" value="Login">
        </form>
        
        <button onclick="location.href='createAccount.php'">Create Account</button>
      </div>
    </div>
    <div id="right-box">
      <img src="Images\champ.jpg" alt="image">
    </div>
  </div>
</body>

</html>