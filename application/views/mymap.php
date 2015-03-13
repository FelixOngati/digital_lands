
<!DOCTYPE html>

<html>
<?php
?>
  <head>
      <title>Digital Lands</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollzer.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
        
        <noscript>
                <link rel="stylesheet" href="css/skel.css" />
                <link rel="stylesheet" href="css/style.css" />
                <link rel="stylesheet" href="css/style-wide.css" />
        </noscript>
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
                   
    <style>
/*      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }*/
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<!--<script src="js/jquery.min.js"></script>-->
		
    <script>
// This example uses a GroundOverlay to place an image on the map
// showing an antique map of Newark, NJ.

var historicalOverlay;

function initialize() {

  var newark = new google.maps.LatLng(40.740, -74.18);
  var imageBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(40.712216, -74.22655),
      new google.maps.LatLng(40.773941, -74.12544));

  var mapOptions = {
    zoom: 13,
    center: newark
  };

  var map = new google.maps.Map(document.getElementById('container'),
      mapOptions);

  historicalOverlay = new google.maps.GroundOverlay(
      '/digital_lands/images/maps/rf1234.jpg',
      imageBounds);
  historicalOverlay.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>      
   <!-- Header -->
			<div id="header" class="skel-layers-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">Land Owner</h1>
							<p>Profile Info</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--
							
								Prologue's nav expects links in one of two formats:
								
								1. Hash link (scrolls to a different section within the page)
								
								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>
							
							-->
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
								<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container" id="map_canvas">
<!--							<p>
								<a href="#portfolio" class="button scrolly" onclick="document.getElementById("p1").innerHTML = "New text!"">Shape File</a>
								<a href="#portfolio" class="button scrolly">Google Map</a>
								<a href="#portfolio" class="button scrolly">Earth View</a>
							</p>											-->

						</div>
					</section>
					
				<div id="main_canvas">fdfdfdfd</div>
				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2 id="p1">Contact</h2>
							</header>

							<p>Elementum sem parturient nulla quam placerat viverra 
							mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia 
							donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc 
							orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

						</div>
					</section>
			
			</div>

		
  </body>
</html>
