<?php
session_start();
require('connection.php');


if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
$user_id = $_SESSION['id'];
$user_products_query = "select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
$user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
$no_of_user_products = mysqli_num_rows($user_products_result);
$sum = 0;
if ($no_of_user_products == 0) {
    //echo "Add items to cart first.";
?>
    <script>
        window.alert("No items in the cart!!");
    </script>
<?php
} else {
    while ($row = mysqli_fetch_array($user_products_result)) {
        $sum = $sum + $row['price'];
    }
}



?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">



    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <br>
        <form action="confirmorder112.php" method="post">
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                        <?php
                        $user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
                        $no_of_user_products = mysqli_num_rows($user_products_result);
                        $counter = 1;
                        while ($row = mysqli_fetch_array($user_products_result)) {

                        ?>
                            <tr>
                                    <th><?php echo $counter ?></th>
                                    <th><?php
                                    
                                    
                                    
                                    echo $row['name'];
                                    
                                    
                                    ?></th>
                                    <th><?php echo $row['price'] ?></th>
                                    <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>


                            </tr>
                        <?php $counter = $counter + 1;
                                

                        ?>
                    <?php } ?>


                    <tr>


                        <th><a href="products.php"><input type="button" value="BACK" class="b" /></a></th>
                        <th>Total</th>
                        <th>Rs<?php echo $sum; ?>/-</th>
                        <th>

                            <?php $sesi = $sum; ?>
                            <input type="submit" name="button2" value="confirm Order">
                        </th>
                    </tr>

                    </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <footer class="footer">
                <div class="container">
                </div>
            </footer>
    </div>
</body>

</html>

  


    <?php
    $myArray = array();

    // Add values to the array
   // $myArray[] = $row['name'];


    // Store the array in the session
   // $_SESSION["myArray"] = $myArray;

    //$namearray = array(); 

    //$namearray[] = $_POST[$row['name']];
    //$_SESSION["namearray"] = $namearray;


    ?>

    <?php


    $_SESSION["sessi"] = $sesi;
    $_SESSION["sessi2"] = 0;

    $sumtot = $_SESSION["sessi"] + $_SESSION["sessi2"];
    $_SESSION["addtotal"] = $sumtot;
    // $textbox4_value = $_POST['citytxt'];

    // store the textbox value in the session array

    // $_SESSION['$sesi'] = $sessi;



    //    $_SESSION['nametxt'] = $textbox1_value;
    //  $_SESSION['emailtxt'] = $textbox2_value;
    // $_SESSION['adresstxt'] = $textbox3_value;
    //  $_SESSION['citytxt'] = $textbox4_value;


    // redirect to the next page

    ?>