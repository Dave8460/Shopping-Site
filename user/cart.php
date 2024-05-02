<?php
session_start();
include 'database.php'; 
include 'header.php';
echo "<br><br>";
	if(isset($_GET['pid']))
	{
	$var=$_GET['pid'];
	$temp=$_GET['cate'];
	$tempvar=$_GET['tempvar'];
	$proname="";
	$proimg="";
	//echo "var=".$var."temp=".$temp;
	$records = mysqli_query($conn,"SELECT * FROM cart WHERE CARTID = (SELECT MAX(CARTID) FROM cart)");
	$id=0;
	while($data = mysqli_fetch_array($records))
	{
		$id=$data['CARTID'];
	}
	$id=$id+1;
	//33echo $id;
	$records1 = mysqli_query($conn,"select Distinct p.PRODUCT_NAME,i.image,p.PRODUCT_PRICE,p.PID from product p,img i WHERE p.PID=i.PID and i.imgid=1 and p.PID='$var' GROUP BY p.PID");
	while($data1 = mysqli_fetch_array($records1))
	{
		$proname=$data1['PRODUCT_NAME'];
		$proimg=$data1['image'];
	}
	$sql = "INSERT INTO cart (CARTID, PID,RID,QUANTITY,STATUS,PRODUCT_NAME,PRODUCT_IMAGE) VALUES ('$id','$var','$tempvar','$temp','unpaid','$proname','$proimg')";
	if (mysqli_query($conn, $sql)) 
	{
		?><!--<?php echo "New record created successfully";?> --><?php
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}
	
?>
<html>
<head>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}
</style>
</head>
<body>
<table id="customers">
  <tr>
	<th>CARTID</th>
	<th>PID</th>
	<th>RID</th>
	<th>QUANITY</th>
	<th>STATUS</th>
	<th>PRODUCT_NAME</th>
	<th>PRODUCT_IMAGE</th>
  </tr>
  <?php
	$records = mysqli_query($conn,"SELECT * FROM cart ORDER BY CARTID");
	while($data = mysqli_fetch_array($records))
	{
		?><tr>
			<td><?php $var=$data['CARTID']; echo $var; ?></td>
			<td><?php echo $data['PID'];?></td>
			<td><?php echo $data['RID'];?></td>
			<td><?php echo $data['QUANTITY'];?></td>
			<td><?php echo $data['STATUS'];?></td>
			<td><?php echo $data['PRODUCT_NAME'];?></td>
			<td><img src="<?php echo $data['PRODUCT_IMAGE'];?>" Style="width:20%;"></td>
		</tr>
		<?php
	}
?>
</body>
</html>