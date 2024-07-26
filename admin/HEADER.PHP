<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;font-family:Arial;


  
			background: url('homebg.jpg');
		
}
        .gradient-text {
            background: linear-gradient(to right, gold, white, gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
            position: relative;
            font-size: 30px;
            font-weight: bold;
            font-family:'Courier New', Courier, monospace;
        }









.topnav {
  overflow: hidden;
  background-color: #333;
}
.topnav .logo11{

  float: left;
}
.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  
}

.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}




.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}



@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>


<div class="topnav" id="myTopnav">
  <div class="logo11">

  <a href="home.php" class="logo">Online Shopping</a>

  </div>


<a href="logout.php"  style="text-decoration:none">Logout</a>
<a href="changepass.php" style="text-decoration:none">Change Password</a>
<a href="viewfeedback.php" style="text-decoration:none">View Feedback</a>
<a href="vieworder.php" style="text-decoration:none">View Order</a>
<a href="manageorder.php" style="text-decoration:none">Manage Order</a>
<a href="manageitem.php" style="text-decoration:none">Manage Item</a>
<a href="additem.php" style="text-decoration:none">Add Item</a>
<a href="home.php" style="text-decoration:none">Home</a>
  <div class="dropdown">
 
   
  </div> 
 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}




</script>

</body>
</html>
