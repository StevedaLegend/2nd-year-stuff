<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="COntent-Type" content="text/html; charset=UTF-8">
</head>
<style>
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

<title>Delete a Supplier</title>
<link rel="icon" href="https://www.Equipment_Hire.com/FileMaintenceMenu">


<head>
    <link rel="stylesheet" href="DeleteaSupplier.css">
</head>



<a class="nav brannd" href="https://www.Equipment_Hire.com">

    <img1 src="Images/lightblue.png" alt="banner">
        <img src="Images/logo.png" alt="equipmenthirelogo">
</a>


<header style="background-image: url(Images/lightblue.png); background-size: cover; width: 100%; height: 40px;">
    <nav>
        <ul style="display: flex; justify-content: space-between;">
            <li><a href="index.html">Home</a></li>
            <li><a href="About.html" style="background-image: url('Images/logo1.png');">Hiring of Equipment </a></li>
            <li><a href="Art/ART.html">Return Of Equipment</a></li>
            <li><a href="pages/about.html">Make a Payment</a></li>
            <li><a href="pages/about.html">Stock Control Menu</a></li>
            <li><a href="File Maintence Menu.html">File Maintence Menu</a></li>
            <li><a href="Report.html">Reports Menu</a></li>
            <li><a href="pages/about.html">Quit</a></li>
        </ul>
    </nav>
</header>

<div id="Box" style="float: center; position: relative; left: 2%" user_playlist_navigator class="outer-box1">
    <div id="playnav-channel-header" class="inner-box-bg-color"
        style="padding-top: 2px;padding-left: 2px;padding-bottom: 3px;padding-right: 2px;">
        <div id="playnav-title-bar">
            <div id="playnav-channel-name">
                <div class="channel-thumb-holder outer-box-color-as-border-color">
                    <div class="user-thumb-semismall ">

                    </div>
                </div>
                <div class="title-container">
                    <div class="title outer-box-color" id="channel_title" dir="ltr">Delete a Supplier</div>
                </div>
            </div>
        </div>
        <div id="playnav-navbar">
            <table>
                <tbody>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>

   

<h1> Delete a Supplier</h1>
<h4> Please select a supplier and then click the delete button</h4>

<?php include 'listbox.php'; ?>

<script>

function populate()
{
var sel = document.getElementById("listbox");
var result;
result = sel.options[sel.selectedIndex].value;
var personDetails = result.split(',');
document.getElementById("display").innerHTML = "The details of the seleted Suppliers are:  " + result;
document.getElementById("deltradingname").value = personDetails[0];
document.getElementById("delstreet").value = personDetails[1];
document.getElementById("deltown").value = personDetails[2];
document.getElementById("delcountry").value = personDetails[3];
document.getElementById("delphonenumber").value = personDetails[4];
document.getElementById("delemailaddress").value = personDetails[5];
document.getElementById("delwebaddress").value = personDetails[6];
}
function confirmCheck()
{
var response;
response = confirm('Are you sure you want to delete this person?');
if(response)
{
document.getElementById("display").disabled = false;
document.getElementById("deltradingname").disabled = false;
document.getElementById("delstreet").disabled = false;
document.getElementById("deltown").disabled = false;
document.getElementById("delcountry").disabled = false;
document.getElementById("delphonenumber").disabled = false;
document.getElementById("delemailaddress").disabled = false;
document.getElementById("delwebaddress").disabled = false;
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
<form name="deleteForm" action="DeleteaSupplier.php" onsubmit="return confirmCheck()" method="post">


<label for="deltradingname">Trading Name</label>
<input type="text" name = "deltradingname" id = "deltradingname" disabled>
<label for="delstreet">Street</label>
<input type="text" name = "delstreet" id = "delstreet" disabled>
<label for="deltown">Town</label>
<input type="text" name = "deltown" id = "deltown"disabled>
<label for="delcountry">Country</label>
<input type="text" name = "delcountry" id = "delcountry" disabled>
<label for="delphonenumber">Phone Number</label>
<input type="text" name = "delphonenumber" id = "delphonenumber" disabled>
<label for="delemailaddress">Email Address</label>
<input type="text" name = "delemailaddress" id = "delemailaddress" disabled>
<label for="delwebaddress">Web address</label>
<input type="text" name = "delwebaddress" id = "delwebaddress" disabled>
<br><br>
<input type="submit" value ="Delete the record">

<?php 
if(ISSET($_SESSION["deltradingname"])) {
session_destroy();
}
?>
    </div>
</div>

</div>
</div>
</html>