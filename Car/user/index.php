<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#fff">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Car Repair Service</title>
	<link rel="icon" href="media/images/icon.png" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<link rel="stylesheet" href="media/css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<style>

	.slide1 {
		background-image: url('media/images/slider/slide1.jpg');
	}

	.slide2 {
		background-image: url('media/images/slider/slide2.jpg');
	}

	.slide3 {
		background-image: url('media/images/slider/slide3.jpg');
	}

</style>

<body>

	<header>
		<div class="dots"><canvas></canvas></div>
		<nav>
			<div class="logo">
				<a href="javascript:void(0)">Auto</a>
			</div>
			<div class="toggle">
				<a href="javascript:void(0)" class="open">&#9776;</a>
				<a href="javascript:void(0)" class="close">&#10006;</a>
			</div>
			<div class="menu">
				<ul>
					<li><a id="home-link" href="javascript:void(0)">Home</a></li>
					<li><a id="services-link" href="javascript:void(0)">Services</a></li>
					<li><a id="contact-link" href="javascript:void(0)">Contact</a></li>
				</ul>
			</div>
		</nav>

		<div id="arrow-left" class="arrow">&larr;</div>

		<div id="slider">
			<div class="slide slide1">
				<div class="slide-content">
					<span class="date">27.11.</span>
					<span class="title">Vintage Auto Exhibition</span>
				</div>
			</div>
			<div class="slide slide2">
				<div class="slide-content">
					<span class="date">28.11.</span>
					<span class="title">Vintage Auto Exhibition</span>
				</div>
			</div>
			<div class="slide slide3">
				<div class="slide-content">
					<span class="date">29.11.</span>
					<span class="title">Vintage Auto Exhibition</span>
				</div>
			</div>
		</div>

		<div id="arrow-right" class="arrow">&rarr;</div>
	</header>

	<main>
		<section id="services">
			<h1>The Corner Garage For Collector Cars</h1>
			<div class="cards-container">
				<div class="card modify">
					<img src="media/images/modify.png">
					<h3>Modify</h3>
				</div>
				<div class="card buy">
					<img src="media/images/buy.png">
					<h3>Buy</h3>
				</div>
				<div class="card repair">
					<img src="media/images/repair.png">
					<h3>Repair</h3>
				</div>
			</div>
			<div class="animation">
				<div class="mountains"></div>
				<div class="trees"></div>
				<div class="car">
					<img src="media/images/car.png">
				</div>
			</div>
		</section>

		<section id="contact">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.252066426173!2d44.78528711923659!3d41.715079319647685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472d4fa5b02d7%3A0xced15c2c7992ceb5!2sGeoLab!5e0!3m2!1sru!2sge!4v1526898477826" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="inner">

				<div class="social">
					<h2>Contact Information</h2>
					<h3>click to view</h3>
					<ul class="s">
						<li class="gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						<li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="form">
					<h2>Get in touch</h2>
					<form method="post">
						<div class="left">
							<input required id="name" type="text" name="name" placeholder="Name">
							<p class="name"></p>
							<input required id="email" type="email" name="email" placeholder="Email">
							<p class="email"></p>
							<input required id="subject" type="text" name="subject" placeholder="Subject">
							<p class="subject"></p>
							<textarea required placeholder="Text"></textarea>
							<p class="text"></p>
						</div>
						<div class="right">
							<div class="rbtn">
								<label class="rbtn-holder">
									<input required id="male" type="radio" name="gender">
									<span class="checkmark"></span>
									Male
								</label>
								<label class="rbtn-holder">
									<input required id="female" type="radio" name="gender">
									<span class="checkmark"></span>
									Female
								</label>
							</div>
							<p class="gender"></p>
							<div class="chbx">
								<h4>Sign up for newsletter</h4>
								<ul>
									<li>
										<label class="chbx-holder">
											<input type="checkbox" name="images">
											<span class="checkmark"></span>
											Receive images
										</label>
									</li>
									<li>
										<label class="chbx-holder">
											<input type="checkbox" name="promotions">
											<span class="checkmark"></span>
											Receive promotions
										</label>
									</li>
									<li>
										<label class="chbx-holder">
											<input type="checkbox" name="updates">
											<span class="checkmark"></span>
											Receive updates
										</label>
									</li>
									<li>
										<label class="chbx-holder">
											<input type="checkbox" name="job-offers">
											<span class="checkmark"></span>
											Receive job offers
										</label>
									</li>
								</ul>
							</div>
							<input type="submit" name="send" value="Send">
						</div>
					</form>
				</div>
			</div>
		</section>
	</main>

	<footer>
		<div class="f">
			<h3 class="copyright">&copy; copyright 2018</h3>
			<h3 class="author">created with <i class="fa fa-heart" aria-hidden="true"></i></h3>
		</div>
	</footer>

	<script src="media/js/main.js"></script>
	<script src="media/js/slider.js"></script>
	<script src="media/js/dots.js"></script>
</body>
</html>