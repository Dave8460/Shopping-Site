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
<br><br><br><br>
<table id="customers">
  <tr>
	<th>ID</th>
	<th>Category Name</th>
	<th>Edit</th>
	<th>Delete</th>
  </tr>
  
<?php
	$records = mysqli_query($conn,"SELECT * FROM category ORDER BY catid");
	while($data = mysqli_fetch_array($records))
	{
		?><tr>
			<td><?php $var=$data['catid']; echo $var; ?></td>
			<td><?php echo $data['catname'];?></td>
			<td><a href="UpdateCat.php?cat=<?php echo $data['catid'];?>"><i class="fas fa-edit"></i>EDIT</a></td>
			<td><a href="DeleteCat.php?cat=<?php echo $data['catid'];?>"><i class="fas fa-trash-alt"></i>DELETE</a></td>
		</tr>
		<?php
	}
?>

</body>
</html>