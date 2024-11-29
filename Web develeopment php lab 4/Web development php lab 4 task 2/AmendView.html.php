<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="layout.css">

</style>
</head>
<body>

<h1>Amend/View a Person</h1>
<h4>Please select a person and then click the amend button if you wish to update</h4>

<?php include 'listbox.php'; ?>
<script>
function populate()
{
var sel = document.getElementById("listbox");
var result;
result = sel.options[sel.selectedIndex].value;
var personDetails = result.split(',');
document.getElementById("display").innerHTML = "The details of the selected person are: " + result;
document.getElementById("amendid").value = personDetails[0];
document.getElementById("amendidfirstname").value = personDetails[1];
document.getElementById("amendidlastname").value = personDetails[2];
document.getElementById("amendDOB").value = personDetails[3];
}
function toggleLock()
{
if (document.getElementById("amendViewbutton").value == "Amend Details")
{ 
document.getElementById("amendfirstname").disabled = false;
document.getElementById("amendlastname").disabled = false;
document.getElementById("amendDOB").disabled = false;
document.getElementById("amendViewbutton").value = "View Details";
}
else
{
document.getElementById("amendfirstname").disabled = true;
document.getElementById("amendlastname").disabled = true;
document.getElementById("amendDOB").disabled = true;
document.getElementById("amendViewbutton").value = "Amend Details";
}
}
function confirmCheck()
{
var response;
response = confirm('Are you sure you want to save these changes?');
if (response)
{   document.getElementById("amendid").disabled = false;
    document.getElementById("amendidfirstname").disabled = false;
    document.getElementById("amendidlastname").disabled = false;
    document.getElementById("amendidDOB").disabled = false;
    return true;
}
else
{
    populate();
    toggleLock();
    return false;
}
}


<p id ="display"> </p>
<input type = "button" value = "Amend Details" id = "amendViewButton" onclick = "toggleLock()">

<form name="myForm" action="AmendView.php" onsubmit="return confirmCheck()" method="post">

<label for "amendid"> Person Id </label>
<input type = "text" name = amendidid = amendid disabled>
<label for "amendfirstname"> First Name </label>
<input type = "text" name = amendfirstname = amendid disabled>
<label for "amednDOB">Date of Birth</label>
<input type = "date" name = "amendDOB" id = "amendDOB" title = "format is dd-mm-yyyy" disabled>
<br><br>
<input type = "submit" value = "Save Changes" >
</form>

</body>
<html>