<!-- Change Pass  php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: To chnage your password after the user logs in -->

<?php

// Include db.inc.php file 
include 'db.inc.php';
session_start();
echo '<link rel ="stylesheet" href= "pass.css" type=text/css">';

if (isset($_SESSION['user'])) {
    if (isset($_POST['oldPass']) && isset($_POST['newPass']) && isset($_POST['confirmPass'])) {
        $old = $_POST['oldPass'];
        $new = $_POST['newPass'];
        $confirm = $_POST['confirmPass'];
        $user = $_SESSION['user'];

        // Retrieve the user's current password from the database
        $sql = "SELECT passWord FROM password WHERE loginName = '$user'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $currentPassword = $row['passWord'];

        // Make sure the users password isnt the same
        if ($new == $currentPassword) {
            buildPage($old, $new, $confirm);
            echo "<div class='errorstyle'>You cannot change your password to your current password!</div>";
        } elseif ($_POST['newPass'] != $_POST['confirmPass']) {
            buildPage($old, $new, $confirm);
            echo "<div class='errorstyle'>New passwords do not match - Please try again.</div>";
        } else {

            // Update the password in the database 
            $sql = "UPDATE password SET passWord = '$_POST[newPass]' WHERE loginName = '$user'";
            if (!mysqli_query($con, $sql)) {
                echo "Error in Update Query " . mysqli_error($con);
            } elseif (mysqli_affected_rows($con) == 0) {
                buildPage($old, $new, $confirm);
                echo "<div class='errorstyle'>No changes made!</div>";
            } else {

                // Tell the user that the password has been changed
                echo "<div class='errorstyle'>Congratulations your password has been updated!</div>
                      <h3><input type='button' value='Proceed to Main Menu' onclick='window.location =  \"menu.php \"'></h3>";
                session_destroy();
            }
        }
    } else {
        buildPage("", "", "");
    }
} else {

    // Must be logged in in order to view other files
    echo '<div class="nologin">You must be logged in to view this page</div>';
}

function buildPage($o, $n, $c)
{

    // Print out the current password new password etc..
    echo "<body>
          <form action='changePass.php' method='post'>
          <h1>My System</h1>
          <h3>Change Password</h3>
          <label for='oldPass'>Old Password</label>
          <input type='password' name='oldPass' id='oldPass' autocomplete='off' value='$o'> <br><br>
          <label for='newPass'>New Password</label>
          <input type='password' name='newPass' id='newPass' value='$n'><br><br>
          <label for='confirmPass'>Confirm New Password</label>
          <input type='password' name='confirmPass' value='$c'><br><br>
          <input type='submit' value='Submit'>
          </form>";
}

mysqli_close($con);
?>