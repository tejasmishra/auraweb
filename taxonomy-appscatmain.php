<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>

<?php get_header(); ?>

<div id="content">
	
		<div id="inner-content-side">
			
		    <main id="main" role="main">

		    	<div class="app-slider">
		    		<?php get_template_part( 'parts/content', 'app-slider' ); ?>
		    	</div>
		    	<div class="section-wrap-apps">
					<section>
						<div  class="cluster">
							<h2 class="cluster-heading">New + Updated Apps</h2>
								<?php
									$terms = get_the_terms( $post->ID , 'appstag' );
									 if ($terms) {
										echo '<p>';
											foreach ( $terms as $term ) {
												echo $term->name;
											}
										echo ' apps of the week</p>';
									} 
								?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						 
								<!-- To see additional archive styles, visit the /parts directory -->
								
									<?php get_template_part( 'parts/loop', 'apps' ); ?>
								
							    
							<?php endwhile; ?>	

								<?php joints_page_navi(); ?>
								
							<?php else : ?>
														
								<?php get_template_part( 'parts/content', 'missing' ); ?>
									
							<?php endif; ?>
						</div>
					</section>	
				</div>																			
		    </main> <!-- end #main -->

		    <?php if ( is_active_sidebar( 'apps_page_sidebar' ) ) : ?>
				<div id="apps-page-sidebar" class="apps-page-sidebar">
					<?php dynamic_sidebar( 'apps_page_sidebar' ); ?>
				</div><!-- #middle-bar-right-sidebar -->
			<?php endif; ?>

		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>