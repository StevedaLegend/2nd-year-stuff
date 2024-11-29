<?php session_start();  // if you see this, it means I am using session variables


?>


<!--
    Name: Kyle Kinsella
    Purpose of screen: A html form to populate Customer data from the Customer database
    Student ID, name and date written: C00273146, Kyle Kinsella, 4/3/23
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Customer</title>
    <link rel="stylesheet" href="deleteCustomer.css"/>
</head>
<body>
    


<script>
    function populate() {

        // select the HTML element with the ID "deleteListbox"
        var sel = document.getElementById("deleteListbox");
        var result;

           // Get the value of the currently selected option in the select element
        result = sel.options[sel.selectedIndex].value;

        // Split the value of the selected option by commas and store the resulting array in personDetails
        var personDetails = result.split(',');

        // Set the value of the HTML element with the ID "equipmentId" to the first element of the personDetails array
        document.getElementById("deleteCustId").value = personDetails[0];
        document.getElementById("deleteSurname").value = personDetails[1];
        document.getElementById("deleteFirstName").value = personDetails[2];
        document.getElementById("deleteAddress").value = personDetails[3];    
        document.getElementById("deletePhoneNum").value = personDetails[4];
        document.getElementById("deleteAccountBalance").value = personDetails[5];
        document.getElementById("deleteCreditLimit").value = personDetails[6];
    }





    function confirmCheck() {
        var response;

        // here I am asking the user a question 
        response = confirm('Are you sure you want to delete this customer?');

        if(response) {
            // if "yes" we enable the text fields for the following elements:
            document.getElementById("deleteCustId").disabled = false;
            document.getElementById("deleteSurname").disabled = false;
            document.getElementById("deleteFirstName").disabled = false;
            document.getElementById("deleteAddress").disabled = false;
            document.getElementById("deletePhoneNum").disabled = false;
            document.getElementById("deleteAccountBalance").disabled = false;
            document.getElementById("deleteCreditLimit").disabled = false;
            return true;
        }
        else {
               // if "no" we do this
            populate();
            return false;
        }
    }
</script>


<!--This is just a simple html form-->
<div class="deleteCustForm">
    <form name="myForm" action="delete.php" onsubmit="return confirmCheck()" method="post">

    <h1>Delete a Customer</h1>
    <h4>Please select a customer and then click the delete button</h4>


<?php include 'deleteListbox.php';?>


    <p id="display">    </p>


    <div class="deleteCustId">
        <label for="deleteCustId">Customer Id</label>
        <input type="text" name="deleteCustId" id="deleteCustId" disabled required>
    </div>

    <div class="deleteSurname">
        <label for="deleteSurname">Surname</label>
        <input type="text" name="deleteSurname" id="deleteSurname" disabled required>
    </div>

    <div class="deleteFirstName">
        <label for="deleteFirstName">First Name</label>
        <input type="text" name="deleteFirstName" id="deleteFirstName" disabled required>
    </div>

    <div class="deleteAddress">
        <label for="deleteAddress">Address</label>
        <input type="text" name="deleteAddress" id="deleteAddress" disabled required>
    </div>

    <div class="deletePhoneNum">
        <label for="deletePhoneNum">Phone Number</label>
        <input type="text" name="deletePhoneNum" id="deletePhoneNum" disabled required>
    </div>

    <div class="deleteAccountBalance">
        <label for="deleteAccountBalance">Account Balance</label>
        <input type="text" name="deleteAccountBalance" id="deleteAccountBalance" disabled required>
    </div>

    <div class="deleteCreditLimit">
        <label for="deleteCreditLimit">Credit Limit</label>
        <input type="text" name="deleteCreditLimit" id="deleteCreditLimit" disabled required>
    </div>



    <br><br>

    <input type="submit" value="Delete">








<?php

// this code checks if a $_SESSION variable named customerId is set, and if so, prints a message confirming that a record has been deleted and destroys the current session. 
if(ISSET($_SESSION["customerId"])) {
    echo "<h1 class='removed'>Record deleted for " . $_SESSION["surname"] . " " . $_SESSION["firstName"] . "</h1>";
    session_destroy();
}

?>


</form>

<!--This is a button, so when you press it, it brings you back to the screen called "mainPage.html"-->
<form action="mainPage.html" method="post">
    <br>
    <input type="submit" value="Return to Home Page">
</form>

</div>
    
</body>
</html>