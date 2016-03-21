tejas tejas tejas
<section class="columns large-9 medium-9 single-main-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
		<header>
			<div class="app-image">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<div class="app-details">
				<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
				<div><?php echo get_field( "app_section" );  ?></div>
				<div><?php 
					$terms = get_the_terms( $post->ID , 'appscat' );
					echo '<ul>';
					foreach ( $terms as $term ) {
					  echo '<li>'. $term->name . '</li>';
					} 
					echo '</ul>'
					?>
				</div>
				<?php
					$images_string = get_post_meta( $post->ID, 'listofimages', true); 
					$options = explode(',', $images_string);
				?>
				<div class='postslider autoplay'>
					<?php
						foreach ($options as $key => $value) {
							echo '<div><img src="'.$value.'"></div>';
						}
					?>
				</div>
				<div class="details-section description">
					<?php the_content(); ?>
				</div>
				<div class="details-section metadata">
					<div class="details-section-heading">
						<h1 class="heading"></h1>
					</div>
					<div class="details-section-contents">
						<div class="meta-info">
							<div class="title">
								App Size
							</div>
							<div class="content">
								<?php echo get_field( "app_size" );  ?>
							</div>
						</div>
						<div class="meta-info">
							<div class="title">
								Updated
							</div>
							<div class="content">
								<?php echo get_field( "app_updated" );  ?>
							</div>
						</div>
						<div class="meta-info">
							<div class="title">
								Requires Android
							</div>
							<div class="content">
								<?php echo get_field( "required_android" );  ?>
							</div>
						</div>
						<div class="meta-info">
							<div class="title">
								Current Version
							</div>
							<div class="content">
								<?php echo get_field( "current_version" );  ?>
							</div>
						</div>
					</div>
					
				</div>

			</div>

		</header>					
		<header class="article-header">	
			
			<?php get_template_part( 'parts/content', 'byline' ); ?>
	    </header> <!-- end article header -->
							
									
		<?php comments_template(); ?>	
														
	</article> <!-- end article -->
</section>
	
<section class="columns large-3 medium-3 secondary-sidebar">
	<?php if ( is_active_sidebar( 'apps_single_page_sidebar' ) ) : ?>
		<div id="apps-single-page-sidebar" class="apps-single-page-sidebar">
			<?php dynamic_sidebar( 'apps_single_page_sidebar' ); ?>
		</div><!-- #middle-bar-right-sidebar -->
	<?php endif; ?>
</section>