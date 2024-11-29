<?php
include "db.inc.php";

$sql = "UPDATE Suppliers SET
				tradingname = '$_POST['amendtradingname']';
                street = '$_POST['amendstreet']',
                town = '$_POST['amendtown']',
                country = '$_POST['amendcountry']',
                phonenumber = '$_POST['amendphonenumber']',
                emailaddress = '$_POST['amendemailaddress']'
         WHERE webaddress = '$_POST['amendwebaddress']' ";

if(!mysqli_query($con,$sql))
{
    echo "Error" . mysqli_error($con);
}
else
{
    if(mysqli_affected_rows($con) != 0)
    {
        echo mysqli_affected_rows($con) . "The following record(s) have been updated <br>";
		
		
        echo "Supplier" . $_POST['amendtradingname'] . ", " . $_POST['amendstreet'] . "," . $_POST['amendtown'] . ", " . $_POST['amendcountry'] . "," . $_POST['amendphonenumber'] . "," . $_POST['amendemailaddress'] . "," . $_POST['amendwebaddress'] . " has been updated";
    }
    else
    {
            echo "No Suppiler records were changed";
    }
}

mysqli_close($con);
?>

<form action="AmendViewaSupplier.html.php" method="post">
    <input type="submit" value="Go Back">
</form>