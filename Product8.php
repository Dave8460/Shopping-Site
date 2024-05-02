<html>
<head>
	<title>Slider</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="content-wrapper">
		

		<div class="column">
			<img id=featured src="images/AW2.png">

			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="https://raw.githubusercontent.com/divanov11/image_slider_frontend/master/images/arrow-left.png">

				<div id="slider">
					<img class="thumbnail active" src="images/AW2.png">
					<img class="thumbnail" src="images/AW2_1.png">
					<img class="thumbnail" src="images/AW2_2.png">

					
					<img class="thumbnail" src="images/AW2_3.png">
					<img class="thumbnail" src="images/AW2_4.png">
					
				</div>

				<img id="slideRight" class="arrow" src="https://raw.githubusercontent.com/divanov11/image_slider_frontend/master/images/arrow-right.png">
			</div>
		</div>

		<div class="column">
			<h1>Sonata Formal Analog Black Dial Men's Watch NM7924NM01/NN7924NM01</h1>
			<hr>
			<h3>$599</h3>

			<p>
			* Dial Color: Black, Case Shape: Round<br>
			* Band Color: Black, Band Material: Stainless Steel<br> 
			* Case Thickness (mm): 8.60 mm<br>
			* Case Length(6H-12H) (mm): 45.30 mm. Case Width(3H-9H) 39.70 mm<br>
			* Watch Movement Type: Quartz, Watch Display Type: Analog<br>
			* Warranty type: Manufacturer; 12 Months Manufacturer Warranty<br>
			* Remove plastic at crown to start the watch<br>
			</p>

			<input value=1 type="number">
			<a class="btn btn-dark" href="#">Add to Cart</a>
		</div>

	</div>

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