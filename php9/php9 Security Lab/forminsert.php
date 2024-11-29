<!-- Form Insert php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Using an html form allow the user to enter details for the name, email address and ip address for a member.
All three fields are required.
In addition to any validation done on the client side (HTML or Javascript), the following need to be done on the server side (in PHP) before inserting a new record with these details into the table.
Sanitize and validate the string for the name (ensure that the string is not empty, before and after sanitizing).
-->

<?php

// Link to the database
include 'db.inc.php';

// Put the variable error into an array 
$errors = array();

// List the varibles for the inputs 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['MemberName'];
  $email = $_POST['EmailAddress'];
  $ip = $_POST['IpAddress'];

  // If this statement is empty then it asks for the name being required
  if (empty($name)) {
    $errors[] = 'Name is required.';
  } else {
    // Else it allows the name with special characters
    $name = htmlspecialchars($name);
  }

  // If this statement is empty then it asks for a email required
  if (empty($email)) {
    $errors[] = 'Email is required.';
    // The email is sanatized meaning it checks for any @ in the email 
  } else {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // The email is then validated meaning if there is no @gmail.com after the first part of the email it prints out an email invalid format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'Invalid email format.';
    }
  }

  // If this statement is empty then an ip address is required 
  if (empty($ip)) {
    $errors[] = 'IP address is required.';
  } else {

    // The ip address is then validated so it has to be a proper ip format like 123.123.123 else it asks for a proper id format
    $ip = filter_var($ip, FILTER_VALIDATE_IP);
    if (!$ip) {
      $errors[] = 'Invalid IP address format.';
    }
  }

  // Insert into the sql database the Name Email and Ip address
  if (empty($errors)) {
    $sql = "INSERT INTO member (MemberName, EmailAddress, IpAddress) VALUES ('$name', '$email', '$ip')";

    // If any error it prints out this message
    if (!mysqli_query($con, $sql)) {
      die ("An Error in the SQL Query " . mysqli_error($con));
    }

    // Tells the user that the record has been recorded
    echo "A record has been added to the member information.";
  }
}

mysqli_close($con);

?>

<!--So assuming the error is empty the php prints out the error foreach error is printed-->
<?php if (!empty($errors)): ?>
  <ul>
    <?php foreach ($errors as $error): ?>
      <li><?php echo $error ?></li>
    <?php endforeach ?>
  </ul>
<?php endif ?>

<body>
<head>


    <title>Member form</title>
</head>

<h2>
            <P style="color:Black">Member Form
        </h2>
<!--Using the forminsert.php it posts the information inputted by the user-->
<form action="forminsert.php" method="post">
  <p>
    <label for="MemberName">Name:</label>
    <input type="text" name="MemberName" id="MemberName">
  </p>
  <p>
    <label for="EmailAddress">Email:</label>
    <input type="email" name="EmailAddress" id="EmailAddress">
  </p>
  <p>
    <label for="IpAddress">IP Address:</label>
    <input type="text" name="IpAddress" id="IpAddress">
  </p>
  <input type="submit" value="Submit">
</form>
		</body>


