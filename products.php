<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Holiday - templatemo</title>

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
<?php include("includes/config.php"); ?>
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
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php" class="active">All Products</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

<!-- Banner -->
<!--<section class="tm-banner">-->
<!--	<div class="flexslider flexslider-banner">-->
<!--	  <ul class="slides">-->
<!--		<li>-->
<!--			<div class="tm-banner-inner">-->
<!--				<h1 class="tm-banner-title">Find <span class="tm-yellow-text">The Best</span> Place</h1>-->
<!--				<p class="tm-banner-subtitle">For Your Holidays</p>-->
<!--				<a href="#more" class="tm-banner-link">Learn More</a>-->
<!--			</div>-->
<!--			<img src="img/banner-1.jpg" alt="Image" />-->
<!--		</li>-->
<!--		<li>-->
<!--			<div class="tm-banner-inner">-->
<!--				<h1 class="tm-banner-title">Lorem <span class="tm-yellow-text">Ipsum</span> Dolor</h1>-->
<!--				<p class="tm-banner-subtitle">Wonderful Destinations</p>-->
<!--				<a href="#more" class="tm-banner-link">Learn More</a>-->
<!--			</div>-->
<!--		  <img src="img/banner-2.jpg" alt="Image" />-->
<!--		</li>-->
<!--		<li>-->
<!--			<div class="tm-banner-inner">-->
<!--				<h1 class="tm-banner-title">Proin <span class="tm-yellow-text">Gravida</span> Nibhvell</h1>-->
<!--				<p class="tm-banner-subtitle">Velit Auctor</p>-->
<!--				<a href="#more" class="tm-banner-link">Learn More</a>-->
<!--			</div>-->
<!--		  <img src="img/banner-3.jpg" alt="Image" />-->
<!--		</li>-->
<!--	  </ul>-->
<!--	</div>-->
<!--</section>-->

<!-- gray bg -->
<section class="container tm-home-section-1" id="more" style="top: -20px">
    <?php
    $filterType = isset($_GET['type']) ? $_GET['type'] : '';
