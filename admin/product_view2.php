<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Varela+Round);
    * {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  font-family: 'Open Sans', sans-serif;
}
    html,
    body {
background-color: #FFF;      
    }

    .slides {
      padding: 0;
      width: 609px;
      height: 420px;
      display: block;
      margin: 0 auto;
      position: relative;
    }

    .slides * {
      user-select: none;
      -ms-user-select: none;
      -moz-user-select: none;
      -khtml-user-select: none;
      -webkit-user-select: none;
      -webkit-touch-callout: none;
    }

    .slides input {
      display: none;
    }

    .slide-container {
      display: block;
    }

    .slide {
      top: 0;
      opacity: 0;
      width: auto;
      height: auto;
      display: block;
      position: absolute;
margin-top: -30%;
      transform: scale(0);

      transition: all .7s ease-in-out;
    }

    .slide img {

      margin-top: 10%;
      width: 100%;
      height: 100%;
    }

    .nav label {
      width: 200px;
      height: 100%;
      display: none;
      position: absolute;

      opacity: 0;
      z-index: 9;
      cursor: pointer;

      transition: opacity .2s;
      margin-top: -25%;
      margin-right: 100px;
      color: #FFF;
      font-size: 156pt;
      text-align: center;
      line-height: 380px;
      font-family: "Varela Round", sans-serif;
      background-color: rgba(255, 255, 255, .3);
      text-shadow: 0px 0px 15px rgb(119, 119, 119);
    }

    .slide:hover+.nav label {
      opacity: 0.5;
    }

    .nav label:hover {
      opacity: 1;
    }

    .nav .next {
      right: 0;
    }

    input:checked+.slide-container .slide {
      opacity: 1;

      transform: scale(1);

      transition: opacity 1s ease-in-out;
    }

    input:checked+.slide-container .nav label {
      display: block;
    }

    .nav-dots {
      width: 100%;
      top: 100%;
      bottom: 0px;
      height: 11px;
      display: block;
      position: absolute;
      text-align: center;
      margin-top: 20%;
      margin-left: -10%;
    }

    .nav-dots .nav-dot {
      top: -5px;
      width: 31px;
      height: 31px;
      margin: 0 4px;
      position: relative;
      border-radius: 100%;
      display: inline-block;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .nav-dots .nav-dot:hover {
      cursor: pointer;
      background-color: rgba(0, 0, 0, 0.8);
    }

    input#img-1:checked~.nav-dots label#img-dot-1,
    input#img-2:checked~.nav-dots label#img-dot-2,
    input#img-3:checked~.nav-dots label#img-dot-3,
    input#img-4:checked~.nav-dots label#img-dot-4,
    input#img-5:checked~.nav-dots label#img-dot-5,
    input#img-6:checked~.nav-dots label#img-dot-6 {
      background: rgba(0, 0, 0, 0.8);

    }




.card-wrapper {
  max-width: 1100px;
  margin: 0 auto;
}

img {
  top: 10px;
  width: 100%;
  display: block;
}

.img-display {
  overflow: hidden;
}

.img-showcase {
  display: flex;
  width: 100%;
  transition: all 0.5s ease;
}

.img-showcase img {
width: 218px;
height: 458px;
}

.img-select {
 display: flex;
}

.img-item {
  margin: 0.3rem;
}

.img-item:nth-child(1),
.img-item:nth-child(2),
.img-item:nth-child(3) {
  margin-right: 0;
}

.img-item:hover {
  opacity: 0.8;
}

.product-content {
  padding: 2rem 1rem;
}

.product-title {
  font-size: 3rem;
  text-transform: capitalize;
  font-weight: 700;
  position: relative;
  color: #12263a;
  margin: 1rem 0;
}

.product-title::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 4px;
  width: 80px;
  background: #12263a;
}

.product-link {
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 400;
  font-size: 0.9rem;
  display: inline-block;
  margin-bottom: 0.5rem;
  background: #256eff;
  color: #fff;
  padding: 0 0.3rem;
  transition: all 0.5s ease;
}

.product-link:hover {
  opacity: 0.9;
}

.product-rating {
  color: #ffc107;
}

.product-rating span {
  font-weight: 600;
  color: #252525;
}

.product-price {
  margin: 1rem 0;
  font-size: 1rem;
  font-weight: 700;
}

.product-price span {
  font-weight: 400;
}

.last-price span {
  color: #f64749;
  text-decoration: line-through;
}

.new-price span {
  color: #256eff;
}

.product-detail h2 {
  text-transform: capitalize;
  color: #12263a;
  padding-bottom: 0.6rem;
}

.product-detail p {
  font-size: 0.9rem;
  padding: 0.3rem;
  opacity: 0.8;
}

.product-detail ul {
  margin: 1rem 0;
  font-size: 0.9rem;
}

.product-detail ul li {
  margin: 0;
  list-style: none;
  background: url(https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/checked.png) left center no-repeat;
  background-size: 18px;
  padding-left: 1.7rem;
  margin: 0.4rem 0;
  font-weight: 600;
  opacity: 0.9;
}

.product-detail ul li span {
  font-weight: 400;
}

.purchase-info {
  margin: 1.5rem 0;
}

