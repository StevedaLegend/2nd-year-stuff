<html>
<head> 

<style>

	/* Body of the student html the background image no repeat so it only shows once and the resolution so it fits to screen  */
body {

	background-image: url(Background.png);
	background-repeat: no-repeat;
	background-size: 1920px 1090px;
}

/* Font family is times new roman text aglin is used to put to the center of the page with the body of the page */

body {

	margin: 0;
	padding: 0;
	font-family: 'Times New Roman', Times, serif;
	text-align: center;

}

/* The heading is also put to the center of the page along with the margin with is 20 pixels */
h1 {
	text-align: center;
	margin: 20px 0;
}

/* The label block ( the block where the student detail is meant to go) is displayed and the pixels are 20 */
label {
	display: block;
	margin-top: 20px;
}

/* The input type is a text and the width is 300 pixels and padding is 5 pixels along with the margin of the box input */
input[type="text"] {
	width: 300px;
	padding: 5px;
	margin: 5px 0;
}

/* Buttons are displayed of each edit save and cancel buttons and the padding etc is declared along with the colours */
button {
	padding: 5px 10px;
	margin: 5px;
	background-color: #000000;
	color: white;
	border: none;
	border-radius: 3px;
	cursor: pointer;
}

/* The button is disabled until the student information is displayed and shows the colour of it being disabled until changed into a different colour when enabled*/
button:disabled {
	background-color: #ddd;
	color: #888;
	cursor: default;
}
</style>

<link rel="stylesheet"  type="text/css" href="report.css">
</head>
<body>
<?php include "menu.php";
include 'db.inc.php';
date_default_timezone_set('UTC');
?>

<form action = "PersonReport.php" method = "post" name = "reportForm">
<input type = "hidden" name = "choice"> 
</form>

<h1> Person Report </h1>
<h3> (Click on a button to view the person report)</h3>

<input type = 'button' id = "dateButton" value = 'Date Of Birth Order'
onclick = 'dateOrder()' title = 'Click here to see persons in reverse date of birth order'>
<input type = 'button' id = "nameButton" value = 'Surname Order'
onclick = 'surnameOrder()' title = 'CLick here to see Persons in alphabetical order of surname'>
<input type = 'button' id = "emailButton" value = 'Email Address Order'
onclick = 'emailOrder()' title = 'CLick here to see Persons in alphabetical order of surname'>
<br>
<br>

<script>
function dateOrder()
{
    document.reportForm.choice.value = "DOB";
    document.reportForm.submit();
}
function surnameOrder() 
{
    document.reportForm.choice.value = "Surname";
    document.reportForm.submit();    
}
function emailOrder()
{
    document.reportForm.choice.value = "Email";
    docuemnt.reportForm.submit();
}
</script>

<?php

$choice = "Surname"; // this is just in case the name hasn't been set 
if (ISSET($_POST['choice']))
{
$choice = $_POST['choice'];    
}
if  ($choice == "DOB")
{
?>    

    <script>
    document.getElementById{"dateButton"}.disabled = true;
    document.getElementById{"dateButton"}.disabled = false; 
    </script>

<?php
    $sql = "SELECT * FROM persons WHERE DeletedFlag = false ORDER BY DOB DESC";
    produceReport($con,$sql);
}
else  // id ($choice == "Surname") or the default display before any button is clicked 
{
?>
    <script>
    document.getElementById{"nameButton"}.disabled = true; 
    document.getElementById{"dateButton"}.disabled = false;
    </script>
<?php
    $sql = "SELECT * FROM persons WHERE DeletedFlag = false ORDER BY lastName";
    produceReport($con,$sql);
}
function produceReport($con,$sql)
{

        $result = mysqli_query($con,$sql);
        

        echo "<table>
                <tr><th>Surname</th><th>First Name</th><th>Date of Birth</th><th>Email address</th></tr>";
        
        while  ($row=mysqli_fetch_array($result))

        {

                $date = date_create($row['DOB']);
                $FDate = date_format($date,"d/m/Y");


                echo    "<td>".$row['lastName']."</td>
                        <td>".$row['firstName']."</td>
                        <td>".$row['emailaddress']."</td>
                        <td>". $FDate."</td>
                        </tr>";
        }
        echo "<table>";
}


mysqli_close($con);
?>
</body>
</html>