<?php
include 'database.php';
$records = mysqli_query($conn,"SELECT * FROM img WHERE PID = (SELECT MAX(PID) FROM img)");
$id=0;
while($data = mysqli_fetch_array($records))
{
	$id=$data['PID'];
}
if($var==$id)
{
	$sql = "delete from img where PID='$var'";
		if (mysqli_query($conn, $sql)) 
		{
			echo "Record Deleted Successfully";
		}
		else
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}
else
{
	$sql = "delete from img where PID='$var'";
	if (mysqli_query($conn, $sql)) 
	{
		echo "Record Deleted Successfully";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	for($ii=$tempvar+1;$ii<=$tempid;$ii++)
	{
		echo "id to be updates in img".$ii;
		echo "<br>";
		$v=$ii-1;
		echo "id to be store".$v."<br>";
		$sql = "update img set PID='$v' where PID='$ii'";
		if (mysqli_query($conn, $sql)) 
		{
			echo "hello any query is updated or not";
			$temp="true";
		}
		else
		{
			$temp="false";
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}
?>