<?php 
	$classes = array(
		'card',
		'small',
		'square-cover',
	);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?> role="article">
	<div class="card-content">
		<a href="<?php the_permalink() ?>" class="card-click-target"></a>
		<section class="featured-image cover" itemprop="articleBody">
			<div class="cover-image-container">
				<div class="cover-outer-align">
					<div class="cover-inner-align">
						<?php the_post_thumbnail('full', array('class' => 'cover-image')); ?>	
					</div>
				</div>
				
			</div>	
			
		
		</section> <!-- end article section -->

		<header class="article-header">
			<div class="details">
				<a href="<?php the_permalink() ?>" class="title" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?><span class="paragraph-end"></span></a>
				<div class="subtitle-container">
					<a class="subtitle" href="#"><?php echo get_field( "app_section" );  ?></a>
				</div>
			</div>
			
			<div class="description">
				<?php
					if(is_single()) {
						echo the_excerpt();
					}
				?>
				<?php 
					$fields = get_fields();
					$free_app = get_field('free_app');
					$terms = get_the_terms( $post->ID , 'appstag' );
					if ($terms) {
						foreach ( $terms as $term ) {
							if($term->name == 'Free') {
								$term_link = get_term_link( $term );
								$free_app_text = '<li class="free-app-text"><a href="'.esc_url( $term_link ).'" class="free-apps">FREE</a></li>';
							}
						}
					} 					
					
					if ($fields) {
						echo '<ul>';
						if (in_array("Augmented Reality", $fields['aura_app_badges'])) {
						    echo '<li><img src="'. AR_BADGE .'"></li>';
						}
						if (in_array("Virtual Reality", $fields['aura_app_badges'])) {
						    echo '<li><img src="'. VR_BADGE .'"></li>';
						}
						if (in_array("Play Store", $fields['aura_app_badges'])) {
						    echo '<li><img src="'. PLAY_STORE_BADGE .'"></li>';
						}
						if ($free_app) {
							echo $free_app_text;
						}
						echo "</ul>";
					} else {
						echo '<ul>'.$free_app_text.'</ul>';
					}
				?>
				<?php
					
				?>
				
			</div>			
			<?php //get_template_part( 'parts/content', 'byline' ); ?>				
		</header> <!-- end article header -->	
	</div>
							    							
</article> <!-- end article --> 	