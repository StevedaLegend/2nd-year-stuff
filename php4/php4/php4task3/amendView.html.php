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
</head>

<body>

	<!-- Task 3 php -->
	<!-- Student: Steve Fasoranti -->
	<!-- Student Number: C00275756 -->
	<!-- Purpose: To view and change any information saved in tyhe database by using amend/view -->

	<h1> Amend/View a Student</h1>
	<h4>Please select any student and then click on amend button if you want to update</h4>

	<!--Include the listbox.php file-->
	<?php include 'listbox.php'; ?>

	<script>

		// Using the listbox we populate the id name address phone gpa dob year and course and print it out to the screen
		function populate() {
			var sel = document.getElementById("listbox");
			var result;
			result = sel.options[sel.selectedIndex].value;
			var personDetails = result.split(',');
			document.getElementById("display").innerHTML = "These are the details of the following student: " + result;
			document.getElementById("amendid").value = personDetails[0];
			document.getElementById("amendname").value = personDetails[1];
			document.getElementById("amendaddress").value = personDetails[2];
			document.getElementById("amendphone").value = personDetails[3];
			document.getElementById("amendgpa").value = personDetails[4];
			document.getElementById("amendDOB").value = personDetails[5];
			document.getElementById("amendyear").value = personDetails[6];
			document.getElementById("amendcourse").value = personDetails[7];
		}

		// The function toggle lock allows us to choose between Amend or View Details so if we hit Amend it allows us to edit 
		function toggleLock() {
			if (document.getElementById("amendViewButton").value == "Amend Details") {
				document.getElementById("amendname").disabled = false;
				document.getElementById("amendaddress").disabled = false;
				document.getElementById("amendphone").disabled = false;
				document.getElementById("amendgpa").disabled = false;
				document.getElementById("amendDOB").disabled = false;
				document.getElementById("amendyear").disabled = false;
				document.getElementById("amendcourse").disabled = false;
				document.getElementById("amendViewButton").value = "View Details";
			}
			// Else if we hit view it disables the edits
			else {
				document.getElementById("amendname").disabled = true;
				document.getElementById("amendaddress").disabled = true;
				document.getElementById("amendphone").disabled = true;
				document.getElementById("amendgpa").disabled = true;
				document.getElementById("amendDOB").disabled = true;
				document.getElementById("amendyear").disabled = true;
				document.getElementById("amendcourse").disabled = true;
				document.getElementById("amendViewButton").value = "View Details";
			}
		}
		// We use confirm check toask the user if they want to save the chnages they made (if they made any)
		function confirmCheck() {
			var response;

			response = confirm('Are you sure you want to save these changes?');

			if (response) {
				document.getElementById("amendid").disabled = false;
				document.getElementById("amendname").disabled = false;
				document.getElementById("amendaddress").disabled = false;
				document.getElementById("amendphone").disabled = false;
				document.getElementById("amendgpa").disabled = false;
				document.getElementById("amendDOB").disabled = false;
				document.getElementById("amendyear").disabled = false;
				document.getElementById("amendcourse").disabled = false;
				return true;
			}
			else {
				populate();
				toggleLock();
				return false;
			}
		}
	</script>

	<!--We use toggle lock to toggle between amend and view so we can edit the user information-->
	<p id="display"> </p>
	<input type="button" value="Amend Details" id="amendViewButton" onclick="toggleLock()">

	<form name="myStudentslist" action="AmendView.php" onsubmit="return confirmCheck()" method="post">


		<label for "amendid"> StudentID </label>
		<input type="text" name="amendid" id="amendid" disabled>

		<label for "amendname"> StudentName </label>
		<input type="text" name="amendname" id="amendname" disabled>

		<label for "amendaddress"> StudentAddress </label>
		<input type="text" name="amendaddress" id="amendaddress" disabled>

		<label for "amendphone"> StudentPhone </label>
		<input type="text" name="amendphone" id="amendphone" disabled>

		<label for "amendgpa"> GradePointAverage </label>
		<input type="text" name="amendgpa" id="amendgpa" disabled>

		<label for "amendDOB"> DateOfBirth </label>
		<input type="text" name="amendDOB" id="amendDOB" disabled>

		<label for "amendyear"> YearBeganCourse </label>
		<input type="text" name="amendyear" id="amendyear" disabled>

		<label for "amendcourse"> CourseCode </label>
		<input type="text" name="amendcourse" id="amendcourse" disabled>
		<br><br>

		<input type="submit" value="Save Changes">

	</form>
</body>

</html>