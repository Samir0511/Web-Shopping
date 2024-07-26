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
		

		<link  rel="stylesheet" type="text/css" href="../css/css1.css"/>
       <style>
	   #logout
		{
				color:#ccc;
				font-size:22px;
				margin:3px;
				padding-right:120px;
				float:right;
		}
	   .heder
		{
			color: #FFF;
			font-size:28px;
			float:right;
			height:60px;
			width:1320px;
			margin-right:15px;
			margin-top:-5px;
			font-family:Verdana, Geneva, sans-serif;
			background-color:#000000;
		}
		ul li:hover
		{ 
			background-color:#FF0;
		}
		ul li
		{
			color:#FFF;
			background-color:#CCC;	
			list-style:none;
			float:left;
			width:188.5px;
			height:50px;
			line-height:50px;
		}
		#fontface
		{
			font-family:Verdana, Geneva, sans-serif;
			font-size:20PX;
			text-align:center;
			margin-right:-147px;
			margin-left:-25px;
			margin-top:-20px;
			padding-bottom:-10px;
			float:none;
		}
		.profile
		{
			background-color:#999;
			margin-top:90px;
			text-align:center;
			height:35px;
			width:1200px;
			font-family:Verdana, Geneva, sans-serif;
			font-size:30PX;
		}
		#title
		{
			margin-left:545px;
			margin-top:10px;	
		}
	   </style>
</head>
<body>
		

<?php include('header.php'); ?>
  
<table border="0" height="50%" width="50%" align="center" vspace="30%">

<tr>
	<td align="center"><a href="additem.php"><img src="..\admin\img\insert.jpg" width="200px"></a></td>
    <td align="center"><a href="updateitem.php"><img src="..\admin\img\update.png" width="150px"></a></td>
    <td align="center"><a href="deleteitem.php"><img src="..\admin\img\del.jpg" width="200px"></a></td>
</tr>
</table>

</body>
</html>