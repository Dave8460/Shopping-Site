<?php
include 'database.php';
 include 'header.php';
  $tempvar=$_GET['id'];
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
hr.class-1 {
        border-top: 5px solid #8c8b8b;
    }
	div.a {
  text-align: justify; /* For Edge */
  -moz-text-align-last: right; /* For Firefox prior 58.0 */
  text-align-last: right;
}
* {
  box-sizing: border-box;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 80%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

	<img src="images/watch1.jpg" width="100%" height="70%">
	<div class="row">
	<?php
	$records = mysqli_query($conn,"select Distinct p.PRODUCT_NAME,i.image,p.PRODUCT_PRICE,p.PID from product p,img i WHERE p.PID=i.PID and i.imgid=1 and p.CATID=1 GROUP BY p.PID ");
while($data = mysqli_fetch_array($records))
	{
		?>
  <div class="column">
<div class="card">
  <img src="<?php echo $data['image'];?>" style="width:100%">
  <div class="container">
  <br><br>
  <h4><b><?php echo $data['PRODUCT_NAME'];?></b></h4>  
     <hr class="class-1" />
	 <p>
    <h4><b><?php echo $data['PRODUCT_PRICE'];?></b></h4>
	<div class="a"><a href="cart.php?pid=<?php echo "7";?>&cate=<?php echo "1";?>&tempvar=<?php echo $tempvar;?>"><i class="fas fa-eye"></i></a>
	<i class="fas fa-shopping-cart"></i></div>
	</p>
	</div>
</div>
</div>
	<?php }?>
	<div class="column">
<div class="card">
  <img src="<?php echo "images/AW3.png"?>" style="width:100%">
  <div class="container">
 <br><br>
  <h4><b><?php echo "Samsung Galaxy Watch Active 2 (Bluetooth, 44 mm) - Black, Aluminium Dial, Silicon Straps";?></b></h4>  
     <hr class="class-1" />
	 <p>
    <h4><b><?php echo "799";?></b></h4>
	<div class="a"><a href="product/Product9.php"><i class="fas fa-eye"></i></a>
	<i class="fas fa-shopping-cart"></i></div>
	</p>
  </div>
	

</body>
</html>