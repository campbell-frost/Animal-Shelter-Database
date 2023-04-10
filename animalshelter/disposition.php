<?php
	include("navbar.php");
?>
<link rel="stylesheet" type="text/css" href="animal-intake/styles.css?v=2">
<form action='dispositionPost.php' method='post'>
<label>Exit Reason:<label>
<select name="exit_reason">
            <option value=""></option>
			<option value="adopted">Adopted by (give contact below)</option>
            <option value="reclaimed">Reclaimed by Owner (within 30 days, give contact below</option>
			<option value="auction">Auction (give auction location below)
			<option value="euthanized">Euthanized (give vet below)</label>
        </select><br>
<br>
Contact Information for exit reason above
<br><label>Name:</label><input type="name" name="name"><br>
<label>Date:</label><input type="date" name="date"><br>
<label>Address:</label><input type="address" name="address"><br>
<label>City:</label><input type="city" name="city"><br>
<label>State:</label><input type="state" name="state"><br>
<label>Zipcode:</label><input type="text" name="zip"><br>
<label>Phone:</label><input type="phone" name="phone"><br>
<label>Email:</label><input type="email" name="email"><br>
<button type="submit" name="submit">Submit</button>
</form>
