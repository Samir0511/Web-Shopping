
<?php
session_start();
require 'check_if_added.php';
include('connection.php');

?>
<?php $resultimg = mysqli_query($con, "SELECT * FROM items where type='Mobile'"); ?>

<!DOCTYPE html>
<html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Untitled Document</title>

    <link rel="shortcut icon" href="img/lifestyleStore.png" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css" type="text/css">



    <style>
        .list-toggle {
            float: right;
            margin-bottom: 20px;
        }

        .btn.one,
        .btn.four {
            background: #efefef;
            color: #999;
            border: 1px solid #ccc;
            box-shadow: inset 0px 0px 6px 0px rgba(0, 0, 0, 0.1);
        }

        .btn.one.on,
        .btn.four.on {
            background: #fff;
            color: #000;
            border: 1px solid #ccc;
            box-shadow: none;
        }

        .card {
            min-height: 100%;
            margin-bottom: 30px;
        }

        .card-img {
            width: 550px;
            height: auto;
            margin-bottom: 20px;
        }

        .card-img>img {
            width: 50%;
            height: auto;
        }

        .card-addr-wrap {
            display: flex;
            margin-bottom: 10px;
        }

        .card-addr-icon {
            padding-right: 8px;
        }

        .card-phone-wrap {
            margin-bottom: 10px;
        }

        .cards-list .card {
            min-height: auto;
        }

        .cards-list>div {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .cards-list .card-body {
            display: flex;
        }

        .cards-list .card-img {
            margin-bottom: 0;
            width: 50%;
            padding-right: 30px;
        }

        @media (min-width: 768px) {
            .tel {
                color: #000;
                pointer-events: none;
            }
        }
    </style>
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
     
    </div>

 


    <br>
    <br><br>
    <div class="container">
        <!-- already have conatiner, dont add -->
        <div class="row">
            <div class="col-md-12">

         

            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <div class="row cards-row">
                    <?php $resultimg = mysqli_query($con, "SELECT * FROM items where type='TV'"); ?>

                    <?php while ($rowimg = mysqli_fetch_assoc($resultimg)) {

                        echo "<a href='admin/product_view2.php?id={$rowimg['id']}'>";
                    ?>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-img">
                                        <?php echo "   <img src='admin\Uploads\Thumbnail/" . $rowimg['thumbnail'] . "' width='460px' class='img-responsive' alt='Image Not Found'>"; ?>




                                    </div>
                                    <div class="card-txt">
                                        <h5 class="card-title">

                                            <?php echo $rowimg['name']; ?>


                                        </h5>
                                        <div class="card-addr-wrap">
                                            <div class="card-addr-icon"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="card-addr-txt">
                                                <span class="card-addr1">

                                                    <?php echo "  RS.. " . $rowimg['price']; ?>


                                                </span>
                                            </div>
                                        </div>


                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class=" btn btn-primary btn-block ">Buy Now</a></p>
                                            <?php
                                        } else {
                                            if (check_if_added_to_cart($rowimg['id'])) {
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart_add.php" class="  btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

                                        <?php
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>



</body>

</html>