//    $hidden = ($filterType == '') ? '' : 'hidden';
    echo "<!-- Debug: Filter type is: " . htmlspecialchars($filterType) . " -->"; 
    ?>
	<div class="row" style="margin-top: 45px">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<!-- Nav tabs -->
			<div class="tm-home-box-1">
				<div class="tm-white-bg">
					<div class="tm-search-box effect2">
						<form action="" method="get" class="search-form">
							<div class="tm-form-inner">
								<div class="form-group">
									 <select class="form-control" name="type" id="typeFilter">
										<option value="">Type</option>
										<?php
										$sql = "SELECT DISTINCT type FROM `products`";
										$result = mysqli_query($conn, $sql);
										$num_rows = mysqli_num_rows($result);

										while($row = mysqli_fetch_assoc($result)) {
											$selected = ($filterType == $row['type']) ? 'selected' : '';
											?>
											<option value="<?=$row['type']?>" <?=$selected?>><?=ucwords($row['type'])?></option>
											<?php
										}
										?>
									</select>
								</div>
								<div class="form-group">
									<input type='text' name="search" class="form-control" placeholder="Search by name..." 
										   value="<?=isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''?>"/>
								</div>
								<div class="form-group margin-bottom-0">
									<select class="form-control" name="price_range">
										<option value="">-- Price Range -- </option>
										<option value="0-1000" <?=isset($_GET['price_range']) && $_GET['price_range'] == '0-1000' ? 'selected' : ''?>>Rs. 0 - 1000</option>
										<option value="1001-5000" <?=isset($_GET['price_range']) && $_GET['price_range'] == '1001-5000' ? 'selected' : ''?>>Rs. 1001 - 5000</option>
										<option value="5001-10000" <?=isset($_GET['price_range']) && $_GET['price_range'] == '5001-10000' ? 'selected' : ''?>>Rs. 5001 - 10000</option>
										<option value="10001+" <?=isset($_GET['price_range']) && $_GET['price_range'] == '10001+' ? 'selected' : ''?>>Rs. 10001+</option>
									</select>
								</div>
							</div>
							<div class="form-group tm-yellow-gradient-bg text-center">
								<button type="submit" name="submit" class="tm-yellow-btn">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section-margin-top">
		<div class="row">
			<div class="tm-section-header"<?if (!isset($_GET['type'])) {?> style="margin-top: -25px"<?} ?>>
				<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
				<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Products</h2></div>
				<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
			</div>
		</div>

        <?php
        $sql = "SELECT * FROM `products` WHERE 1=1";
        $params = array();

        // Add type filter
        if (!empty($_GET['type'])) {
            $sql .= " AND type = ?";
            $params[] = $_GET['type'];
        }

        // Add search filter
        if (!empty($_GET['search'])) {
            $sql .= " AND name LIKE ?";
            $params[] = "%".$_GET['search']."%";
        }

        // Add price range filter
        if (!empty($_GET['price_range'])) {
            $range = explode('-', $_GET['price_range']);
            if (count($range) == 2) {
                $sql .= " AND price BETWEEN ? AND ?";
                $params[] = $range[0];
                $params[] = $range[1];
            } elseif (substr($_GET['price_range'], -1) == '+') {
                $sql .= " AND price >= ?";
                $params[] = intval($_GET['price_range']);
            }
        }

        // Prepare and execute the statement
        $stmt = mysqli_prepare($conn, $sql);
        if (!empty($params)) {
            $types = str_repeat('s', count($params));
            mysqli_stmt_bind_param($stmt, $types, ...$params);
        }
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $num = mysqli_num_rows($result);
        ?>
		<div class="row">
            <style>
                .filterDiv {
                    display: none;
                }
                .show {
                    display: block !important;
                }
            </style>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    console.log('DOM loaded, applying filter: <?php echo isset($filterType) ? $filterType : "all"; ?>'); // Debug log
                    filterSelection('<?php echo isset($filterType) ? $filterType : "all"; ?>');
                });

                function filterSelection(c) {
                    console.log('Filtering for category:', c); // Debug log
                    var x = document.getElementsByClassName("filterDiv");
                    console.log('Found filterDiv elements:', x.length); // Debug log
                    
                    if (c == "" || c == "all") {
                        for (var i = 0; i < x.length; i++) {
                            w3AddClass(x[i], "show");
                            console.log('Showing element:', i); // Debug log
                        }
                    } else {
                        for (var i = 0; i < x.length; i++) {
                            if (x[i].classList.contains(c)) {
                                w3AddClass(x[i], "show");
                                console.log('Showing element:', i, 'with class:', c); // Debug log
                            } else {
                                w3RemoveClass(x[i], "show");
                                console.log('Hiding element:', i); // Debug log
                            }
                        }
                    }
                }

                // Show filtered elements
                function w3AddClass(element, name) {
                    var i, arr1, arr2;
                    arr1 = element.className.split(" ");
                    arr2 = name.split(" ");
                    for (i = 0; i < arr2.length; i++) {
                        if (arr1.indexOf(arr2[i]) == -1) {
                            element.className += " " + arr2[i];
                        }
                    }
                }

                // Hide elements that are not selected
                function w3RemoveClass(element, name) {
                    var i, arr1, arr2;
                    arr1 = element.className.split(" ");
                    arr2 = name.split(" ");
                    for (i = 0; i < arr2.length; i++) {
                        while (arr1.indexOf(arr2[i]) > -1) {
                            arr1.splice(arr1.indexOf(arr2[i]), 1);
                        }
                    }
                    element.className = arr1.join(" ");
                }
            </script>
<!--			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">-->
<!--				<div class="tm-home-box-2">-->
<!--					<img src="img/index-03.jpg" alt="image" class="img-responsive">-->
<!--					<h3>Proin Gravida Nibhvel Lorem Quis Bind</h3>-->
<!--					<p class="tm-date">28 March 2016</p>-->
<!--					<div class="tm-home-box-2-container">-->
<!--						<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>-->
<!--						<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Travel</span></a>-->
<!--						<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">-->
<!--				<div class="tm-home-box-2">-->
<!--					<img src="img/index-04.jpg" alt="image" class="img-responsive">-->
<!--					<h3>Proin Gravida Nibhvel Lorem Quis Bind</h3>-->
<!--					<p class="tm-date">26 March 2016</p>-->
<!--					<div class="tm-home-box-2-container">-->
<!--						<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>-->
<!--						<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Travel</span></a>-->
<!--						<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">-->
<!--				<div class="tm-home-box-2">-->
<!--					<img src="img/index-05.jpg" alt="image" class="img-responsive">-->
<!--					<h3>Proin Gravida Nibhvel Lorem Quis Bind</h3>-->
<!--					<p class="tm-date">24 March 2016</p>-->
<!--					<div class="tm-home-box-2-container">-->
<!--						<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>-->
<!--						<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Travel</span></a>-->
<!--						<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">-->
<!--				<div class="tm-home-box-2 tm-home-box-2-right">-->
<!--					<img src="img/index-06.jpg" alt="image" class="img-responsive">-->
<!--					<h3>Proin Gravida Nibhvel Lorem Quis Bind</h3>-->
<!--					<p class="tm-date">22 March 2016</p>-->
<!--					<div class="tm-home-box-2-container">-->
<!--						<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>-->
<!--						<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Travel</span></a>-->
<!--						<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
            <?php
            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $row = mysqli_fetch_assoc($result);
                    $id = $row['id'];
                    $name = $row['name'];
                    $price = $row['price'];
                    $manufacturer = $row['man'];
                    $type = $row['type'];
                    $img = $row['img'];
                    // Add debug output for each product
                    echo "<!-- Debug: Product " . $i . " type: " . htmlspecialchars($type) . " -->";
                    ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12 filterDiv <?= strtolower(htmlspecialchars($type)) ?>">
                <div class="tm-home-box-2 tm-home-box-2-right">
                    <div class="product-image">
                        <img style="object-fit: cover; height: 100%; width: 100%" src="img/products/<?= $img?>" alt="image" class="img-responsive">
                    </div>
                    <h3><?=$name?></h3>
                    <p class="tm-date"><?=$manufacturer?></p>
                    <div class="tm-home-box-2-container">
                        <a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
                        <a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Rs. <?=$price?></span></a>
                        <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
		</div>
	</div>
