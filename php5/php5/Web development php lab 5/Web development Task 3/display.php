<!DOCTYPE html>
<html>

<body>

    <?php

    $hostname = "localhost:3306";
    $username = "C00275756";
    $password = "onidamola123";


    $dbname = "c00275756";

    $con = mysqli_connect($hostname, $username, $password, $dbname);

    if (!$con) {

        echo "Failed to connect to MYSQL:" . mysqli_connect_error();
    }

    // Select from persons table 
    $sql = "SELECT * FROM Persons";

    $result = mysqli_query($con, $sql);

    // Echo out whats in the table 
    echo "<br>The persons table conatains the following records:<br>";
    // Assciative array
    while ($row = mysqli_fetch_array($result)) {
        echo $row['personID'] . "   " . $row['firstName'] . "   " . $row['lastName'] . "<br>";
    }

    mysqli_close($con);
    ?>
</body>

</html>