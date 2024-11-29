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
            <li style="text-align: center;"><a href="About.html"><img src="Images/logo1.png" alt="Logo1"></a></li>
            <li style="text-align: center;"><a href="About.html"><img src="Images/logo2.png" alt="Logo2"></a></li>
            <li style="text-align: center;"><a href="About.html"><img src="Images/logo3.png" alt="Logo3"></a></li>
            <li style="text-align: center;"><a href="About.html"><img src="Images/logo4.png" alt="Logo4"></a></li>
            <li style="text-align: center;"><a href="About.html"><img src="Images/logo5.png" alt="Logo5"></a></li>
            <li style="text-align: center;"><a href="About.html"><img src="Images/logo6.png" alt="Logo6"></a></li>
            <li style="text-align: center;"><a href="About.html"><img src="Images/logo7.png" alt="Logo7"></a></li>
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
        }
        function confirmCheck() {
            var response;
            response = confirm('Are you sure about the current details you put in?');
            if (response) {
                document.getElementById("display").disabled = false;
                document.getElementById("supplier").disabled = false;
                return true;
            }
            else {
                populate();
                return false;
            }
        }
    </script>

    <div id="description" style="float: left;" class="outer-box5">

        <form method="post" action="ManualOrdering.php">

            <div class="inputbox">
                <label for="label">
                    <P style="color:rgb(0, 0, 0)"><b>Description</b>

                </label>

                <input type="text" name="description" id="description" title="Enter in a description of the order"
                    required />

                <br>
                <br>

                <div class="inputbox">
                    <label for="label">
                        <P style="color:rgb(0, 0, 0)"><b>Brand</b>
                    </label>

                    <input type="text" name="brand" id="brand" title="Enter in the name of the brand" required />

                    <br>
                    <br>

                    <div class="inputbox">
                        <label for="label">
                            <P style="color:rgb(0, 0, 0)"><b>Category</b>

                        </label>

                        <input type="text" name="category" id="category" title="Enter in the category" required />

                        <br>
                        <br>

                        <div class="inputbox">
                            <label for="label">
                                <P style="color:rgb(0, 0, 0)"><b>Supplier</Address></b>

                            </label>

                            <input type="text" name="supplier" id="supplier" title="Enter in the name of the supplier"
                                required />

                            <br>
                            <br>

                            <div class="inputbox">
                                <label for="label">
                                    <P style="color:rgb(0, 0, 0)"><b>Supplier's Catalohgue Code</b>

                                </label>

                                <input type="text" name="suppliercatalouguecode" id="suppliercatalouguecode"
                                    title="Enter in the Supplier's Catalohgue Code using the current format" required />

                                <br>
                                <br>

                                <div class="inputbox">
                                    <label for="label">
                                        <P style="color:rgb(0, 0, 0)"><b>Rental Cost per Day</b>
                                    </label>

                                    <input type="text" name="rental" id="rental" title="Enter in the rental cost"
                                        required />

                                    <br>
                                    <br>

                                    <div class="inputbox">
                                        <label for="label">
                                            <P style="color:rgb(0, 0, 0)"><b>Quantity of Items</b>
                                        </label>

                                        <input type="text" name="quantity1" id="quantity1"
                                            title="Enter in the number of quanitiy of items" required />
                                    </div>

                                    <div class="inputbox">
                                        <label for="label">
                                            <P style="color:rgb(0, 0, 0)"><b>Quantity on Hire</b>
                                        </label>

                                        <input type="text" name="quantity2" id="quantity2"
                                            title="Enter in the quanitiy of hire" required />
                                    </div>

                                    <br>
                                    <br>
                                    <input type="submit" value="submit" />
                                    <input type="reset" value="Clear" />
                                </div>
        </form>
    </div>
</div>
</div>
</div>

</html>