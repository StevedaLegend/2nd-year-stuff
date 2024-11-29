
function populate() {
  var sel = document.getElementById("listbox");
  var result;

  result = sel.options[sel.selectedIndex].value;
  var personDetails = result.split(',');
  document.getElementById("display").innerHTML = "The details of the selected person are -> " + result;

  document.getElementById("studentId").value = personDetails[0];
  document.getElementById("studentName").value = personDetails[1];
  document.getElementById("studentAddress").value = personDetails[2];
  document.getElementById("studentPhone").value = personDetails[3];
  document.getElementById("gradePointAverage").value = personDetails[4];
  document.getElementById("amendDOB").value = personDetails[5];
  document.getElementById("yearBeganCourse").value = personDetails[6];
  document.getElementById("courseCode").value = personDetails[7];
}





function toggleLock() {
  if (document.getElementById("amendViewButton").value == "Amend Details") {
    document.getElementById("studentName").disabled = false;
    document.getElementById("studentAddress").disabled = false;
    document.getElementById("studentPhone").disabled = false;
    document.getElementById("gradePointAverage").disabled = false;
    document.getElementById("amendDOB").disabled = false;
    document.getElementById("yearBeganCourse").disabled = false;
    document.getElementById("courseCode").disabled = false;
    document.getElementById("amendViewButton").value = "View Details";
  }
  else {
    document.getElementById("studentName").disabled = true;
    document.getElementById("studentAddress").disabled = true;
    document.getElementById("studentPhone").disabled = true;
    document.getElementById("gradePointAverage").disabled = true;
    document.getElementById("amendDOB").disabled = true;
    document.getElementById("yearBeganCourse").disabled = true;
    document.getElementById("courseCode").disabled = true;
    document.getElementById("amendViewButton").value = "View Details";
  }
}





function confirmCheck() {
  var response;

  response = confirm('Are you sure you want to save these changes?');

  if (response) {
    document.getElementById("studentId").disabled = false;
    document.getElementById("studentName").disabled = false;
    document.getElementById("studentAddress").disabled = false;
    document.getElementById("studentPhone").disabled = false;
    document.getElementById("gradePointAverage").disabled = false;
    document.getElementById("amendDOB").disabled = false;
    document.getElementById("yearBeganCourse").disabled = false;
    document.getElementById("courseCode").disabled = false;
    return true;
  }
  else {
    populate();
    toggleLock();
    return false;
  }
}

