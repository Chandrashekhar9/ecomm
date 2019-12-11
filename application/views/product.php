<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/jcarousel/css/jquery.jcarousel.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/jcarousel/css/skin.css" />
		<title>Products Carusal</title>
	<style>
		/* Slide Show */
		body {
			font-family:arial;
			background-color: white;
		}
		img {
			border:0;
		}
		#slideshow-main {
			width:80%;
			float:right; 
			/*margin-right:3px;*/
		}
		#slideshow-main ul {
			margin:0; 
			padding:0; 
			width:100%;
		}
		#slideshow-main li {
			width:100%; 
			height:80vh;
			display:none;
			position:relative;
		}
		#slideshow-main li.active {
			display:block !important;
		}
		#slideshow-main li span.opacity {
			position:absolute;
			bottom:0; left:0;
			display:block; 
			width:100%;
			height:60px;
			background:#000;
			filter:alpha(opacity=50); 
			-moz-opacity:0.5; 
			-khtml-opacity: 0.5; 
			opacity: 0.5;
			z-index:500;
		}
		#slideshow-main li span.content {
			position:absolute;
			bottom:0; left:0;
			display:block; 
			width:100%;
			height:60px;
			z-index:1000;
		}
		#slideshow-main li span.content h1 {
			font-size:14px;
			margin:5px 0;
			padding:0 10px;;
			color:#42e2e8;
		}
		#slideshow-main li span.content p {
			font-size:11px;
			margin:5px 0;
			padding:0 10px;;
			color:#42e2e8;
		}
		#slideshow-carousel {
			float:left; 
			width:20%;
			position:relative
		}
		#slideshow-carousel ul {
			margin:0; 
			padding:0;
			list-style:none;
		}
		#slideshow-carousel li {
			background:#fff; 
			height:15vh; 
			position:relative
		}
		#slideshow-carousel li .arrow {
			/*left:3px;*/ 
			top:28px; 
			position:absolute; 
			width:20px; 
			height:40px; 
			background:url(<?=base_url()?>assets/jcarousel/images/arrow_white.png) no-repeat 0 0; 
			display:block;
		}
		#slideshow-carousel li a {
			background:#000; 
			display:block; 
			width:100%; 
			height:95px;
		}
		#slideshow-carousel .active {
			filter:alpha(opacity=100); 
			-moz-opacity:1.0; 
			-khtml-opacity: 1.0; 
			opacity: 1.0;
		}
		#slideshow-carousel .faded {
			filter:alpha(opacity=50); 
			-moz-opacity:0.5; 
			-khtml-opacity: 0.5; 
			opacity: 0.5;
		}
	</style>
