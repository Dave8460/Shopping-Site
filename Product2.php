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
			<img id=featured src="images/AS2.png">

			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="https://raw.githubusercontent.com/divanov11/image_slider_frontend/master/images/arrow-left.png">

				<div id="slider">
					<img class="thumbnail active" src="images/AS2.png">
					<img class="thumbnail" src="images/AS2_1.png">
					<img class="thumbnail" src="images/AS2_2.png">

					<img class="thumbnail" src="images/AS2_3.png">
					<img class="thumbnail" src="images/AS2_4.png">
				</div>

				<img id="slideRight" class="arrow" src="https://raw.githubusercontent.com/divanov11/image_slider_frontend/master/images/arrow-right.png">
			</div>
		</div>

		<div class="column">
			<h1>Adidas Men Running Shoes</h1>
			<hr>
			<h3>$450</h3>

			<p>
			* Sole: Ethylene Vinyl Acetate<br>
			* Closure: Lace-Up<br>
			* Shoe Width: Medium<br>
			* This product runs a size small. If you usually buy UK 9, buy UK 10 for this<br>
			* Material Type: Synthetic<br>
			* Lifestyle: Casual<br>
			* Closure Type: Lace-Up<br>
			* Warranty Type: Manufacturer<br>
			* Product warranty against manufacturing defects: 90 days<br>
			* Care Instructions: Allow your pair of shoes to air and de-odorize at a regular basis, this also helps them retain their natural shape; use shoe bags to prevent any stains or mildew; dust any dry dirt from the surface using a clean cloth, do not use polish or shiner<br>
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