<?php session_start();
?>


<html>
<body>


<?php 
        include 'menu.php';
?>
<h1> Delete a Person</h1>
<h4> Please select a person and then click the delete button</h4>

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
<?php include 'listbox.php'; ?>

<script>

function populate()
{
var sel = document.getElementById("listbox");
var result;
result = sel.options[sel.selectedIndex].value;
var personDetails = result.split(',');
document.getElementById("display").innerHTML = "The details of the seleted person are:  " + result;
document.getElementById("delid").value = personDetails[0];
document.getElementById("delfirstname").value = personDetails[1];
document.getElementById("dellastname").value = personDetails[2];
document.getElementById("delDOB").value = personDetails[3];
}
function confirmCheck()
{
var response;
response = confirm('Are you sure you want to delete this person?');
if(response)
{
    document.getElementById("display").disabled = false;
    document.getElementById("delfirstname").disabled = false;
    document.getElementById("dellastname").disabled = false;
    document.getElementById("delDOB").disabled = false;
    return true;
}
else
{
    populate();
    return false; 
}
}
</script>

<p id = "display"> </p>
<form name="deleteForm" action="delete.php" onsubmit="return confirmCheck()" method="post">


<label for="delid"> Person Id </label>
<input type="text" name = "delid" id = "delid" disabled>
<label for="delfirstname">First name</label>
<input type="text" name = "delfirstname" id = "delfirstname" disabled>
<label for="delfirstname">Last name</label>
<input type="text" name = "dellastname" id = "dellastname" disabled>
<label for="delfirstname">Date of Birth</label>
<input type="text" name = "delDOB" id = "delDOB" title="format is dd-mm-yyyy" disabled>
<br><br>
<input type="submit" value ="Delete the record">

<?php 
        if(ISSET($_SESSION["personid"])) {echo "<h1 class='myMessage'>Recording deleted for".
        $_SESSION["firstname"] . " " .$_SESSION["lastname"]."</h1>";}
        session_destroy();
?>
</body>
</html>