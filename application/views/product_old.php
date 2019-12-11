<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>TEchB | Category</title>
  </head>
  <style type="text/css">
    body{
      background-color: white;
      font-family:arial;  
    }
    /* Slide Show */
    img {
      border:0;
    }
    #slideshow-main {
      width:370px; 
      float:left; 
      margin-right:3px;
    }
    #slideshow-main ul {
      margin:0; 
      padding:0; 
      width:370px;
    }
    #slideshow-main li {
      width:429px; 
      height:290px; 
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
      width:206px;
      position:relative
    }
    #slideshow-carousel ul {
      margin:0; 
      padding:0;
      list-style:none;
    }
    #slideshow-carousel li {
      background:#fff; 
      height:97px; 
      position:relative
    }
    #slideshow-carousel li .arrow {
      left:3px; 
      top:28px; 
      position:absolute; 
      width:20px; 
      height:40px; 
      background:url(assets/images/icons/arrow_white.png) no-repeat 0 0; 
      display:block;
    }
    #slideshow-carousel li a {
      background:#000; 
      display:block; 
      width:120px; 
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
/*    #action_tab{
      position: relative;
      bottom: 25vh;
      display: none;
    }
    .card-body:hover #action_tab{
      display: block;
    }*/
  </style>
  <body>
     <?php include('header.php') ?>

     <div class="container-fluid mb-4" style="margin-top: 15vh; width: 98%;">
       <div class="row">
         <div class="col-md-3 col-12">
           <div id="welcomeHero">
              <div id="slideshow-main">
                <ul>
                  <li class="p1 active">
                    <a href="#">
                      <img src="assets/images/icons/1_big.gif" width="430" height="290" alt=""/>
                      <!-- <span class="opacity"></span>
                      <span class="content"><h1>Title 1</h1><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></span> -->
                    </a>
                  </li>
                  <li class="p2">
                    <a href="#">
                      <img src="assets/images/icons/2_big.gif" width="430" height="290" alt=""/>
                      <!-- <span class="opacity"></span>
                      <span class="content"><h1>Title 2</h1><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></span> -->
                    </a>
                  </li>
                  <li class="p3">
                    <a href="#">
                      <img src="assets/images/icons/3_big.gif" width="430" height="290" alt=""/>
                      <!-- <span class="opacity"></span>
                      <span class="content"><h1>Title 3</h1><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></span> -->
                    </a>
                  </li>
                  <li class="p4">
                    <a href="#">
                      <img src="assets/images/icons/4_big.gif" width="430" height="290" alt=""/>
                      <!-- <span class="opacity"></span>
                      <span class="content"><h1>Title 4</h1><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></span> -->
                    </a>
                  </li>
                  <li class="p5">
                    <a href="#">
                      <img src="assets/images/icons/5_big.gif" width="430" height="290" alt=""/>
                      <!-- <span class="opacity"></span>
                      <span class="content"><h1>Title 5</h1><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></span> -->
                    </a>
                  </li>
                  <li class="p6">
                    <a href="#">
                      <img src="assets/images/icons/6_big.gif" width="430" height="290" alt=""/>
                      <!-- <span class="opacity"></span>
                      <span class="content"><h1>Title 6</h1><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></span> -->
                    </a>
                  </li>
                  <li class="p7">
                    <a href="#">
                      <img src="assets/images/icons/7_big.gif" width="430" height="290" alt=""/>
                      <!-- <span class="opacity"></span>
                      <span class="content"><h1>Title 7</h1><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></span> -->
                    </a>
                  </li>
                </ul>                   
              </div>
              <div id="slideshow-carousel">       
                  <ul id="carousel" class="jcarousel jcarousel-skin-tango">
                  <li><a href="#" rel="p1"><img src="assets/images/icons/1.gif" width="120" height="95" alt="#"/></a></li>
                  <li><a href="#" rel="p2"><img src="assets/images/icons/2.gif" width="120" height="95" alt="#"/></a></li>
                  <li><a href="#" rel="p3"><img src="assets/images/icons/3.gif" width="120" height="95" alt="#"/></a></li>
                  <li><a href="#" rel="p4"><img src="assets/images/icons/4.gif" width="120" height="95" alt="#"/></a></li>
                  <li><a href="#" rel="p5"><img src="assets/images/icons/5.gif" width="120" height="95" alt="#"/></a></li>
                  <li><a href="#" rel="p6"><img src="assets/images/icons/6.gif" width="120" height="95" alt="#"/></a></li>
                  <li><a href="#" rel="p7"><img src="assets/images/icons/7.gif" width="120" height="95" alt="#"/></a></li>
                  </ul>
              </div>
              <div class="clear"></div>
            </div>
         </div>

         <div class="col-md-9 col-12"></div>
       </div>
     </div>

     <?php include('footer.php') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="assets/jcarousel/js/jquery-1.4.2.min.js"></script>
    <script src="assets/js/script.js"></script>
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
  </body>
</html>