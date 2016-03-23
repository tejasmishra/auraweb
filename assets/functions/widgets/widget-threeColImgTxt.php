<?php

/**
 * Adds ThreeColImgTxt widget.
 */
class ThreeColImgTxt extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'ThreeColImgTxt', // Base ID
			__( 'Three Col Image Text', 'auraweb' ), // Name
			array( 'description' => __( 'Three Col Image Text', 'auraweb' ), ) // Args
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
				<div class="columns large-12 main-header">
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
			<div class="row">
				<div class="columns large-4 section-area">
						<?php if ( ! empty( $instance['upload_image1'] ) ) { ?>		
							<img src="<?php echo $instance['upload_image1'] ?>" alt="" style="max-width:600px; width:100%; ">
							<?php
						} ?>	
						<?php
							if ( ! empty( $instance['title1'] ) ) {
								echo $args['before_title'] . apply_filters( 'widget_title', $instance['title1'] ). $args['after_title'];
							}
						?>
						<?php
							if ( ! empty( $instance['description1'] ) ) {
								echo '<p>'.$instance['description1'].'<span class="paragraph-end"></span></p>';
							}
						?>
						
						<?php
							if ( ! empty( $instance['link1'] ) ) {
								echo '<a href="'.$instance['link1'].'">Continue Reading</a>';
							}
						?>
				</div>
				<div class="columns large-4 section-area">
						<?php if ( ! empty( $instance['upload_image2'] ) ) { ?>		
							<img src="<?php echo $instance['upload_image2'] ?>" alt="" style="max-width:600px; width:100%; ">
							<?php
						} ?>	
						<?php
							if ( ! empty( $instance['title2'] ) ) {
								echo $args['before_title'] . apply_filters( 'widget_title', $instance['title2'] ). $args['after_title'];
							}
						?>
						
						<?php
							if ( ! empty( $instance['description2'] ) ) {
								echo '<p>'.$instance['description2'].'<span class="paragraph-end"></span></p>';
							}
						?>
						
						<?php
							if ( ! empty( $instance['link2'] ) ) {
								echo '<a href="'.$instance['link2'].'">Continue Reading</a>';
							}
						?>

				</div>
				<div class="columns large-4 section-area">
						<?php if ( ! empty( $instance['upload_image3'] ) ) { ?>		
							<img src="<?php echo $instance['upload_image3'] ?>" alt="" style="max-width:600px; width:100%; ">
							<?php
						} ?>	
						<?php
							if ( ! empty( $instance['title3'] ) ) {
								echo $args['before_title'] . apply_filters( 'widget_title', $instance['title3'] ). $args['after_title'];
							}
						?>
						<?php
							if ( ! empty( $instance['description3'] ) ) {
								echo '<p>'.$instance['description3'].'<span class="paragraph-end"></span></p>';
							}
						?>
						
						<?php
							if ( ! empty( $instance['link3'] ) ) {
								echo '<a href="'.$instance['link3'].'">Continue Reading</a>';
							}
						?>
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
		$description = ! empty( $instance['description'] ) ? $instance['description'] : __( '', 'auraweb' );

		$title1 = ! empty( $instance['title1'] ) ? $instance['title1'] : __( '', 'auraweb' );
		$title2 = ! empty( $instance['title2'] ) ? $instance['title2'] : __( '', 'auraweb' );
		$title3 = ! empty( $instance['title3'] ) ? $instance['title3'] : __( '', 'auraweb' );
		$upload_image1 = ! empty( $instance['upload_image1'] ) ? $instance['upload_image1'] : __( '', 'auraweb' );
		$upload_image2 = ! empty( $instance['upload_image2'] ) ? $instance['upload_image2'] : __( '', 'auraweb' );
		$upload_image3 = ! empty( $instance['upload_image3'] ) ? $instance['upload_image3'] : __( '', 'auraweb' );
		$description1 = ! empty( $instance['description1'] ) ? $instance['description1'] : __( '', 'auraweb' );
		$description2 = ! empty( $instance['description2'] ) ? $instance['description2'] : __( '', 'auraweb' );
		$description3 = ! empty( $instance['description3'] ) ? $instance['description3'] : __( '', 'auraweb' );
		$link1 = ! empty( $instance['link1'] ) ? $instance['link1'] : __( '', 'auraweb' );
		$link2 = ! empty( $instance['link2'] ) ? $instance['link2'] : __( '', 'auraweb' );
		$link3 = ! empty( $instance['link3'] ) ? $instance['link3'] : __( '', 'auraweb' );
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title1 ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'Description:' ); ?></label> 
			<textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>"><?php echo esc_attr( $description ); ?></textarea>
		</p>




		<p>
			<label for="<?php echo $this->get_field_id( 'title1' ); ?>"><?php _e( 'Title 1:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title1' ); ?>" name="<?php echo $this->get_field_name( 'title1' ); ?>" type="text" value="<?php echo esc_attr( $title1 ); ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id( 'upload_image1' ); ?>"><?php _e( 'Image 1:' ); ?></label>
			<span class="spanClass" style="background-color:#999; padding:10px; display:block; float:left;"><img src="<?php echo esc_attr( $upload_image1 ); ?>" alt="" style="max-width:300px; width:100%; float:left;"></span>
			<input  class="upload-img" id="<?php echo $this->get_field_id( 'upload_image1' ); ?>" type="text" size="36" name="<?php echo $this->get_field_name( 'upload_image1' ); ?>" value="<?php echo esc_attr( $upload_image1 ); ?>" />
			<!-- <input id="upload_image_button" type="button" value="Upload Image" /> -->
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'description1' ); ?>"><?php _e( 'Description 1:' ); ?></label> 
			<textarea class="widefat" id="<?php echo $this->get_field_id( 'description1' ); ?>" name="<?php echo $this->get_field_name( 'description1' ); ?>"><?php echo esc_attr( $description1 ); ?></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'link1' ); ?>"><?php _e( 'Link 1:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'link1' ); ?>" name="<?php echo $this->get_field_name( 'link1' ); ?>" type="text" value="<?php echo esc_attr( $link1 ); ?>">
		</p>



		<p>
			<label for="<?php echo $this->get_field_id( 'title2' ); ?>"><?php _e( 'Title 2:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title2' ); ?>" name="<?php echo $this->get_field_name( 'title2' ); ?>" type="text" value="<?php echo esc_attr( $title2 ); ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id( 'upload_image2' ); ?>"><?php _e( 'Image 2:' ); ?></label>
			<span class="spanClass" style="background-color:#999; padding:10px; display:block; float:left;"><img src="<?php echo esc_attr( $upload_image2 ); ?>" alt="" style="max-width:300px; width:100%; float:left;"></span>
			<input  class="upload-img" id="<?php echo $this->get_field_id( 'upload_image2' ); ?>" type="text" size="36" name="<?php echo $this->get_field_name( 'upload_image2' ); ?>" value="<?php echo esc_attr( $upload_image2 ); ?>" />
			<!-- <input id="upload_image_button" type="button" value="Upload Image" /> -->
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'description2' ); ?>"><?php _e( 'Description 2:' ); ?></label> 
			<textarea class="widefat" id="<?php echo $this->get_field_id( 'description2' ); ?>" name="<?php echo $this->get_field_name( 'description2' ); ?>"><?php echo esc_attr( $description2 ); ?></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'link2' ); ?>"><?php _e( 'Link 2:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'link2' ); ?>" name="<?php echo $this->get_field_name( 'link2' ); ?>" type="text" value="<?php echo esc_attr( $link2 ); ?>">
		</p>




		<p>
			<label for="<?php echo $this->get_field_id( 'title3' ); ?>"><?php _e( 'Title 1:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title3' ); ?>" name="<?php echo $this->get_field_name( 'title3' ); ?>" type="text" value="<?php echo esc_attr( $title3 ); ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id( 'upload_image3' ); ?>"><?php _e( 'Image 3:' ); ?></label>
			<span class="spanClass" style="background-color:#999; padding:10px; display:block; float:left;"><img src="<?php echo esc_attr( $upload_image3 ); ?>" alt="" style="max-width:300px; width:100%; float:left;"></span>
			<input  class="upload-img" id="<?php echo $this->get_field_id( 'upload_image3' ); ?>" type="text" size="36" name="<?php echo $this->get_field_name( 'upload_image3' ); ?>" value="<?php echo esc_attr( $upload_image3 ); ?>" />
			<!-- <input id="upload_image_button" type="button" value="Upload Image" /> -->
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'description3' ); ?>"><?php _e( 'Description 3:' ); ?></label> 
			<textarea class="widefat" id="<?php echo $this->get_field_id( 'description3' ); ?>" name="<?php echo $this->get_field_name( 'description3' ); ?>"><?php echo esc_attr( $description3 ); ?></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'link3' ); ?>"><?php _e( 'Link 3:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'link3' ); ?>" name="<?php echo $this->get_field_name( 'link3' ); ?>" type="text" value="<?php echo esc_attr( $link3 ); ?>">
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
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';

		$instance['title1'] = ( ! empty( $new_instance['title1'] ) ) ? strip_tags( $new_instance['title1'] ) : '';
		$instance['title2'] = ( ! empty( $new_instance['title2'] ) ) ? strip_tags( $new_instance['title2'] ) : '';
		$instance['title3'] = ( ! empty( $new_instance['title3'] ) ) ? strip_tags( $new_instance['title3'] ) : '';
		$instance['upload_image1'] = ( ! empty( $new_instance['upload_image1'] ) ) ? $new_instance['upload_image1'] : '';
		$instance['upload_image2'] = ( ! empty( $new_instance['upload_image2'] ) ) ? $new_instance['upload_image2'] : '';
		$instance['upload_image3'] = ( ! empty( $new_instance['upload_image3'] ) ) ? $new_instance['upload_image3'] : '';
		$instance['description1'] = ( ! empty( $new_instance['description1'] ) ) ? strip_tags( $new_instance['description1'] ) : '';
		$instance['description2'] = ( ! empty( $new_instance['description2'] ) ) ? strip_tags( $new_instance['description2'] ) : '';
		$instance['description3'] = ( ! empty( $new_instance['description3'] ) ) ? strip_tags( $new_instance['description3'] ) : '';
		$instance['link1'] = ( ! empty( $new_instance['link1'] ) ) ? strip_tags( $new_instance['link1'] ) : '';
		$instance['link2'] = ( ! empty( $new_instance['link2'] ) ) ? strip_tags( $new_instance['link2'] ) : '';
		$instance['link3'] = ( ! empty( $new_instance['link3'] ) ) ? strip_tags( $new_instance['link3'] ) : '';

		return $instance;
	}

} // class ThreeColImgTxt


// register ThreeColImgTxt widget
function register_ThreeColImgTxt() {
    register_widget( 'ThreeColImgTxt' );
}
add_action( 'widgets_init', 'register_ThreeColImgTxt' );




?>