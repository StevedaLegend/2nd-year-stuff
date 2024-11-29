<?php

//////////////////////////
// Name: Steve Fasoranti//
// Number: C00275756//////
// Purpose: Link the Database and populate the listbox to delete a supplier from the DeleteaSupplier.php file       
// Date: 16/03/2023


// Include the db.inc.php file
include "db.inc.php";
date_default_timezone_set('UTC');


// Select the data base names and varibles
$sql = "SELECT tradingname, street, town, country, phonenumber, emailaddress, webaddress FROM Suppliers WHERE DeletedFlag = 0";

if(!$result = mysqli_query($con, $sql))
{
    die ('Error in querying the database' . mysqli_error($con));
}

// Echos out the listbox 
echo "<br><select name='listbox' id='listbox' onclick='populate()'>";

//Fetch the array in the mysql so the data bases variables and it has to be the EXACT format else it wont work 
while ($row = mysqli_fetch_array($result))
{
    $name = $row['tradingname'];
    $street = $row['street'];
    $town = $row['town'];
    $country = $row['country'];
	$phonenumber = $row['phonenumber'];
	$emailaddress = $row['emailaddress'];
	$webaddress = $row['webaddress'];
    $allText = "$name,$street,$town,$country,$phonenumber,$emailaddress,$webaddress";
    echo "<option value='$allText'> $name</option>";
}
echo "</select>";

// Close the mysqli
mysqli_close($con);
?>



