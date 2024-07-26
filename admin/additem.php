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
			width:100%;
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
		.bb
		{
			margin-top:100px;
		}	
		table{
			background-color: white;
			box-shadow:0px 0px 10px 1px #CCCCCC;

		}
		body {
  font-family: arial;
}
.hide {
  display: none;
}
p {
  font-weight: bold;
}
	   </style>
</head>
<body>


 
<?php include('header.php'); ?>
<br/><br/>        
<div class="bb">
 <form action="additem_backed.php" method="post" enctype="multipart/form-data" >
 <table border="2" height="450px" width="40%" align="center" vspace="50%">
 <tr>
 	<td colspan="2" align="center" id="fontface"><font color="#666666" size="+3">Add Item</td>
    
 </tr>
  <tr>
 	<td id="fontface">Item Name</td>
    <td><input type="text" name="name" placeholder="Item Name" required></td>
 </tr>
 
  <tr>
 	<td id="fontface">Enter Price</td>
    <td><input type="text" name="price" placeholder="Price" required></td>
 </tr>
 <tr>
 	<td id="fontface">Rating</td>
	<td><input type="range" name="rating" min="0" max="5"></td>

</tr>
<tr>
 	<td id="fontface">Description</td>
	<td><textarea name="description" id="" cols="30" rows="10"></textarea></td>

</tr>
<tr>
 	
<td align="center">


Category



</td>

<td>
	
Mobile<input type="radio" name="tab" value="Mobile" onclick="show1();" /><br>

COMPUTER<input type="radio" name="tab" value="COMPUTER" onclick="show2();" /><br>
Cloths<input type="radio" name="tab" value="Cloths" onclick="show3();" /><br>
Watch<input type="radio" name="tab" value="Watch" onclick="show4();" /><br>
TV<input type="radio" name="tab" value="TV" onclick="show5();" /><br>
Home Appliences<input type="radio" name="tab" value="Home_Appliences" onclick="show6();" /><br>
Shoes<input type="radio" name="tab" value="Shoes" onclick="show7();" /><br>
Goggles<input type="radio" name="tab" value="Goggles" onclick="show8();" /><br>
Camera<input type="radio" name="tab" value="Camera" onclick="show9();" /><br>




</td>


</tr>



<tr>
 	<td id="fontface">Thumbnail</td>
	<td><input type="file" name="thumbnail"></td>

</tr>
<tr>
 	<td id="fontface">product_image</td>
	<td><input type="file" name="product_image"></td>

</tr>


<tr>
 	<td id="fontface">product_image 2</td>
	<td><input type="file" name="product_image2"></td>

</tr>
<tr>
 	<td id="fontface">product_image 3</td>
	<td><input type="file" name="product_image3"></td>

</tr>
<tr>
 	<td id="fontface">product_image 4</td>
	<td><input type="file" name="product_image4"></td>

</tr>
<tr>
 	<td id="fontface">product_image 5</td>
	<td><input type="file" name="product_image5"></td>

</tr>
 <tr>
 	<td colspan="2" align="center"><input type="submit" name="insert" value="Submit" class="sub"></td>
 </tr>
 </table>
 </form>
 </div>
 </body>
</html>
</body>
</html>
