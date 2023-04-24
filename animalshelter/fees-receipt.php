<?php
	include("navbar.php");
?>
<html>
<head>
	<title>Fees Calculator</title>
</head>
<body>
	<h1>Fees Calculator</h1>
	<form action="fees.php" method="post">
		<fieldset>
			<legend>Owner Recovery Fees:</legend>
			<label for="animal-type">Dog or Cat:</label>
			<input type="checkbox" name="animal-type[]" id="dog" value="Dog">
			<label for="dog">Dog</label>
			<input type="checkbox" name="animal-type[]" id="cat" value="Cat">
			<label for="cat">Cat</label>
			<br>
			<label for="no-rabies-proof">No Rabies Proof:</label>
			<input type="checkbox" name="no-rabies-proof" id="no-rabies-proof">
			<br>
			<label for="unaltered">Unaltered:</label>
			<input type="checkbox" name="unaltered" id="unaltered">
			<br>
			<label for="owner-total">Total:</label>
			<input type="text" name="owner-total" id="owner-total" readonly>
		</fieldset>
		<fieldset>
			<legend>Adoption Fee:</legend>
			<label for="adoption-fee">Dog or Cat:</label>
			<input type="checkbox" name="adoption-type[]" id="dog-adoption" value="Dog">
			<label for="dog-adoption">Dog</label>
			<input type="checkbox" name="adoption-type[]" id="cat-adoption" value="Cat">
			<label for="cat-adoption">Cat</label>
			<br>
			<label for="adoption-animals">Number of Animals:</label>
			<input type="number" name="adoption-animals" id="adoption-animals" min="1">
			<br>
			<label for="adoption-total">Total:</label>
			<input type="text" name="adoption-total" id="adoption-total" readonly>
		</fieldset>
		<fieldset>
			<legend>Livestock Recovery Fees:</legend>
			<label for="livestock-days">Number of Days:</label>
			<input type="number" name="livestock-days" id="livestock-days" min="1">
			<br>
			<label for="livestock-animals">Number of Animals:</label>
			<input type="number" name="livestock-animals" id="livestock-animals" min="1">
			<br>
			<label for="livestock-total">Total:</label>
			<input type="text" name="livestock-total" id="livestock-total" readonly>
			<br>
			<label for="transport-fees">Transport Fees (if any):</label>
			<input type="number" name="transport-fees" id="transport-fees" min="0">
			<br>
			<label for="total-fees">Total fees of $</label>
			<input type="text" name="total-fees" id="total-fees" readonly>
			received for:
			<br>
			<input type="checkbox" name="fee-type[]" id="recovery" value="Recovery">
			<label for="recovery">Recovery</label>
			<br>
			<label for="adoption">Adoption</label>
			<input type="checkbox" name="fee-type[]" id="adoption" value="Adoption">
		</fieldset>
		<fieldset>
			<legend>Contact Information:</legend>
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" required>
			<br>
			<label for="date">Date:</label>
			<input type="date" name="date" id="date" required>
			<br>
			<label for="address">Address:</label>
			<input type="text" name="address" id="address" required>
			<br>
			<label for="city">City:</label>
			<input type="text" name="city" id="city" required>
			<br>
			<label for="state">State:</label>
			<input type="text" name="state" id="state" maxlength="2" required>
			<br>
			<label for="zip">Zip:</label>
			<input type="text" name="zip" id="zip" required>
			<br>
			<label for="phone">Phone:</label>
			<input type="tel" name="phone" id="phone" required>
			<br>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required>
		</fieldset>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
