<!--
	if(isset($_POST["register"]))
	{
		$email="";
		$name="";
		$phone="";
		$pass1="";
		if(preg_match("/[A-Z][a-z]*/",$_POST['name']))
		{
			$name = $_POST["name"];
			
		}
		else
		{
			$errorname="Enter Valid username";
			echo '<script>alert("Enter Valid username")</script>';
		}
		if(preg_match("/[0-9]{10}/",$_POST['phone']))
		{
			$phone = $_POST["phone"];
		}
		else
			$phoneerror="This is Phone Error";
		
		if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
		{
			
			$email = $_POST["email"];
		}
		else
			$erroremail="Enter Valid Email-Id";
		$gen=$_POST["g"];
		if(preg_match("/[0-9]/",$_POST['pass']))
		{
			echo "hello this is password";
			$pass1 = $_POST["pass"];
		}
		else
			$errorpass="Enter Valid Password";
		
		if(isset($name) && isset($phone) && isset($email) && isset($gen)&& isset($pass))
		{
				echo '<script>alert("Sucessfully Recoreded Data")</script>';
		}
		else
		{
				echo '<script>alert("All Data Are correct")</script>';
		}-->
<?php	
	if(isset($_POST["register"]))
	{
		$email="";
		$name="";
		$phone=0;
		$pass1="";
		$gen="";
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		echo $_POST["phone"];
		$email = $_POST["email"];
		$pass1 = $_POST["pass"];
		$gen=$_POST["g"];
		$db = mysqli_connect("localhost","root","","shopping_site");
		if(!$db)
		{
			die("Connection failed: " . mysqli_connect_error());
		}

		$records = mysqli_query($db,"SELECT * FROM registration WHERE id = (SELECT MAX(id) FROM registration)");
		$id=0;
		while($data = mysqli_fetch_array($records))
		{
			$id=$data['id'];
		}
		$id=$id+1;
		$temp=$_POST['drop'];
		//echo $id;
		$add=$_POST['Address'];
		$sql = "INSERT INTO registration (id, name,Phno,Email,Gender,Password,logintype,Address) VALUES ('$id','$name','$phone','$email','$gen','$pass1','$temp','$add')";
		if (mysqli_query($db, $sql)) 
		{
			//echo "New record created successfully";
		}
		else
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($db);
		}
	}
?>
<html >

<head>
	<meta charset="utf-8">
	<title>Register</title>
	

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
<form method = "post" > 
	<div class="container" >
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Register </span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Registration</h2>
			</div>
			<label>Select User type</label><br>
			<select id="wgtmsr" name="drop">
				<option>User</option>
				<option>Admin</option>
			</select><br />
			<label>Full Name</label>
			<br/>
			<input type="text" id="name" name="name">
			<br/>
			<label >Phone Number</label>
			<br/>
			<input type="number" id="phone" name="phone">
			<br/>
			
			<label >Email-Id</label>
			<br/>
			<input type="text" id="Email-Id" name="email">
			<br/>
			
			<label>Gender :</label><br>
			<input type="radio" name="g" value="Male"/> Male <br>
			<input type="radio" name="g" value="Female"/> Female <br>
			<input type="radio" name="g" value="Other"/> Other <br>
			
			<label >Password</label>
			<br/>
			<input type="Password" id="Password" name="pass">
			<br/>
			
			<label >Confirm Password</label>
			<br/>
			<input type="Password" id="Password" name="Con_Pass">
			<br/>
			
			<label >Address</label>
			<br/>
			<input type="text" id="address" name="Address">
			<br/>
			
			<button type="submit" name="register" id="register" >Register</button>
			<br/>
			
			<a href="Login.php" ><p class="small">Go Back to Signin</p></a>
		</div>
	</div>
</form>
</body>



</html>