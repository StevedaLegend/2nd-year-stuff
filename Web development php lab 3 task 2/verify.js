function validateForm() {
    var firstName = document.forms["insertForm"]["first_name"].value;
    var lastName = document.forms["insertForm"]["last_name"].value;
    var email = document.forms["insertForm"]["email"].value;
    var gender = document.forms["insertForm"]["gender"].value;
    var dob = document.forms["insertForm"]["dob"].value;
    
    if (firstName == "") {
      alert("First name must be filled out");
      return false;
    }
    if (lastName == "") {
      alert("Last name must be filled out");
      return false;
    }
    if (email == "") {
      alert("Email must be filled out");
      return false;
    }
    if (gender == "") {
      alert("Gender must be selected");
      return false;
    }
    if (dob == "") {
      alert("Date of birth must be filled out");
      return false;
    }
  }

