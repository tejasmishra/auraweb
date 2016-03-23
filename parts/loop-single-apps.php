<section class="single-main-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
		<header class="info-container">
			<div class="app-image">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<div class="app-details">
				<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
				<div class="project-section">
					<?php echo get_field( "app_section" );  ?>

				</div>
				<div class="project-section">
					<?php 
						$terms = get_the_terms( $post->ID , 'appstag' );
						if($terms) {
							echo '<ul>';
							echo '<li>Category : </li>';
								foreach ( $terms as $term ) {
							  echo '<li>'. $term->name . '</li>';
							} 
							echo '</ul>';
						}
					?>
				</div>
				<div class="install-link">
					<a class="button secondary float-left" href="<?php echo get_field( "app_extra_download_link"); ?>">Download Assets</a>
					<a href="<?php ?>" class="button float-right">Install</a>
				</div>
				
			</div>
		</header>
		<main class="app-main-detail">
				<div class="app-detail-slider">
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
				</div>


				<div class="details-section description">
					<?php the_content(); ?>
				</div>
				<div class="details-section-divider"></div>
				<div class="details-section metadata">
					<div class="details-section-heading">
						<h1 class="heading">Additional Information</h1>
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
		</main>											
		
		<?php comments_template(); ?>	
														
	</article> <!-- end article -->
</section>
