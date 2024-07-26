<?php
session_start();
require('connection.php');
$nametxt = $_SESSION['nametxt'];


$emailtxt = $_SESSION['emailtxt'];

$citytxt = $_SESSION['citytxt'];

$sessi = $_SESSION["sessi"];
$sumtot = $_SESSION["addtotal"];


// retrieve the textbox value from the session array
if (isset($_SESSION['addtotal'])) {
	// do something with $_SESSION['key']
} else {
	echo "$sumtot ";
}
?>


<?php
$user_id = $_SESSION['id'];
$user_products_query = "select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
$user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
$no_of_user_products = mysqli_num_rows($user_products_result);
$user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
$no_of_user_products = mysqli_num_rows($user_products_result);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bill</title>
	<link href="css/css1.css" rel="stylesheet" />
	<style>
		.box1 {
			box-shadow: 0px 0px 10px 1px #CCCCCC;
			height: 600px;
			width: 1000px;
			margin-left: 110px;
			margin-top: 50px;
		}

		.nam1 {
			background-color: black;
			width: 97%;
			color: #FFF;
			padding: 15px;
			font-size: 30px;
			font-family: Verdana, Geneva, sans-serif;
			font-size: 20PX;
			margin: auto;

		}
		.nam2 {
			background-color: grey;
			width: 97%;
			color: #FFF;
			padding: 15px;
			font-size: 30px;
			font-family: Verdana, Geneva, sans-serif;
			font-size: 20PX;
			margin: auto;

		}

		.cont {
			float: right;
			font-family: Verdana, Geneva, sans-serif;
			font-size: 15PX;
			margin-right: 10px;
			margin-top: -60px;
			color: #FFF;
		}

		#ali {
			text-align: center;
			font-size: 15px;
		}

		.bot1 {
		
			background-color: #000;
			color: #FFF;
			font-family: Verdana, Geneva, sans-serif;
			padding: 5px;
			width: 990px;
			
		}

		.billno {
			float: right;
			margin-right: 0px;
		}

		.title {
			background-color: #F30;
			font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
			font-size: 30px;
			text-align: center;
		}

		.s {
			text-align: center;

		}

		.b {
			width: 100px;
			height: 50px;
			margin-left: 30px;
			border-radius: 30px;
			font-size: 20px;
			margin-top: -5%;
		}

		.b:hover {
			background-color: #666;
		}
	</style>
</head>

<body>
	<div class="box1">
		<div class="nam1">


			<div class="s">
				<font size="6">Online Shopping</font>
			</div>
		</div>
		<div class="cont">1)&nbsp;Mobile No. : 7567674985<br />2)&nbsp;Mobile No. : 7359636269</div>
		
		<div class="nam2">


			<div class="s">
				<font size="6">Invoice</font>
			</div>
		</div>
		 <div class="billno" id="fontface" align="right">
  	&nbsp;&nbsp;&nbsp;Date : <?php echo date('d-M-Y') ?>	
  	&nbsp;&nbsp;&nbsp;&nbsp;Day &nbsp;: <?php echo date('l') ?> 
   
		<div class="billno" id="fontface" align="right">


			



			<table border="0" align="left" width="450px" id="fontface">

				<tr>
					<td>Name :</td>
					<td><?php echo $nametxt; ?></td>
				</tr>


				<tr>
					<td>E-Mail :</td>
					<td><?php echo $emailtxt; ?></td>
				</tr>
				<tr>
					<td>City :</td>
					<td><?php echo $citytxt; ?></td>
				</tr>

				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
			</table>



		
			<table border="1" width="100%" height="150px;">
				<tr>
					<th id="fontface" align="center">Item Name </th>
					<th id="fontface" align="center">Price </th>
					<th id="fontface" align="center">GST(Rs) </th>
					<th id="fontface" align="center">GST(%) </th>
					<th id="fontface" align="center">Total </th>
				</tr>
				<tr>
					
						<?php $counter = 1;
						while ($row = mysqli_fetch_array($user_products_result)) {



							//echo $row['name'] ."<br>";

						?>
						

				
					<th align="center" style="font-weight:200;"><?php echo $row['name'];?></th>

					<th align="center"style="font-weight:200;"><?php echo $row['price'];?></th>

					<th align="center" style="font-weight:200;"><?php echo $sum=$row['price'] * (18/100) ;
					
					$sumtot = $sumtot+$sum;

					
					?></th>
					

					<th align="center"style="font-weight:200;">18%</th>
					<th align="center"style="font-weight:200;"><?php echo $main= $sum+$row['price'] ;
					
					

					?>
					</th>

					</tr>
					<?php $counter = $counter + 1;

				


?>
<?php } ?>
<td colspan="4"  align="right"style="font-weight:900;" >Total RS</th>
					
<td style="font-weight:bold;" align="center"><?php echo $sumtot .'/-'; ?></th>


			</table>
			<br /><br />
			<div class="bot1">
			<center>	1)&nbsp;Email : onlineshopping@gmail.com </center>
				          
			</div>
			<div align="center">
				<br />
				
				<a href="cart.php"><input type="button" value="Back" class="b" /></a>
				<a href='javascript:window.print()'><input type="button" class="b" value="Print" /></a>
				<a href="deletecart.php"><input type="button" value="Ok" class="b" /></a>
				
			</div>
		</div>
</body>

</html>






