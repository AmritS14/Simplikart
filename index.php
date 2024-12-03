<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simplikart</title>
<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet"> 
  <link href="css/flexslider.css" rel="stylesheet"> 
  <link href="css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
<? include("includes/config.php");?>
  <body class="tm-gray-bg">
  	<!-- Header -->
  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="#" class="tm-site-name">Simplikart</a>
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="products.php">All Products</a></li>
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>
	
	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
<!--		    <li>-->
<!--			    <div class="tm-banner-inner">-->
<!--					<h1 class="tm-banner-title">Find <span class="tm-yellow-text">Tour</span> Programs</h1>-->
<!--					<p class="tm-banner-subtitle">For Your Destinations</p>-->
<!--					<a href="#more" class="tm-banner-link">Learn More</a>	-->
<!--				</div>-->
<!--		      <img src="img/banner-2.jpg" />-->
<!--		    </li>-->
            <li>
                <div class="tm-banner-inner">
<!--                    <h1 class="tm-banner-title">Find <span class="tm-yellow-text">Tour</span> Programs</h1>-->
<!--                    <p class="tm-banner-subtitle">For Your Destinations</p>-->
                    <a href="products.php?type=sports&search=football" class="tm-banner-link">Shop now</a>
                </div>
                <img src="img/banners/rugby.jpg" />
            </li>
              <li>
                  <div class="tm-banner-inner">
                      <!--                    <h1 class="tm-banner-title">Find <span class="tm-yellow-text">Tour</span> Programs</h1>-->
                      <!--                    <p class="tm-banner-subtitle">For Your Destinations</p>-->
                      <a href="products.php" class="tm-banner-link" style="margin-bottom: -172px; margin-left: 62px;">Shop now</a>
                  </div>
                  <img src="img/banners/sale.jpg"/>
              </li>
<!--		    <li>-->
<!--			    <div class="tm-banner-inner">-->
<!--					<h1 class="tm-banner-title">Lorem <span class="tm-yellow-text">Ipsum</span> Dolor</h1>-->
<!--					<p class="tm-banner-subtitle">Wonderful Destinations</p>-->
<!--					<a href="#more" class="tm-banner-link">Learn More</a>	-->
<!--				</div>-->
<!--		      <img src="img/banner-3.jpg" />-->
<!--		    </li>-->
<!--		    <li>-->
<!--			    <div class="tm-banner-inner">-->
<!--					<h1 class="tm-banner-title">Proin <span class="tm-yellow-text">Gravida</span> Nibhvell</h1>-->
<!--					<p class="tm-banner-subtitle">Velit Auctor</p>-->
<!--					<a href="" class="tm-banner-link">Learn More</a>-->
<!--				</div>-->
<!--		      <img src="img/banner-1.jpg" />-->
<!--		    </li>-->
		  </ul>
		</div>			
	</section>

    <style>
        @media (min-width: 992px) {
            .container {
                width: 970px;
            }
    </style>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">

            <?


            $sql = "SELECT DISTINCT type FROM `products`";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);


            for ($i = 0; $i < $num; $i++) {
                $result1 = mysqli_fetch_assoc($result);
                $type = $result1["type"];
                $chosenColor = $i % 3;
                $color = '';

                switch ($chosenColor) {
                    case 0:
                        $color = 'red';
                        break;
                    case 1:
                        $color = 'green';
                        break;
                    case 2:
                        $color = 'yellow';
                        break;
                }
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6" style="margin-top: 75px">
                <div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
                    <img src="img/products/categories/<?=$type?>.jpg" alt="image" class="img-responsive"
                    style="object-fit: cover; height: 180px; width: 100%;">
                    <a href="products.php?type=<?=$type?>">
                        <div class="tm-<?=$color?>-gradient-bg tm-city-price-container">
                            <span><?= $type ?></span>
                        </div>
                    </a>
                </div>
            </div>
            <?
            }
            ?>
		</div>

	
