<!DOCTYPE html>
<html>
<head>


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
    <li><a href="insert.html">Add a Record</a></li>
    <li><a href="display.php">Display Details</a></li>
    <li><a href="amendView.html.php">Amend/View Details</a></li>
    <li><a href="PersonReport.html.php">Report</a></li>
    <li><a href="logout.php">Logout</a></li>

  </ul>
</div>


</head>
</html>	