<?php
/*
Template Name: Page Virtual Reality (No Sidebar)
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content">
	
		    <main id="main" role="main">
		    	<?php 
			    	global $origin_theme;	                
	                $vr_main_slides        = $origin_theme['vrpage-main-slides'];
	                $vr_slide_count        = count($vr_main_slides);
	            ?>
		    	<?php if ( is_active_sidebar( 'vrpage_content' ) ) : ?>
					<div id="vrpage-content" class="vrpage-content">
						<?php dynamic_sidebar( 'vrpage_content' ); ?>
					</div><!-- #middle-bar-right-sidebar -->
				<?php endif; ?>
				
										

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
