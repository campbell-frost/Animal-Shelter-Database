<?php
session_start();
//include("accountType.php");
?>
<html>

<head>
</head>

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
		<button type="button" onclick="calculateTotalRecovery()">Calculate Total</button>
		<button type="submit" name="submitTotal">Submit Total</button>
		<label>Total Recovery Fee:</label>
		<input type="text" id="totalRecoveryFee" name="totalRecoveryFee" readonly>
	</div>


	<div id="adoptionInfo" style="display:none">
		<label>Adoption Fees</label>
		<label for="numAnimals">Number of Animals:</label>
		<input type="number" id="numAnimals" name="numAnimals" min="1" required>
		<p>Adoption Fee: Dog or Cat: $85 per animal(s) received. TOTAL: <span id="total"></span></p>
		<button type="button" onclick="calculateTotalAdopted()">Calculate Total</button>
		<button type="submit" name="submitTotal">Submit Total</button>
		<label for="total">Total: $</label>
		<input type="text" id="total" name="total" readonly>
		<label>Total Adoption Fee:</label>
		<input type="text" id="totalAdoptionFee" name="totalAdoptionFee" readonly>
	

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
	<script>

		function showOptions() {
			var hasCharges = document.getElementById("hasCharges");
			var recoveryInfo = document.getElementById("recoveryInfo");
			if (hasCharges.value == "Recovery Fees") {
				recoveryInfo.style.display = "block";
				adoptionInfo.style.display = "none";
			}
			else if (hasCharges.value == "Adoption Fees") {
				adoptionInfo.style.display = "block";
				recoveryInfo.style.display = "none";
			}
			else {
				recoveryInfo.style.display = "none";
				adoptionInfo.style.display = "none";
			}
		}
		const ADOPTION_FEE = 85; // per animal

		// function to calculate total adoption fee
		function calculateTotalRecovery() {
			const dogOrCat = document.getElementById("dogOrCat").value.trim();
			const noRabiesProof = document.getElementById("noRabiesProof").value.trim();
			const unaltered = document.getElementById("unaltered").value.trim();
			let totalFee = 0;

			if (dogOrCat !== "") {
				totalFee += 25;
			}

			if (noRabiesProof !== "") {
				totalFee += 10;
			}

			if (unaltered !== "") {
				totalFee += 25;
			}

			const total = "$" + totalFee;
			document.getElementById("totalRecoveryFee").value = total;
		}

		function calculateTotalAdopted() {
			const numAnimals = document.getElementById("numAnimals").value;
			const baseFee = 85;
			const totalFee = baseFee * numAnimals;
			const total = "$" + totalFee;
			document.getElementById("totalAdoptionFee").value = total;
		}

		document.getElementById("numAnimals").addEventListener("input", calculateTotalAdopted);

	</script>