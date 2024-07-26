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
			margin-right:5px;
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
			margin-left:-32px;
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

<?php
	include("connection.php");
	
	$qry=mysql_query("select * from items",$con);
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<form action='' method='post'>";
	echo "<table border='1' height='90%'  width='70%' vspace='30%' align='center' bgcolor='#f2f2f2'>";
	echo "<tr>";
	echo "<td colspan='3' bgcolor='gray' align='center'><font size='7px'>DELETE ITEM</font></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align='center' bgcolor='gray'><font size='5px'>Item Name</td>";
	echo "<td align='center' bgcolor='gray'><font size='5px'>Price</td>";
	echo "<td align='center' bgcolor='gray'><font size='5px'>#Delete</td>";
	echo "</tr>";
	
	while($row=mysql_fetch_array($qry))
	{
		echo"<tr>";
		echo"<td align='center'><font size='5px'>".$row['name']."</td>";
		$add="../upload_image/".$row['price'];
		echo"<td align='center'><font size='5px'>".$row['price']."</td>";
		echo"<td align='center'><a href='delete_item_page.php?id=$row[0]'><img src='..\admin\img\delete.png' width='50px'></a></td>";	
		echo"</tr>";
	}
	echo"</table>";
	echo"</form>";
	
?>
