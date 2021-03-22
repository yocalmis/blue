<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>BlueEye - Email</title>


	<style>
/* Roboto-100 - latin_latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: url('roboto/roboto-v18-latin_latin-ext-100.eot'); /* IE9 Compat Modes */
  src: local('Roboto Thin'), local('Roboto-Thin'),
       url('roboto/roboto-v18-latin_latin-ext-100.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('roboto/roboto-v18-latin_latin-ext-100.woff2') format('woff2'), /* Super Modern Browsers */
       url('roboto/roboto-v18-latin_latin-ext-100.woff') format('woff'), /* Modern Browsers */
       url('roboto/roboto-v18-latin_latin-ext-100.ttf') format('truetype'), /* Safari, Android, iOS */
       url('roboto/roboto-v18-latin_latin-ext-100.svg#Roboto') format('svg'); /* Legacy iOS */
}

/* Roboto-300 - latin_latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: url('roboto/roboto-v18-latin_latin-ext-300.eot'); /* IE9 Compat Modes */
  src: local('Roboto Light'), local('Roboto-Light'),
       url('roboto/roboto-v18-latin_latin-ext-300.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('roboto/roboto-v18-latin_latin-ext-300.woff2') format('woff2'), /* Super Modern Browsers */
       url('roboto/roboto-v18-latin_latin-ext-300.woff') format('woff'), /* Modern Browsers */
       url('roboto/roboto-v18-latin_latin-ext-300.ttf') format('truetype'), /* Safari, Android, iOS */
       url('roboto/roboto-v18-latin_latin-ext-300.svg#Roboto') format('svg'); /* Legacy iOS */
}

/* Roboto-regular - latin_latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: url('roboto/roboto-v18-latin_latin-ext-regular.eot'); /* IE9 Compat Modes */
  src: local('Roboto'), local('Roboto-Regular'),
       url('roboto/roboto-v18-latin_latin-ext-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('roboto/roboto-v18-latin_latin-ext-regular.woff2') format('woff2'), /* Super Modern Browsers */
       url('roboto/roboto-v18-latin_latin-ext-regular.woff') format('woff'), /* Modern Browsers */
       url('roboto/roboto-v18-latin_latin-ext-regular.ttf') format('truetype'), /* Safari, Android, iOS */
       url('roboto/roboto-v18-latin_latin-ext-regular.svg#Roboto') format('svg'); /* Legacy iOS */
}

/* Roboto-500 - latin_latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: url('roboto/roboto-v18-latin_latin-ext-500.eot'); /* IE9 Compat Modes */
  src: local('Roboto Medium'), local('Roboto-Medium'),
       url('roboto/roboto-v18-latin_latin-ext-500.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('roboto/roboto-v18-latin_latin-ext-500.woff2') format('woff2'), /* Super Modern Browsers */
       url('roboto/roboto-v18-latin_latin-ext-500.woff') format('woff'), /* Modern Browsers */
       url('roboto/roboto-v18-latin_latin-ext-500.ttf') format('truetype'), /* Safari, Android, iOS */
       url('roboto/roboto-v18-latin_latin-ext-500.svg#Roboto') format('svg'); /* Legacy iOS */
}

/* Roboto-700 - latin_latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: url('roboto/roboto-v18-latin_latin-ext-700.eot'); /* IE9 Compat Modes */
  src: local('Roboto Bold'), local('Roboto-Bold'),
       url('roboto/roboto-v18-latin_latin-ext-700.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('roboto/roboto-v18-latin_latin-ext-700.woff2') format('woff2'), /* Super Modern Browsers */
       url('roboto/roboto-v18-latin_latin-ext-700.woff') format('woff'), /* Modern Browsers */
       url('roboto/roboto-v18-latin_latin-ext-700.ttf') format('truetype'), /* Safari, Android, iOS */
       url('roboto/roboto-v18-latin_latin-ext-700.svg#Roboto') format('svg'); /* Legacy iOS */
}

