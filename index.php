<?php
session_start();
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
  <style>


    
        
#loader-overlay {
	position: fixed;
	z-index: 9999;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	background-color: rgb(0, 0, 0);

  }
  
  #loader-video {
	max-width: 1920px;
	max-height: 1080px;
  }
  
  #content {
	display: none;
  }


    .col-xs-4 {
      background: #111;

    }

    .thumbnail {
      background: black;
transition:all  0.3s ease-in-out;
    }

    .thumbnail:hover {
      background: white;
    }
  </style>
</head>

<body>


<div id="loader-overlay">
  <video id="loader-video" autoplay loop muted transparent>
  <source src="logoanimation.mp4" type="video/mp4">
</video>
</div>
  <div>
    <?php
    require 'header.php';
    ?>

    <div id="bannerImage">

      <div class="container">
        <center>
          <div id="bannerContent">

            <h3><b><i>
                  <font size="+4">WELCOME</font>
                </i></b></h3>
            <br>
            <a href="products.php" class="btn btn-danger"><span class="glyphicon glyphicon-shopping-cart"></span><b> SHOP NOW</b></a>
          </div>
        </center>
        <div class="container">
          <div class="row">
            <div class="menu">
              <div class="col-xs-4" class="k">
                <br>
                <div class="thumbnail" align="center">
                  <a href='mobile.php' class='  btn btn-block btn-primary' name='add' value='add' class='btn btn-block btr-primary'>Mobile</a>
                </div>
                <div class="thumbnail" align="center">
                <a href='televition.php' class='  btn btn-block btn-primary' name='add' value='add' class='btn btn-block btr-primary'>Televition</a>

                </div>
                <div class="thumbnail" align="center">
                <a href='shoes.php' class='  btn btn-block btn-primary' name='add' value='add' class='btn btn-block btr-primary'>Shoes</a>

                </div>
              </div>
              <div class="col-xs-4">
                <br>
                <div class="thumbnail" align="center">
                <a href='computer.php' class='  btn btn-block btn-primary' name='add' value='add' class='btn btn-block btr-primary'>Computer</a>

                </div>
                <div class="thumbnail" align="center">
                <a href='watch.php' class='  btn btn-block btn-primary' name='add' value='add' class='btn btn-block btr-primary'>Watch</a>

                </div>
                <div class="thumbnail" align="center">
                <a href='refrigrater.php' class='  btn btn-block btn-primary' name='add' value='add' class='btn btn-block btr-primary'>Homeapplience</a>

                </div>
              </div>
              <div class="col-xs-4">
                <br>
                <div class="thumbnail" align="center">
                <a href='shirt.php' class='  btn btn-block btn-primary' name='add' value='add' class='btn btn-block btr-primary'>Cloth</a>

                </div>
                <div class="thumbnail" align="center">
                <a href='goggles.php' class='  btn btn-block btn-primary' name='add' value='add' class='btn btn-block btr-primary'>Goggles</a>

                </div>
                <div class="thumbnail" align="center">
                <a href='camera.php' class='  btn btn-block btn-primary' name='add' value='add' class='btn btn-block btr-primary'>Camera</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  
    <script>


// Hide the loader overlay after 5 seconds
setTimeout(function() {
var loaderOverlay = document.getElementById("loader-overlay");
var video = document.getElementById("loader-video");
var content = document.getElementById("content");

// Hide the loader overlay and show the content
loaderOverlay.style.display = "none";
video.style.display = "none";
content.style.display = "block";
}, 2800);
</script>
</body>

</html>