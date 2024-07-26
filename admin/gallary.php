<?php
	session_start();
	
	if(isset($_SESSION["uid"]))
	{
		echo "";
		
	}
	else
	{
		header('location:../login.php');
	}
?>
<html>
<head>
		<title>home</title>

		<link  rel="stylesheet" type="text/css" href="../css/css1.css"/>
       <style>
	   	#logout
		
		{
				color:#FFF;
				font-size:22px;
				margin-top:-605px;
				margin-left:950px;
		}
		
		
		.profile
		{
			background-color:#6FC;
			margin-top:90px;
			text-align:center;
			
			height:35px;
			width:1200px;
			font-family:Verdana, Geneva, sans-serif;
			font-size:30PX;
		}
	   </style>
</head>
<body>
		

<div class="heder">
 		<strong><p id="title">Mobile</strong> Shop <a href="logout.php" id="logout" style="text-decoration:none">Logout</a></p>
</div>
	
 
<ul id="fontface">
    	<li><a href="home.php" style="text-decoration:none"><font color="#000000">Home</font></a></li>
        <li><a href="gallary.php" style="text-decoration:none"><font color="#000000">Upload gallary</font></a></li>
        <li><a href="upload_mobile.php" style="text-decoration:none"><font color="#000000">New Mobile</font></a></li>
        <li><a href="viewfeedback.php" style="text-decoration:none"><font color="#000000">View Feedback</font></a></li>
        <li><a href="viweregister.php" style="text-decoration:none"><font color="#000000">View Register</font></a></li>
         <li><a href="#" style="text-decoration:none"><font color="#000000">View Order</font></a></li>
        <li><a href="changepass.php" style="text-decoration:none"><font color="#000000">Change Password</font></a></li>
       
    </ul>

   <center><div class="profile">GALLARY</div></center>
<table border="0" height="50%" width="50%" align="center" vspace="30%">

<tr>
	<td align="center"><a href="insert_gallary.php"><img src="../image/IMG-20190309-WA0008.jpg" width="200px"></a></td>
    <td align="center"><a href="update_galary.php"><img src="../image/Untitled.png" width="150px"></a></td>
    <td align="center"><a href="delete_gallary.php"><img src="../image/IMG-20190309-WA0001.jpg" width="200px"></a></td>
</tr>
</table>

</body>
</html>