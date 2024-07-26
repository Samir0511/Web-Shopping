<?php
session_start();

if (isset($_SESSION["uid"])) {
	echo "";
} else {
	header('location:../login.php');
}
?>
<html>

<head>

	<link rel="stylesheet" type="text/css" href="../css/css1.css" />
	<style>
		#logout {
			color: #ccc;
			font-size: 22px;
			margin: 3px;
			padding-right: 120px;
			float: right;
		}

		.heder {
			color: #FFF;
			font-size: 28px;
			float: right;
			height: 60px;
			width: 1320px;
			margin-right: 5px;
			margin-top: -5px;
			font-family: Verdana, Geneva, sans-serif;
			background-color: #000000;
		}

		ul li:hover {
			background-color: #FF0;
		}

		ul li {
			color: #FFF;
			background-color: #CCC;
			list-style: none;
			float: left;
			width: 188.5px;
			height: 50px;
			line-height: 50px;
		}

		#fontface {
			font-family: Verdana, Geneva, sans-serif;
			font-size: 20PX;
			text-align: center;
			margin-right: -147px;
			margin-left: -32px;
			margin-top: -20px;
			padding-bottom: -10px;
			float: none;
		}

		.profile {
			background-color: #999;
			margin-top: 90px;
			text-align: center;
			height: 35px;
			width: 1200px;
			font-family: Verdana, Geneva, sans-serif;
			font-size: 30PX;
		}

		table {
			background-color: white;
			box-shadow: 0px 0px 10px 1px #CCCCCC;

		}

		#title {
			margin-left: 545px;
			margin-top: 10px;
		}
	</style>
</head>

<body>
	<?php include('header.php'); ?>


	</br /><br /> </br /><br />
</body>

</html>

<?php

include("connection.php");
$id = $_GET['id'];

$qry = mysql_query("select * from items where id=$id", $con);
echo "<form action='update_item_pagebackend.php' method='post' enctype='multipart/form-data'>";
$_SESSION['id2'] = $id;
while ($row = mysql_fetch_array($qry)) {
	echo "<div class='box1'>";
	echo "<table border='1' height='300px' width='50%' align='center' vspace='20%' >";
	echo "<tr align='center'>";
	echo "<td colspan='2' id='fontface'><font color='666666' size='+3'>UPDATE ITEM</font></td></tr>";
	echo "<td id='fontface' width='30%'>Item Name</td>";
	echo "<td><input type='text' name='name' value='$row[1]'></td>";
	echo "<tr><td id='fontface'>price</td>";
	echo "<td><input type='text' name='price' value='$row[2]' ></td></tr>";
	echo "<tr><td id='fontface'>rating</td>";
	echo "<td><input type='text' name='rating' value='$row[3]' ></td></tr>";
	
	echo'<tr>';

 	
echo'	<td align="center">';
	
	
echo'Category';
	
	
	
echo'	</td>';
	
echo'<td>';
		
echo'Mobile<input type="radio" name="tab" value="Mobile" onclick="show1();" /><br>';
	
echo'COMPUTER<input type="radio" name="tab" value="COMPUTER" onclick="show2();" /><br>';
echo'Cloths<input type="radio" name="tab" value="Cloths" onclick="show3();" /><br>';
echo'Watch<input type="radio" name="tab" value="Watch" onclick="show4();" /><br>';
echo'	TV<input type="radio" name="tab" value="TV" onclick="show5();" /><br>';
echo'Home Appliences<input type="radio" name="tab" value="Home_Appliences" onclick="show6();" /><br>';
echo'Shoes<input type="radio" name="tab" value="Shoes" onclick="show7();" /><br>';
echo'	Goggles<input type="radio" name="tab" value="Goggles" onclick="show8();" /><br>';
echo'	Camera<input type="radio" name="tab" value="Camera" onclick="show9();" /><br>';
	
	
	
	
echo'</td>';
	
	
echo'</tr>';
	
	echo "<tr><td id='fontface'>description</td>";
	echo "<td><textarea name='description' cols='30' rows='10' value='$row[6]'></textarea></td></tr>";


	echo "<tr><td id='fontface'>thumbnail</td>";
	echo "<td><input type='file' name='thumbnail' ></td></tr>";

	echo "<tr><td id='fontface'>Image1</td>";
	echo "<td><input type='file' name='Image1' ></td></tr>";
	echo "<tr><td id='fontface'>Image2</td>";
	echo "<td><input type='file' name='Image2' ></td></tr>";
	echo "<tr><td id='fontface'>Image3</td>";
	echo "<td><input type='file' name='Image3' ></td></tr>";
	echo "<tr><td id='fontface'>Image4</td>";
	echo "<td><input type='file' name='Image4' ></td></tr>";
	echo "<tr><td id='fontface'>Image5</td>";
	echo "<td><input type='file' name='Image5' ></td></tr>";


	echo "<tr><td colspan='2' align='center'><input type='submit' name='update1' value='Update' class='sub'>";

	echo "</tr>";
	echo "</table>";
	echo "</div>";
}
echo "</form>";

?>
