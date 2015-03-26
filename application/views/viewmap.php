<script>
                    
                    var historicalOverlay;
                    function initialize(){
                        var place = new google.maps.LatLng(40.740,-74.718);
                        var imageBounds = google.maps.LatLngBounds(
                                new google.maps.LatLng(40.712216, -74.22655),
                                new google.maps.LatLng(40.773941, -74.12544)
                                );
                        var mapOptions = {
                            zoom: 13,
                            center: place
                        };
                        
                        var map = new google.maps.Map(document.getElementById('map-canvas'),
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
							<h1 id="title"><?php echo $fname." ".$lname;?></h1>
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
								<li><a href="#owner" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
								<li><a href="buymap" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope"><h4>Buy this Map</h4></span></a></li>
								<li><a href="#land" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Lands Registry</span></a></li>								
								<li><ul>
									<?php $mylands = $myclass->parse_my_lands("28933728");?>
									<?php foreach($mylands as $data){
										?><li><a href="viewmap/getland/<?php echo $data->rf_id;?>" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope"><?php echo $data->rf_id;?></span></a></li></li>
									<?php }?>
								    </ul>
									
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
							<!-- <p>
								<a href="#portfolio" class="button scrolly" onclick="document.getElementById("p1").innerHTML = "New text!"">Shape File</a>
								<a href="#portfolio" class="button scrolly">Google Map</a>
								<a href="#portfolio" class="button scrolly">Earth View</a>
							</p> -->							
							<img src="http://localhost/digital_lands/images/maps/<?php echo $rf_id.".jpg";?>">											

						</div>
					</section>
					
				
				<!-- Land Details -->
					<section id="land" class="four">
						<div class="container">

							<header>
								<h2 id="p1">This Land's Details</h2>
							</header>

							<p>Elementum sem parturient nulla quam placerat viverra 
							mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia 
							donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc 
							orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

						</div>
					</section>

				<!-- Owner Details -->
					<section id="owner" class="four">
						<div class="container">

							<header>
								<h2 id="p1">Owner's Details</h2>
							</header>

							<p><?php echo $this->session->userdata('username');?>Elementum sem parturient nulla quam placerat viverra 
							mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia 
							donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc 
							orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

						</div>
					</section>
			
			</div>

		