<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: create an associative array that is a cart holding items and their  prices -->

<?php

// Create the cart associative array with items and prices
$cart = array(
    'Cereal' => 5.00,
    'Coffee' => 2.50,
    'Bananas' => 3.50,
    'Onions' => 1.00,
    'Lettuce' => 2.40,
    'Tomatoes' => 3.50
);

// Print out each item and its price
foreach ($cart as $item => $price) {
    echo $item . ': $' . $price . '<br>';
}

?>