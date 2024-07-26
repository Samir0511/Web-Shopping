
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
 </br/><br/> </br/><br/><br><br>
<?php
	include("connection.php");

	$qry=mysql_query("select * from feedback;",$con);
	echo "<form action='' method='post'>";
	echo "<table border='2'  height='43%' width='45%' align='center' vspace='30%' bgcolor='#f2f2f2'>";
	
	echo "<tr align='center'>";
	echo "<td colspan='4' bgcolor='f2f2f2'><font size='7px'> VIEW FEEDBACK</font></td>";
	echo "<tr align='center'>";
	echo "<td bgcolor='gray' align='center'><font size='5px'>Name</td>";
	echo "<td bgcolor='gray' align='center'><font size='5px'>Mobile_no</td>";
	echo "<td bgcolor='gray' align='center'><font size='5px'>Massage</td>";
	echo "<td bgcolor='gray' align='center'><font size='5px'>Delete</td>";
	
	echo "</tr>";
	
	while($row=mysql_fetch_array($qry))
	{
		echo"<tr>";
		echo"<td align='center'><font size='5px'>".$row['NAME']."</td>";
		echo"<td align='center'><font size='5px'>".$row['MOBILE_NO']."</td>";
		echo"<td align='center'><font size='5px'>".$row['MESSAGE']."</td>";
		echo"<td align='center'><a href='delete_feedback_page.php?id=$row[0]'><img src='..\admin\img\delete.png' width='50px'></img></a></td>";
			
		echo"</tr>";
		
		
	}
	echo"</table>";
	echo"</form>";
	
?>
 </body>
</html>


