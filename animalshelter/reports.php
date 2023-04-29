<?php
// connect to database
include('dbconnect.php');
session_start();
include('accountType.php');

if (!$dbconnection) {
	die("Connection failed: " . mysqli_connect_error());
}
// define SQL query for incident report
$incident_query = "SELECT * FROM `incident`";
// define SQL queries for each table
$adopted_query = "SELECT animal.animal_ID, animal.name, disposition.exitReason, owner.name AS owner_name, owner.phone, owner.address, owner.city, owner.state, owner.zip
					FROM disposition 
					JOIN animal ON disposition.animal_id = animal.animal_id 
					JOIN owner ON disposition.owner_id = owner.owner_id 
					WHERE disposition.exitReason = 'adopted' OR disposition.exitReason = 'reclaimed' 
					ORDER BY disposition.disposition_id DESC";

$euthanized_query = "SELECT animal.animal_ID, animal.name, disposition.exitReason, owner.name AS owner_name, owner.phone, owner.address, owner.city, owner.state, owner.zip
					FROM disposition 
					JOIN animal ON disposition.animal_id = animal.animal_id 
					JOIN owner ON disposition.owner_id = owner.owner_id 
					WHERE disposition.exitReason = 'euthanized' 
					ORDER BY disposition.disposition_id DESC";

$auction_query = "SELECT animal.animal_ID, animal.name, disposition.exitReason, owner.name AS owner_name, owner.phone, owner.address, owner.city, owner.state, owner.zip
					FROM disposition 
					JOIN animal ON disposition.animal_id = animal.animal_id 
					JOIN owner ON disposition.owner_id = owner.owner_id 
					WHERE disposition.exitReason = 'auction' 
					ORDER BY disposition.disposition_id DESC";

$fee_query = "SELECT fee.*, owner.name
				FROM fee
				INNER JOIN owner ON fee.owner_id = owner.owner_id";

// execute queries and store results in variables
$incident_result = mysqli_query($dbconnection, $incident_query);
$adopted_result = mysqli_query($dbconnection, $adopted_query);
$euthanized_result = mysqli_query($dbconnection, $euthanized_query);
$auction_result = mysqli_query($dbconnection, $auction_query);
$fee_result = mysqli_query($dbconnection, $fee_query);

// display tables
?>

<head>
	<link rel='stylesheet' href='StyleSheets/reports.css?v=2'>
