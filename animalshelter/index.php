<html>
<head>
  <title>Indian Lake Animal Shelter</title>
  <link rel="stylesheet" type="text/css" href="StyleSheets/login.css">
</head>
<body>
  <div id="center-box">
    <div id="left-box">
      <div id="login-box">
        <div id="shelter-name">Indian Lake Animal Shelter</div>
        <form action='loginpost.php' method='POST'>
          <input type="text" id="username" name="username" placeholder="Username">
          <input type="password" id="password" name="password" placeholder="Password">
		  <label> Account Type: </label>
		  <select name="accountType" id="accountType" name="accountType" placeholder="AccountType">
            <option value=""></option>
            <option value="Shelter Director">Shelter Director</option>
            <option value="ACO Officer">ACO Officer</option>
			<option value="Shelter Personnel">Shelter Personnel</option>
        </select><br>
          <input type="submit" value="Login">
        </form>
		<br>
        <button onclick="location.href='createAccount.php'">Create Account</button>
      </div>
    </div>
    <div id="right-box">
      <img src="Images\champ.jpg" alt="image">
    </div>
  </div>
</body>
</html>
