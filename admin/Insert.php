<br><br><br>
<?php
$temp1="";
$catidtostore="";
include 'database.php';
if(isset($_POST['submit']))
{
	$records = mysqli_query($conn,"SELECT * FROM product WHERE PID = (SELECT MAX(PID) FROM product)");
	$id=0;
	while($data = mysqli_fetch_array($records))
	{
		$id=$data['PID'];
	}
	$id=$id+1;
	echo $id;
	
	if(!empty($_POST['catdrop']))
	{
		$records = mysqli_query($conn,"SELECT * FROM category");
		$id1="";
		$catnamedrop=$_POST['catdrop'];
		while($data = mysqli_fetch_array($records))
		{
			$id1=$data['catname'];
			if($id1==$catnamedrop)
			{
				$catidtostore=$data['catid'];
				break;
			}
		}
	}
	
	$productname=$_POST['pro'];
	$productprice=$_POST['price'];
	$productdesc=$_POST['desc'];
	$sql = "INSERT INTO product (PID,CATID,PRODUCT_NAME,PRODUCT_IMAGE,PRODUCT_PRICE,PRODUCT_DESC) VALUES ('$id','$catidtostore','$productname','$id','$productprice','$productdesc')";
	if (mysqli_query($conn, $sql)) 
	{
		echo "New record created successfully";
		$temp1="yes";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
?>

<html>
<body>
<form method="post">
<?php include 'header.php';?>
<center><h1>Insertion operation in database</h1>
	<br><br>
	<h4>Enter Product Name</h4><input type="text" name="pro"><br>
	<h4>Enter Product Image</h4><?php include 'image.php';?><br>
	<h4>Choose Category</h4>
	<select name="catdrop">
	<option>Select Category</option>
	<?php
	
	$records = mysqli_query($conn,"SELECT * FROM category");
		$id="";
		while($data = mysqli_fetch_array($records))
		{
			$id=$data['catname'];
			?><option><?php echo $id;?></option><?php
		}?>
		</select>
		<br>
		
	<h4>Enter product Price</h4><input type="number" name="price"><br>
	<h4>Enter product Description</h4> <input type="text" name="desc"><br>
	
	<input type="submit" name="submit">

	</center>
</form>
</body>
</html>