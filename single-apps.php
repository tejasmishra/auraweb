<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content">

		<main id="main" class="large-10 medium-10 columns" role="main">
			<section class="row">
						
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			    	<?php get_template_part( 'parts/loop', 'single-apps' ); ?>
			    					
			    <?php endwhile; else : ?>
			
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