<?php get_header(); ?>
asas
	<div id="content">
	
		<div id="inner-content" class="clearfix">
	
		    <main id="main" class="large-10 medium-10 columns" role="main">

				<section class="row">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 
						<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/loop', 'apps' ); ?>
					    
					<?php endwhile; ?>	

						<?php joints_page_navi(); ?>
						
					<?php else : ?>
												
						<?php get_template_part( 'parts/content', 'missing' ); ?>
							
					<?php endif; ?>
				</section>																				
		    </main> <!-- end #main -->

		    <?php if ( is_active_sidebar( 'apps_page_sidebar' ) ) : ?>
				<div id="apps-page-sidebar" class="apps-page-sidebar large-2 medium-2 columns">
					<?php dynamic_sidebar( 'apps_page_sidebar' ); ?>
				</div><!-- #middle-bar-right-sidebar -->
			<?php endif; ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>