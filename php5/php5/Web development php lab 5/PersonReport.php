<! DOCTYPE html>
<html>
<head>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
<link rel="stylesheet" type="text/css" href="report.css">
</head>
<body>
<a href = "home.php">Home </a><br>
<a href = "insert.html">Add a person </a><br>
<a href = "view.html.php">Select a person</a><br>
<a href = "display.php">Display a list of persons </a><br>
<a href = "AmendView.html.php">Amend/View a Person </a><br>
<a href = "delete.html.php">Delete a Person </a><br>
<a href = "PersonReport.php">Report on Persons </a><br>
<form action = "PersonReport.php" method = "post" name = "reportForm">
<input type = "hidden" name = "choice">
</form>

<h1>Person Report</h1>
<h3>(Click a button to see the Person Report in the desired order)</h3>
<input type = 'button' id = "dateButton" value = 'Date of Birth Order' 
onclick = 'dateOrder()' title = 'Click here to see persons in reverse date of birth order'> 
<input type = 'button' id = "nameButton" value = 'Surname Order' 
onclick = 'surnameOrder()' title = 'Click here to see Persons in alphabetical order of surname'>
<br>
<br>

<script>
function dateOrder() 
{
	document.reportForm.choice.value = "DOB";
	document.reportForm.submit();
}
function surnameOrder() 
{
	document.reportForm.choice.value = "Surname";
	document.reportForm.submit();
}
</script>

	<script>
	document.getElementById("nameButton").disabled = true;
	document.getElementById("dateButton").disabled = false;	
	</script> 
<table>
			<tr><th>Surname</th><th>First Name</th><th>Date of Birth</th></tr><td>Bass</td>
				<td>Ahmad</td>
				<td>01/01/2005</td>
				</tr><td>Bass</td>
				<td>Ahmad</td>
				<td>01/01/2005</td>
				</tr><td>Black</td>
				<td>Jim</td>
				<td>27/02/2023</td>
				</tr><td>Brown</td>
				<td>andylll</td>
				<td>28/02/2023</td>
				</tr><td>jamie</td>
				<td>joe</td>
				<td>06/03/2023</td>
				</tr><td>Jones</td>
				<td>John</td>
				<td>23/01/2023</td>
				</tr><td>Meagher</td>
				<td>Joan</td>
				<td>04/02/2000</td>
				</tr><td>Moloney</td>
				<td>Catherine</td>
				<td>27/03/1999</td>
				</tr><td>Ryan</td>
				<td>George</td>
				<td>22/11/1998</td>
				</tr></table></body>
</html>