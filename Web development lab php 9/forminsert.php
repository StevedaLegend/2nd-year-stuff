<!-- Form Insert FILTER_SANITIZE FILTERVALIDATE php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Using an html form allow the user to enter details for the name, email address and ip address for a member.
All three fields are required.
In addition to any validation done on the client side (HTML or Javascript), the following need to be done on the server side (in PHP) before inserting a new record with these details into the table.
Sanitize and validate the string for the name (ensure that the string is not empty, before and after sanitizing).
  Use filter_var with FILTER_SANITIZE_STRING
Sanitize and validate the email address
  Use filter_var with FILTER_SANITIZE_EMAIL and FILTER_VALIDATE_EMAIL
Validate the ip address
  Use filter_var with FILTER_VALIDATE_IP
-->
<?php

include 'db.inc.php';

$errors = array();

// an if statement to declare the varibles and if its empty 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['MemberName'];
  $email = $_POST['EmailAddress'];
  $ip = $_POST['IpAddress'];

  // If the name is empty then the error array is printed and You are asked that a name is required else it allows the user to pass 
  if (empty($name)) {
    $errors[] = 'Name is required.';
  } else {
    $name = htmlspecialchars($name);
  }

  // If the email is empty then the error array is printed and You are asked that a email is required else it allows the user to pass
  if (empty($email)) {
    $errors[] = 'Email is required.';
  } else {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'Invalid email format.';
    }
  }

  if (empty($ip)) {
    $errors[] = 'IP address is required.';
  } else {
    $ip = filter_var($ip, FILTER_VALIDATE_IP);
    if (!$ip) {
      $errors[] = 'Invalid IP address format eg.. 123.123.123.123.';
    }
  }

  if (empty($errors)) {

    // Insert into the member table 
    $sql = "INSERT INTO member (MemberName, EmailAddress, IpAddress) VALUES ('$name', '$email', '$ip')";

    if (!mysqli_query($con, $sql)) {
      die("An Error in the SQL Query " . mysqli_error($con));
    }

    echo "A record has been added to the member information.";
  }
}

mysqli_close($con);

?>

<?php if (!empty($errors)): ?>
  <ul>
    <?php foreach ($errors as $error): ?>
      <li>
        <?php echo $error ?>
      </li>
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