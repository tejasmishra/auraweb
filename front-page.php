<?php
/*
Template Name: Front Page (No Sidebar)
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content">
	
		    <main id="main" role="main">

		    	<?php if ( is_active_sidebar( 'homepage_content' ) ) : ?>
					<div id="homepage-content" class="homepage-content">
						<div class="fullscreen-bg hide-for-small">
							<div class="overlay-text text-center">
								<h1 class="light white-text text-center">We Build Reality</h1>
								<div class="row">
									<div class="large-8 columns large-centered text-center white-text">
										<p class="lead white-text">Here at <strong>Aura Interactive</strong>, We create next generation Augmented Reality and Virtual Reality Applications.</p>
									</div>
									<a href="http://aura-interactive.com/solarar/" class="button large-btn">Explore our App</a>
								</div>
							</div>	
						    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg_video">
						        <source src="http://aura-interactive.com/wp-content/themes/auraweb/assets/aura-homescreen-video.webm" type="video/webm">
						        <source src="http://aura-interactive.com/wp-content/themes/auraweb/assets/aura-homescreen-video.mp4" type="video/mp4">
						    </video>
						</div>
						<style>
						.fullscreen-bg {
						    position: relative;
						    overflow: hidden;
						    height: 554px;
						    width: 100%;
						}
						h1.white-text {
							font-size: 5em;
						}
						.large-btn {
							font-size: 1.3em;
							margin-top: 20px;
						}
						.lead {
							font-size: 2em;
	    					line-height: 1.6;
							margin-top: 10px;
						}
						.white-text {
						    color: #FFF;
						}
						.fullscreen-bg_video {
							position: absolute;
						    width: 100%;
						    height: auto;
						    bottom: 0;
						}
						.overlay-text {
							position: absolute;
						    z-index: 1;
						    width: 100%;
						    height: 100%;
						    top: 0;
						    bottom: 0;
						    margin-top: 150px;
						}
						</style>
						<?php dynamic_sidebar( 'homepage_content' ); ?>
					</div><!-- #middle-bar-right-sidebar -->
				<?php endif; ?>
				
										

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
