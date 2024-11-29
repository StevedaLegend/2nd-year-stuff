<!-- Task 1 php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: View whats in the database by typing in who you want to find-->
<?php session_start(); ?>
<html>

<body>
    <form action="displayview.php" method="Post">
        <P><label for="personid"> Enter the personid you want to find</lablel>
                <input type="text" name="personid" id="personid" placeholder="personid" autocomplete=off required
                    value="<?php if (isset($_SESSION['personid']))
                        echo $_SESSION['personid'] ?>" />
            </p>
            <p>
                <lablel for="fistname"> First name </label>
                    <input type="text" name="firstname" id="firstname" placeholder="first name" disabled
                        value="<?php if (isset($_SESSION['firtyname']))
                        echo $_SESSION['firstname'] ?>" />

            </P>
            <p>
                <lablel for="surname"> Last name </label>
                    <input type="text" name="surname" id="surname" placeholder="Last name" disabled
                        value="<?php if (isset($_SESSION['lastname']))
                        echo $_SESSION['lastname'] ?>" />

            </P>
            <p>
                <lablel for="dob"> Date of Birth </label>
                    <input type="text" name="dob" id="dob" placeholder="dob" disabled
                        value="<?php if (isset($_SESSION['dob']))
                        echo $_SESSION['dob'] ?>" />
            </P>
            <br><br>

            <input type="submit" value="submit" />
            <p>
        </form>

        <?php

        // If you type in someone that doesnt exist in the database it will show no records found for this person
        
                    if (!isset($_SESSION['firstname']) and isset($_SESSION['personid'])) {
                        echo '<p style ="color: red; text-align: center; font-size:20">
    No record found for a person with id..' . $_SESSION['personid'] . '
    <br> Please try again!
    </p>';

                        unset($_SESSION['personid']);
                    }

                    ?>
</body>

</html>