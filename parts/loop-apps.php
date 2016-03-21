<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

	<section class="featured-image" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>
	</section> <!-- end article section -->

	<header class="article-header">
		<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>	
		<?php 
			echo get_field( "app_section" );  
			$fields = get_fields();
			if (in_array("Augmented Reality", $fields['aura_app_badges'])) {
			    echo '<img src="'. AR_BADGE .'">';
			}
			if (in_array("Virtual Reality", $fields['aura_app_badges'])) {
			    echo '<img src="'. VR_BADGE .'">';
			}
			if (in_array("Play Store", $fields['aura_app_badges'])) {
			    echo '<img src="'. PLAY_STORE_BADGE .'">';
			}
			
		?>
						
		<?php //get_template_part( 'parts/content', 'byline' ); ?>				
	</header> <!-- end article header -->						    							
</article> <!-- end article --> 	