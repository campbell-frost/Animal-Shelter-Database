<?php
	include("navbar.php");
?>
    <h1>Animal Shelter Reports</h1>
    <?php
    // Connect to the database
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "animalshelter";
    $dbconnection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    if (!$dbconnection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch incident reports from the incidentreport table
    $incidentReports = "SELECT * FROM incidentreport";
    $incidentResult = mysqli_query($dbconnection, $incidentReports);

    // Fetch adopted or reclaimed dispositions from the disposition table
    $adoptedOrReclaimedDispositions = "SELECT * FROM disposition WHERE exit_reason IN ('adopted', 'reclaimed')";
    $adoptedOrReclaimedResult = mysqli_query($dbconnection, $adoptedOrReclaimedDispositions);

    // Fetch euthanized dispositions from the disposition table
    $euthanizedDispositions = "SELECT * FROM disposition WHERE exit_reason = 'euthanized'";
    $euthanizedResult = mysqli_query($dbconnection, $euthanizedDispositions);

    // Fetch auctioned dispositions from the disposition table
    $auctionedDispositions = "SELECT * FROM disposition WHERE exit_reason = 'auction'";
    $auctionedResult = mysqli_query($dbconnection, $auctionedDispositions);

    // Check if the query was successful
    if (!$incidentResult || !$adoptedOrReclaimedResult || !$euthanizedResult || !$auctionedResult) {
        die("Query failed: " . mysqli_error($dbconnection));
    }

    if (mysqli_num_rows($incidentResult) > 0) {
		$row = mysqli_fetch_assoc($incidentResult);
	
		// Output the incident reports in an HTML table
		echo "<h2>Incident Reports</h2>";
		echo "<table>";
		echo "<tr><th>Badge Number</th><th>Intake Number</th><th>Date</th><th>Time</th><th>Weather</th><th>Type</th><th>Sex</th><th>Color</th><th>Owner</th><th>Phone</th><th>Address</th><th>City</th><th>State</th><th>Zipcode</th><th>Description</th></tr>";
		while($row = mysqli_fetch_assoc($incidentResult)) {
			echo "<tr>";
			echo "<td>" . $row["badgeNumber"] . "</td>";
			echo "<td>" . $row["intakeNumber"] . "</td>";
			echo "<td>" . $row["date"] . "</td>";
			echo "<td>" . $row["time"] . "</td>";
			echo "<td>" . $row["weather"] . "</td>";
			echo "<td>" . $row["type"] . "</td>";
			echo "<td>" . $row["sex"] . "</td>";
			echo "<td>" . $row["color"] . "</td>";
			echo "<td>" . $row["owner"] . "</td>";
			echo "<td>" . $row["phone"] . "</td>";
			echo "<td>" . $row["address"] . "</td>";
			echo "<td>" . $row["city"] . "</td>";
			echo "<td>" . $row["state"] . "</td>";
			echo "<td>" . $row["zipcode"] . "</td>";
			echo "<td>" . $row["description"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "No incident reports found.";
	}
	if (mysqli_num_rows($adoptedOrReclaimedResult) > 0) {
		$row = mysqli_fetch_assoc($adoptedOrReclaimedResult);
	
		// Output the incident reports in an HTML table
		echo "<h2>Adopted or Reclaimed Animals</h2>";
		echo "<table>";
		echo "<tr><th>Name</th><th>Date</th><th>Address</th><th>City</th><th>State</th><th>Zipcode</th><th>Phone</th><th>Email</th><th>Exit Reason</th></tr>";
		while($row = mysqli_fetch_assoc($adoptedOrReclaimedResult)) {
			echo "<tr>";
			echo "<td>" . $row["name"] . "</td>";
			echo "<td>" . $row["date"] . "</td>";
			echo "<td>" . $row["address"] . "</td>";
			echo "<td>" . $row["city"] . "</td>";
			echo "<td>" . $row["state"] . "</td>";
			echo "<td>" . $row["zip"] . "</td>";
			echo "<td>" . $row["phone"] . "</td>";
			echo "<td>" . $row["email"] . "</td>";
			echo "<td>" . $row["exit_reason"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "No adopt or reclaimed record found.";
	}
	if (mysqli_num_rows($euthanizedResult) > 0) {
		// Output the euthanized animals in an HTML table
		echo "<h2>Euthanized Animals</h2>";
		echo "<table>";
		echo "<tr><th>Name</th><th>Date</th><th>Reason</th></tr>";
		while ($row = mysqli_fetch_assoc($euthanizedResult)) {
			echo "<tr>";
			echo "<td>" . $row["name"] . "</td>";
			echo "<td>" . $row["date"] . "</td>";	
			echo "<td>" . $row["address"] . "</td>";
			echo "<td>" . $row["city"] . "</td>";
			echo "<td>" . $row["state"] . "</td>";
			echo "<td>" . $row["zip"] . "</td>";
			echo "<td>" . $row["phone"] . "</td>";
			echo "<td>" . $row["email"] . "</td>";
			echo "<td>" . $row["exit_reason"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "No euthanization records found.";
	}
	if (mysqli_num_rows($auctionedResult) > 0) {
		$row = mysqli_fetch_assoc($adoptedOrReclaimedResult);
	
		// Output the incident reports in an HTML table
		echo "<h2>Auctioned Animals</h2>";
		echo "<table>";
		echo "<tr><th>Name</th><th>Date</th><th>Address</th><th>City</th><th>State</th><th>Zipcode</th><th>Phone</th><th>Email</th><th>Exit Reason</th></tr>";
		while($row = mysqli_fetch_assoc($auctionedResult)) {
			echo "<tr>";
			echo "<td>" . $row["name"] . "</td>";
			echo "<td>" . $row["date"] . "</td>";
			echo "<td>" . $row["address"] . "</td>";
			echo "<td>" . $row["city"] . "</td>";
			echo "<td>" . $row["state"] . "</td>";
			echo "<td>" . $row["zip"] . "</td>";
			echo "<td>" . $row["phone"] . "</td>";
			echo "<td>" . $row["email"] . "</td>";
			echo "<td>" . $row["exit_reason"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "No auction records found.";
	}