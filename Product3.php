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
			<img id=featured src="images/AS3.png">

			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="https://raw.githubusercontent.com/divanov11/image_slider_frontend/master/images/arrow-left.png">

				<div id="slider">
					<img class="thumbnail active" src="images/AS3.png">
					<img class="thumbnail" src="images/AS3_1.png">
					<img class="thumbnail" src="images/AS3_2.png">

					<img class="thumbnail" src="images/AS3_3.png">
					<img class="thumbnail" src="images/AS3_4.png">
					<img class="thumbnail" src="images/AS3_5.png">
					<img class="thumbnail" src="images/AS3_6.png">
				</div>

				<img id="slideRight" class="arrow" src="https://raw.githubusercontent.com/divanov11/image_slider_frontend/master/images/arrow-right.png">
			</div>
		</div>

		<div class="column">
			<h1>Campus Men's Oxyfit Running Shoes</h1>
			<hr>
			<h3>$600</h3>

			<p>
			* Sole: Ethylene Vinyl Acetate<br>
			* Closure: Lace-Up<br>
			* Shoe Width: Regular<br>
			* WHAT YOU GET: 1. One Pair of Sports Shoes as shown in the pictures. 2. Storage Box. 3. Sparx Trust<br>
			* MADE OF: High Quality Mesh as upper material and EVA as sole material<br>
			* KEY FEATURES: Made to Last Long, Elegant Packaging, Perfect Gifting Option, Zero compromise on quality<br>
			* CARE INSTRUCTIONS: Soaking in water may damage the product. For cleaning just wipe dirt or mud off with a soft moist cloth. Do not use any hard bristles brush for cleaning. Do not bleach or use harsh cleaning agents. Do not machine wash or machine dry. Just dry in shade. Do not use any heating equipement for drying<br>
			* THE BRAND: Sparx is all about passion, challenges and zeal of people who like to live on-the-edge, have a dare-devil spirit and do things differently. Checkout our exciting range of shoes, sandals & flip-flops<br>
			* Lifestyle: Outdoor<br>
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