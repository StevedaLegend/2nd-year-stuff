<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Report Lab 5 Task 3</title>
    <link rel="stylesheet" href="personReport.css"/>
</head>
<body>

<?php include 'menu.php';?>
    
<?php 
include 'db.inc.php';
date_default_timezone_set('UTC');
?>

<form action="personReporttask3Assessment.php" method="post" name="reportForm">
    <input type="hidden" name="choice">
</form>

<h1>Person Report</h1>
<h3>Click a button to see the person report in the desired order</h3>

<input type="button" id="dateButton" value="Date of Birth Order" onclick="dateOrder()" title="Click here to see person in reverse date of birth order">

<input type="button" id="nameButton" value="Surname order" onclick="surnameOrder()" title="Click here to see person in alphabetical order of Surname">

<input type="button" id="emailButton" value="Email order" onclick="emailOrder()" title="Click to see emails in order">

<br>
<br>

<script>
function dateOrder() {
    document.reportForm.choice.value = "DOB";
    document.reportForm.submit();
}

function surnameOrder() {
    document.reportForm.choice.value = "Surname";
    document.reportForm.submit();
}

function emailOrder() {
    document.reportForm.choice.value = "EmailAddress";
    document.reportForm.submit();
}

</script>

<?php 
$choice = "Surname";

if(isset($_POST['choice'])) {
    $choice = $_POST['choice'];
}

if ($choice == "DOB") {
?>

<script>
document.getElementById("dateButton").disabled = true;
document.getElementById("nameButton").disabled = false;
document.getElementById("emailButton").disabled = false;
</script>

<?php 
$sql = "SELECT * FROM persons WHERE DeleteFlag = false ORDER BY DOB DESC";
produceReport($con,$sql);
}
else if ($choice == "EmailAddress") {
?>

<script>
document.getElementById("dateButton").disabled = false;
document.getElementById("nameButton").disabled = false;
document.getElementById("emailButton").disabled = true;
</script>

<?php 
$sql = "SELECT * FROM persons WHERE DeleteFlag = false ORDER BY EmailAddress ASC";
produceReport($con,$sql);
}
else {
?>

<script>
document.getElementById("dateButton").disabled = true;
document.getElementById("nameButton").disabled = false;
document.getElementById("emailButton").disabled = false;
</script>

<?php 
$sql = "SELECT * FROM persons WHERE DeleteFlag = false ORDER BY lastName ASC";
produceReport($con, $sql);
};

function produceReport($con, $sql) {    
    $result = mysqli_query($con, $sql);

    echo "<table><tr><th>Surname</th><th>First Name</th><th>Date of Birth</th><th>Email Address</th><th>Phone Number</th></tr>";

    while($row = mysqli_fetch_array($result)) {
        $date = date_create($row['DOB']);
        $fDate = date_format($date, "d/m/Y");

        echo "<tr><td>" . $row['lastName'] . "</td>";

        echo "<td>" . $row['firstName'] . "</td>";

        echo "<td>" . $fDate . "</td>";

        echo "<td>" . $row['EmailAddress'] . "</td>";

        echo "<td>" . $row['PhoneNumber'] . "</td>";
                $date = date_create($row['DOB']);
                $fDate = date_format($date, "d/m/Y");
                echo "<tr>";
                echo "<td>" . $row['lastName'] . "</td>";
                echo "<td>" . $row['firstName'] . "</td>";
                echo "<td>" . $fDate . "</td>";
                echo "<td>" . $row['PhoneNumber'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        mysqli_close($con);
    ?>
</body>
</html>
