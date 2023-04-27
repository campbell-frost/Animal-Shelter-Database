<?php
	session_start();
	include("accountType.php");
?>
<html>
<head>
<body>
	<h1>Fees Receipt</h1>
	<!-- Field indicating whether animal has an owner which is entered in a textbox -->
    <label>What is the charges for?</label>
    <select name="hasCharges" id="hasCharges" onchange="showOptions()">
        <option value=""></option>
        <option value="Recovery Fees">Recovery Fees</option>
        <option value="Adoption Fees">Adoption Fees</option>
    </select><br>
	<div id="recoveryInfo" style="display:none">
	<label>Recovery Fees</label>
	<label for="dogOrCat">Dog or Cat: $25</label>
	<input type="text" id="dogOrCat" name="dogOrCat" placeholder="Enter value here"><br>
	<label for="noRabiesProof">No Rabies Proof: add $10</label>
	<input type="text" id="noRabiesProof" name="noRabiesProof" placeholder="Enter value here"><br>
	<label for="unaltered">Unaltered: add $25</label>
	<input type="text" id="unaltered" name="unaltered" placeholder="Enter value here"><br>
	</div>
	
	<div id="adoptionInfo" style="display:none">
	<label>Adoption Fees</label>
	<label for="numAnimals">Number of Animals:</label>
	<input type="number" id="numAnimals" name="numAnimals" min="1" required>
	<p>Adoption Fee: Dog or Cat: $85 per animal(s) received. TOTAL: <span id="total"></span></p>
	</div>
    <!-- If the animal has an owner, fields for owner name, phone number, and address are shown -->
    <div id="ownerInfo">
        <label>Owner Name:</label><input type="text" name="ownerName"><br>
        <label>Phone:</label><input type="text" name="phone"><br>
        <label>Email:</label><input type="text" name="email"><br>
        <label>Address:</label><input type="text" name="address"><br>
        <label>City:</label><input type="text" name="city"><br>
        <label>State:</label><input type="text" name="state"><br>
        <label>Zip:</label><input type="text" name="zip"><br>
	</div>
</body>
</html>
<script>
 function showOptions() 
 {
        var hasCharges = document.getElementById("hasCharges");
        var recoveryInfo = document.getElementById("recoveryInfo");
        if (hasCharges.value == "Recovery Fees")
		{
            recoveryInfo.style.display = "block";
			adoptionInfo.style.display = "none";
        } 
		else if(hasCharges.value == "Adoption Fees")
		{
            adoptionInfo.style.display = "block";
			recoveryInfo.style.display = "none";
        }
		else 
		{
			recoveryInfo.style.display = "none";
			adoptionInfo.style.display = "none";
		}
}
</script>