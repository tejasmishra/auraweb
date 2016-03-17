<?php

/**
 * Adds LatestRecentPost widget.
 */
class LatestRecentPost extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'LatestRecentPost', // Base ID
			__( 'Latest Recent Post', 'auraweb' ), // Name
			array( 'description' => __( 'Latest Recent Post', 'auraweb' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		?>


		<?php

			if ( ! empty( $instance['numberofpost'] ) ) { 
				$numberofpost = $instance['numberofpost'];	
			} 

		?>	

		<span>Latest from our blog</span>
		
		<?php
			$args = array( 
						'numberposts' => $numberofpost, 
						'post_type' => 'post',
						'category' => 'blog',
						'orderby' => 'post_date',
    					'order' => 'DESC',
						'post_status' => 'publish',
					);

			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){
				echo '<h2>'. ( __($recent["post_title"])) .'</h2>';
				print_r($recent_posts);
				$recent_author = get_user_by( 'ID', $recent["post_author"] );
				echo $recent_author->display_name . ' wrote on ' . mysql2date('j M Y', $recent["post_date"]) ;
				echo '<p>';
				echo ( __($recent["post_content"]));					
				echo '</p>';
				echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   ( __($recent["post_title"])).'</a> </li> ';
			}
		?>

		<div class="image-text-widget">
			<div class="row">
				
			</div>
		</div>
			

		
		<?php

		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( '', 'auraweb' );
		$numberofpost = ! empty( $instance['numberofpost'] ) ? $instance['numberofpost'] : __( '', 'auraweb' );
		
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'numberofpost' ); ?>"><?php _e( 'Number of Post:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'numberofpost' ); ?>" name="<?php echo $this->get_field_name( 'numberofpost' ); ?>" type="number" value="<?php echo esc_attr( $numberofpost ); ?>">
		</p>
		
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['numberofpost'] = ( ! empty( $new_instance['numberofpost'] ) ) ? $new_instance['numberofpost'] : '';

		return $instance;
	}

} // class LatestRecentPost

// register TwoColImgTxt widget
function register_LatestRecentPost() {
    register_widget( 'LatestRecentPost' );
}
add_action( 'widgets_init', 'register_LatestRecentPost' );


?>