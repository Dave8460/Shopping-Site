<?php
$var=$_GET['pid'];
include 'database.php';
 include 'header.php';
$tempvar=$_GET['tempvar'];
$pid=$_GET['pid'];
if(isset($_POST['Submit']))
{
	$item=$_POST['quty'];
	header("Location:cart.php?pid=$pid&tempvar=$tempvar&cate=$item");
}
?>
<html>
<head>
<title>Slider</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="post">
	<div id="content-wrapper">
		

		<div class="column">
		<?php
			$records1 = mysqli_query($conn,"SELECT * FROM img where PID='$var' and imgid=1");
			while($data1 = mysqli_fetch_array($records1))
			{?>
			<img id=featured src="<?php echo $data1['image'];?>">
			<?php
			}
			?>
			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="https://raw.githubusercontent.com/divanov11/image_slider_frontend/master/images/arrow-left.png">
				<div id="slider"><?php
			$records = mysqli_query($conn,"SELECT * FROM img where PID='$var'");
			while($data = mysqli_fetch_array($records))
			{
				?>
				
					<img class="thumbnail active" src="<?php echo $data['image'];?>">
				
			<?php
			}
			?>
			</div>
				<img id="slideRight" class="arrow" src="https://raw.githubusercontent.com/divanov11/image_slider_frontend/master/images/arrow-right.png">
			</div>
		</div>
		

		<div class="column">
		<?php 
		$records2 = mysqli_query($conn,"SELECT * FROM product where PID='$var'");
			while($data2 = mysqli_fetch_array($records2))
			{
		?>
			<h1><?php echo $data2['PRODUCT_NAME'];?></h1>
			<hr>
			<h3><?php echo $data2['PRODUCT_PRICE'];?></h3>

			<p>
			<?php echo $data2['PRODUCT_DESC'];?>
			</p>
			<?php } ?>
			<input value=1 type="number" name="quty">
			<input type="submit" name="Submit" class="btn btn-dark" value="Add to Cart">
		</div>

	</div>
	</form>

	<script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')

		let activeImages = document.getElementsByClassName('active')

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('mouseover', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}
				

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}


		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		})


	</script>
</body>
</html>