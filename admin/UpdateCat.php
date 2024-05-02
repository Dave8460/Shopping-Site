<?php
$var=$_GET['cat'];
include 'database.php';
if(isset($_POST["submit"]))
{
	echo "Hello World";
	$v=$_POST['catname'];
	$t=$_POST['id'];
	
	$sql = "update category set catname='$v' where catid='$t'";
	if (mysqli_query($conn, $sql)) 
	{
		header("Location:seecategory.php");
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
?>
<html>
<head>
</head>
<body>
<form method="post">
<?php
$records = mysqli_query($conn,"SELECT * FROM category where catid='$var'");
while($data = mysqli_fetch_array($records))
{
?>
	<input type="text" value="<?php echo $data['catid'];?>" readonly name="id"><br>
	<input type="text" value="<?php echo $data['catname'];?>" name="catname"><br>
	<input type="submit" name="submit" value="Update">
<?php
}
?>
</form>
</body>
</html>