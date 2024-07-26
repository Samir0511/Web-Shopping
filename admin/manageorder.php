
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
			margin-left:-40px;
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
 </br/><br/> </br/><br/>
<?php
	include("connection.php");

	$qry=mysql_query("SELECT * FROM `users_items`;",$con);
	echo"<html>";
	echo"<table height=5%>";
	echo"<tr><h2></h2></tr>";
	echo"</table>";
	echo"</html>";
	echo "<form action='' method='post' >";
	echo "<table border='2'  height='60%' width='50%' align='center'  vspace='30%' bgcolor='#f2f2f2' >";
	
	echo "<tr align='center'>";
	
	echo "<td colspan='5' bgcolor='grey'><font size='7px'> MANAGE ORDER</font></td>";
	echo "<tr align='center'>";
	
	echo "<td bgcolor='grey' align='center'><font size='5px'>ID</td>";
	echo "<td bgcolor='grey' align='center'><font size='5px'>User_id</td>";
	echo "<td bgcolor='grey' align='center'><font size='5px'>Item_id</td>";
	echo "<td bgcolor='grey' align='center'><font size='5px'>Status</td>";
	echo "<td align='center' bgcolor='grey'><font size='5px'>Delete</td>";
	echo "</tr>";
	while($row=mysql_fetch_array($qry))
	{
		echo"<tr>";
		
		echo"<td align='center'><font size='5px'>".$row['id']."</td>";
		echo"<td align='center'><font size='5px'>".$row['user_id']."</td>";
		echo"<td align='center'><font size='5px'>".$row['item_id']."</td>";
		echo"<td align='center'><font size='5px'>".$row['status']."</td>";
		echo"<td align='center'><a href='delete_itemspage.php?id=$row[0]'><img src='..\admin\img\delete.png' width='50px'></a></td>";	
		echo"</tr>";
	}
	echo"</table>";
	echo"</form>";
?>
 </body>
</html>


