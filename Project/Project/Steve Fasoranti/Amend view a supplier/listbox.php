<?php
include "db.inc.php";

$sql = "SELECT  tradingname, street, town, country, phonenumber, emailaddress, webaddress FROM Suppliers WHERE DeletedFlag = 0";

if(!$result = mysqli_query($con, $sql))
{
    die ('Error in querying the database' . mysqli_error($con));
}

echo "<br><select name='lisbox' id='listbox' onclick='populate()'>";

while ($row = mysqli_fetch_array($result))
{
    $name = $row['tradingname'];
    $street = $row['street'];
    $town = $row['town'];
    $country = $row['country'];
    $phone = $row['phonenumber'];
    $email = $row['emailaddress'];
    $web = $row['webaddress'];
    $allText = "$name,$street,$town,$country,$phone,$email,$web";
    echo "<option value ='$allText'> $name</option>";
}
echo "<select>";
mysqli_close($con);
?>