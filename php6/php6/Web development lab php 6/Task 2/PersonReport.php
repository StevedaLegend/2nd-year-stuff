<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Report Lab 5</title>
</head>

<style>
    /* Body of the student html the background image no repeat so it only shows once and the resolution so it fits to screen  */

    body {

        background-image: url(Background.png);
        background-repeat: no-repeat;
        background-size: 1920px 1090px;
    }

    /* Font family is times new roman text aglin is used to put to the center of the page with the body of the page */

    body {

        margin: 0;
        padding: 0;
        font-family: 'Times New Roman', Times, serif;
        text-align: center;

    }

    /* The heading is also put to the center of the page along with the margin with is 20 pixels */
    h1 {
        text-align: center;
        margin: 20px 0;
    }

    /* The label block ( the block where the student detail is meant to go) is displayed and the pixels are 20 */
    label {
        display: block;
        margin-top: 20px;
    }

    /* The input type is a text and the width is 300 pixels and padding is 5 pixels along with the margin of the box input */
    input[type="text"] {
        width: 300px;
        padding: 5px;
        margin: 5px 0;
    }

    /* Buttons are displayed of each edit save and cancel buttons and the padding etc is declared along with the colours */
    button {
        padding: 5px 10px;
        margin: 5px;
        background-color: #000000;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    /* The button is disabled until the student information is displayed and shows the colour of it being disabled until changed into a different colour when enabled */
    button:disabled {
        background-color: #ddd;
        color: #888;
        cursor: default;
    }
</style>

<body>

    <?php

    // Include menu.php file
    include 'menu.php'; ?>

    <?php

    // Include db.inc.php file
    include 'db.inc.php';
    date_default_timezone_set('UTC');
    ?>

    <!--Use form action to post the PersonReport.php file-->
    <form action="PersonReport.php" method="post" name="reportForm">
        <input type="hidden" name="choice">
    </form>

    <h1>Person Report</h1>
    <h3>Click a button to see the person report in the desired order</h3>

    <!--Click on each button so you can have the report in that order -->
    <input type="button" id="dateButton" value="Date of Birth Order" onclick="dateOrder()"
        title="Click here to see person in reverse date of birth order">

    <input type="button" id="nameButton" value="Surname order" onclick="surnameOrder()"
        title="Click here to see person in alphabetical order of Surname">

    <input type="button" id="emailButton" value="Email order" onclick="emailOrder()"
        title="Click to see emails in order">

    <br>
    <br>

    <script>

        // Date order to put the order in date form first
        function dateOrder() {
            document.reportForm.choice.value = "DOB";
            document.reportForm.submit();
        }

        // Surname order to put the order in surname form first
        function surnameOrder() {
            document.reportForm.choice.value = "Surname";
            document.reportForm.submit();
        }

        // Email order to put the order in email form first
        function emailOrder() {
            document.reportForm.choice.value = "emailaddress";
            document.reportForm.submit();
        }

    </script>

    <?php

    // If user selects surname it puts the name in surname order
    $choice = "Surname";

    if (isset($_POST['choice'])) {
        $choice = $_POST['choice'];
    }

    if ($choice == "DOB") {
        ?>

        <script>

            // Enables the dateButton and disables the rest
            document.getElementById("dateButton").disabled = true;
            document.getElementById("nameButton").disabled = false;
            document.getElementById("emailButton").disabled = false;
        </script>

        <?php

        // Uses SQL to put the order by date of birth
        $sql = "SELECT * FROM Persons WHERE DeletedFlag = false ORDER BY DOB DESC";
        produceReport($con, $sql);
    } else if ($choice == "emailaddress") {
        ?>

            <script>

                // Enables the emailButton and disables the rest
                document.getElementById("dateButton").disabled = false;
                document.getElementById("nameButton").disabled = false;
                document.getElementById("emailButton").disabled = true;
            </script>

        <?php
        // Uses SQL to put the order by emailAddress
        $sql = "SELECT * FROM Persons WHERE DeletedFlag = false ORDER BY emailaddress ASC";
        produceReport($con, $sql);
    } else {
        ?>

            <script>

                // Enables the dateButton and disables the rest
                document.getElementById("dateButton").disabled = true;
                document.getElementById("nameButton").disabled = false;
                document.getElementById("emailButton").disabled = false;
            </script>

        <?php

        // Uses SQL to put the order by lastName
        $sql = "SELECT * FROM Persons WHERE DeletedFlag = false ORDER BY lastName ASC";
        produceReport($con, $sql);
    }
    ;

    function produceReport($con, $sql)
    {
        $result = mysqli_query($con, $sql);

        // Echo out the table for the Person Report
        echo "<table><tr><th>Surname</th><th>First Name</th><th>Date of Birth</th><th>Email Address</th><th>Phone Number</th></tr>";

        while ($row = mysqli_fetch_array($result)) {
            $date = date_create($row['DOB']);
            $fDate = date_format($date, "d/m/Y");

            echo "<tr><td>" . $row['lastName'] . "</td>";

            echo "<td>" . $row['firstName'] . "</td>";

            echo "<td>" . $fDate . "</td>";

            echo "<td>" . $row['emailaddress'] . "</td>";

            echo "<td>" . $row['phonenumber'] . "</td>";
            $date = date_create($row['DOB']);
            $fDate = date_format($date, "d/m/Y");
            echo "<tr>";
            echo "<td>" . $row['lastName'] . "</td>";
            echo "<td>" . $row['firstName'] . "</td>";
            echo "<td>" . $fDate . "</td>";
            echo "<td>" . $row['phonenumber'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    mysqli_close($con);
    ?>
</body>

</html>