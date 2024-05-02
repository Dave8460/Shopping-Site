<?php
include 'database.php';
 include 'header.php';
?>
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

<div style="height: 600px;overflow: scroll;">
<table id="customers">
  <tr>
	<th>PID</th>
	<th>CATID</th>
	<th>PRODUCT_NAME</th>
	<th>PRODUCT_IMAGE</th>
	<th>PRODUCT_PRICE</th>
	<th>PRODUCT_DESC</th>
	<th>DELETE</th>
  </tr>
  
<?php
	$records = mysqli_query($conn,"SELECT * FROM product ORDER BY PID");
	while($data = mysqli_fetch_array($records))
	{
		?><tr>
			<td><?php $var=$data['PID']; echo $var; ?></td>
			<td><?php echo $data['CATID'];?></td>
			<td><?php echo $data['PRODUCT_NAME'];?></td>
			<td><?php echo $data['PRODUCT_IMAGE'];?></td>
			<td><?php echo $data['PRODUCT_PRICE'];?></td>
			<td><?php echo $data['PRODUCT_DESC'];?></td>
			<td><a href="DeleteProd.php?pro=<?php echo $data['PID'];?>"><i class="fas fa-trash-alt"></i>DELETE</a></td>
		</tr>
		<?php
	}
?>
</table>
</div>
</body>
</html>