.purchase-info input,
.purchase-info .btn {
  border: 1.5px solid #ddd;
  border-radius: 25px;
  text-align: center;
  padding: 0.45rem 0.8rem;
  outline: 0;
  margin-right: 0.2rem;
  margin-bottom: 1rem;
}

.purchase-info input {
  width: 60px;
}

.purchase-info .btn {
  cursor: pointer;
  color: #fff;
}

.purchase-info .btn:first-of-type {
  background: #256eff;
}

.purchase-info .btn:last-of-type {
  background: #f64749;
}

.purchase-info .btn:hover {
  opacity: 0.9;
}

.social-links {
  display: flex;
  align-items: center;
}

.social-links a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;
  color: #000;
  border: 1px solid #000;
  margin: 0 0.2rem;
  border-radius: 50%;
  text-decoration: none;
  font-size: 0.8rem;
  transition: all 0.5s ease;
}

.social-links a:hover {
  background: #000;
  border-color: transparent;
  color: #fff;
}

@media screen and (min-width: 750px) {
  .card {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 1.5rem;
  }

  .card-wrapper {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .product-imgs {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .product-content {
    padding-top: 0;
  }
}
  </style>
</head>
<?php

$id = $_GET['id'];



$_SESSION['selected_image_id'] = $id;

$conn1 = mysqli_connect("localhost", "root", "", "online") or die("Can not connect server");


$query11 = "SELECT  * FROM items WHERE id=$id";

$result = mysqli_query($conn1, $query11);

$datafetch = mysqli_fetch_assoc($result);


?>



<body>
  <div class="card-wrapper">
    <div class="card">
      <!-- card left -->
      <div class="product-imgs">

        <ul class="slides">
          <input type="radio" name="radio-btn" id="img-1" checked />
          <li class="slide-container">
            <div class="slide">
              <?php echo "   <img src ='Uploads\Images/" . $datafetch['product_image1'] . "' alt = '' style=' mix-blend-mode: multiply;'>  "; ?>
            </div>

          </li>

          <input type="radio" name="radio-btn" id="img-2" />
          <li class="slide-container">
            <div class="slide">
              <?php echo "   <img src ='Uploads\Images/" . $datafetch['product_image2'] . "' alt = '' style=' mix-blend-mode: multiply;'>  "; ?>
            </div>

          </li>

          <input type="radio" name="radio-btn" id="img-3" />
          <li class="slide-container">
            <div class="slide">
              <?php echo "   <img src ='Uploads\Images/" . $datafetch['product_image3'] . "' alt = '' style=' mix-blend-mode: multiply;'> "; ?>
            </div>

          </li>

          <input type="radio" name="radio-btn" id="img-4" />
          <li class="slide-container">
            <div class="slide">
              <?php echo "   <img src ='Uploads\Images/" . $datafetch['product_image4'] . "' alt = '' style=' mix-blend-mode: multiply;'>  "; ?>
            </div>

          </li>

          <input type="radio" name="radio-btn" id="img-5" />
          <li class="slide-container">
            <div class="slide">
              <?php echo "   <img src ='Uploads\Images/" . $datafetch['product_image5'] . "' alt = '' style=' mix-blend-mode: multiply;'>  "; ?>
            </div>

          </li>



          <li class="nav-dots">
            <label for="img-1" class="nav-dot" id="img-dot-1"></label>
            <label for="img-2" class="nav-dot" id="img-dot-2"></label>
            <label for="img-3" class="nav-dot" id="img-dot-3"></label>
            <label for="img-4" class="nav-dot" id="img-dot-4"></label>
            <label for="img-5" class="nav-dot" id="img-dot-5"></label>
          </li>
        </ul>




        
      </div>
      <!-- card right -->
      <div class="product-content">
        <h2 class="product-title">
          <?php echo "  " . $datafetch['name'] . "  "; ?>



        </h2>
        <div class="product-rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>

            <?php echo "  Rating:" . $datafetch['rating'] . "  "; ?>

          </span>
        </div>

        <div class="product-price">

          <p class="new-price">Price: <span>

              <?php echo "₹ " . $datafetch['price'] . " "; ?>



            </span></p>
        </div>

        <div class="product-detail">
          <h2>about this item: </h2>
          <p>
            <?php echo "  " . $datafetch['description'] . "  "; ?>




          </p>
          <ul>
            <li>Available: <span>in stock</span></li>
            <li>Category: <span>

                <?php echo "  " . $datafetch['type'] . "  "; ?>

              </span></li>
            <li>Shipping Area: <span>All over the India</span></li>
            <li>Shipping Fee: <span>Free</span></li>
          </ul>
        </div>

        <div class="purchase-info">






        <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="\online shopping/login.php" role="button" class=" btn btn-primary btn-block ">Buy Now</a></p>
                    <?php
                } else {
                    if (check_if_added_to_cart($rowimg['id'])) {
                       
                      
              
                      
                      echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                    } else {
                        ?>

                        
                      

                        <?php
                    }
                }
                ?>





      
        </div>


      </div>
    </div>
  </div>




  <script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>
  <script>
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
      imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
      });
    });

    function slideImage() {
      const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

      document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
  </script>

</body>

</html>