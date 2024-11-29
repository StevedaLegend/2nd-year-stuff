<!DOCTYPE html>
<html>
<head>

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


<div class="menu">
  <ul>
    <li><a href="insert.html">Add a Record</a></li>
    <li><a href="display.php">Display Details</a></li>
    <li><a href="amendView.html.php">Amend/View Details</a></li>
    <li><a href="PersonReport.php">Report</a></li>
  </ul>
</div>


</head>
</html>	