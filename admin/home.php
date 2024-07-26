<?php
	session_start();
	
	if(isset($_SESSION["uid"]))
	{
		
		echo "";
		
	}
	else
	{
		header('location:login.php');	
		
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin</title>

	<link href="../css/css1.css" rel="stylesheet" />
    
    <style>
		


	/* Fading animation */
	.fade {
 	 -webkit-animation-name: fade;
 	 -webkit-animation-duration: 5s;
 	 animation-name: fade;
 	 animation-duration: 5s;
	}

	@-webkit-keyframes fade {
	  from {opacity: .4} 
 	 to {opacity: 1}
	}

	@keyframes fade {
 	 from {opacity: .4} 
 	 to {opacity: 1}
	}

	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
	
		.text {font-size: 11px}
	}
	#bannerContent{
    position:relative;
    padding-top:6%;
    padding-bottom:6%;
    margin-top:12%;
    margin-bottom:12%;
    background-color:red;
    max-width:660px;
color: white;

background-image: linear-gradient(to right, #fc5c7d, #6a82fb);
transition: all 0.5s ease-in-out;

box-shadow: 2px 2px 4px white;

}
#bannerContent:hover{

	border-radius: 25px;
}
h3 {
  color: white;
  text-shadow: 2px 2px 4px #000000;
}

	</style>
</head>

<body>

	<?php include('header.php'); ?>
	<div id="bannerImage">

<div class="container">
  <center>
	<div id="bannerContent">

	  <h3><b><i>
			<font size="+4">WELCOME</font>
		  </i></b></h3>
	  <br>
	</div>
  </center>
<br /><br /><br /><br /> 
</body>
</html>