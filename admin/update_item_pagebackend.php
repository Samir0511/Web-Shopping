<?php
   
session_start();
   


include("connection.php");



if (isset($_SESSION["uid"])) {
	echo "";
} else {
	header('location:../login.php');
}


if (isset($_POST['update1'])) {
	$name = $_POST['name'];
	$price = $_POST['price'];

$sid=$_SESSION['id2'];

	$rating = $_POST['rating'];
	$Description = $_POST['description'];

	$thumbnail = $_FILES['thumbnail']['name'];
	$thumbnail_tmp_name = $_FILES['thumbnail']['tmp_name'];
	$product_image = $_FILES['Image1']['name'];
	$product_image_tmp_name = $_FILES['Image1']['tmp_name'];
	$product_image2 = $_FILES['Image2']['name'];
	$product_image2_tmp_name = $_FILES['Image2']['tmp_name'];
	$product_image3 = $_FILES['Image3']['name'];
	$product_image3_tmp_name = $_FILES['Image3']['tmp_name'];
	$product_image4 = $_FILES['Image4']['name'];
	$product_image4_tmp_name = $_FILES['Image4']['tmp_name'];
	$product_image5 = $_FILES['Image5']['name'];
	$product_image5_tmp_name = $_FILES['Image5']['tmp_name'];


	$type = $_POST['tab'];


	$sql5 =	"UPDATE items SET name='$name',price='$price',rating='$rating',type='$type',description='$Description',thumbnail='$thumbnail',product_image1='$product_image',product_image2='$product_image2',product_image3='$product_image3',product_image4='$product_image4',product_image5='$product_image5' WHERE id=$sid";



	//	$sql="INSERT INTO items (name,price,rating,description,category,thubmnail,product_image1,product_image2,product_image3,product_image4,product_image5) values ('$name', $price,$rating,'$Description','$type','$thumbnail','$product_image','$product_image2','$product_image3','$product_image4','$product_image5')";

    mysql_query($sql5,$con) or die("uploading error");


	$thumbnail_name3 = $thumbnail;
	move_uploaded_file($thumbnail_tmp_name, "../admin/Uploads/Thumbnail/" . $thumbnail_name3);

	$product_image1_name = $product_image;
	move_uploaded_file($product_image_tmp_name, "../admin/Uploads/Images/" . $product_image1_name);

	$product_image2_name = $product_image2;
	move_uploaded_file($product_image2_tmp_name, "../admin/Uploads/Images/" . $product_image2_name);


	$product_image3_name = $product_image3;
	move_uploaded_file($product_image3_tmp_name, "../admin/Uploads/Images/" . $product_image3_name);



	$product_image4_name = $product_image4;
	move_uploaded_file($product_image4_tmp_name, "../admin/Uploads/Images/" . $product_image4_name);



	$product_image5_name = $product_image5;
	move_uploaded_file($product_image5_tmp_name, "../admin/Uploads/Images/" . $product_image5_name);

header("Location:home.php");
}
?>