<?php
Redux::setSection( $opt_name, array(
    'title'            => __( 'Slider', 'origin-theme' ),
    'id'               => 'slider',
    'desc'             => __( 'These are slider basic fields!', 'origin-theme' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-picture',
) );
Redux::setSection( $opt_name, array(
    'title'      => __( 'Main Slider', 'origin-theme' ),
    'id'         => 'main-slider',
    'desc'       => __( 'Add slides here ', 'origin-theme' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'switch-parent-slider',
            'type'     => 'switch',
            'title'    => __( 'Enable Slider', 'origin-theme' ),
            'subtitle' => __( 'This will enable/disable all sliders from theme.<br>Slider Widget is added to widgets page, you can put it any area you want.', 'origin-theme' ),
            'desc'     => __( 'To manage Slider Widget follow this link - <a href=" ' . admin_url() . 'widgets.php" >Slider Widgets</a>', 'origin-theme' ),
            'default'  => 0,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'opt-main-slider-width',
            'type'     => 'image_select',
            'required' => array( 'switch-parent-slider', '=', '1' ),
            'title'    => __( 'Slider Width', 'origin-theme' ),
            'subtitle' => __( 'Select the width you want for slider.', 'origin-theme' ),
            'desc'     => __( 'This uses some of the built in images, you can use them for layout options.', 'origin-theme' ),
            //Must provide key => value(array:title|img) pairs for radio options
            'options'  => array(
                'fixedWidth' => array(
                    'alt' => 'Fixed Width',
                    'img' => ReduxFramework::$_url . 'assets/img/fixedWidth.png'
                ),
                'fullWidth' => array(
                    'alt' => 'Full Width',
                    'img' => ReduxFramework::$_url . 'assets/img/fullWidth.png'
                )                        
            ),
            'default'  => 'fixedWidth'
        ),
        
        array(
            'id'             => 'opt-slider-padding',
            'type'           => 'spacing',
            'compiler'       => array('.mainslider'),
            // An array of CSS selectors to apply this font style to
            // 'mode'           => 'margin',
            // absolute, padding, margin, defaults to padding
            'all'            => false,
            // Have one field that applies to all
            //'top'           => false,     // Disable the top
            //'right'         => false,     // Disable the right
            //'bottom'        => false,     // Disable the bottom
            //'left'          => false,     // Disable the left
            'units'          => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',    // Allow users to select any type of unit
            //'display_units' => 'false',   // Set to false to hide the units if the units are specified
            'title'          => __( 'Slider Padding', 'origin-theme' ),
            'subtitle'       => __( 'Allow your users to choose the spacing or margin they want.', 'origin-theme' ),
            'desc'           => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'origin-theme' ),
            'default'        => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            )
        ),
        array(
            'id'             => 'opt-slider-radius',
            'type'           => 'spacing',
            'compiler'       => true,
            // An array of CSS selectors to apply this font style to
            // 'mode'           => '',
            // absolute, padding, margin, defaults to padding
            'all'            => false,
            // Have one field that applies to all
            //'top'           => false,     // Disable the top
            //'right'         => false,     // Disable the right
            //'bottom'        => false,     // Disable the bottom
            //'left'          => false,     // Disable the left
            'units'          => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',    // Allow users to select any type of unit
            //'display_units' => 'false',   // Set to false to hide the units if the units are specified
            'title'          => __( 'Slider Radius', 'origin-theme' ),
            'subtitle'       => __( 'Allow your users to choose the spacing or margin they want.', 'origin-theme' ),
            'desc'           => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'origin-theme' ),
            'default'        => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            )
        ),
        array(
            'id'       => 'opt-main-slider-position',
            'type'     => 'select',
            'required' => array( 'switch-parent-slider', '=', '1' ),
            'title'    => __( 'Slider Position', 'origin-theme' ),
            'subtitle' => __( 'Select the position you want for slider.', 'origin-theme' ),
            'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
            //Must provide key => value pairs for select options
            'options'  => array(
                'aboveAll'     => 'Above All', 
                'aboveMenu'     => 'Above Menu',
                'behindMenu'    => 'Behind Menu',
                'belowMenu'     => 'Below Menu',                                        
            ),
            'default'  => 'belowMenu'
        ),            
        array(
            'id'          => 'opt-main-slides',
            'type'        => 'slides',
            'required' => array( 'switch-parent-slider', '=', '1' ),
            'title'       => __( 'Main Slides Options', 'origin-theme' ),
            'subtitle'    => __( 'Unlimited slides with drag and drop sortings.', 'origin-theme' ),
            'desc'        => __( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'origin-theme' ),
            'placeholder' => array(
                'title'       => __( 'This is a title', 'origin-theme' ),
                'description' => __( 'Description Here', 'origin-theme' ),
                'url'         => __( 'Give us a link!', 'origin-theme' ),
            ),
        ),

        array(
            'id'          => 'apps-main-slides',
            'type'        => 'slides',
            'required' => array( 'switch-parent-slider', '=', '1' ),
            'title'       => __( 'Apps Slides Options', 'origin-theme' ),
            'subtitle'    => __( 'Unlimited slides with drag and drop sortings.', 'origin-theme' ),
            'desc'        => __( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'origin-theme' ),
            'placeholder' => array(
                'title'       => __( 'This is a title', 'origin-theme' ),
                'description' => __( 'Description Here', 'origin-theme' ),
                'url'         => __( 'Give us a link!', 'origin-theme' ),
            ),
        ),

        array(
            'id'          => 'arpage-main-slides',
            'type'        => 'slides',
            'required' => array( 'switch-parent-slider', '=', '1' ),
            'title'       => __( 'Augmented Reality Slides', 'origin-theme' ),
            'subtitle'    => __( 'Unlimited slides with drag and drop sortings.', 'origin-theme' ),
            'desc'        => __( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'origin-theme' ),
            'placeholder' => array(
                'title'       => __( 'This is a title', 'origin-theme' ),
                'description' => __( 'Description Here', 'origin-theme' ),
                'url'         => __( 'Give us a link!', 'origin-theme' ),
            ),
        ),

        array(
            'id'          => 'vrpage-main-slides',
            'type'        => 'slides',
            'required' => array( 'switch-parent-slider', '=', '1' ),
            'title'       => __( 'Virtual Reality Slides', 'origin-theme' ),
            'subtitle'    => __( 'Unlimited slides with drag and drop sortings.', 'origin-theme' ),
            'desc'        => __( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'origin-theme' ),
            'placeholder' => array(
                'title'       => __( 'This is a title', 'origin-theme' ),
                'description' => __( 'Description Here', 'origin-theme' ),
                'url'         => __( 'Give us a link!', 'origin-theme' ),
            ),
        ),

        array(
            'id'          => 'auraschool-main-slides',
            'type'        => 'slides',
            'required' => array( 'switch-parent-slider', '=', '1' ),
            'title'       => __( 'Aura School Slides', 'origin-theme' ),
            'subtitle'    => __( 'Unlimited slides with drag and drop sortings.', 'origin-theme' ),
            'desc'        => __( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'origin-theme' ),
            'placeholder' => array(
                'title'       => __( 'This is a title', 'origin-theme' ),
                'description' => __( 'Description Here', 'origin-theme' ),
                'url'         => __( 'Give us a link!', 'origin-theme' ),
            ),
        ),
    )
) );
?>