<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return of Equipment</title>
    <link rel="stylesheet" href="returnEquipment.css"/>
</head>
<body>
    

<!--
    Name: Kyle Kinsella
    Purpose of screen: Return equipment html form
    Student ID, name and date written: C00273146, Kyle Kinsella, 1/3/23
-->


<script>

    
    function populate() {

        // select the HTML element with the ID "returnOfEquipmentListbox"
        var sel = document.getElementById("returnOfEquipmentListbox");
        var result;

        // Get the value of the currently selected option in the select element
        result = sel.options[sel.selectedIndex].value;

        // Split the value of the selected option by commas and store the resulting array in personDetails
        var personDetails = result.split(',');

        // Set the value of the HTML element with the ID "equipmentId" to the first element of the personDetails array
        document.getElementById("equipmentId").value = personDetails[0];
        document.getElementById("EquipmentTypeId").value = personDetails[1];
        document.getElementById("Description").value = personDetails[2];
        document.getElementById("TimeOfPurchase").value = personDetails[3];    
        document.getElementById("Cost").value = personDetails[4];
        document.getElementById("ECondition").value = personDetails[5];
        document.getElementById("Status").value = personDetails[6];
    }




    function confirmCheck() {
        var message;
        var response;
        var cal;
        
        // here I am asking the user a question 
        response = confirm('Are you sure you want to return this Item?');

        if(response) {
            // if "yes" we enable the text fields for the following elements:
            document.getElementById("equipmentId").disabled = false;
            document.getElementById("EquipmentTypeId").disabled = false;
            document.getElementById("Description").disabled = false;
            document.getElementById("TimeOfPurchase").disabled = false;
            document.getElementById("Cost").disabled = false;
            document.getElementById("ECondition").disabled = false;
            document.getElementById("Status").disabled = false;
           

            // here I am getting the value stored within "Cost"
            message = document.getElementById("Cost").value;

            
            // Calculate the cost of the hire
            let cost = message >= 100 ? message : 100;
            
            // Display the cost of the hire on the screen
            alert("Thank you for returning this Item, the cost of the hire is: " + cost);
            
            // Check if any money is owing on the hire
            let owing = cost - message;
            if (owing > 0) {
                alert("You must pay a fee of 100")
                alert("You still owe: " + owing);
            } else if (owing < 0) {
                alert("You have overpaid by: " + Math.abs(owing));
            } else {
                alert("You have paid in full. Thank you!");
    }
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
<div class="returnForm">
<p id="display">    </p>
    <form name="myForm" action="deleteReturnEquipment.php" onsubmit="return confirmCheck()" method="post">
        
    <h1>Return of Equipment</h1>
   
    
    <?php include 'returnOfEquipmentListbox.php'; ?>


    <div class="equipmentId">
        <label for="equipmentId">Equipment Id</label>
        <input type="text" name="equipmentId" id="equipmentId" disabled required>
    </div>

    <div class="EquipmentTypeId">
        <label for="EquipmentTypeId">Equipment Type Id</label>
        <input type="text" name="EquipmentTypeId" id="EquipmentTypeId" disabled required>
    </div>

    <div class="Description">
        <label for="Description">Description</label>
        <input type="text" name="Description" id="Description" disabled required>
    <div>

    <div class="TimeOfPurchase">
        <label for="address">TimeOfPurchase</label>
        <input type="date" name="TimeOfPurchase" id="TimeOfPurchase" disabled required>
    <div>

    <div class="Cost">
        <label for="Cost">Cost</label>
        <input type="number" step=".01" name="Cost" id="Cost" disabled required>
    <div>

    <div class="ECondition">
        <label for="ECondition">Condition</label>
        <input type="text" name="ECondition" id="ECondition" disabled required>
    <div>

    <div class="Status">
        <label for="Status">Status</label>
        <input type="text" name="Status" id="Status" disabled required>
    <div>

    
    <br><br>

    
    <input type="submit" value="Return Equipment">



</form>

<!--This is a button, so when you press it, it brings you back to the screen called "mainPage.html"-->
<form action="mainPage.html" method="post">
    <br>
    <input type="submit" value="Return to Home Page">
</form>
</body>
</html>
