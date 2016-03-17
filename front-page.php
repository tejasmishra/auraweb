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
						<?php dynamic_sidebar( 'homepage_content' ); ?>
					</div><!-- #middle-bar-right-sidebar -->
				<?php endif; ?>
				
										

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
