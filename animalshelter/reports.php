<?php
// connect to database
include('dbconnect.php');
include('navbar.php');
if (!$dbconnection) {
	die("Connection failed: " . mysqli_connect_error());
}

// define SQL queries for each table
$adopted_query = "SELECT animal.name, disposition.exitReason, owner.name AS owner_name, owner.phone, owner.address, owner.city, owner.state, owner.zip
					FROM disposition 
					JOIN animal ON disposition.animal_id = animal.animal_id 
					JOIN owner ON disposition.owner_id = owner.owner_id 
					WHERE disposition.exitReason = 'adopted' OR disposition.exitReason = 'reclaimed' 
					ORDER BY disposition.disposition_id DESC";

$euthanized_query = "SELECT animal.name, disposition.exitReason, owner.name AS owner_name, owner.phone, owner.address, owner.city, owner.state, owner.zip
					FROM disposition 
					JOIN animal ON disposition.animal_id = animal.animal_id 
					JOIN owner ON disposition.owner_id = owner.owner_id 
					WHERE disposition.exitReason = 'euthanized' 
					ORDER BY disposition.disposition_id DESC";

$auction_query = "SELECT animal.name, disposition.exitReason, owner.name AS owner_name, owner.phone, owner.address, owner.city, owner.state, owner.zip
					FROM disposition 
					JOIN animal ON disposition.animal_id = animal.animal_id 
					JOIN owner ON disposition.owner_id = owner.owner_id 
					WHERE disposition.exitReason = 'auction' 
					ORDER BY disposition.disposition_id DESC";

// execute queries and store results in variables
$adopted_result = mysqli_query($dbconnection, $adopted_query);
$euthanized_result = mysqli_query($dbconnection, $euthanized_query);
$auction_result = mysqli_query($dbconnection, $auction_query);

// display tables
?>

<head>
	<link rel='stylesheet' href='StyleSheets/reports.css'>
</head>
<h2>Adopted / Reclaimed Animals</h2>
<table>
	<thead>
		<tr>
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
		<?php while ($row = mysqli_fetch_assoc($adopted_result)) { ?>
			<tr>
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

<h2>Euthanized Animals</h2>
<table>
	<thead>
		<tr>
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
		<?php while ($row = mysqli_fetch_assoc($euthanized_result)) { ?>
			<tr>
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
<h2>Auctioned Animals</h2>
<table>
	<thead>
		<tr>
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
		<?php while ($row = mysqli_fetch_assoc($auction_result)) { ?>
			<tr>
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