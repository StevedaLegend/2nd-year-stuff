<?php   session_start();
include 'db.inc.php';

$sql = "UPDATE Suppliers SET DeletedFlag = true WHERE tradingname = '$_POST[deltradingname]'";

if (! mysqli_query($con,$sql ))
{
    echo "Error ".mysqli_error($con);
}

$_SESSION["deltradingname"] = $_POST['deltradingname'];
$_SESSION["delstreet"] = $_POST['delstreet'];
$_SESSION["deltown"] = $_POST['deltown'];
$_SESSION["delcountry"] = $_POST['delcountry'];
$_SESSION["delphonenumber"] = $_POST['delphonenumber'];
$_SESSION["delemailaddress"] = $_POST['delemailaddress'];
$_SESSION["delwebaddress"] = $_POST['delwebaddress'];

mysqli_close($con);
?>

<script>

window.location = "DeleteaSupplier.html.php"
</script>