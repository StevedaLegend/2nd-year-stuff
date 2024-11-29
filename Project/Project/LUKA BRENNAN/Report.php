<!DOCTYPE html>
<html>
<head>
	<title>Equipment Item</title>
	<link rel="stylesheet"href="project.css"> <!--CSS File-->
</head>
<body>
	<?php 
		include 'db.inc.php'; //Include Connection to the database
		date_default_timezone_set('UTC');	//Setting the default timezone to UTC
	?>
<div class ="h1"> <!--From CSS file-->
	<h1>Person Report</h1></div>

	<?php
	$sql = "SELECT * FROM EquipmentItem";	//Select everything From EquipmentItem databse.
	produceReport($con, $sql);	// calls Function produceReport
	function produceReport($con,$sql){ //Goes to the database and gets imformation
		
$result = mysqli_query($con, $sql);

			echo "<table>	//Echoing out a table that contains the following headings
					<tr><th>EquipmentId</th><th></th><th>EquipmentTypeID</th><th>Description</th><th>TimeOfPurchase</th><th>Cost</th><th>ECondition</th><th>Status</th><th>DeletedFlag</th></tr>";

    
    while ($row=mysqli_fetch_array($result))
        
        {   // set up the date for display
            $date = date_create($row['TimeOfPurchase']);
            $TimeOfPurchase = date_format($date,"d/m/Y");
            //Putting the data from the database onto the screen
            echo "<tr>
				   <td>".$row['EquipmentId']."</td>
                   <td>".$row['EquipmentTypeID']."</td>
                   <td>".$row['Description']."</td>
				   <td>".$TimeOfPurchase."</td>
				   <td>".$row['Cost']."</td>
                   <td>".$row['ECondition']."</td>
                   <td>".$row['Status']."</td>
                   <td>".$row['DeletedFlag']."</td>
                 </tr>";
        }
        echo "</table>";
}


mysqli_close($con);
?>
</body>
</html>