</head>
<h1>Reports</h1>
<h2>Incident reports</h2>
<!--prints rows of results while there are still more rows -->
<?php if (mysqli_num_rows($incident_result) > 0) { ?>
	<table>
		<thead>
			<tr>
				<!-- table headers -->
				<th>Intake Number</th>
				<th>Badge Number</th>
				<th>Date</th>
				<th>Time</th>
				<th>Weather</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<!-- Fetches data from query results -->
			<?php while ($row = mysqli_fetch_assoc($incident_result)) { ?>
				<tr>
					<td>
						<?php echo $row['intakeNumber']; ?>
					</td>
					<td>
						<?php echo $row['badgeNumber']; ?>
					</td>
					<td>
						<?php echo $row['date']; ?>
					</td>
					<td>
						<?php echo $row['time']; ?>
					</td>
					<td>
						<?php echo $row['weather']; ?>
					</td>
					<td>
						<?php echo $row['description']; ?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	<?php } else { ?>
		<p>No incident reports have been filed!</p>
	<?php } ?>
</table>
<!-- Table header for adopted / reclaimed -->
<h2>Adopted / Reclaimed Animals</h2>
<!--prints rows of results while there are still more rows -->
<?php if (mysqli_num_rows($adopted_result) > 0) { ?>
	<table>
		<thead>
			<tr>
				<th>Animal ID </th>
				<th>Animal Name</th>
				<th>Exit Reason</th>
				<th>Owner Name</th>
				<th>Owner Phone</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Zip </th>
			</tr>
		</thead>
		<tbody>
			<!-- Fetches data from query results -->
			<?php while ($row = mysqli_fetch_assoc($adopted_result)) { ?>
				<tr>
					<td>
						<?php echo $row['animal_ID']; ?>
					</td>
					<td>
						<?php echo $row['name']; ?>
					</td>
					<td>
						<?php echo $row['exitReason']; ?>
					</td>
					<td>
						<?php echo $row['owner_name']; ?>
					</td>
					<td>
						<?php echo $row['phone']; ?>
					</td>
					<td>
						<?php echo $row['address']; ?>
					</td>
					<td>
						<?php echo $row['city']; ?>
					</td>
					<td>
						<?php echo $row['state']; ?>
					</td>
					<td>
						<?php echo $row['zip']; ?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	<?php } else { ?>
		<p>No animals have been adopted or reclaimed!</p>
	<?php } ?>
</table>
<h2>Euthanized Animals</h2>
<!--prints rows of results while there are still more rows -->
<?php if (mysqli_num_rows($euthanized_result) > 0) { ?>
	<table>
		<thead>
			<tr>
				<th>Animal ID</th>
				<th>Animal Name</th>
				<th>Exit Reason</th>
				<th>Owner Name</th>
				<th>Owner Phone</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Zip </th>
			</tr>
		</thead>
		<tbody>
			<!-- Fetches data from query results -->
			<?php while ($row = mysqli_fetch_assoc($euthanized_result)) { ?>
				<tr>
					<td>
						<?php echo $row['animal_ID']; ?>
					</td>
					<td>
						<?php echo $row['name']; ?>
					</td>
					<td>
						<?php echo $row['exitReason']; ?>
					</td>
					<td>
						<?php echo $row['owner_name']; ?>
					</td>
					<td>
						<?php echo $row['phone']; ?>
					</td>
					<td>
						<?php echo $row['address']; ?>
					</td>
					<td>
						<?php echo $row['city']; ?>
					</td>
					<td>
						<?php echo $row['state']; ?>
					</td>
					<td>
						<?php echo $row['zip']; ?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php } else { ?>
	<p>No animals have been euthanized!</p>
<?php } ?>
<h2>Auctioned Animals</h2>
<!--prints rows of results while there are still more rows -->
<?php if (mysqli_num_rows($auction_result) > 0) { ?>

	<table>
		<thead>
			<tr>
				<th>Animal ID</th>
				<th>Animal Name</th>
				<th>Exit Reason</th>
				<th>Owner Name</th>
				<th>Owner Phone</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Zip </th>
			</tr>
		</thead>
		<tbody>
			<!-- Fetches data from query results -->
			<?php while ($row = mysqli_fetch_assoc($auction_result)) { ?>
				<tr>
					<td>
						<?php echo $row['animal_ID']; ?>
					</td>
					<td>
						<?php echo $row['name']; ?>
					</td>
					<td>
						<?php echo $row['exitReason']; ?>
					</td>
					<td>
						<?php echo $row['owner_name']; ?>
					</td>
					<td>
						<?php echo $row['phone']; ?>
					</td>
					<td>
						<?php echo $row['address']; ?>
					</td>
					<td>
						<?php echo $row['city']; ?>
					</td>
					<td>
						<?php echo $row['state']; ?>
					</td>
					<td>
						<?php echo $row['zip']; ?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php } else { ?>
	<p>No animals have been auctioned!</p>
<?php } ?>
<h2>Fee Receipts</h2>
<!--prints rows of results while there are still more rows -->
<?php if (mysqli_num_rows($fee_result) > 0) { ?>
	<table>
		<thead>
			<tr>
				<th>Fee ID</th>
				<th>Total</th>
				<th>Owner Name</th>
			</tr>
		</thead>
		<tbody>
			<!-- Fetches data from query results -->
			<?php while ($row = mysqli_fetch_assoc($fee_result)) { ?>
				<tr>
					<td>
						<?php echo $row['fee_ID']; ?>
					</td>
					<td>
						<?php echo $row['total']; ?>
					</td>
					<td>
						<?php echo $row['name']; ?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php } else { ?>
	<p>No Fees yet!</p>
<?php } ?>