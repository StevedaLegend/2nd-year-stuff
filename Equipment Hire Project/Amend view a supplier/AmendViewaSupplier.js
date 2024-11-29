function populate() {
    var sel = document.getElementById("listbox");
    var result;
    result = sel.options[sel.selectedIndex].value;
    var personDetails = result.split(',');
    document.getElementById("display").innerHTML = "These are the details of the following student: " + result;
    document.getElementById("amendid").value = personDetails[0];
    document.getElementById("amendytradingname").value = personDetails[1];
    document.getElementById("amendstreet").value = personDetails[2];
    document.getElementById("amendtown").value = personDetails[3];
    document.getElementById("amendcountry").value = personDetails[4];
    document.getElementById("amendphonenumber").value = personDetails[5];
    document.getElementById("amendemailaddress").value = personDetails[6];
    document.getElementById("amendwebaddress").value = personDetails[7];
}

function toggleLock() {
    if (document.getElementById("amendViewButton").value == "Amend Details") {
        document.getElementById("amendtradingname").disabled = false;
        document.getElementById("amendstreet").disabled = false;
        document.getElementById("amendtown").disabled = false;
        document.getElementById("amendcountry").disabled = false;
        document.getElementById("amendphonenumber").disabled = false;
        document.getElementById("amendemailaddress").disabled = false;
        document.getElementById("amendwebaddress").disabled = false;
        document.getElementById("amendViewButton").value = "View Details";
    }
    else {
        document.getElementById("amendtradingname").disabled = true;
        document.getElementById("amendstreet").disabled = true;
        document.getElementById("amendtown").disabled = true;
        document.getElementById("amendcountry").disabled = true;
        document.getElementById("amendphonenumber").disabled = true;
        document.getElementById("amendemailaddress").disabled = true;
        document.getElementById("amendwebaddress").disabled = true;
        document.getElementById("amendViewButton").value = "View Details";
    }
}

function confirmCheck() {
    var response;

    response = confirm('Are you sure you want to save these changes?');

    if (response) {
        document.getElementById("amendid").disabled = false;
        document.getElementById("amendname").disabled = false;
        document.getElementById("amendstreet").disabled = false;
        document.getElementById("amendtown").disabled = false;
        document.getElementById("amendcountry").disabled = false;
        document.getElementById("amendphonenumber").disabled = false;
        document.getElementById("amendemailaddress").disabled = false;
        document.getElementById("amendwebaddress").disabled = false;
        return true;
    }
    else {
        populate();
        toggleLock();
        return false;
    }
}