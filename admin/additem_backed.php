<?php
		include("connection.php");
		
		if(isset($_POST['insert']))
		{
			$name=$_POST['name'];
			$price=$_POST['price'];
			
		
			$rating = $_POST['rating'];
			$Description = $_POST['description'];
		
			$thumbnail = $_FILES['thumbnail']['name'];
			$thumbnail_tmp_name = $_FILES['thumbnail']['tmp_name'];
			$product_image = $_FILES['product_image']['name'];
			$product_image_tmp_name = $_FILES['product_image']['tmp_name'];
			$product_image2 = $_FILES['product_image2']['name'];
			$product_image2_tmp_name = $_FILES['product_image2']['tmp_name'];
			$product_image3 = $_FILES['product_image3']['name'];
			$product_image3_tmp_name = $_FILES['product_image3']['tmp_name'];
			$product_image4 = $_FILES['product_image4']['name'];
			$product_image4_tmp_name = $_FILES['product_image4']['tmp_name'];
			$product_image5 = $_FILES['product_image5']['name'];
			$product_image5_tmp_name = $_FILES['product_image5']['tmp_name'];
			
			


			$type = $_POST['tab'];


		$sql2=	"INSERT INTO items ( name, price, rating,type, description, thumbnail, product_image1, product_image2, product_image3, product_image4, product_image5) VALUES ( '$name', '$price', '$rating', '$type','$Description', '$thumbnail', '$product_image', '$product_image2', '$product_image3','$product_image4', '$product_image5');";



		//	$sql="INSERT INTO items (name,price,rating,description,category,thubmnail,product_image1,product_image2,product_image3,product_image4,product_image5) values ('$name', $price,$rating,'$Description','$type','$thumbnail','$product_image','$product_image2','$product_image3','$product_image4','$product_image5')";
mysql_query($sql2,$con) or die(mysql_error($con));
            
$thumbnail_name3=$thumbnail;
move_uploaded_file($thumbnail_tmp_name,"../admin/Uploads/Thumbnail/".$thumbnail_name3);

$product_image1_name=$product_image;
move_uploaded_file($product_image_tmp_name,"../admin/Uploads/Images/".$product_image1_name);

$product_image2_name=$product_image2;
move_uploaded_file($product_image2_tmp_name,"../admin/Uploads/Images/".$product_image2_name);

            
$product_image3_name=$product_image3;
move_uploaded_file($product_image3_tmp_name,"../admin/Uploads/Images/".$product_image3_name);



$product_image4_name=$product_image4;
move_uploaded_file($product_image4_tmp_name,"../admin/Uploads/Images/".$product_image4_name);



$product_image5_name=$product_image5;
move_uploaded_file($product_image5_tmp_name,"../admin/Uploads/Images/".$product_image5_name);


header("Location:additem.php");
		}
