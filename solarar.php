<?php
/*
Template Name: SolarAR Page (No Sidebar)
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content">
	
		    <main id="main" role="main">
		    	<?php if ( is_active_sidebar( 'solararpage_content' ) ) : ?>
					<div id="solararpage-content" class="solararpage-content">
						<?php dynamic_sidebar( 'solararpage_content' ); ?>
					</div><!-- #middle-bar-right-sidebar -->
				<?php endif; ?>
				
										

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
