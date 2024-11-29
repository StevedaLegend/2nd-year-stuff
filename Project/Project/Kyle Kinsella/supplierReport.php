<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Report Lab 5</title>
</head>

<style>

    /* Body of the student html the background image no repeat so it only shows once and the resolution so it fits to screen  */
	
body {

    background-image: url(Background.png);
    background-repeat: no-repeat;
    background-size: 1920px 1090px;
}

/ Font family is times new roman text aglin is used to put to the center of the page with the body of the page /

body {

    margin: 0;
    padding: 0;
    font-family: 'Times New Roman', Times, serif;
    text-align: center;

}

/ The heading is also put to the center of the page along with the margin with is 20 pixels /
h1 {
    text-align: center;
    margin: 20px 0;
}

/ The label block ( the block where the student detail is meant to go) is displayed and the pixels are 20 /
label {
    display: block;
    margin-top: 20px;
}

/ The input type is a text and the width is 300 pixels and padding is 5 pixels along with the margin of the box input /
input[type="text"] {
    width: 300px;
    padding: 5px;
    margin: 5px 0;
}

/ Buttons are displayed of each edit save and cancel buttons and the padding etc is declared along with the colours /
button {
    padding: 5px 10px;
    margin: 5px;
    background-color: #000000;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

/ The button is disabled until the student information is displayed and shows the colour of it being disabled until changed into a different colour when enabled*/
button:disabled {
    background-color: #ddd;
    color: #888;
    cursor: default;
}
</style>
<body>

<?php 
include 'db.inc.php';
date_default_timezone_set('UTC');
?>


<h1>Suppliers Report</h1>



<?php 

$sql = "SELECT * FROM Suppliers";

produceReport($con,$sql);

function produceReport($con, $sql) {    
    $result = mysqli_query($con, $sql);

    echo "<table><tr><th>Trading Name</th><th>Street</th><th>Town</th><th>Country</th><th>Phone Number</th><th>Email Address</th><th>Web Address</th><th>Deleted Flag</th></tr>";

    while($row = mysqli_fetch_array($result)) {

        echo "<td>" . $row['tradingname'] . "</td>";

        echo "<td>" . $row['street'] . "</td>";

        echo "<td>" . $row['town'] . "</td>";

        echo "<td>" . $row['country'] . "</td>";
    
        echo "<td>" . $row['phonenumber'] . "</td>";
	
		echo "<td>" . $row['emailaddress'] . "</td>";

		echo "<td>" . $row['webaddress'] . "</td>";
		
		echo "<td>" . $row['DeletedFlag'] . "</td>";
		
        echo "</tr>";
            }
            echo "</table>";
        }
        mysqli_close($con);
    ?>
</body>
</html>
