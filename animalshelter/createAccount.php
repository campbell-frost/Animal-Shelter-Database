<link rel="stylesheet" type="text/css" href="StyleSheets/createAccount.css?v=1">
<form action='createAccountPost.php' method='post' onsubmit='return chk_frm()' name='createAccount'>

	<body>
		<div id="center-box">
			<div id="left-box">
				<div id="createAccount-box">
					<div id="shelter-name">Indian Lake Animal Shelter</div>
					<input type="text" id="username" name="username" placeholder="Username">
					<input type="password" id="password" name="password" placeholder="Password">
					<select name="accountType" id="accountType">
						<option value="" disabled selected>Account Type</option>
						<option value="Shelter Director">Shelter Director</option>
						<option value="ACO Officer">ACO Officer</option>
						<option value="Administrative Assistant">Administrative Assistant</option>
					</select>
					</select><br><br>
					<input type=submit value="Create Account">
				</div>
			</div>
			<div id="right-box">
				<img src="Images\lizard.jpg" alt="image">
			</div>
		</div>
	</body>
</form>
<script>
	function chk_frm() {
		if (document.join.user_id.value) {
			window.alert("ENTER THE USER_ID.");
			document.join.user_id.focus();
			return false;
		}

		if (document.join.password.value) {
			window.alert("ENTER THE PASSWORD.");
			document.join.password.focus();
			return false;
		}
	}
	return true;

</script>