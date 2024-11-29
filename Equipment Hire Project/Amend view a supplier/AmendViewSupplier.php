<?php
include "db.incSET.php";

date_default_timezone_set('UTC');

$sql = "UPDATE Suppliers SET
                TradingName = '".$_POST['amendtradingname']."',
                Street = '".$_POST['amendstreet']."',
                Town = '".$_POST['amendtown']."',
                Country = '".$_POST['amendcountry']."',
                PhoneNumber = '".$_POST['amendphonenumber']."',
                EmailAddress = '".$_POST['amendemailaddress']."'
            WHERE WebAddress = '".$_POST['amendwebaddress']."'";


if(!mysqli_query($con,$sql))
{
    echo "Error" . mysqli_error($con);
}
else
{
    if(mysqli_affected_rows($con) != 0)
    {
        echo mysqli_affected_rows($con) . "The following record(s) have been updated <br>";
        echo "Supplier ID " . $_POST['amendtradingname'] . ", " . $_POST['amendstreet'] . "," . $_POST['amendtown'] . ", " . $_POST['amendcountry'] . "," . $_POST['amendphonenumber'] . "," . $_POST['amendemailaddress'] . "," . $_POST['amendwebaddress'] . " has been updated";
    }
    else
    {
            echo "No Suppiler records were changed";
    }
}

mysqli_close($con);
?>

<form action="amendViewaSupplier.html.php" method="post">
    <input type="submit" value="Go Back">
</form>