/* Roboto-900 - latin_latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: url('roboto/roboto-v18-latin_latin-ext-900.eot'); /* IE9 Compat Modes */
  src: local('Roboto Black'), local('Roboto-Black'),
       url('roboto/roboto-v18-latin_latin-ext-900.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('roboto/roboto-v18-latin_latin-ext-900.woff2') format('woff2'), /* Super Modern Browsers */
       url('roboto/roboto-v18-latin_latin-ext-900.woff') format('woff'), /* Modern Browsers */
       url('roboto/roboto-v18-latin_latin-ext-900.ttf') format('truetype'), /* Safari, Android, iOS */
       url('roboto/roboto-v18-latin_latin-ext-900.svg#Roboto') format('svg'); /* Legacy iOS */
}

		body{

			margin: 0;
			padding: 0;
			font-family: 'Roboto', sans-serif;
			color: #212325;

		}
		a {
			color: #1A73E8;
			text-decoration: none;
		}
		p.divider {
			margin: .25rem 0;
			border-top: 1px solid rgba(0,0,0,.13);

		}
		.container{
			max-width: 100%;
			min-height: calc(580px + 144px);
			margin: 0 auto; 
			padding: 1em;
			position: relative;
			display: -moz-flex;
			display: -ms-flex;
			display: -o-flex;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-moz-flex-direction: column;
			-ms-flex-direction: column;
			-o-flex-direction: column;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			        flex-direction: column;
			-webkit-box-pack: justify;
			    -ms-flex-pack: justify;
			        justify-content: space-between;
		}
		@media screen and (min-width: 640px) {
			.container{
				max-width: 600px;
				width: 100%;

			}
		}
		.container::before{
			content: '';
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			opacity: .15;
			z-index: -1;
			background-image: url(blue_eye.png);
			background-size: 60%;
			background-position: center;
			background-repeat: no-repeat;

		}
		.top-header{
			background-color: #1a2b49;
			color: white;
			display: -moz-flex;
			display: -ms-flex;
			display: -o-flex;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-ms-align-items: center;
			-webkit-box-align: center;
			    -ms-flex-align: center;
			        align-items: center;
			-webkit-box-pack: justify;
			    -ms-flex-pack: justify;
			        justify-content: space-between;
			border-top-right-radius: 6px;
			border-top-left-radius: 6px;
			padding: 1rem;
		}
		.top-header a{
			color: #8ab4f8;
			font-weight: 500;
		}
		.bottom-footer {
			background-color: #1a2b49;
			color: white;
			display: -moz-flex;
			display: -ms-flex;
			display: -o-flex;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-moz-flex-direction: column;
			-ms-flex-direction: column;
			-o-flex-direction: column;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			        flex-direction: column;
			border-bottom-right-radius: 6px;
			border-bottom-left-radius: 6px;
			padding: 1rem;
			font-weight: 500;
		}
		.bottom-footer a{
			color: #8ab4f8;
		}
		.bottom-footer .divider{
			border-color: #5f6368;
		}
		.bottom-footer p{
			margin: 0;
			margin-bottom: .5rem;
		}
		.text-center {
			text-align: center;
			margin-bottom: 0 !important;
		}
		.top-header h3,
		.top-header p,
		.main-inner h4,
		.prdctMain__text h3{
			margin: 0;
			padding: 0;
		}
		.main-inner {
			padding: 1rem;
		}
		.main-inner h4 {
			padding-bottom: .5rem;
			border-bottom: 1px solid rgba(0,0,0,.13);
		}
		.prdctMain {
			display: -moz-flex;
			display: -ms-flex;
			display: -o-flex;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-ms-align-items: flex-start;
			-webkit-box-align: start;
			    -ms-flex-align: start;
			        align-items: flex-start;
			margin-top: 1rem;
		}
		.prdctMain__image{
			max-width: 150px;
			border-radius: 4px;
			margin-right: 1rem;
		}
		.prdctMain__text p{
			
			font-weight: 500;
			margin: .5rem 0;
		}
		.prdctMain__text p span {
			color: #5f6368;
		}
		@media screen and (max-width: 480px) {
			.prdctMain {
				-moz-flex-direction: column;
				-ms-flex-direction: column;
				-o-flex-direction: column;
				-webkit-box-orient: vertical;
				-webkit-box-direction: normal;
				        flex-direction: column;
			}
		}
		@media screen and (max-width: 400px) {
			.top-header {
				-moz-flex-direction: column;
				-ms-flex-direction: column;
				-o-flex-direction: column;
				-webkit-box-orient: vertical;
				-webkit-box-direction: normal;
				        flex-direction: column;
			}
		}
	</style>
</head>
<body>
	<main>
		<div class="container">
			<div class="top-header">
				<h3>BlueEye Company</h3>
				<p><a href="tel:+905435052677">+90 (543)505 26-77</a></p>
			</div>
			<div class="main-inner">
				<h4>Order Summary:</h4>
				<div class="prdctMain">
					<div class="prdctMain__left">
						<img src="greentour.jpg" alt="TOUR_NAME" class="prdctMain__image">
						<div class="prdctMain__text">
							
						</div>
					</div>
					<div class="prdctMain__text">
						<h3>Green Tour</h3>
						<p><span>Category:</span> <a href="#">Cappadocia Daily Tours</a></p>
						<p><span>Meeting point:</span> Your Hotel</p>
						<p><span>Start Date:</span> 21.10.2019</p>
						<p><span>Start Time:</span> 12.05 PM</p>
						<p><span>Duration:</span> 2 Hours</p>
						<p><span>Details:</span> 1 Adult 0 Child 0 Baby</p>
						<p><span>Rezervation Number:</span> 165165</p>
						<p><span>Price:</span> 34€</p>
						<p>Waiting for Payment</p>
					</div>
				</div>
				<p class="divider"></p>
				<div class="prdctMain">
					<div class="prdctMain__left">
						<img src="greentour.jpg" alt="TOUR_NAME" class="prdctMain__image">
						<div class="prdctMain__text">
							
						</div>
					</div>
					<div class="prdctMain__text">
						<h3>Green Tour</h3>
						<p><span>Category:</span> <a href="#">Cappadocia Daily Tours</a></p>
						<p><span>Meeting point:</span> Your Hotel</p>
						<p><span>Start Date:</span> 21.10.2019</p>
						<p><span>Start Time:</span> 12.05 PM</p>
						<p><span>Duration:</span> 2 Hours</p>
						<p><span>Details:</span> 1 Adult 0 Child 0 Baby</p>
						<p><span>Rezervation Number:</span> 165165</p>
						<p><span>Price:</span> 34€</p>
						<p>Waiting for Payment</p>
					</div>
				</div>
			</div>
			<div class="bottom-footer">
				<p>
					<span>Address: </span><a href="https://goo.gl/maps/SB76ZH7YsDv">
						Kağnı Yolu Sk., 50180 Göreme Belediyesi/Nevşehir Merkez/Nevşehir</a>
				</p>
				<p>
					<span>Mail: </span><a href="mailto:info@blueeyetour.com">info@blueeyetour.com</a>
				</p>
				<p><span>Phone: </span><a href="tel:+905435052677">+90 (543)505 26-77</a></p>

				<p class="divider"></p>
				<p class="text-center">For change or cancell contact with BlueEye</p>
			</div>
		</div>
	</main>
</body>
</html>