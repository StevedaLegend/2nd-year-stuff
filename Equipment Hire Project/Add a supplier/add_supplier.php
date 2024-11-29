<?php
include 'db.inc.php';
date_default_timezone_set('UTC');
echo "The details set down are: <br>";

echo "Trading Name is :" . $_POST['tradingname'] . "<br>";
echo "The Street is:" . $_POST['street'] . "<br>";
echo "The town is:" . $_POST['town'] . "<br>";
echo "The country is:" . $_POST['country'];
echo "The Phone Number is:" . $_POST['phonenumber'];
echo "The Email Address is:" . $_POST['emailaddress'];
echo "The Web address is:" . $_POST['webaddress'];

$sql = "INSERT into Suppliers  (tradingname,street,town,country,phonenumber,emailaddress,webaddress) VALUES ('$_POST[tradingname]', '$_POST[street]', '$_POST[town]'$_POST[country]', '$_POST[phonenumber]', '$_POST[emailaddress]', ' $_POST[webaddress]')";

if(!mysqli_query($con,$sql))
{
    die ("An Error in the SQL Query: " . mysqli_error($con));
}
echo "<br> A record has been added for the Supplliers Info " . $_POST['tradingname']. "  " . $_POST['street']. "  " . $_POST['town']. "  " . $_POST['country']. "  " . $_POST['phonenumber']. "  " . $_POST['emailaddress']. "  " . $_POST['webaddress'] . ".";

mysqli_close($con);
?>

<form action="AddaSupplier.html" method="post">
<br>
<br>
<input type="submit" value = "Return back to the adding badge"/>
</form>
