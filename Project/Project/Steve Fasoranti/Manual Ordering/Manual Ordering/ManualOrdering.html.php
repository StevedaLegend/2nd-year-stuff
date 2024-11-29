<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>



<title>Manual Ordering</title>
<link rel="icon" href="https://www.Equipment_Hire.com/FileMaintenceMenu">


<head>
    <link rel="stylesheet" href="ManualOrdering.css">
</head>



<a class="nav brannd" href="https://www.Equipment_Hire.com">

    <img1 src="Images/green.png" alt="banner">

</a>


<header style="background-image: url(Images/green.png); background-size: cover; width: 100%; height: 40px;">
    <nav>
        <ul style="display: flex; justify-content: space-between;">
            <li style="text-align: center;"><a href="About.html"><img src="Images/logo.png" alt="Logo"></a></li>
            <li style="text-align: center;"><a href="About.html">Hiring of Equipment</a></li>
            <li style="text-align: center;"><a href="About.html">Return of Equipment</a></li>
            <li style="text-align: center;"><a href="About.html">Make a Payment</a></li>
            <li style="text-align: center;"><a href="About.html">Stock Control Menu</a></li>
            <li style="text-align: center;"><a href="About.html">File Maintence Menu</a></li>
            <li style="text-align: center;"><a href="About.html">Report Menu</a></li>
            <li style="text-align: center;"><a href="About.html">Quit</a></li>
        </ul>
    </nav>
</header>


</div>
<div id="Box" style="float: center; position: relative; left: 2%" user_playlist_navigator class="outer-box1">
    <div id="playnav-channel-header" class="inner-box-bg-color"
        style="padding-top: 2px;padding-left: 2px;padding-bottom: 3px;padding-right: 2px;">
        <div id="playnav-title-bar">
            <div id="playnav-channel-name">
                <div class="channel-thumb-holder outer-box-color-as-border-color">
                    <div class="user-thumb-semismall ">

                    </div>
                </div>
                <div class="title-container">
                    <div class="title outer-box-color" id="channel_title" dir="ltr">Manual Ordering</div>
                </div>
            </div>
        </div>
        <div id="playnav-navbar">
            <table>
                <tbody>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>

    <?php include 'listbox.php'; ?>

    <script>
        function populate() {
            var sel = document.getElementById("listbox");
            var result;
            result = sel.options[sel.selectedIndex].value;
            var personDetails = result.split(',');
            document.getElementById("display").innerHTML = "The details of the seleted Suppliers are:  " + result;
            document.getElementById("supplier").value = personDetails[0];
   
    </script>
	
	
	<script>
        function promptMe(){
            var promptuser = confirm("Are you sure you want to continue?");
            alert(promptuser);

            if(promptuser) {
                return true;
            } else {
                return false;
            }
        }
    </script>

    <div id="description" style="float: left;" class="outer-box5">
		
        <form method="post" action="ManualOrdering.php" onsubmit="return confirmCheck()">

            <div class="inputbox">
                <label for="description">
                    <P style="color:rgb(0, 0, 0)"><b>Description</b>

                </label>

                <input type="text" name="description" id="description" title="Enter in a description of the order"
                    required />

                <br>
                <br>

                <div class="inputbox">
                    <label for="brand">
                        <P style="color:rgb(0, 0, 0)"><b>Brand</b>
                    </label>

                    <input type="text" name="brand" id="brand" title="Enter in the name of the brand" required />

                    <br>
                    <br>

                    <div class="inputbox">
                        <label for="category">
                            <P style="color:rgb(0, 0, 0)"><b>Category</b>

                        </label>

                        <input type="text" name="category" id="category" title="Enter in the category" required />

                        <br>
                        <br>

                        <div class="inputbox">
                            <label for="supplier">
                                <P style="color:rgb(0, 0, 0)"><b>Supplier</Address></b>

                            </label>

                            <input type="text" name="supplier" id="supplier" title="Enter in the name of the supplier"
                                required />

                            <br>
                            <br>

                            <div class="inputbox">
                                <label for="supplierscataloguecode">
                                    <P style="color:rgb(0, 0, 0)"><b>Supplier's Catalohgue Code</b>

                                </label>

                                <input type="text" name="supplierscataloguecode" id="supplierscataloguecode"
                                    title="Enter in the Supplier's Catalohgue Code using the current format" required />

                                <br>
                                <br>

                                <div class="inputbox">
                                    <label for="rentalcostperday">
                                        <P style="color:rgb(0, 0, 0)"><b>Rental Cost per Day</b>
                                    </label>

                                    <input type="text" name="rentalcostperday" id="rentalcostperday" title="Enter in the rental cost"
                                        required />

                                    <br>
                                    <br>

                                    <div class="inputbox">
                                        <label for="quantityofitems">
                                            <P style="color:rgb(0, 0, 0)"><b>Quantity of Items</b>
                                        </label>

                                        <input type="text" name="quantityofitems" id="quantityofitems"
                                            title="Enter in the number of quanitiy of items" required />
                                    </div>

                                    <div class="inputbox">
                                        <label for="quantityonhire">
                                            <P style="color:rgb(0, 0, 0)"><b>Quantity on Hire</b>
                                        </label>

                                        <input type="text" name="quantityonhire" id="quantityonhire"
                                            title="Enter in the quanitiy of hire" required />
                                    </div>

                                    <br>
                                    <br>
                                    <input type="submit" id="submit" onclick="return promptMe();">
                                    <input type="reset" value="Cancel" />
                                </div>
							
								
						
        </form>
									
			
    </div>
</div>
</div>
</div>

</html>