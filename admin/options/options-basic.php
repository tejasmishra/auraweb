<?php
Redux::setSection( $opt_name, array(
    'title'            => __( 'Basic Settings', 'origin-theme' ),
    'id'               => 'basic',
    'desc'             => __( 'These are really basic fields!', 'origin-theme' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-home',
    'fields'           => array(
            array(
                'id'             => 'opt-dimensions-site-width',
                'type'           => 'dimensions',
                'compiler'       => true,
                'units'          => array( 'em', 'px', '%', 'rem' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Site Width', 'origin-theme' ),
                'subtitle'       => __( 'Allow your users to choose width and/or unit.', 'origin-theme' ),
                'desc'           => __( 'You can enable or disable any piece of this field. Width, Height, or Units.', 'origin-theme' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 1200,
                    'height' => 100,
                )
            ),
            array(
                'id'       => 'switch-site-layout',
                'type'     => 'switch',
                'title'    => __( 'Site Layout', 'origin-theme' ),
                'subtitle' => __( 'Enable to use Boxed Layout.', 'origin-theme' ),
                'desc'     => __( 'If you want set Background Image or Background Color for body background then enable Boxed Layout.', 'origin-theme'),
                'default'  => 0,
                'on'       => 'Boxed',
                'off'      => 'Wide',
            ),
            array(
                'id'       => 'opt-color-boxed-area',
                'type'     => 'color',
                'required' => array( 'switch-site-layout', '=', '1' ),
                'mode'     => 'background-color',
                'compiler' => array('.boxed-layout'),
                'title'    => __( 'Boxed Background Color', 'origin-theme' ),
                'subtitle' => __( 'Pick a background color for the boxed area.', 'origin-theme' ),
                'validate' => 'color',
            ),
            array(
                'id'       => 'opt-body-background',
                'type'     => 'background',
                'required' => array( 'switch-site-layout', '=', '1' ),
                'compiler' => array('body'),
                'mode'     => 'background',
                'title'    => __('Body Background', 'redux-framework-demo'),
                'subtitle' => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'opt-layout-sections',
                'type'     => 'image_select',
                'title'    => __( 'Site Sections', 'origin-theme' ),
                'subtitle' => __( 'No validation can be done on this field type', 'origin-theme' ),
                'desc'     => __( 'This uses some of the built in images, you can use them for layout options.', 'origin-theme' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),
                    '4' => array(
                        'alt' => '3 Column Middle',
                        'img' => ReduxFramework::$_url . 'assets/img/3cm.png'
                    ),
                    '5' => array(
                        'alt' => '3 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/3cl.png'
                    ),
                    '6' => array(
                        'alt' => '3 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/3cr.png'
                    )
                ),
                'default'  => '2'
            ),
        )
    ) );
?>