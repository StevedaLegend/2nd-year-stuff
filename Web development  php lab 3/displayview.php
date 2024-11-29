<?php
session_start();
include 'db.inc.php';

$sql = "Select * from Persons where personid = " . $_POST['personid'];

if (!$result = mysql_query($con,$sql))
{
die ('Error in querying the database' . mysql_error($con));
}
$rowcount = mysqli_affected_rows($con);

$_SESSION['personid'] =$_POST['personid'];
id($rowcount == 1)
{

$row = mysqli_fetch_array($result);

$_SESSION['personid'] =$row['personId'];
$_SESSION['firstname'] =$row['firstname'];
$_SESSION['lastname'] =$row['lastname'];
$_SESSION['dob'] =$row['DOB'];

}

else if ($rowcount == 0)

{
unset ($_SESSION['firstname']);
unset ($_SESSION['lastname']);
unset ($_SESSION['dob']);
}
mysql_close($con);
//Go back to the callng form - with the values that we need to display in session variables, if a record was found
header ('Location: view.html.php') ;
// or alternatively use the following
//echo "<script>window.location.href= 'view.html.php'</script>'
?>