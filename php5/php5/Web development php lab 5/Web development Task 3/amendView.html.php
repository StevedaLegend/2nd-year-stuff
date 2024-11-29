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

	<!-- Task 1 php -->
	<!-- Student: Steve Fasoranti -->
	<!-- Student Number: C00275756 -->
	<!-- Purpose: To view and change any information saved in the database by using amend/view -->

	<h1> Amend/View a Person</h1>
	<h4>Please select a person and then click the amend button to allow update</h4>

	<br><select name='listbox' id='listbox' onclick='populate()'>
		<option value='1,Steve,Mcgrath,2023-02-06,stevemcgrath@gmail.com,39873272'>Steve Mcgrath</option>
		<option value='2,Matt,fasoranti,2023-02-03,mattfasoranti@gmail.com,368237208'>Matt fasoranti</option>
		<option value='3,Yuno,Gpopu,2014-02-18,YunoGpopu@gmail.com,327400288'>Yuno Gpopu</option>
		<option value='4,Lee,assesas,2023-03-22,leeassessas@gmail.com,23789236'>Lee asseas</option>
		<option value='5,austin,down,2016-03-17'>austin down</option>
		<option value='6,Jhon,ocara,2015-03-12'>Jhon ocara</option>
	</select>
	<script>

		// Using the populate we populate the listbox into the text boxes
		function populate() {
			var sel = document.getElementById("listbox");
			var result;
			result = sel.options[sel.selectedIndex].value;
			var personDetails = result.split(',');
			document.getElementById("display").innerHTML = "The details of the selected person are: " + result;
			document.getElementById("amendid").value = personDetails[0];
			document.getElementById("amendfirstname").value = personDetails[1];
			document.getElementById("amendlastname").value = personDetails[2];
			document.getElementById("amendDOB").value = personDetails[3];
			document.getElementById("amendemailaddress").value = personDetails[4];
			document.getElementById("amendphonenumber").value = personDetails[5];
		}

		// The function toggle lock allows us to choose between Amend or View Details so if we hit Amend it allows us to edit 
		function toggleLock() {
			if (document.getElementById("amendViewbutton").value == "Amend Details") {
				document.getElementById("amendfirstname").disabled = false;
				document.getElementById("amendlastname").disabled = false;
				document.getElementById("amendDOB").disabled = false;
				document.getElementById("amendemailaddress").disabled = false;
				document.getElementById("amendphonenumber").disabled = false;
				document.getElementById("amendViewbutton").value = "View Details";
			}

			// Else if we hit view it disables the edits
			else {
				document.getElementById("amendfirstname").disabled = true;
				document.getElementById("amendlastname").disabled = true;
				document.getElementById("amendDOB").disabled = true;
				document.getElementById("amendemailaddress").disabled = true;
				document.getElementById("amendphonenumber").disabled = true;
				document.getElementById("amendViewbutton").value = "Amend Details";
			}
		}


		// We use confirm check to ask the user if they want to save the chnages they made (if they made any)
		function confirmCheck() {
			var response;
			response = confirm('Are you sure you want to save these changes?');
			if (response) {
				document.getElementById("amendid").disabled = false;
				document.getElementById("amendfirstname").disabled = false;
				document.getElementById("amendlastname").disabled = false;
				document.getElementById("amendDOB").disabled = false;
				document.getElementById("amendemailaddress").disabled = false;
				document.getElementById("amendphonenumber").disabled = false;
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
	<input type="button" value="Amend Details" id="amendViewbutton" onclick="toggleLock()">

	<form name="myForm" action="AmendView.php" onsubmit="return confirmCheck()" method="post">

		<label for "amendid">Person Id </label>
		<input type="text" name="amendid" id="amendid" required disabled>
		<label for "amendfirstname">First Name </label>
		<input type="text" name="amendfirstname" id="amendfirstname" required disabled>
		<label for "amendlastname">Surname</label>
		<input type="text" name="amendlastname" id="amendlastname" required disabled>
		<label for "amendDOB">Date of Birth </label>
		<input type="date" name="amendDOB" id="amendDOB" title="format is dd-mm-yyyy" required disabled>
		<br><br>
		<label for "amendemailaddress">Email Address </label>
		<input type="email" name="amendemailaddress" id="amendemailaddress"
			pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required disabled>
		<br><br>
		<label for "amendphonenumber">Phone number </label>
		<input type="tel" name="amendphonenumber" id="amendphonenumber" placeholder="Example: 000-000-0000"
			pattern="\d{3}-\d{3}-\d{4}" required disabled>

		<input type="submit" value="Save Changes">
	</form>

</body>

</html>