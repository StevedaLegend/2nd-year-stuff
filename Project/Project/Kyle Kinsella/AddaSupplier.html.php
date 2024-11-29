<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>



<title>Add a Supplier</title>
<link rel="icon" href="https://www.Equipment_Hire.com/FileMaintenceMenu">


<head>
    <link rel="stylesheet" href="AddaSupplier.css">
</head>



<a class="nav brannd" href="https://www.Equipment_Hire.com">

    <img1 src="Images/lightblue.png" alt="banner">

</a>


<header style="background-image: url(Images/lightblue.png); background-size: cover; width: 100%; height: 40px;">
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
                    <div class="title outer-box-color" id="channel_title" dir="ltr">Add a Supplier</div>
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

    <div id="description" style="float: left;" class="outer-box5">

        <form method="post" action="add_supplier.php">

            <div class="inputbox">
                <label for="label">
                    <P style="color:rgb(0, 0, 0)"><b>Trading Name</b>

                </label>

                <input type="text" name="tradingname" id="tradingname" title="Please enter in a trading name" required />

                <br>
                <br>

                <div class="inputbox">
                    <label for="label">
                        <P style="color:rgb(0, 0, 0)"><b>Street</b>
                    </label>

                    <input type="text" name="street" id="street" title="Enter in a street" required />

                    <br>
                    <br>

                    <div class="inputbox">
                        <label for="label">
                            <P style="color:rgb(0, 0, 0)"><b>Town</b>

                        </label>

                        <input type="text" name="town" id="town" title="Enter in a town" required />

                        <br>
                        <br>

                        <div class="inputbox">
                            <label for="label">
                                <P style="color:rgb(0, 0, 0)"><b>County</Address></b>

                            </label>

                            <input type="text" name="country" id="country" title="Enter in the country" required />

                            <br>
                            <br>

                            <div class="inputbox">
                                <label for="label">
                                    <P style="color:rgb(0, 0, 0)"><b>Phone Number</b>

                                </label>

                                <input type="text" name="phonenumber" id="phonenumber"
                                    title="Enter in the phone number using the current format"
                                    placeholder="Example: 000-000-0000" pattern="\d{3}-\d{3}-\d{4}" required />

                                <br>
                                <br>

                                <div class="inputbox">
                                    <label for="label">
                                        <P style="color:rgb(0, 0, 0)"><b>Email Address</b>
                                    </label>

                                    <input type="text" name="emailaddresss" id="emailaddress" title="Enter in the Email Address"
                                        placeholder="example@example.com" required
                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />

                                    <br>
                                    <br>

                                    <div class="inputbox">
                                        <label for="label">
                                            <P style="color:rgb(0, 0, 0)"><b>Web Address</b>
                                        </label>

                                        <input type="text" name="webaddress" id="webaddress" title="Enter in the Web address"
                                            placeholder="example@example.com" required
                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
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