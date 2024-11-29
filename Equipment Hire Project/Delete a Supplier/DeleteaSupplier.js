function confirmDelete(){ 

var supplier = document.getElementById("Supplier").value;
var confirmMsg = "Are you sure you want to delete this supplier " + supplier + "?";
return confirm(confirmMsg);
}