<?php   session_start();
        include 'menu.php'; ?><br><br>
<?php
include 'db.ibc.php';

$sql = "UPDATE Persons SET deletedflag = true WHERE personid = '$_POST[delid]'";

if (! mysqli_query($con,$sql ))
{
    echo "Error ".mysqli_error($con);
}

$_SESSION["personid"] = $_POST['delid'];
$_SESSION["firstname"] = $_POST['delfirstname'];
$_SESSION["lastname"] = $_POST['dellastname'];
$_SESSION["emailaddress"] = $_POST['emailaddress'];
$_SESSION["phonenumber"] = $_POST['phonenumber'];

mysqli_close($con);
?>

<script>

window.location = "delete.html.php"
</script>