<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="test/css href="layout.css">

</head>
<body>

<h1> Amend/View a Person</h1>
<h4>Please select a person and then click the amend button if you wish to update</h4>

<?php include 'listbox.php'; ?>
<script>
    function populate()
    {
        var sel = document.getElementById("listbox");
        var result;
        result = sel.option[sel.selectedIndex].value;
        var persondetails = result.split(',')
        document.getElementById("display").innerHTTML = "The Details of the selected persons are: " + result;
        document.getEelmentByID("amendid").value - persondetails[0];
        document.getElementById("amendfirstname").value = persondetails[1];
        document.getElementById("amenlastname").value = persondetails[2];
        document.getElementById("amendDOB").value = persondetails[3];
		document.getElementById("amendemailaddress").value = persondetails[4];
		document.getElementById("amendphonenumber").value = persondetails[5];								  
    }

    function toggleLock()
    {
        if (document.getElementById("amendViewbutton").value == "Amend Details")
        {
            document.getElementByID("amendfirstname").disable = false;
            document.getElementById("amendlastname").disabled = true;
            document.getElementById("amendDOB").disabled = true;
            document.getElementById("amendemailaddress").disabled = false;
		    document.getElementById("amendphonenumber").disabled = false;
            document.getElementById("amendViewButton").value = "Amend Details";
        }
    }

    function confirmCheck()
{
var  response;
response = confirmCheck('Are you sure you want to save these changes?');
if (response)
{   document.getElementById("amendid").disabled = false;
    document.getElementById("amendfirstname").disabled = false;
    document.getElementById("amendlastname").disabled = false;
    document.getElementById("amendDOB").disabled = false;
	document.getElementById("amendemailaddress").disabled = false;
	document.getElementById("amendphonenumber").disabled = false;
    return true;

    }
else
{
    populate();
    toggleLock();
    return false;
} 
}
</script>

<p id ="display"> </p>
<input type = "button" value = "Amend Details" id = "amendViewbutton" onclick = "toggleLock()">

<form name ="myForm" action="AmendView.php" onsubmit="return confirmCheck()" method="post">

<label for "amendid"> Person ID</label>
<input type="text" name = "amendid" id ="amendid" disabled>

<label for "amenfirstname">First name</label>
<input type="text" name = "amendfirstname" id ="amendfirstname" disabled>

<label for "amendlastname"> last name</label>
<input type="text" name = "amendlastname" id ="amendlastname" disabled>

<label for "amendDOB"> Date of Birth</label>
<input type="text" name = "amendDOB" id ="amendDOB" title="The format should be dd-mm-yyyy" disabled>
<br><br>																						   
<label for "amendemailaddress">Email Address </label>
<input type="email" name="amendemailaddress" id="amendemailaddress" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required disabled>	

<label for "amendphonenumber">Phone number </label>
<input type="tel" name="amendphonenumber" id="amendphonenumber" placeholder="Example: 000-000-0000" pattern="\d{3}-\d{3}-\d{4}" required disabled>																						   
																						   
<input type = "submit" value ="save changes" >
</form>

</body>
</html>