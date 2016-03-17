<?php

/**
 * Adds TwoColImgTxt widget.
 */
class TwoColImgTxt extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'TwoColImgTxt', // Base ID
			__( 'Two Col Image Text', 'auraweb' ), // Name
			array( 'description' => __( 'A Foo Widget', 'auraweb' ), ) // Args
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
		<div class="image-text-widget">
			<div class="row">
				<div class="columns large-6">
						<?php if ( ! empty( $instance['upload_image'] ) ) { ?>		
							<img src="<?php echo $instance['upload_image'] ?>" alt="" style="max-width:600px; width:100%; ">
							<?php
						} ?>	
				</div>
				<div class="columns large-6">
					<?php
						if ( ! empty( $instance['title'] ) ) {
							echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
						}
					?>
					<p>
						<?php
							if ( ! empty( $instance['description'] ) ) {
								echo $instance['description'];
							}
						?>
					</p>

				</div>
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
		// $upload_image_btn = ! empty( $instance['upload_image_btn'] ) ? $instance['upload_image_btn'] : __( 'Upload Image', 'auraweb' );
		$upload_image = ! empty( $instance['upload_image'] ) ? $instance['upload_image'] : __( '', 'auraweb' );
		$description = ! empty( $instance['description'] ) ? $instance['description'] : __( '', 'auraweb' );
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			
			<label for="<?php echo $this->get_field_id( 'upload_image' ); ?>"><?php _e( 'Image:' ); ?></label>

			<span style="background-color:#999; padding:10px; display:block; float:left;"><img src="<?php echo esc_attr( $upload_image ); ?>" alt="" style="max-width:300px; width:100%; float:left;"></span>
			
			<input id="<?php echo $this->get_field_id( 'upload_image' ); ?>" type="text" size="36" name="<?php echo $this->get_field_name( 'upload_image' ); ?>" value="<?php echo esc_attr( $upload_image ); ?>" />
			<!-- <input id="upload_image_button" type="button" value="Upload Image" /> -->
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'Description:' ); ?></label> 
		<textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>"><?php echo esc_attr( $description ); ?></textarea>
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
		$instance['upload_image'] = ( ! empty( $new_instance['upload_image'] ) ) ? $new_instance['upload_image'] : '';
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';

		return $instance;
	}

} // class TwoColImgTxt


// register TwoColImgTxt widget
function register_TwoColImgTxt() {
    register_widget( 'TwoColImgTxt' );
    add_action('admin_print_scripts', 'my_admin_scripts');
	add_action('admin_print_styles', 'my_admin_styles');
}
add_action( 'widgets_init', 'register_TwoColImgTxt' );


function my_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', get_template_directory_uri() . '/assets/functions/widgets/js/twoColImgTxt-widget.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');
}

function my_admin_styles() {
	wp_enqueue_style('thickbox');	
}

// if (isset($_GET['page']) && $_GET['page'] == 'widget.php') {
	
// }

?>