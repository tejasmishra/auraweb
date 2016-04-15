<?php
/*
Template Name: Page Aura School (No Sidebar)
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content">
	
		    <main id="main" role="main">
		    	<?php 
			    	global $origin_theme;	                
	                $auraschool_main_slides        = $origin_theme['auraschool-main-slides'];
	                $auraschool_slide_count        = count($auraschool_main_slides);
	            ?>
		    	<?php if ( is_active_sidebar( 'auraschool_content' ) ) : ?>
					<div id="auraschool-content" class="auraschool-content">
						<?php dynamic_sidebar( 'auraschool_content' ); ?>
					</div><!-- #middle-bar-right-sidebar -->
				<?php endif; ?>
				
										

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
