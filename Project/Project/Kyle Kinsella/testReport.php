<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Report</title>
    <link rel="stylesheet" href="personReport.css">
</head>
<body>

<?php
include 'db.inc.php';
date_default_timezone_set('UTC');

// Define the SQL query to retrieve customer data
$sql = "SELECT * FROM customers";

// Execute the query and fetch the results
$result = mysqli_query($con, $sql);

// Display the results in a table
if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>Customer ID</th><th>Surname</th><th>First Name</th><th>Date of Birth</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['CustomerId'] . "</td>";
        echo "<td>" . $row['Surname'] . "</td>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['DateOfBirth'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No customers found.";
}

// Close the database connection
mysqli_close($con);
?>

</body>
</html>
