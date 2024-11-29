<!-- Task 1 php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: view the current information in the database-->
<?php

// Include the db./inc/php file
include 'db.inc.php';
date_default_timezone_set("UTC");

// Select from the persons table
$sql = "SELECT * FROM Persons WHERE personid = " . $_POST['personid'];

$result = mysqli_query($con,$sql);

$rowcount = mysqli_affected_rows($con);

// If the row count is equals to 1 then print out the details of the selected person 
if($rowcount == 1)
{echo "<br>The details of the selected person are <br> <br>";
    $row = mysqli_fetch_array($result);

    echo "The person id is :" . $_POST['personid'] . "<br> <br>";
    echo "First Name is:";
    echo $row['firstname'] . "<br>";
    echo "Last Name is:";
    echo $row['LastName'] . "<br>";

    $date=date_create($row['DOB']);
    echo "Date of Birth is :" . date_format($date, "d/m/Y");
}
    else if ($rowcount == 0)
	{echo "No matching records"; }
        mysqli_close($con);
?>

<form action = "view.html" method = "POST" >
<br>

<input type = "submit" value = "Return to select page"/>
</form>