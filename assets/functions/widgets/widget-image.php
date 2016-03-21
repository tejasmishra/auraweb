<?php

/**
 * Adds ImageWidget widget.
 */
class ImageWidget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'ImageWidget', // Base ID
			__( 'Image Upload', 'auraweb' ), // Name
			array( 'description' => __( 'Image Upload', 'auraweb' ), ) // Args
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
		<div class="image-widget">
			<?php if ( ! empty( $instance['upload_image'] ) ) { ?>		
				<img src="<?php echo $instance['upload_image'] ?>" alt="" style="max-width:600px; width:100%; ">
				<?php
			} ?>	
				
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
			<span class="spanClass" style="background-color:#999; padding:10px; display:block; float:left;"><img src="<?php echo esc_attr( $upload_image ); ?>" alt="" style="max-width:300px; width:100%; float:left;"></span>
			<input class="upload-img" id="<?php echo $this->get_field_id( 'upload_image' ); ?>" type="text" size="36" name="<?php echo $this->get_field_name( 'upload_image' ); ?>" value="<?php echo esc_attr( $upload_image ); ?>" />
			<!-- <input id="upload_image_button" type="button" value="Upload Image" /> -->
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

		return $instance;
	}

} // class ImageWidget


// register ImageWidget widget
function register_ImageWidget() {
    register_widget( 'ImageWidget' );
    add_action('admin_enqueue_scripts', 'imageUpload_admin_scripts');
}
add_action( 'widgets_init', 'register_ImageWidget' );


function imageUpload_admin_scripts() {
	wp_enqueue_media();
	wp_register_script('imageUpload-upload', get_template_directory_uri() . '/assets/functions/widgets/js/image-widget.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('imageUpload-upload');
}

?>