<?php

include("connection.php");



$id=$_GET['id'];

$qry=mysql_query("delete from items where id=$id;",$con);

echo '<script type="text/javascript"> alert("Delete Sucessfully"); </script>';
		
		header("refresh:0;url=deleteitem.php");



?>