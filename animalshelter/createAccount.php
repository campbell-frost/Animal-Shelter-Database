<!-- Linking the CSS stylesheet -->
<link rel="stylesheet" type="text/css" href="StyleSheets/createAccount.css?v=1">
<!-- Create a form that will submit to the 'createAccountPost.php' file when the submit button is clicked -->
<form action='createAccountPost.php' method='post' onsubmit='return chk_frm()' name='createAccount'>

	<body>
		<div id="center-box">
			<div id="left-box">
				<div id="createAccount-box">
					<div id="shelter-name">Indian Lake Animal Shelter</div>
					<!-- Displaying the name of the animal shelter -->

					<input type="text" id="username" name="username" placeholder="Username">
					<!-- Input field to enter the username -->

					<input type="password" id="password" name="password" placeholder="Password">
					<!-- Input field to enter the password -->
					<!-- Dropdown menu to select the account type -->
					<select name="accountType" id="accountType">
						<option value="" disabled selected>Account Type</option>
						<option value="Shelter Director">Shelter Director</option>
						<option value="ACO Officer">ACO Officer</option>
						<option value="Administrative Assistant">Administrative Assistant</option>
					</select>
					</select><br><br>
					<!-- Submit button to create a new account -->
					<input type=submit value="Create Account">
				</div>
			</div>
			<div id="right-box">
				<!-- Displaying an image -->
				<img src="Images\lizard.jpg" alt="image">
			</div>
		</div>
	</body>
</form>

<script>
	// Checks whether the user_id field is empty, if so, an alert is displayed and the focus is set to the field.
	function chk_frm() {
		if (document.join.user_id.value) {
			window.alert("ENTER THE USER_ID.");
			document.join.user_id.focus();
			return false;
		}
		// Checks whether the password field is empty, if so, an alert is displayed and the focus is set to the field.
		if (document.join.password.value) {
			window.alert("ENTER THE PASSWORD.");
			document.join.password.focus();
			return false;
		}
	}
	// Returns true when the form is checked successfully.
	return true;
</script>