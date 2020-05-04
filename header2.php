<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Express</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images//favicon.ico" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images//apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images//apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Loader CSS -->
	<link rel="stylesheet" type="text/css" href="libraries/loader/loaders.min.css">

	<!-- Library - Google Font Familys -->
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,600,300,200,100' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="libraries/bootstrap/bootstrap.min.css">
	
	<!-- Font Icons -->
	<link rel="stylesheet" type="text/css" href="libraries/fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="libraries/fonts/elegant-icons.css">

	<!-- Library - OWL Carousel V.2.0 beta -->
	<link rel="stylesheet" type="text/css" href="libraries/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="libraries/owl-carousel/owl.theme.css">

	<!-- Library - FlexSlider v2.5.0 -->
	<link rel="stylesheet" type="text/css" href="libraries/flexslider/flexslider.css">

	<!-- Library - Animate CSS -->
	<link rel="stylesheet" type="text/css" href="libraries/animate/animate.min.css">

	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/navigation-menu.css">

	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/shortcodes.css">

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
	<![endif]-->
	


	<!--Start Div animation left right top bottom css and js-->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script src="js/wow.js"></script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset: 100,
        callback: function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
  <!--End Div animation left right top bottom css and js-->
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<!-- LOADER -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
		   </div>
		</div>
	</div><!-- Loader /- -->
	
	<a id="top"></a>

	<div class="floatbtn">
		 <!-- Left float button -->
		<a class="btn btn-danger floatleft" href="delhi.php"><b>Delhi</b></a>
		<a class="btn btn-danger floatleft2" href="noida.php"><b>Noida</b></a>		 
		<!-- Right Float Button -->		
		<a class="btn btn-danger floatright2" href="gurgaon.php"><b>Gurgaon</b></a>	
	</div>
	<!-- Header -->



<!-- Start header -->

<div class="topheader">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-9 col-xs-12">
			<ul class="list-inline">
				<li class="gst_nmbr"><span>GST Number:</span><b>06DUNPK6959Q1ZF</b></li>
				<li class="online_payment"><a href="#"><i class="fa fa-inr" aria-hidden="true"></i><span>Online Payment</span></a></li>
				<li class="consignment"><a href="#"><i class="fa fa-truck" aria-hidden="true"></i><span> Consignment Tracking</span></a></li>						  						
			</ul>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="top-menu">
			<ul>
				<li class="socallist"><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li class="socallist"><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li class="socallist"><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li class="socallist"><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>
			</div>
			</div>
		</div>
	</div>
</div>

<header class="site-header">
   <div class="container-fluid">
      <div class="row middle-xs top-md">
         <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 site-branding"> 
            <a title="#" href="index.html" class="wow bounceInLeft"><img src="images/logo.png" alt="#"></a>
         </div>
         <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 sitetopmenu">
            <div class="site-top">
               <div class="row middle top_bar">
                  <div class="col-md-12">
                     <div class="top-menu wow bounceInRight">
                        <ul>
                           <li><img src="images/icon/phone-ic.png" alt="Phone Icon"> +91-8826704057, +91-8826704047</li>
                           <li><img src="images/icon/mail-ic.png" alt="Mail Icon"><a href="mailto:info@example.com"> info@krishnapackersmovers.com</a></li>
						   <!--<li><img src="images/icon/watch-ic.png" alt="Watch Icon"> Mon - Sat : 9AM - 6PM</li>-->
                        </ul>
					 </div>
					 

					 <div class="getbtn"> <a href="#" data-toggle="modal" data-target="#quoteModal" title="Get A Quote" class="btn getaqt">Get a Quote</a></div>
					
					 
                  </div>
                 
               </div>
               <div class="header-right">
               	<div class="row">
               		<div class="col-md-12 col-sm-12 col-xs-12">
						   <div class="logomobile"><img src="images/logo-mob.png"></div>
                        <nav class="menu-block">
			<div class="navbar ow-navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				   
					
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php" title="Home">Home</a></li>
						<li><a href="about.php" title="About">About</a></li>
						<li class="dropdown">
							<a href="services.php" title="Services" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
							<i class="fa fa-angle-down icondroup"></i>
							<ul class="dropdown-menu">
								<li><a href="estimation-form.php">Quote</a></li>
								<li><a href="faq.php">FAQ - Default</a></li>
								<li><a href="faq-1.php">FAQ - Accordion</a></li>
							</ul>
						</li>		
						<li><a href="gallery.php" title="Gallery">Gallery</a></li>	
						<li><a href="contact-us.php" title="Contact">Contact</a></li>							
					</ul>

					<div class="dropdown location_dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="caret"></span>Locations</button>
						<ul class="dropdown-menu locationmenu" aria-labelledby="dropdownMenu1">
							<li><a href="delhi.php">Delhi</a></li>
							<li><a href="noida.php">Noida</a></li>
							<li><a href="gurgaon.php">Grugaon</a></li>
							
						</ul>
					</div>
					
				</div>
			</div>
	</nav><!-- Menu Block /- -->
</div>
</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- End header -->




