<?php
session_start();
if (
	!empty($_SESSION["nameEr"])
	&& !empty($_SESSION["emailEr"])
	&& !empty($_SESSION["subjectEr"])
	&& !empty($_SESSION["messageEr"])
	&& !empty($_SESSION["message_send"])

) {

	$nameEr = $_SESSION["nameEr"];
	$emailEr = $_SESSION["emailEr"];
	$subjectEr = $_SESSION["subjectEr"];
	$messageEr = $_SESSION["messageEr"];
	$message_send = $_SESSION["message_send"];
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Photography</title>

	<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">  -->
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel='stylesheet' href='css/simplelightbox.min.css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">

</head>

<body>
	<!-- Start Header Area -->
	<header class="default-header">
		<div class="container">
			<div class="header-wrap">
				<div class="header-top d-flex justify-content-between align-items-center">
					<div class="logo m-0 p-0">
						<a class="navbar-brand text-uppercase text-danger pt-0 pb-2" href="index.php">Deanza <span class="text-warning nick">Gillard</span></a>
					</div>
					<div class="main-menubar d-flex align-items-center">
						<nav class="hide">
							<a href="#home">Home</a>
							<a href="#about">About Me</a>
							<a href="#gallery">Gallery</a>
							<a href="#contact">Contact</a>
						</nav>
						<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header Area -->
	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="slider">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<!-- Slide One - Set the background image for this slide in the line below -->
					<div class="carousel-item active" style="background-image: url('img/cover.jpg')">
						<div class="carousel-caption d-md-block">
							<h2 class="text-uppercase">Wildlife Photography</h2>
							<p>
								I have spent my whole life waiting for the perfect job for me and it wasn't until <br>I
								'opened myself up'
								that I found just what I was looking for.. <br>I found freedom and it was called
								photography.
							</p>
						</div>
					</div>
					<!-- Slide Two - Set the background image for this slide in the line below -->
					<div class="carousel-item" style="background-image: url('img/cover2.jpg')">
						<div class="carousel-caption d-md-block">
							<h2 class="text-uppercase">Wildlife Photography</h2>
							<p>
							I have spent my whole life waiting for the perfect job for me and it wasn't until <br>I
								'opened myself up'
								that I found just what I was looking for.. <br>I found freedom and it was called
								photography.
							</p>
						</div>
					</div>
					<!-- Slide Three - Set the background image for this slide in the line below -->
					<div class="carousel-item" style="background-image: url('img/cover1.jpg')">
						<div class="carousel-caption d-md-block">
							<h2 class="text-uppercase">Wildlife Photography</h2>
							<p>
							I have spent my whole life waiting for the perfect job for me and it wasn't until <br>I
								'opened myself up'
								that I found just what I was looking for.. <br>I found freedom and it was called
								photography.							</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>
	<!-- End banner Area -->


	<!-- Start About Area -->
	<section class="About-area section-gap" id="about">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 about-left">
					<img class="img-fluid" src="img/about-img.jpg" alt="">
				</div>
				<div class="col-lg-6 about-right">
					<h1>
						Deanza Gillard
					</h1>
					<p>
						Hello Sunshine! Hello beauty! A great big thank you is extended to all the members that have let
						me become a small part of you. My passion is beauty and photography allows me to freeze
						fractions of precious time for you to keep in your forever xo </p>
					<!-- <button class="submit-btn primary-btn mt-20 text-uppercase ">Hire me now<span class="lnr lnr-arrow-right"></span></button> -->
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->

	<!-- Start gallery Area -->
	<section class="gallery-area section-gap" id="gallery">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1 class="text-white">My Recent Photos</h1>
					<p>
					</p>
				</div>
			</div>
			<div class="gal">
				<?php
				require_once("connection.php");
				$query = "select * from photos";
				$rslt = mysqli_query($connect, $query);
				while ($photos = mysqli_fetch_array($rslt)) {
				?>
					<a href="admin/<?=$photos["photo"]?>"><img src="admin/<?=$photos["photo"]?>" alt=""></a>

				<?php
				}
				?>


			</div>
		</div>
	</section>

	<!-- Start callto Area -->
	<!-- <section class="callto-area pt-50 pb-50">
				<div class="container">
					<div class="row">
						 <div class="col-lg-9 callto-left">
						 	<h1 class="text-uppercase">Not sure about my charge?</h1>
						 </div>
						 <div class="col-lg-3 callto-right">
						 	<a href="#" class="btn-white btn text-uppercase">Donate Now</a>
						 </div>
					</div>
				</div>	
			</section> -->
	<!-- End callto Area -->

	<!-- Start blog Area -->
	<!-- <section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 pb-30 header-text">
							<h1>Our Recent Blogs</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row">	
						<div class="single-blog col-lg-4 col-md-4">

							<img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt="">
							<h4>
								<a href="#">Portable Fashion for young women</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
								 commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
						</div>
						<div class="single-blog col-lg-4 col-md-4">
							<img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt="">
							<h4>
								<a href="#">Summer ware are coming</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
 								commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
						</div>
						<div class="single-blog col-lg-4 col-md-4">
							<img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt="">
							<h4>
								<a href="#">Summer ware are coming</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section> -->
	<!-- end blog Area -->


	<!-- Start contact Area -->
	<?php
	if (isset($message_send) && $message_send == "true") {


	?>

	<?php

	} else {


	?>
		<section class="contact-area" id="contact">
			<div class="container-fluid">
				<div class="row d-flex justify-content-end align-items-center">
					<!-- image left side  -->
					<div class="col-lg-5 col-md-12 contact-left no-padding">
						<img class="img-fluid" src="img/p11.jpg" alt="">
					</div>
					<div class="col-lg-7 col-md-12 contact-right no-padding mt-5 text-center">
						<!-- end image left side  -->
						<h1>Send me Message</h1>
						<?php

						if (!empty($_GET["msg"]) && $_GET["msg"] == "sent") {

						?>

							<strong class="text-success"> We get Your Message Thanks </strong>
						<?php
						}

						?>
						<!-- form right side -->
						<!-- <form action="contact.php" method="post">
						<div class="mb-3 form-group">
							<label for="name" class="form-label">Your Name</label>
							<input type="text" name="name" class="form-control" placeholder="inter Your Name">
						</div>
						<div class="mb-3 form-group">
							<label for="email" class="form-label">Email address</label>
							<input type="email" name="email" class="form-control" placeholder="inter Your E-mail">
						</div>
						<div class="mb-3 form-group">
							<label for="subject" class="form-label">Subject</label>
							<input type="text" name="subject" class="form-control" placeholder="Subject">
						</div>
						<div>
							<textarea class="form-control" name="message" cols="30" rows="10" placeholder="your message you want send to me "></textarea>
						</div>
						<a type="submit" class="btn btn-primary my-2 text-light sub">Send <i class="fa fa-arrow-right text-light"></i> </a>
					</form> -->
						<!-- end form left side  -->

						<form method="post" action="contact1.php">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" name="name" id="name" placeholder="Name">
										<small class="text-danger">
											<?php
											if (isset($nameEr)) echo $nameEr;

											?>
										</small>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="email" class="form-control" name="email" id="email" placeholder="Email">
										<small class="text-danger">
											<?php
											if (isset($emailEr)) echo $emailEr;

											?>
										</small>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
										<small class="text-danger">
											<?php
											if (isset($subjectEr)) echo $subjectEr;

											?>
										</small>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message"></textarea>
										<small class="text-danger">
											<?php
											if (isset($messageEr)) echo $messageEr;

											?>
										</small>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary">
										<div class="submitting"></div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			</div>
		<?php } ?>
		</section>
		<!-- End contact Area -->

		<!-- start footer Area -->
		<footer class="footer-area">
			<div class="container">
				<div class="row footer-bottom d-flex justify-content-between">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright All rights reserved | This template
						is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/mostafa.k.elnegm/" target="_blank">Moustafa</a></p>

					<div class="col-lg-4 col-sm-12 footer-social">
						<a href="https://www.facebook.com/Photography-By-Deanza-Gillard-134627943264622/" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/photographybydeanzagillard/" target="_blank"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/parallax.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
		<script src="js/main.js"></script>
</body>

</html>