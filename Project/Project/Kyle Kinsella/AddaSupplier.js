// This function prompts the user to confirm before submitting the form
function confirmSubmit() {
  var confirmed = confirm("Are you sure you want to add these details?");
  return confirmed;
}

// Attach the confirmSubmit function to the form's onsubmit event
document.querySelector('form').onsubmit = confirmSubmit;