<!--		<div class="section-margin-top">-->
<!--			<div class="row">				-->
<!--				<div class="tm-section-header">-->
<!--					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>-->
<!--					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Our Tours</h2></div>-->
<!--					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="row">-->
<!--				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
<!--					<div class="tm-tours-box-1">-->
<!--						<img src="img/tours-03.jpg" alt="image" class="img-responsive">-->
<!--						<div class="tm-tours-box-1-info">-->
<!--							<div class="tm-tours-box-1-info-left">-->
<!--								<p class="text-uppercase margin-bottom-20">Proin Gravida Nibhvel Lorem Quis Bind</p>	-->
<!--								<p class="gray-text">28 March 2084</p>-->
<!--							</div>-->
<!--							<div class="tm-tours-box-1-info-right">-->
<!--								<p class="gray-text tours-1-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.</p>	-->
<!--							</div>							-->
<!--						</div>-->
<!--						<div class="tm-tours-box-1-link">-->
<!--							<div class="tm-tours-box-1-link-left">-->
<!--								Duration: 8 days-->
<!--							</div>-->
<!--							<a href="#" class="tm-tours-box-1-link-right">-->
<!--								$2,200								-->
<!--							</a>							-->
<!--						</div>-->
<!--					</div>					-->
<!--				</div>-->
<!--				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
<!--					<div class="tm-tours-box-1">-->
<!--						<img src="img/tours-04.jpg" alt="image" class="img-responsive">-->
<!--						<div class="tm-tours-box-1-info">-->
<!--							<div class="tm-tours-box-1-info-left">-->
<!--								<p class="text-uppercase margin-bottom-20">Proin Gravida Nibhvel Lorem Quis Bind</p>	-->
<!--								<p class="gray-text">26 March 2084</p>-->
<!--							</div>-->
<!--							<div class="tm-tours-box-1-info-right">-->
<!--								<p class="gray-text tours-1-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.</p>	-->
<!--							</div>							-->
<!--						</div>-->
<!--						<div class="tm-tours-box-1-link">-->
<!--							<div class="tm-tours-box-1-link-left">-->
<!--								Duration: 9 days-->
<!--							</div>-->
<!--							<a href="#" class="tm-tours-box-1-link-right">-->
<!--								$1,800								-->
<!--							</a>							-->
<!--						</div>-->
<!--					</div>					-->
<!--				</div>-->
<!--				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
<!--					<div class="tm-tours-box-1">-->
<!--						<img src="img/tours-05.jpg" alt="image" class="img-responsive">-->
<!--						<div class="tm-tours-box-1-info">-->
<!--							<div class="tm-tours-box-1-info-left">-->
<!--								<p class="text-uppercase margin-bottom-20">Proin Gravida Nibhvel Lorem Quis Bind</p>	-->
<!--								<p class="gray-text">24 March 2084</p>-->
<!--							</div>-->
<!--							<div class="tm-tours-box-1-info-right">-->
<!--								<p class="gray-text tours-1-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.</p>	-->
<!--							</div>							-->
<!--						</div>-->
<!--						<div class="tm-tours-box-1-link">-->
<!--							<div class="tm-tours-box-1-link-left">-->
<!--								Duration: 8 days-->
<!--							</div>-->
<!--							<a href="#" class="tm-tours-box-1-link-right">-->
<!--								$1,600								-->
<!--							</a>							-->
<!--						</div>-->
<!--					</div>					-->
<!--				</div>-->
<!--				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
<!--					<div class="tm-tours-box-1">-->
<!--						<img src="img/tours-06.jpg" alt="image" class="img-responsive">-->
<!--						<div class="tm-tours-box-1-info">-->
<!--							<div class="tm-tours-box-1-info-left">-->
<!--								<p class="text-uppercase margin-bottom-20">Proin Gravida Nibhvel Lorem Quis Bind</p>	-->
<!--								<p class="gray-text">22 March 2084</p>-->
<!--							</div>-->
<!--							<div class="tm-tours-box-1-info-right">-->
<!--								<p class="gray-text tours-1-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.</p>	-->
<!--							</div>							-->
<!--						</div>-->
<!--						<div class="tm-tours-box-1-link">-->
<!--							<div class="tm-tours-box-1-link-left">-->
<!--								Duration: 5 days-->
<!--							</div>-->
<!--							<a href="#" class="tm-tours-box-1-link-right">-->
<!--								$1,200								-->
<!--							</a>							-->
<!--						</div>-->
<!--					</div>					-->
<!--				</div>-->
<!--			</div>		-->
<!--		</div>-->
	</section>		
	
	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Special Packages</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-03.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Proin Gravida Nibhvel Lorem Quis Bind</h3>
							<img src="img/rating.png" alt="image" class="margin-bottom-5">
							<p>28 March 2084</p>	
						</div>						
						<a href="#" class="tm-tours-box-2-link">Book Now</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-04.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Proin Gravida Nibhvel Lorem Quis Bind</h3>
							<img src="img/rating.png" alt="image" class="margin-bottom-5">
							<p>26 March 2084</p>	
						</div>						
						<a href="#" class="tm-tours-box-2-link">Book Now</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-05.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Proin Gravida Nibhvel Lorem Quis Bind</h3>
							<img src="img/rating.png" alt="image" class="margin-bottom-5">
							<p>24 March 2084</p>	
						</div>						
						<a href="#" class="tm-tours-box-2-link">Book Now</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-06.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Proin Gravida Nibhvel Lorem Quis Bind</h3>
							<img src="img/rating.png" alt="image" class="margin-bottom-5">
							<p>22 March 2084</p>	
						</div>						
						<a href="#" class="tm-tours-box-2-link">Book Now</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="home-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
					Morbi accumsaipsu m velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat.
					</p>					
				</div>
			</div>	
		</div>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2024 Digital Enigma</p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="js/moment.js"></script>							<!-- moment.js -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
   	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	<script>
		// HTML document is loaded. DOM is ready.
		$(function() {

			$('#hotelCarTabs a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})

        	$('.date').datetimepicker({
            	format: 'MM/DD/YYYY'
            });
            $('.date-time').datetimepicker();
           
			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
		  	$('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
		  	});
		});
		
		// Load Flexslider when everything is loaded.
		$(window).load(function() {	  		
		    $('.flexslider').flexslider({
			    controlNav: false
		    });
	  	});
	</script>
 </body>
 </html>
