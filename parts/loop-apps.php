
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
			    echo '<img src="'. get_template_directory_uri() .'/assets/images/badges/as.png">';
			}
			if (in_array("Virtual Reality", $fields['aura_app_badges'])) {
			    echo '<img src="'. get_template_directory_uri() .'/assets/images/badges/vrenabled-40x40.png">';
			}
			if (in_array("Play Store", $fields['aura_app_badges'])) {
			    echo '<img src="'. get_template_directory_uri() .'/assets/images/badges/available-on-playstore-40x40.png">';
			}
		?>
						
		<?php //get_template_part( 'parts/content', 'byline' ); ?>				
	</header> <!-- end article header -->	
					
	<section class="entry-content" itemprop="articleBody">
		<?php the_content('<button class="tiny">' . __( 'Read more...', 'auraweb' ) . '</button>'); ?> 
	</section> <!-- end article section -->
					    							
</article> <!-- end article --> 	