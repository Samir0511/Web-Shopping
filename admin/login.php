<?php
session_start();
if (isset($_SESSION['uid'])) {
	header("location:home.php");
}
?>
<html>

<head>

	<title>login</title>
	<link href="../css/css1.css" rel="stylesheet" />

	<style>

		body{


			overflow: hidden;
		}
		.heder {
			color: #FFF;
			font-size: 28px;
			float: right;
			height: 60px;
			text-align: center;
			width: 100%;
			margin-left: 0;
			margin-top: -2px;
			font-family: Verdana, Geneva, sans-serif;
			background-color: #000;
		}

		.main {
			box-shadow: 0px 0px 10px 1px #B6B6B6;
			height: 100%;
			background: url(../img/intro.jpg);
		}

		.profile {
			box-shadow: 0px 0px 10px 1px #B6B6B6;
			background-color: #999;
			margin-top: 20px;
			text-align: center;
			font-size: 30px;
		}

		.fontface {
			font-family: Verdana, Geneva, sans-serif;
			font-size: 20px;
		}

		#logo1 {
			height: 60px;
			margin-left: 700px;
			margin-top: -295px;
		}

		#title {
			margin-top: 10px;
		}

		.box1 {
			box-shadow: 0px 0px 10px 1px #CCCCCC;
			height: 350px;
			width: 390px;
			margin: 50px;
			background-color: #FFF;

		}

	img{
justify-content: center;
justify-self: center;

		position: absolute;
		top: 70%;
		left: 50%;
		transform: translate(-50%,-30%);
		mix-blend-mode:darken;

	}

		.face {
			color: #666;
			font-family: "Comic Sans MS", cursive;
		}

		#register {
			background-color: #FFF;
			padding: 8px 8px;
		}
	</style>
</head>

<body>

	<div class="heder">
		<strong>
			<p id="title">Online Shopping
		</strong> </p>
	</div>

<center>
	<div class="main">
		<form action="login.php" method="POST">
			<br /><br />
			<div class="box1"><br></br>
				<table border="0" align="center" width="25%" height="250px">
					<tr>
						<td colspan="2" align="center">
							<font color="#666666" size="+3">LOGIN</font>
						</td>
					</tr>
					<tr>
						<td>
							<div class="fontface"><span class="glyphicon glyphicon-log-in"></span> Username</div>
						</td>
						<td><input type="text" name="uname" placeholder="User Name"></td>
					</tr>
					<tr>

						<td>
							<div class="fontface">Password</div>
						</td>
						<td><input type="password" name="pass" placeholder="Password" /></td>
					</tr>
					<tr>

						<td align="center" colspan="2"><input type="submit" name="login" value="login" /></td>
					</tr>
				</table>
			</div>
		</form>
		<center>
			<a href="../index.php"> <img src="../img/IMG-20190309-WA0002.jpg" width="225px" height="80px"></a>
		</center>
	</div>
</center>

<br>
	
</body>

</html>
<?php
include("connection.php");
if (isset($_POST["login"])) {
	$username = $_POST['uname'];
	$password = $_POST['pass'];

	$qry = "SELECT * FROM `admin` WHERE uname = '$username' AND PASSWORD = '$password'";
	$run = mysql_query($qry, $con);
	$row = mysql_num_rows($run);
	if ($row < 1) {
		?>
		<script type="text/javascript">
			alert("username and password not match");
			window.open('login.php', '_self');
		</script>

		<?php
	} else {
		$data = mysql_fetch_assoc($run);
		$id = $data['id'];

		$_SESSION['uid'] = $id;
		header("location:home.php");
	}
}
?>