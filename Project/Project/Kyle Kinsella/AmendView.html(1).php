<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="project.css">
</head>
<body>
	<img class = "logo" src="Frog.png">
    <div class = "h1">
    <h1>Amend/view an Equipment Item</h1>
    <h4>Please select an Equipment Item and then click the amend button if you wish to update</h4>
    </div>
    <?php include 'Listbox(2).php'; ?>
    <script>
        function populate() {
            var sel = document.getElementById("Listbox(2)");
            var result = sel.options[sel.selectedIndex].value;
            var EquipmentDetails = result.split(',');
            document.getElementById("display").innerHTML = "The details of the selected Equipment Items are: " + result;
            document.getElementById("amendEquipmentId").value = EquipmentDetails[0];
            document.getElementById("amendEquipmentTypeID").value = EquipmentDetails[1];
            document.getElementById("amendDescription").value = EquipmentDetails[2];
            document.getElementById("amendTOP").value = EquipmentDetails[3];
            document.getElementById("amendCost").value = EquipmentDetails[4];
            document.getElementById("amendECondition").value = EquipmentDetails[5];
            document.getElementById("amendStatus").value = EquipmentDetails[6];
        }

        function toggleLock() {
            if (document.getElementById("amendViewbutton").value == "Amend Details") {
                document.getElementById("amendEquipmentTypeID").disabled = false;
                document.getElementById("amendDescription").disabled = false;
                document.getElementById("amendTOP").disabled = false;
                document.getElementById("amendCost").disabled = false;
                document.getElementById("amendECondition").disabled = false;
                document.getElementById("amendStatus").disabled = false;
                document.getElementById("amendViewbutton").value = "View Details";
            } else {
                document.getElementById("amendEquipmentTypeID").disabled = true;
                document.getElementById("amendDescription").disabled = true;
                document.getElementById("amendTOP").disabled = true;
                document.getElementById("amendCost").disabled = true;
                document.getElementById("amendECondition").disabled = true;
                document.getElementById("amendStatus").disabled = true;
                document.getElementById("amendViewbutton").value = "Amend Details";
            }
        }

       


function ConfirmCheck()
{
    var response;
    response = confirm('Are you sure you want to save these changes?');
    if(response)
    {
        document.getElementById("amendEquipmentId").disabled = false;
        document.getElementById("amendEquipmentTypeID").disabled = false;
        document.getElementById("amendDescription").disabled = false;
        document.getElementById("amendTOP").disabled = false;
        document.getElementById("amendCost").disabled = false;
        document.getElementById("amendECondition").disabled = false;
        document.getElementById("amendStatus").disabled = false;
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
<div class ="boxx">
<input type = "button" value = "Amend Details" id = "amendViewbutton" onclick = "toggleLock()">

<form name="myForm" action = "AmendView.php" onsubmit="return ConfirmCheck()" method="post">

<li><label for  "amendEquipmentId"> EquipmentID </label>
<input type = "number" name = "amendEquipmentId" id = "amendEquipmentId" disabled></li>

<li><label for  "amendEquipmentTypeID">EquipmentTypeID</label>
<input type = "number" name = "amendEquipmentTypeID" id = "amendEquipmentTypeID"   disabled></li>

<li><label for  "amendDescription">Description</label>
<input type = "text" name = "amendDescription" id = "amendDescription"  disabled></li>

<li><label for  "amendTOP">Time OF Purchase</label>
<input type = "date" name = "amendTOP" id = "amendTOP" title = "format is dd-mm-yyyy" disabled></li>

<li><label for  "amendCost">Cost</label>
<input type = "number" name = "amendCost" id = "amendCost" disabled></li>

<li><label for  "amendECondition"> Condition </label>
<input type = "text" name = "amendECondition" id = "amendECondition" disabled></li>

<li><label for  "amendStatus"> Status </label>
<input type = "text" name = "amendStatus" id = "amendStatus" disabled></li>

<br><br>
<li><input type = "submit" value = "Save Changes"></li>
</form>
</div>
</body>
</html>