<?php
Redux::setSection( $opt_name, array(
    'title'            => __( 'Header', 'origin-theme' ),
    'id'               => 'header',
    'desc'             => __( 'These are header fields!', 'origin-theme' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-home',
    'fields'     => array(
        array(
            'id'       => 'opt-header-background',
            'type'     => 'background',
            'compiler' => array('header.header'),
            'mode'     => 'background',
            'title'    => __('Header Background', 'redux-framework-demo'),
            'subtitle' => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
        ),
        array(
            'id'             => 'opt-header-padding',
            'type'           => 'spacing',
            'compiler'       => array('header.header'),
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
            'title'          => __( 'Header Padding', 'origin-theme' ),
            'subtitle'       => __( 'Allow your users to choose the spacing or margin they want.', 'origin-theme' ),
            'desc'           => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'origin-theme' ),
            'default'        => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            )
        ),
        
    )
) );
?>