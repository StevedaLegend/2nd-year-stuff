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

/* The button is disabled until the student information is displayed and shows the colour of it being disabled until changed into a different colour when enabled*/
button:disabled {
	background-color: #ddd;
	color: #888;
	cursor: default;
}
</style>


<script>
const dob_order_btn = document.getElementById('dob_order');
const surname_order_btn = document.getElementById('surname_order');
const email_order_btn = document.getElementById('email_order');
const persons_table = document.getElementById('persons_table').querySelector('tbody');

dob_order_btn.addEventListener('click', () => {
  getPersons('dob');
});

surname_order_btn.addEventListener('click', () => {
  getPersons('surname');
});

email_order_btn.addEventListener('click', () => {
  getPersons('email');
});

function getPersons(order) {
  fetch(`get_persons.php?order=${order}`)
    .then(response => response.json())
    .then(data => {
      persons_table.innerHTML = '';
      data.forEach(person => {
        persons_table.innerHTML += `
          <tr>
            <td>${person.surname}</td>
            <td>${person.first_name}</td>
            <td>${person.date_of_birth}</td>
            <td>${person.email_address}</td>
            <td>${person.phone_number}</td>
          </tr>
        `;
      });
      if (order === 'dob') {
        dob_order_btn.disabled = true;
        surname_order_btn.disabled = false;
        email_order_btn.disabled = false;
      } else if (order === 'surname') {
        dob_order_btn.disabled = false;
        surname_order_btn.disabled = true;
        email_order_btn.disabled = false;
      } else if (order === 'email') {
        dob_order_btn.disabled = false;
        surname_order_btn.disabled = false;
        email_order_btn.disabled = true;
      }
    });
}	
</script>

<?php

$hostname = "localhost:3306";
$username = "C00275756";
$password = "onidamola123";


$dbname = "c00275756";

$con = mysqli_connect($hostname,$username,$password,$dbname);

if (!$con)
{

    echo "Failed to connect to MYSQL:" . mysqli_connect_error();
};
?>

<div class="menu">
  <ul>
    <li><a href="add_record.php">Add a Record</a></li>
    <li><a href="display_details.php">Display Details</a></li>
    <li><a href="amend_view_details.php">Amend/View Details</a></li>
    <li><a href="report.php">Report</a></li>
  </ul>
</div>

<button id="dob_order">Date Of Birth order</button>
<button id="surname_order">Surname Order</button>
<button id="email_order">Email Address Order</button>

<table id="persons_table">
  <thead>
    <tr>
      <th>Surname</th>
      <th>First Name</th>
      <th>Date of Birth</th>
      <th>Email Address</th>
      <th>Phone Number</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>

</head>
</html>	