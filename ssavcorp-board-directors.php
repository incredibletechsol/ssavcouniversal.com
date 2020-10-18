<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php include('title.php'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css --> 
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" /> 
<link href="css/style.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper" class="home-page">
<?php include('navbar.php'); ?>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">The Corporate</h2>
			</div>
		</div>
	</div>
</section>
<section id="content">
<section class="section-padding">
	<div class="container">
		<div class="row showcase-section">
			<div class="col-md-3">
								<div class="block-heading-two">
									<h3><span>Related Links</span></h3>
								</div>		
								<!-- Related Links starts -->
								<?php include('thecorporatelinks.php'); ?>
								<!-- Related Links ends -->
								
							</div>
			<div class="col-md-8">
				<div class="about-text">
				<h3>Board of Directors</h3>
					<p align="justify"></p> 
				</div>
			</div>
		</div>
	</div>
</section>	
</section>						
<?php include('footer.php'); ?>

	
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script> 
</body>
</html>