<?php
session_start();
include("../connection.php");


if(isset($_POST['insert']))
{
    $name=$_POST['name'];
	$price=$_POST['price'];
    $rating = $_POST['rating'];
	$Description = $_POST['description'];
		    
            $thumbnail = $_FILES['thumbnail']['name'];
			$product_image = $_FILES['product_image']['name'];
			$product_image2 = $_FILES['product_image2']['name'];
			$product_image3 = $_FILES['product_image3']['name'];
			$product_image4 = $_FILES['product_image4']['name'];
			$product_image5 = $_FILES['product_image5']['name'];
			$type = $_POST['tab'];

            $sql="INSERT INTO `online`.`items` (name,price,rating,description,category,thubmnail,product_image1,product_image2,product_image3,product_image4,product_image5) VALUES ('$name', $price,$rating,'$Description','$type','$thumbnail','$product_image','$product_image2','$product_image3','$product_image4','$product_image5')";
mysql_query($sql,$con);



if($picture_size<=50000000)
	{
$pic_name=time()."_".$picture_name;
move_uploaded_file($picture_tmp_name,"../product_images/".$pic_name);

mysql_query($con,"insert into products (product_cat, product_brand,product_title,product_price, product_desc, product_image,product_keywords) values ('$product_type','$brand','$product_name','$price','$details','$pic_name','$tags')") or die ("query incorrect");

header("location: sumit_form.php?success=1");

}

		}	
		

$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$c_price=$_POST['c_price'];
$product_type=$_POST['product_type'];
$brand=$_POST['brand'];
$tags=$_POST['tags'];

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"../product_images/".$pic_name);
		
mysqli_query($con,"insert into products (product_cat, product_brand,product_title,product_price, product_desc, product_image,product_keywords) values ('$product_type','$brand','$product_name','$price','$details','$pic_name','$tags')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");
}