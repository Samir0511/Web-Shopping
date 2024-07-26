<?php
	
	session_start();
	
	if(isset($_SESSION["uid"]))
	{
		
		echo "";
		
	}
	else
	{
		header('location:login.php');	
		
	}
?>
<html>
<head>

	<title>login</title>
	<link href="../css/css1.css" rel="stylesheet" />
    
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
			width:1340px;
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
			width:191.4px;
			height:50px;
			line-height:50px;
		}
		#fontface
		{
			
			font-family:Verdana, Geneva, sans-serif;
			font-size:20PX;
			text-align:center;
			margin-right:-149px;
			margin-left:-40px;
			margin-top:-20px;
			padding-bottom:-10px;
			float:none;
		}
		.box1
		{
			box-shadow:0px 0px 10px 1px #CCCCCC;
			height:450px;
			width:400px;
			margin-top:50px;
			margin-left:500px;
			background-color:#FFF;
			
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

<br/><br/><br/><br>
<div class="box1">
<form action="changepass.php" method="post">
<table border="0" align="center" width="85%" height="100%" vspace="30%">
 
<tr>
	<td colspan="2">
 		 <font color="#666666" size="+3">CHANGE PASSWORD</a></font>
    </td> 
</tr>
<tr>
	<td id="fontface">Username</td>
    <td><input type="text" name="uname" placeholder="User Name"></td>
</tr>
<tr>
 	<td id="fontface">Old Password</td>
    <td><input type="text" name="opass" placeholder="Old Password"></td>
</tr>
<tr>
 	<td id="fontface">New Password</td>
    <td><input type="password" name="npass" placeholder="New Password"></td>
</tr>
<tr>
 	<td id="fontface">Confirm Password</td>
    <td><input type="password" name="cpass" placeholder="Conform Password"></td>
</tr>
<tr>
 	<td colspan="2" align="center"><input type="submit" name="conform" value="Confirm" class="sub"></td>
</tr>

</table>
</form>
</div>
</body>
</html>
<?php
	include('connection.php');
	if(isset($_POST['conform']))
	{
	
		$username=$_POST['uname'];
		$password=$_POST['opass'];
		$npassword=$_POST['npass'];
		$cpassword=$_POST['cpass'];
		$id=$_SESSION['uid'];
		if($npassword==$cpassword )
		{
			
			$qry=mysql_query("select uname,password from admin where id=$id;",$con);
		
			$data=mysql_fetch_assoc($qry);
			
			if($data['password']==$password)
			{
				if($qry==true)
				{
					$qry1=mysql_query("UPDATE `online`.`admin` SET `password` = '$npassword' WHERE `admin`.`id` =$id;",$con);	
					
					
					echo "Update successfully";
					
				}
			}
			else
			{
				?>
            		<script type="text/javascript">
						alert("old password not match");
					</script>
         	   <?php
			}
				
		}
		else
		{
			?>
            	<script type="text/javascript">
					alert("new password and conforn password are not match");
				</script>
            <?php	
		}
		echo '<script type="text/javascript"> alert("Change Password Sucessfully"); </script>';
		
		header("refresh:0;url=home.php");
	}
?>