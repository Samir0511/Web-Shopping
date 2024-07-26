<?php
	$cn=mysql_connect("localhost","root","") or die("no connection");
	$db=mysql_select_db("online",$cn) or die("database not found");
	
	if(isset($_POST["s1"]))
	{
		
		$name=$_POST["name"];
		$ms=$_POST["ms"];
		$mobile=$_POST["mobile"];
		mysql_query("INSERT INTO `online`.`feedback` (`ID`, `NAME`, `MOBILE_NO`, `MESSAGE`) VALUES ('', '$name', '$mobile', '$ms');",$cn) or die("insert no success");
	
		echo '<script type="text/javascript"> alert("Massage Sucessfully Send"); </script>';
		
		header("refresh:0;url=index.php");
	}
	
?>


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
	
		.box1
		{
			box-shadow:0px 0px 10px 1px #CCCCCC;
			background:#000;
			color:#FFF;
			height:350px;
			width:450px;
			margin-left:450px;
			text-align:center;
			border-radius:15px;
			
		}
		.inputbrdr
		{
			color:black;
			border-radius:4px;
			width:190px;
		}
		.feedbackbtn
		{
			width:150px;
			height:50px;
			border-radius:4px;
			background:#FF5151;
			font-size:18px;
					
		}
		.feedbackbtn:hover
		{
			
			background:#FF2828;
		
		}
		.fontface
		{	
			font-family:Verdana, Geneva, sans-serif;
			font-size:20px;
		}
		
		</style>
</head>
<body background="img/intro.jpg" >
	 <div>
	 <?php
            require 'header.php';
           ?>
     </div>
<form action="" method="post" >
<table>
<tr><td><h6></h6></td></tr>
</table>
<table>
<tr><td><h6></h6></td></tr>
</table>
<table>
<tr><td><h6></h6></td></tr>
</table>
<table>
<tr><td><h6></h6></td></tr>
</table>
<table width="80%" height="95%" border="0" align="center" class="box1"  >
<tr>
	<td colspan="2" align="center" class="f">
    	<font color="#FF6464" size="+3"><b>Feedback</b></font>
    </td>
 </tr>
<tr><td></td></tr>
<tr>
    <td class="fontface"><b>Name</b></td>
    <td><input type="text" name="name" class="inputbrdr" placeholder="Enter Name" required></td>
  </tr>

   <tr>
    <td class="fontface"><b>Mobile</b></td>
    <td><input type="number" name="mobile" class="inputbrdr" placeholder="Enter Mobile No." maxlength="10" required></td>
  </tr>

	<tr>
    <td class="fontface">&nbsp; &nbsp;<b>Massage</b></td>
    <td><textarea rows="5" name="ms" class="inputbrdr" placeholder="Enter Massage" required></textarea></td>
  </tr>

    <tr>
 	 <td colspan="2" align="center"><input type="submit" class="feedbackbtn" name="s1" value="submit" class="sub"></td>
  </tr>
  

</table>
</form>


</body>
</html>