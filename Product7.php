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
			<img id=featured src="images/AW1.png">

			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="https://raw.githubusercontent.com/divanov11/image_slider_frontend/master/images/arrow-left.png">

				<div id="slider">
					<img class="thumbnail active" src="images/AW1.png">
					<img class="thumbnail" src="images/AW1_1.png">
					<img class="thumbnail" src="images/AW1_2.png">

					
					<img class="thumbnail" src="images/AW1_3.png">
					
				</div>

				<img id="slideRight" class="arrow" src="https://raw.githubusercontent.com/divanov11/image_slider_frontend/master/images/arrow-right.png">
			</div>
		</div>

		<div class="column">
			<h1>VILLS LAURRENS Analogue Men's Watch (Black Dial Black Colored Strap)</h1>
			<hr>
			<h3>$499</h3>

			<p>
			* Dial Color: Black<br>
			* Dial Shape: Round<br>
			* Strap Color: Black; Strap Material: Stainless Steel<br>
			* Watch Movement Type: Quartz<br>
			* Model number: VL-1114<br>

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