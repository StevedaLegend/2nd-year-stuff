<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="project.css">
</head>
<body>
<img class = "logo" src="Frog.png">
<h1>Hiring of Equipment</h1>

    <?php include 'CustomerListbox.php'; ?>
    <script>
        function populate() {
            var sel = document.getElementById("listBox");
            var result = sel.options[sel.selectedIndex].value;
            var CustomerDetails = result.split(',');
            document.getElementById("display").innerHTML = "The details of the selected Customer are: " + result;
            document.getElementById("CustomerId").value = CustomerDetails[0];
            document.getElementById("Surname").value = CustomerDetails[1];
            document.getElementById("FirstName").value = CustomerDetails[2];
            document.getElementById("Address").value = CustomerDetails[3];
            document.getElementById("PhoneNumber").value = CustomerDetails[4];
            document.getElementById("AccountBalance").value = CustomerDetails[5];
            document.getElementById("CreditLimit").value = CustomerDetails[6];
        }
		
	
function ConfirmCheck()
{
    var response;
    response = confirm('Are you sure you want to save these changes?');
    if(response)
    {
        document.getElementById("CustomerId").disabled = false;
        document.getElementById("Surname").disabled = false;
        document.getElementById("FirstName").disabled = false;
        document.getElementById("Address").disabled = false;
        document.getElementById("PhoneNumber").disabled = false;
        document.getElementById("AccountBalance").disabled = false;
        document.getElementById("CreditLimit").disabled = false;
		return true;
    }
    else
    {
        populate();
        return false;
    }
}
</script>

<p id ="display"> </p>
<form name="myForm" action = "AmendView.php" onsubmit="return ConfirmCheck()" method="post">


</form>
</div>
</body>
</html>