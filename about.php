<?php
/*
Template Name: About Us
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content">
	
		    <main id="main" role="main">
		    	<?php if ( is_active_sidebar( 'aboutpage_content' ) ) : ?>
					<div id="aboutpage-content" class="aboutpage-content">
						<?php dynamic_sidebar( 'aboutpage_content' ); ?>
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
