<! DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="DeleteEquipment.css">
</head>
<body>

<?php
include 'db.inc.php';
date_default_timezone_set('UTC');
?>

<form action = "DeleteEquipment.php" method = "post" name="DeleteEquipmentItem">
    <input type = "hidden" name = "choice">
</form>

<h1> Delete an Equipment item</h1>
<h3>Click the button to see the </h3>
<input type = 'button' id = 
