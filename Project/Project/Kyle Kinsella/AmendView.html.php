<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amend / View Customer</title>
    <link rel="stylesheet" href="AmendView.css">
</head>
<body>


<!--
    Name: Kyle Kinsella
    Purpose of screen: A html form to populate data from the Customer table and we allow the user to update most fields, but not the CustomerId !
    Student ID, name and date written: C00273146, Kyle Kinsella, 19/3/23
-->
    

<script>
    function populate() {

        // select the HTML element with the ID "listBox"
        var sel = document.getElementById("listBox");
        var result;

         // Get the value of the currently selected option in the select element
        result = sel.options[sel.selectedIndex].value;

          // Split the value of the selected option by commas and store the resulting array in personDetails
        var personDetails = result.split(',');

           // Set the value of the HTML element with the ID "equipmentId" to the first element of the personDetails array
        document.getElementById("customerId").value = personDetails[0];
        document.getElementById("surname").value = personDetails[1];
        document.getElementById("firstName").value = personDetails[2];
        document.getElementById("address").value = personDetails[3];    
        document.getElementById("phoneNum").value = personDetails[4];
        document.getElementById("accountBalance").value = personDetails[5];
        document.getElementById("creditLimit").value = personDetails[6];
    }





    function toggleLock() {
        // the if statment check to see if the value of the element with the ID "amendViewButton" is equal to "Amend Details" if it equal to "Amend Details" it does:
        if(document.getElementById("amendViewButton").value == "Amend Details") {

            //  input fields are usually enabled and can be edited by the user, but in some cases, you may want to disable the input field to prevent users from editing it
            document.getElementById("surname").disabled = false;
            document.getElementById("firstName").disabled = false;
            document.getElementById("address").disabled = false;
            document.getElementById("phoneNum").disabled = false;
            document.getElementById("accountBalance").disabled = false;
            document.getElementById("creditLimit").disabled = false;
            document.getElementById("amendViewButton").value = "View Details";
            }
            else {

                // this code can be used to set the disabled property of the input field with id "surname" to true, thus preventing the user from editing or interacting with it.
                document.getElementById("surname").disabled = true;
                document.getElementById("firstName").disabled = true;
                document.getElementById("address").disabled = true;
                document.getElementById("phoneNum").disabled = true;
                document.getElementById("accountBalance").disabled = true;
                document.getElementById("creditLimit").disabled = true;
                document.getElementById("amendViewButton").value = "View Details";
            }
    }





    function confirmCheck() {
        var response;

        // here I am asking the user a question 
        response = confirm('Are you sure you want to save these changes?');

        if(response) {
            // if "yes" we enable the text fields for the following elements:
            document.getElementById("customerId").disabled = false;
            document.getElementById("surname").disabled = false;
            document.getElementById("firstName").disabled = false;
            document.getElementById("address").disabled = false;
            document.getElementById("phoneNum").disabled = false;
            document.getElementById("accountBalance").disabled = false;
            document.getElementById("creditLimit").disabled = false;
            return true;
        }
        else {
              // if "no" we do this
            populate();
            toggleLock();
            return false;
        }
    }
</script>





<!--This is just a simple html form-->
<div class="customerForm">
    <form name="myForm" action="AmendView.php" onsubmit="return confirmCheck()" method="post">

    <h1>Amend / View a customer</h1>
    <h4>Select a customer and then click the amend button to allow the update</h4>


    <?php include 'listBox.php'; ?>

    <p id="display">    </p>
    <input type="button" value="Amend Details" id="amendViewButton" onclick="toggleLock()">



    <div class="customerId">
        <label for="customerId">Customer Id</label>
        <input type="text" name="customerId" id="customerId" disabled required>
    </div>

    <div class="surname">
        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surname" disabled required>
    </div>

    <div class="firstName">
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName" disabled required>
    <div>

    <div class="address">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" disabled required>
    <div>

    <div class="phoneNum">
        <label for="phoneNum">Phone Number</label>
        <input type="text" name="phoneNum" id="phoneNum" disabled required>
    <div>

    <div class="accountBalance">
        <label for="accountBalance">Account Balance</label>
        <input type="number" name="accountBalance" id="accountBalance" disabled required>
    <div>

    <div class="creditLimit">
        <label for="creditLimit">Credit Limit</label>
        <input type="number" name="creditLimit" id="creditLimit" disabled required>
    <div>
</div>


<br><br>

<input type="submit" value="Save Changes">


</form>


<!--This is a button, so when you press it, it brings you back to the screen called "mainPage.html"-->
<form action="mainPage.html" method="post">
    <br>
    <input type="submit" value="Return to Home Page">
</form>
</body>
</html>