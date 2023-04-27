<?php
	// Check for account type in session variable
	if(isset($_SESSION['accountType']))
	{
		$accountType = $_SESSION['accountType'];
		if($accountType == "ACO Officer")
		{
			// Load navigation bar for ACO Officer 
			include("acoOfficerNavBar.php");
		}
		elseif($accountType == "Administrative Assistant")
		{
			// Load navigation bar for Administrative Assistant 
			include("adminNavBar.php");
		}
		else 
		{
			// Load default navigation bar for the Shelter Director
			include("navbar.php");
		}
	}
?>