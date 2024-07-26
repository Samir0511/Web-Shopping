<?php
session_start();

if (isset($_POST['submit'])) {
    $textbox1_value = $_POST['nametxt'];
    $textbox2_value = $_POST['emailtxt'];

    $textbox3_value = $_POST['adresstxt'];

    $textbox4_value = $_POST['citytxt'];


    // store the textbox value in the session array
    $_SESSION['nametxt'] = $textbox1_value;
    $_SESSION['emailtxt'] = $textbox2_value;
    $_SESSION['adresstxt'] = $textbox3_value;
    $_SESSION['citytxt'] = $textbox4_value;

    
    // redirect to the next page
    header("Location: bill.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="styleforconformorder.css">

</head>

<body>

    <div class="container">

        <form action="confirmorder112.php" method="post">

            <div class="row">

                <div class="col">

                    <h3 class="title">billing address</h3>

                    <div class="inputBox">
                        <span> <label for="nametxt">name:</label></span>
                        <input type="text" id="nametxt" name="nametxt"required>
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" id="emailtxt" name="emailtxt"required>
                    </div>
                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" id="adresstxt" name="adresstxt"required>
                    </div>
                    <div class="inputBox">
                        <span>city :</span>
                        <input type="text" id="citytxt" name="citytxt"required>
                    </div>
                     <div class="inputBox">
                        <span>mobile no :</span>
                        <input type="text" id="mobilenotxt" name="mobilenotxt"required>
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>state :</span>
                            <input type="text"required>
                        </div>
                        <div class="inputBox">
                            <span>pin code :</span>
                            <input type="text"required>
                        </div>
                    </div>

                </div>

                <div class="col">

                    <h3 class="title">payment</h3>

                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>name on card :</span>
                        <input type="text">
                    </div>
                    <div class="inputBox">
                        <span>credit card number :</span>
                        <input type="number">
                    </div>
                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text"required>
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number">
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text"required>
                        </div>
                    </div>

                </div>

            </div>

            <input type="submit" name ="submit" value="proceed to checkout" class="submit-btn">


        </form>

    </div>

</body>

</html>


