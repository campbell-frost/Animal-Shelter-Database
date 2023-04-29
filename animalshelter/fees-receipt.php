<?php
session_start();
include("accountType.php");

?>
<html>
<link rel="stylesheet" type="text/css" href="StyleSheets/fees-receipt.css?v=5">
<form action="receiptPost.php" method="post">
	<body>
		<h1>Fees Receipt</h1>
		<!-- Field indicating whether animal has an owner which is entered in a textbox -->
		<div class="container">
			<div class="recovery-container" id="recoveryInfo">
				<h2>Recovery Fees</h2><br>
				<label for="dogOrCat">Dog or Cat: $25</label>
				<input type="text" id="dogOrCat" name="dogOrCat" placeholder="Enter yes or leave blank">
				<label for="noRabiesProof">No Rabies Proof: add $10</label>
				<input type="text" id="noRabiesProof" name="noRabiesProof" placeholder="Enter yes or leave blank"><br>
				<label for="unaltered">Unaltered: add $25</label>
				<input type="text" id="unaltered" name="unaltered" placeholder="Enter yes or leave blank"><br>
				<br><label>Total Recovery Fee:</label>
				<input type="text" id="totalRecoveryFee" name="totalRecoveryFee"><br>
				<button type="button" class="total-button" onclick="calculateTotalRecovery()">Calculate Total</button>
				<button type="submit" name="submitTotalRecovery" class="total-button">Submit Total</button>

			</div>
			<div class="adoption-container" id="adoptionInfo">
				<h2>Adoption Fees</h2><br>
				<label for="numAnimals">Number of Animals:</label>
				<input type="number" id="numAnimals" min=0 name="numAnimals">
				<p>Adoption Fee: Dog or Cat: $85 per animal(s) received. </p>
				<label>Total Adoption Fee:</label>
				<input type="text" id="totalAdoptionFee" name="totalAdoptionFee"><br><br>
				<button type="submit" class="submitAdopted" name="submitTotalAdopted">Submit Total</button>
			</div>
			<!-- If the animal has an owner, fields for owner name, phone number, and address are shown -->
			<div class="owner-container" id="ownerInfo">
				<h2> Owner Information </h2>
				<label>Owner Name:</label><input type="text" name="name"><br>
				<label>Phone:</label><input type="text" name="phone"><br>
				<label>Address:</label><input type="text" name="address"><br>
				<label>City:</label><input type="text" name="city"><br>
				<label>State:</label><input type="text" name="state"><br>
				<label>Zip:</label><input type="text" name="zip"><br>
			</div>
		</div>
<script>
	const ADOPTION_FEE = 85; // per animal

	// function to calculate total Recovery fee
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
		document.getElementById("totalRecoveryFee").value = totalFee;
	}
	//function to calculate total Adoption Fee
	function calculateTotalAdopted() {
		const numAnimals = document.getElementById("numAnimals").value;
		const baseFee = 85;
		const totalFee = baseFee * numAnimals;
		const total = "$" + totalFee;
		document.getElementById("totalAdoptionFee").value = totalFee;
	}

	document.getElementById("numAnimals").addEventListener("input", calculateTotalAdopted);
</script>