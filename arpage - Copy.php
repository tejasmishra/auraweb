<?php
/*
Template Name: Page Augmented Reality (No Sidebar)
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content">
	
		    <main id="main" role="main">
		    	<?php 
			    	global $origin_theme;	                
	                $ar_main_slides        = $origin_theme['arpage-main-slides'];
	                $ar_slide_count        = count($ar_main_slides);
	            ?>
		    	<div class='mainslider autoplay'>
                    <?php for($slide=0; $slide < $ar_slide_count; $slide++ ) { ?>
                            <div><img src='<?php echo $ar_main_slides[$slide]["image"]; ?>' ?></div>
                    <?php } ?>
                </div>
		    	<?php if ( is_active_sidebar( 'arpage_content' ) ) : ?>
					<div id="arpage-content" class="arpage-content">
						<?php dynamic_sidebar( 'arpage_content' ); ?>
					</div><!-- #middle-bar-right-sidebar -->
				<?php endif; ?>
				
										

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
