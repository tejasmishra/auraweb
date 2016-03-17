<?php
/*
Template Name: Home Page (No Sidebar)
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
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
