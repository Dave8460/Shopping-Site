<html>
<head>
</head>
<body>
<?php include 'header.php';?>
<form method="post">
<br><br><center>
	<h1>Insert the new category of the product</h1>
	<br><br>
	<h4>Enter the new category</h4>
	<br>
	<input type="text" name="newcat"><br>
	<br>
	<input type="submit" name="submit">
	</center>
</form>
<?php
if(isset($_POST["submit"]))
{
include 'database.php';
$records = mysqli_query($conn,"SELECT * FROM category WHERE catid = (SELECT MAX(catid) FROM category)");
$id=0;
while($data = mysqli_fetch_array($records))
{
	$id=$data['catid'];
}
$id=$id+1;
$cat=$_POST['newcat'];
$sql = "INSERT INTO category (catid, catname) VALUES ('$id','$cat')";
		if (mysqli_query($conn, $sql)) 
		{
			echo "New record created successfully";
		}
		else
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}
?>
</body>
</html>