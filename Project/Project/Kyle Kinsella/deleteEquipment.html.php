<?php session_start();
?>

<html>
<head>
<link rel="stylesheet" href="project.css">
</head>
<body>
<div class="h1">
<h1> Delete an Equipmet Item</h1>
<h4> Please Select an Equipment Item and then click the delete button </h4>
<?php include 'Listbox(2).php'; ?>

<script>

function populate()
{
    var sel = document.getElementById("Listbox(2)");
    var result;
    result = sel.options[sel.selectedIndex].value;
    var EquipmentDetails = result.split(',');
    document.getElementById("display").innerHTML = "The details of the Selected Equipment Item are: " + result;
    document.getElementById('delEquipmentId').value = EquipmentDetails[0];
    document.getElementById('delEquipmentTypeID').value = EquipmentDetails[1];
    document.getElementById('delDescription').value = EquipmentDetails[2];
    document.getElementById('delTimeOfPurchase').value = EquipmentDetails[3];
    document.getElementById('delCost').value = EquipmentDetails[4];
    document.getElementById('delECondition').value = EquipmentDetails[5];
    document.getElementById('delStatus').value = EquipmentDetails[6];

}

function confirmCheck()
{
    var response;
    response = confirm('Are you sure you want to delete this Equipment Item?');
    if(response)
    {
        document.getElementById("delEquipmentId").disabled = false;
        document.getElementById("delEquipmentTypeID").disabled = false;
        document.getElementById("delDescription").disabled = false;
        document.getElementById("delTimeOfPurchase").disabled = false;
        document.getElementById("delCost").disabled = false;
        document.getElementById("delECondition").disabled = false;
        document.getElementById("delStatus").disabled = false;
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
<div class ="boxx">
<form name="deleteForm" action = "Delete.php" onsubmit="return confirmCheck()" method="post">

<li><label for  "delEquipmentId"> EquipmentID </label>
<input type = "number" name = "delEquipmentId" id = "delEquipmentId" disabled></li>

<li><label for  "delEquipmentTypeID">EquipmentTypeID</label>
<input type = "number" name = "delEquipmentTypeID" id = "delEquipmentTypeID"   disabled></li>

<li><label for  "delDescription">Description</label>
<input type = "text" name = "delDescription" id = "delDescription"  disabled></li>

<li><label for  "delTimeOfPurchase">Time OF Purchase</label>
<input type = "date" name = "delTimeOfPurchase" id = "delTimeOfPurchase" title = "format is dd-mm-yyyy" disabled></li>

<li><label for  "delCost">Cost</label>
<input type = "number" name = "delCost" id = "delCost" disabled></li>

<li><label for  "delECondition"> Condition </label>
<input type = "text" name = "delECondition" id = "delECondition" disabled></li>

<li><label for  "delStatus"> Status </label>
<input type = "text" name = "delStatus" id = "delStatus" disabled></li>

<br><br>
<li><input type = "submit" value = "Save Changes"></li>

<?php
        if (ISSET($_SESSION['EquipmentId'])) { echo "<h1 class='myMessage'>Record deleted for Equipment type ID ". $_SESSION['EquipmentTypeID']. " ". "With Description ". $_SESSION['Description']. "</h1>";}
        session_destroy();
?>
</div>
</body>
</html>