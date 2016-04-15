<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content">
	
		    <main id="main" role="main">
		    	<style type="text/css">
		            /* Set a size for our map container, the Google Map will take up 100% of this container */
		            #map {
		                width: 100%;
		                height: 500px;
		                background-color: white;
		            }
		        </style>
				<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
				<script type="text/javascript">
		            // When the window has finished loading create our google map below
		            google.maps.event.addDomListener(window, 'load', init);
		        
		            function init() {
		                // Basic options for a simple Google Map
		                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		                var mapOptions = {
		                    // How zoomed in you want the map to start at (always required)
		                    zoom: 11,

		                    // The latitude and longitude to center the map (always required)
		                    center: new google.maps.LatLng(23.0398169, 72.5513803), // Ahmedabad

		                    // How you would like to style the map. 
		                    // This is where you would paste any style found on Snazzy Maps.
		                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
		                };

		                // Get the HTML DOM element that will contain your map 
		                // We are using a div with id="map" seen below in the <body>
		                var mapElement = document.getElementById('map');

		                // Create the Google Map using our element and options defined above
		                var map = new google.maps.Map(mapElement, mapOptions);

		                // Let's also add a marker while we're at it
		                var marker = new google.maps.Marker({
		                    position: new google.maps.LatLng(23.0398169, 72.5513803),
		                    map: map,
		                    title: 'Venture Studio'
		                });
		            }
		        </script>
		    	<?php if ( is_active_sidebar( 'contactpage_content' ) ) : ?>
					<div id="contactpage-content" class="contactpage-content">
						<?php dynamic_sidebar( 'contactpage_content' ); ?>
						
						<div id="map"></div>
						<?php echo do_shortcode('[contact-form-7 id="35" title="Contact Us"]'); ?>
						<div class="row social-section">
							<div class="medium-12 columns">
								<h1 class="light">Get social!</h1>
							</div>
						</div>
						<div class="row last-section">
							<div class="medium-12 large-5 columns">
								<p class="lead">Aura Interactive is here, there and everywhere! Follow us on your favorite social networking sites.</p>
							</div>					
							<div class="medium-12 large-4 columns">
								<p>
									Nikul Patel: <a href="tel:+919427545722">+91 9427545722</a><br>
									Tejas Mishra: <a href="tel:+919427640040">+91 9427640040</a><br>
									Vishwas Brahmbhatt: <a href="tel:+919979765860">+91 9979765860</a>
								</p>
							</div>
							<div class="medium-12 large-3 columns">
								<p>
									Facebook <a href="https://www.facebook.com/aura.interactive/" target="_blank">Aura Interactive</a><br>
									Twitter <a href="https://twitter.com/AuraARVR" target="_blank">@AuraARVR</a><br>
									YouTube <a href="https://www.youtube.com/channel/UCjXfYCN0QY1XpKRtN4cXkxg" target="_blank">Aura Interactive</a>
								</p>
							</div>
						</div>	
					</div><!-- #middle-bar-right-sidebar -->
				<?php endif; ?>
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
