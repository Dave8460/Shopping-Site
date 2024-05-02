<?php
$username="localhost";
$un="root";
$pwd="";
$dbname="shopping_site";
session_start();
$var=0;
$conn = mysqli_connect("localhost", "root", "","shopping_site");
	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
        $upassword = $_POST['psw'];
        $lgt = $_POST['category'];
		
        $sql = "select * from registration where name='$uname' and Password='$upassword' and logintype='$lgt'";
        $res = mysqli_query($conn, $sql);
        $result=mysqli_fetch_array($res);
        if($result)
        {
			$temp="yes";
			$var=$result['id'];
		    echo "<h2>You are login Successfully...</h2>";
        }
        else
        {
			echo " <h2>Wrong username or password</h2>";
        }
		echo $temp;
		echo $var;
		if($temp!=null && $lgt=="Admin")
		{
				$admin="admin";
				
				header("Location:admin/home.php?id=$uname");
		}
		else
		{
			$user="user";
			header("Location:user/home.php?id=$var");
		}
	}
?>

<!DOCTYPE html>
<html >

<head>
	<meta charset="utf-8">
	<title>Sign In</title>


	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<style>
	body {
  background-image: url('https://images.herzindagi.info/image/2019/May/kids-accessories.jpg');
  background-repeat: no-repeat;
  background-size: cover;
	font-size: 16px;
	font-family: 'Lato', sans-serif;
	font-weight: 300;
	margin: 0;
	color: #666;
	background-size: 1600px 800px;
	}
	#wgtmsr{
 width:150px;   
}
</style>
</head>

<body>
<form action="Login.php" method="POST">
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Sign In </span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username">Choose</label>
			<br/>
			<select id="wgtmsr" name="category">
				<option>User</option>
				<option>Admin</option>
			</select><br />
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username" name="uname">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" name="psw">
			<br/>
			<button type="submit" name="submit" >Sign In</button>
			<br/>
			<a href="Registration.php"><p class="small">Register</p></a>
		</div>
	</div>
</form>
</body>
</html>