</head>
<body>
	<?php include('header.php') ?>
	 <div class="container-fluid mb-4" style="margin-top: 15vh;">
       <div class="row">
         <div class="col-md-5 col-12">
			<div id="welcomeHero">	
				<div id="slideshow-main">
					<ul>
						<li class="p1 active">
							<a href="#">
								<img class="img-fluid" src="assets/images/products/oneplus_m1.jpg" alt="" style="max-height:80vh;" />
						<!-- <span class="opacity"></span>
								<span class="content"><h1>Title 1</h1><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></span> -->
							</a>
						</li>
						<li class="p2">
							<a href="#">
								<img class="img-fluid" src="assets/images/products/oneplus_m2.jpg"  alt="" style="max-height:80vh;"/>
							</a>
						</li>
						<li class="p3">
							<a href="#">
								<img class="img-fluid" src="assets/images/products/oneplus_m3.jpg"  alt="" style="max-height:80vh;"/>
							</a>
						</li>
						<li class="p4">
							<a href="#">
								<img class="img-fluid" src="assets/images/products/oneplus_m4.jpg"  alt="" style="max-height:80vh;"/>
							</a>
						</li>
						<li class="p5">
							<a href="#">
								<img class="img-fluid" src="assets/images/products/oneplus_m5.jpg"   alt="" style="max-height:80vh;"/>
							</a>
						</li>
						<li class="p6">
							<a href="#">
								<img class="img-fluid" src="assets/images/products/oneplus_m7.jpg"   alt="" style="max-height:80vh;"/>
							</a>
						</li>
						<li class="p7">
							<a href="#">
								<img class="img-fluid" src="assets/images/products/oneplus_m6.jpg" alt="" style="max-height:80vh;"/>
								<!-- width="430" height="290" -->
							</a>
						</li>
					</ul>										
				</div>
						
				<div id="slideshow-carousel">				
					  <ul id="carousel" class="jcarousel jcarousel-skin-tango">
						<li><a href="#" rel="p1"><img src="assets/images/products/oneplus_m1.jpg" width="120" height="95" alt="#"/></a></li>
						<li><a href="#" rel="p2"><img src="assets/images/products/oneplus_m2.jpg" width="120" height="95" alt="#"/></a></li>
						<li><a href="#" rel="p3"><img src="assets/images/products/oneplus_m3.jpg" width="120" height="95" alt="#"/></a></li>
						<li><a href="#" rel="p4"><img src="assets/images/products/oneplus_m4.jpg" width="120" height="95" alt="#"/></a></li>
						<li><a href="#" rel="p5"><img src="assets/images/products/oneplus_m5.jpg" width="120" height="95" alt="#"/></a></li>
						<li><a href="#" rel="p6"><img src="assets/images/products/oneplus_m7.jpg" width="120" height="95" alt="#"/></a></li>
						<li><a href="#" rel="p7"><img src="assets/images/products/oneplus_m6.jpg" width="120" height="95" alt="#"/></a></li>
					  </ul>
				</div>
				<div class="clear"></div>
			</div>
		  </div>
		  <div class="col-md-7 col-12">
		  	<nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false">PURCHASE MODE</a>
			    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">ABOUT PRODUCT</a>
			    <a class="nav-item nav-link" id="" href="<?=base_url()?>category">BRAND STORE</a>
			  </div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			<!-- Tab 1 -->
			  <div class="tab-pane fade show active p-5" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			  	<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
				    COD
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
				  <label class="form-check-label" for="exampleRadios2">
				    Debit Card
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
				  <label class="form-check-label" for="exampleRadios3">
				    Credit Card
				  </label>
				</div>
			  </div>
			   <!-- Tab 2 -->
			  <div class="tab-pane fade p-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			  	<h4>OnePlus 7T Pro McLaren Limited Edition (12GB RAM+256GB Storage)</h4>
			  	<hr/>
			  	<p style="font-weight: bold;"><span class="text-muted">Price:</span> &#8377; 37,900.00</p>
			  	<hr/>
			  	<p style="font-weight: bold;">In stock</p>
			  			<form class="form-inline">
						  <div class="form-group">
						    <input type="text" class="form-control" id="inputPassword2" placeholder="Enter pin" style="border-radius: 0px;">
						  	</div>
						  <button type="button" class="btn" style="border-radius: 0px; background-color: #266ec0; color: white;">Check</button>
						</form>
			  	<hr/>
			  	<h6 class="mt-3">Description:</h6>
			  	<table class="table table-bordered">
				  <tbody>
				    <tr>
				      <th scope="row">OS</th>
				      <td>Android</td>
				    </tr>
				    <tr>
				      <th scope="row">RAM</th>
				      <td>12 GB</td>

				    </tr>
				    <tr>
				      <th scope="row">Special features</th>
				      <td>Dual SIM, GPS, Music Player, Video Player, In-display Fingerprint Sensor, Accelerometer, Electronic Compass, Gyroscope, Ambient Light Sensor, Proximity Sensor, Sensor Core</td>
				    </tr>
				    <tr>
				      <th scope="row">Whats in the box</th>
				      <td>Handset, Warp Charge 30 Power Adapter, Warp Type-C Cable (Support USB 2.0), Quick Start Guide, Welcome Letter, Safety Information and Warranty Card, Logo Sticker, Case, Screen Protector (pre-applied) and SIM Tray Ejector</td>
				    </tr>
				  </tbody>
				</table>
			  </div>
			  <!-- Tab 3 -->
			  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"></div>
			</div>
		  </div>
	  </div>
    </div>

<?php include('footer.php') ?>
</body>
	  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?=base_url()?>assets/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="<?=base_url()?>assets/js/script.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/jcarousel/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/jcarousel/js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		//jCarousel Plugin
	    $('#carousel').jcarousel({
			vertical: true,
			scroll: 1,
			auto: false,
			wrap: 'last',
			initCallback: mycarousel_initCallback
	   	});
	//Front page Carousel - Initial Setup
   	$('div#slideshow-carousel a img').css({'opacity': '0.5'});
   	$('div#slideshow-carousel a img:first').css({'opacity': '1.0'});
   	$('div#slideshow-carousel li a:first').append('<span class="arrow"></span>')

  
  	//Combine jCarousel with Image Display
    $('div#slideshow-carousel li a').hover(
       	function () {
        		
       		if (!$(this).has('span').length) {
        		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '0.5'});
   	    		$(this).stop(true, true).children('img').css({'opacity': '1.0'});
       		}		
       	},
       	function () {
        		
       		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '0.5'});
       		$('div#slideshow-carousel li a').each(function () {

       			if ($(this).has('span').length) $(this).children('img').css({'opacity': '1.0'});

       		});
        		
       	}
	).click(function () {
	      	$('span.arrow').remove();        
		$(this).append('<span class="arrow"></span>');
       	$('div#slideshow-main li').removeClass('active');        
       	$('div#slideshow-main li.' + $(this).attr('rel')).addClass('active');	
       	return false;
	});
});
//Carousel Tweaking
function mycarousel_initCallback(carousel) {
	
	// Pause autoscrolling if the user moves with the cursor over the clip.
	carousel.clip.hover(function() {
		carousel.stopAuto();
	}, function() {
		carousel.startAuto();
	});
}
	</script>
</html>