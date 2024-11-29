<?php
include 'db.inc.php';

date_default_timezone_get('UTC');
$dbDate = date("Y-m-d", strtotime($_POST['amendDOB'])); // to match date format in database


$sql  = "UPDATE persons SET firstname  = '$_POST[amendfirstname]',
         lastname = '$_POST[amendlastname]',
         DOB = $dbDate' WHERE personid = '$_POST[amendid]  ";


if (! mysql_query($con,$sql))
{
    echo "Error" . mysqli_error($con);
}
else
{

    if(mysql_affected_rows($con) !=0)
        {

            echo  mysql_affected_rows($con) . " record(s)  updated  <br>";
            echo "Person Id " . $_POST['amendid'].", ".$_POST['amendfirstname']
            ." ". $_POST['amendlastname']."has been updated";
        }
    else
        {
        echo "No records were changed";
        }
}
mysqli_close($con);
?>
<form action = "AmendView.html.php" method = "post">

<input type = "submit" value = "Return to Previous Screen">
</form>