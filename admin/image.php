<?php
if(isset($_POST['submit']) && $temp1=="yes")
{
	$var=$_POST['f1'];
	$j=0;
	print_r($var);
	foreach($var as $item)
	{
		$j=$j+1;
		$sql = "INSERT INTO img (PID,image,imgid) VALUES ('$id','images/$item','$j')";
		if (mysqli_query($conn, $sql)) 
		{
			
		}
		else
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	$j=0;
}
?>
<html>
<body>
<form method="post">
	<input type="file" name="f1[]" multiple>
	
</form>
</body>
</html>