</section>

<!-- white bg -->
<section class="tm-white-bg section-padding-bottom">
	<div class="container">
		<div class="row">
			<div class="tm-section-header section-margin-top">
				<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
				<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Popular Packages</h2></div>
				<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
			</div>
			<div class="col-lg-6">
				<div class="tm-home-box-3">
					<div class="tm-home-box-3-img-container">
						<img src="img/index-07.jpg" alt="image" class="img-responsive">
					</div>
					<div class="tm-home-box-3-info">
						<p class="tm-home-box-3-description">Proin gravida nibhvell velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum</p>
						<div class="tm-home-box-2-container">
						<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
						<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Travel</span></a>
						<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
					</div>
					</div>
				</div>
			 </div>
			 <div class="col-lg-6">
				<div class="tm-home-box-3">
					<div class="tm-home-box-3-img-container">
						<img src="img/index-08.jpg" alt="image" class="img-responsive">
					</div>
					<div class="tm-home-box-3-info">
						<p class="tm-home-box-3-description">Proin gravida nibhvell velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum</p>
						<div class="tm-home-box-2-container">
						<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
						<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Travel</span></a>
						<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
					</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="tm-home-box-3">
					<div class="tm-home-box-3-img-container">
						<img src="img/index-09.jpg" alt="image" class="img-responsive">
					</div>
					<div class="tm-home-box-3-info">
						<p class="tm-home-box-3-description">Proin gravida nibhvell velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum</p>
						<div class="tm-home-box-2-container">
						<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
						<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Travel</span></a>
						<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
					</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="tm-home-box-3">
					<div class="tm-home-box-3-img-container">
						<img src="img/index-10.jpg" alt="image" class="img-responsive">
					</div>
					<div class="tm-home-box-3-info">
						<p class="tm-home-box-3-description">Proin gravida nibhvell velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum</p>
						<div class="tm-home-box-2-container">
						<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
						<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Travel</span></a>
						<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
					</div>
					</div>
				</div>
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
<!--
<script src="js/froogaloop.js"></script>
<script src="js/jquery.fitvid.js"></script>
-->
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
		// Vimeo API nonsense

/*
		  var player = document.getElementById('player_1');
		  $f(player).addEvent('ready', ready);

		  function addEvent(element, eventName, callback) {
			if (element.addEventListener) {
			  element.addEventListener(eventName, callback, false)
			} else {
			  element.attachEvent(eventName, callback, false);
			}
		  }

		  function ready(player_id) {
			var froogaloop = $f(player_id);
			froogaloop.addEvent('play', function(data) {
			  $('.flexslider').flexslider("pause");
			});
			froogaloop.addEvent('pause', function(data) {
			  $('.flexslider').flexslider("play");
			});
		  }
*/



		  // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
/*

		  $(".flexslider")
			.fitVids()
			.flexslider({
			  animation: "slide",
			  useCSS: false,
			  animationLoop: false,
			  smoothHeight: true,
			  controlNav: false,
			  before: function(slider){
				$f(player).api('pause');
			  }
		  });
*/




//	For images only
		$('.flexslider').flexslider({
			controlNav: false
		});


	});
</script>
</body>
 </html>