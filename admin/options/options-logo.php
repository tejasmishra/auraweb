<?php

Redux::setSection( $opt_name, array(
    'title'      => __( 'Logo', 'origin-theme' ),
    'id'         => 'logo',
    'desc'       => __( 'Logo ', 'origin-theme' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'media-logo',
            'type'     => 'media',
            'title'    => __( 'Logo', 'origin-theme' ),
            'desc'     => __( 'This is logo for site.', 'origin-theme' ),
            'subtitle' => __( 'Upload any logo using the WordPress native uploader', 'origin-theme' ),
        ),
        array(
            'id'       => 'media-logo-for-apps',
            'type'     => 'media',
            'title'    => __( 'Logo for Apps Page', 'origin-theme' ),
            'desc'     => __( 'This is logo for Apps page.', 'origin-theme' ),
            'subtitle' => __( 'Upload any logo using the WordPress native uploader', 'origin-theme' ),
        ),
        array(
            'id'        =>  'opt-radio-logo-posotion',
            'type'      =>  'radio',
            'title'     =>  __( 'Logo Position', 'origin-theme'),
            'subtitle'  =>  __( 'Select the position you want for logo.', 'origin-theme'),
            'options'   =>  array(
                                'besidesMenu' => 'Besides Menu',
                                'aboveMenu' => 'Above Menu'
                            ),
            'default'   => 'aboveMenu'
        ),
        array(
            'id'       => 'opt-logo-allignment',
            'type'     => 'select',
            'title'    => __( 'Logo Allignment', 'origin-theme' ),
            'subtitle' => __( 'Select logo alignment.', 'origin-theme' ),
            // 'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
            //Must provide key => value pairs for select options
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right',
            ),
            'default'  => ''
        ),
        array(
            'id'             => 'opt-logo-margin',
            'type'           => 'spacing',
            // An array of CSS selectors to apply this font style to
            'mode'           => 'margin',
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
            'title'          => __( 'Logo Margin', 'origin-theme' ),
            'subtitle'       => __( 'Choose space around logo.', 'origin-theme' ),
            'desc'           => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'origin-theme' ),
            'default'        => array(
                'margin-top'    => '0px',
                'margin-right'  => '0px',
                'margin-bottom' => '0px',
                'margin-left'   => '0px'
            )
        ),
        array(
            'id'       => 'switch-sticky-logo',
            'type'     => 'switch',
            'title'    => __( 'Use other logo for Sticky Menu ?', 'origin-theme' ),
            'subtitle' => __( 'Enable this to use same logo for your sticky menu.', 'origin-theme' ),
            // 'desc'     => __( '', 'origin-theme' ),
            'default'  => false,
            'on'       => 'Yes',
            'off'      => 'No',
            
        ),
        array(
            'id'       => 'media-sticky-logo',
            'type'     => 'media',
            'required' => array('switch-sticky-logo','equals','1'),
            'title'    => __( 'Sticky Header Logo', 'origin-theme' ),
            'desc'     => __( 'This is a logo for sticky header.', 'origin-theme' ),
            'subtitle' => __( 'Upload any logo using the WordPress native uploader', 'origin-theme' ),
        ),
    )
) );
?>