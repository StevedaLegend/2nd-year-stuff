<!DOCTYPE html>
<html>
<head>

<style>
.letter {
	background-color: #f9f9f9;
	border: 1px solid #ccc;
	padding: 20px;
	margin-bottom: 20px;
}
.letter h2 {
	margin-top: 0;
	float: right;
    margin-right: 20px;
}
.letter p {
	margin-top: 1em;
}
.letter table {
	border-collapse: collapse;
	margin-top: 1em;
	width: 100%;
}
.letter th, .letter td {
	border: 1px solid #ccc;
	padding: 5px;
	text-align: left;
}

</style>
	
<?php
include 'db.inc.php';

$description = $_POST["description"];
$brand = $_POST["brand"];
$category = $_POST["category"];
$supplier = $_POST["supplier"];
$supplierscataloguecode = $_POST["supplierscataloguecode"];
$rentalcostperday = $_POST["rentalcostperday"];
$quantityofitems = $_POST["quantityofitems"];
$quantityonhire = $_POST["quantityonhire"];

// Save the data to the database
$sql = "INSERT into ManualOrdering (description, brand, category, supplier, supplierscataloguecode, rentalcostperday, quantityofitems, quantityonhire)
VALUES ('$description', '$brand', '$category', '$supplier', '$supplierscataloguecode', '$rentalcostperday', '$quantityofitems', '$quantityonhire')";

if (!mysqli_query($con,$sql))
{
    die ("An Error in the SQL Query: " .  mysqli_error($con) );
}

$letter = "<div class='letter'>
    <h2>Equip 'R' Us</h2>
    <p>Main Street,<br>
       Carlow</p>
    <p>Date: " . date("d/m/Y") . "</p>
    <p1>" . $supplier . ",<p1><br>
	<p1>Street</p1><br>
	<p1>Town</p1><br>
	<p1>County</p1><br>
	<br><p>Order Number: Order ID 
	<br><p>Please supply the following: 
	<br><p><b>Your Catalouge code</b> <b>Equipment Type Description</b><b> Quantity </b> 
	<br><p> Supplier's catalogue code Equipment type description Quantity
	<br><p> Supplier's catalogue code Equipment type description Quantity
	<br>
	<br>
	<br>
	<br>
	<br> <p> Yours sincerely 
	<br> <p> XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
	<br> <p> Stock Controller</p>
    <table>";
mysqli_close($con);
?>
<form action="ManualOrdering.html.php" method="post">
    <br>
    <input type="submit" value="Return to the Ordering Page"/>
</form>
<div class="letter">
    <?php echo $letter; ?>
</div>
</body>
</html>