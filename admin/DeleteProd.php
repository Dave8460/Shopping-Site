<?php
$temp="true";
$var=$_GET['pro'];
$tempvar=$var;
include 'database.php';
$records = mysqli_query($conn,"SELECT * FROM product WHERE PID = (SELECT MAX(PID) FROM product)");
$id=0;
while($data = mysqli_fetch_array($records))
{
	$id=$data['PID'];
}
$tempid=$id;
if($var==$id)
{
	$sql = "delete from product where PID='$var'";
		if (mysqli_query($conn, $sql)) 
		{
			echo "Record Deleted Successfully";
			header("Location:seeproduct.php");
			include 'img.php';
		}
		else
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}
else
{
	$sql = "delete from product where PID='$var'";
	if (mysqli_query($conn, $sql)) 
	{
		echo "Record Deleted Successfully";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	for($i=$var+1;$i<=$id;$i++)
	{
		echo "id ti be updates".$i;
		echo "<br>";
		$v=$i-1;
		$iv=$v;
		echo "id to be store".$v."<br>";
		$sql = "update product set PID='$v',PRODUCT_IMAGE='$v' where PID='$i'";
		
		if (mysqli_query($conn, $sql)) 
		{
			$temp="true";
		}
		else
		{
			$temp="false";
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	include 'img.php';
	if($temp=="true")
	{
		header("Location:seeproduct.php");
	}
	else
	{
		
	}
	
}
?>