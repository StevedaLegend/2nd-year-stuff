<?php

// Connect to database
$conn = new mysqli('localhost', 'username', 'password', 'database');

// Retrieve persons with selected order
if (isset($_GET['order'])) {
  $order = $_GET['order'];
  $sql = "SELECT surname, first_name, date_of_birth, email_address, phone_number FROM persons WHERE deletedFlag = 0 ORDER BY $order";
  $result = $conn->query($sql);
  $rows = array();
  while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
  }
  echo json_encode($rows);
}

// Close database connection
$conn->close();

?>
