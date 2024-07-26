<?php

include("connection.php");



$id=$_GET['id'];

$qry=mysql_query("delete from feedback where id=$id;",$con);

echo '<script type="text/javascript"> alert("Delete Feedback Sucessfully "); </script>';

header("refresh:0;url=viewfeedback.php");



?>
