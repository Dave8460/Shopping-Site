
<?php
 include 'header.php';
 include 'database.php';
 echo "<br><br><br>";
 include 'slider.php';
 $tempvar=$_GET['id'];
 ?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<meta charset="UTF-8" />
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible"
		content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 80%;
  height: 60%;
  background-color:#FFFFFF;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.column {
  float: left;
  width: 25%;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
h1
{
	font-family: Brush Script MT, Brush Script Std, cursive;
	font-style: oblique;
	height: 80%
}
body
{
	background-color:#DCDCDC;
}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 150%;
  height: 80%;
  background-color:#FFFFFF;
}

.card1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container1 {
  padding: 2px 16px;
}
.column1 {
  float: left;
  width: 50%;
  padding: 6px;
}

/* Clearfix (clear floats) */
.row1::after {
  content: "";
  clear: both;
  display: table;
}
hr.class-1 {
        border-top: 5px solid #8c8b8b;
    }
	div.a {
  text-align: justify; /* For Edge */
  -moz-text-align-last: right; /* For Firefox prior 58.0 */
  text-align-last: right;
}
</style>
</head>
<body>
<br><br>
<center><h1>Wellcome to Baby World</h1></center>
<div class="row">
<?php 
$i=0;
$records = mysqli_query($conn,"select Distinct p.PRODUCT_NAME,i.image,p.PRODUCT_PRICE,p.PID from product p,img i WHERE p.PID=i.PID and i.imgid=1 GROUP BY p.PID");
while($data = mysqli_fetch_array($records))
	{
		$i++;?>
  <div class="column">
<div class="card">
  <img src="<?php echo $data['image'];?>" style="width:100%">
  <div class="container">
  <br><br>
  <h4><b><?php echo $data['PRODUCT_NAME'];?></b></h4>  
     <hr class="class-1" />
    <h4><b><?php echo $data['PRODUCT_PRICE'];?></b></h4>
	<div class="a"><a href="proddisp.php?pid=<?php echo $data['PID'];?>&tempvar=<?php echo $tempvar;?>"><i class="fas fa-eye"></i></a>
	<a href="cart.php?pid=<?php echo $data['PID'];?>&cate=<?php echo "1";?>&tempvar=<?php echo $tempvar;?>"><i class="fas fa-shopping-cart"></i></a></div>
	
  </div>
</div>
	</div>
	<?php 
	if($i==4)
	{
		break;
	}
	} ?>
	</div>
	
	<div class="row1">
	<div class="column1">

	</div>
	</div>
	</div>
	<?php  include 'footer.php'; ?>
</body>
</html>