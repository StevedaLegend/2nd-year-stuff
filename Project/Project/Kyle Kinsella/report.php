<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Report</title>
    <link rel="stylesheet" href="personReport.css"/>
</head>
<body>

<?php include 'db.inc.php';
date_default_timezone_set('UTC');

?>

<h1>Customer Report</h1>

<?php

$sql = "SELECT * FROM Customer";
produceReport($con, $sql);




function produceReport($con, $sql) {
    
    $result = mysqli_query($con, $sql);

    echo "<table><tr><th>CustomerId</th><th>Surname</th><th>FirstName</th><th>Address</th><th>PhoneNumber</th><th>AccountBalance</th><th>CreditLimit</th><th>DeletedFlag</th></tr>";

    while($row = mysqli_fetch_array($result)) {
      

        echo "<td>" . $row['CustomerId'] . "</td>";

        echo "<td>" . $row['Surname'] . "</td>";

        echo "<td>" . $row['FirstName'] . "</td>";

        echo "<td>" . $row['Address'] . "</td>";

        echo "<td>" . $row['PhoneNumber'] . "</td>";

        echo "<td>" . $row['AccountBalance'] . "</td>";

        echo "<td>" . $row['CreditLimit'] . "</td>";

        echo "<td>" . $row['DeletedFlag'] . "</td>";

        echo "</tr>";
    }

    echo "</table>";
}

mysqli_close($con);

?>
</body>
</html>