<?php
Redux::setSection( $opt_name, array(
    'title'         =>  __( 'Menu', 'origin-theme'),
    'id'            =>  'opt-menu',
    'desc'          =>  __( 'Menu settings.', 'origin-theme'),
    'subsection'    =>  true,
    'fields'        =>  array(
        array(
            'id'       => 'switch-menubar',
            'type'     => 'switch',
            'title'    => __( 'Menu', 'origin-theme' ),
            'subtitle' => __( 'This will enable/disable menu from theme.', 'origin-theme' ),
            'desc'     => __( 'To manage Menus follow this link - <a href=" ' . admin_url() . 'nav-menus.php" >Site Menus</a>', 'origin-theme' ),
            'default'  => 0,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'switch-mega-menu',
            'type'     => 'switch',
            'required' => array( 'switch-menubar', '=', '1' ),
            'title'    => __( 'Mega Menu', 'origin-theme' ),
            'subtitle' => __( 'This will enable/disable mega menu from theme.', 'origin-theme' ),
            'desc'     => __( 'To manage Menus follow this link - <a href=" ' . admin_url() . 'nav-menus.php" >Site Menus</a>', 'origin-theme' ),
            'default'  => 0,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'opt-main-menu-position',
            'type'     => 'image_select',
            'required' => array( 'switch-menubar', '=', '1' ),
            'title'    => __( 'Menu Position', 'origin-theme' ),
            'subtitle' => __( 'Select the position you want for menu.', 'origin-theme' ),
            // 'desc'     => __( 'This uses some of the built in images, you can use them for layout options.', 'origin-theme' ),
            //Must provide key => value(array:title|img) pairs for radio options
            'options'  => array(
                'leftMenu' => array(
                    'alt' => 'Left Menu',
                    'img' => ReduxFramework::$_url . 'assets/img/left-menu.png'
                ),
                'topMenu' => array(
                    'alt' => 'Top Menu',
                    'img' => ReduxFramework::$_url . 'assets/img/top-menu.png'
                ), 
                'rightMenu' => array(
                    'alt' => 'Right Menu',
                    'img' => ReduxFramework::$_url . 'assets/img/right-menu.png'
                )                        
            ),
            'default'  => 'topMenu'
        ),
        array(
            'id'        =>  'opt-radio-menubar-width',
            'type'      =>  'radio',
            'required'  =>  array( 
                                array('switch-menubar', '=', '1'),
                                array('opt-main-menu-position', '=', 'topMenu')
                            ),
            'title'     =>  __( 'Menubar Width', 'origin-theme'),
            'subtitle'  =>  __( 'Set width for menubar.', 'origin-theme'),
            'options'   =>  array(
                                'fullWidth'     =>  'Full Width Menu',
                                'fixedWidth'    =>  'Fixed Width Menu'
                            ),
            'default'   =>  'fixedWidth'
        ),
        array(
            'id'             => 'opt-menubar-height',
            'type'           => 'dimensions',
            'required'       => array( 
                                    array('switch-menubar', '=', '1'),
                                    array('opt-main-menu-position', '=', 'topMenu')
                                ),
            'units'          => array( 'em', 'px', '%' ),    // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',  // Allow users to select any type of unit
            'title'          => __( 'Menubar Height', 'origin-theme' ),
            'subtitle'       => __( 'Allow your users to choose height, and/or unit.', 'origin-theme' ),
            'desc'           => __( 'You can enable or disable any piece of this field. Height or Units.', 'origin-theme' ),
            'width'          => false,
            'default'        => array(
                'width' => 200,
                'height' => 50,
            )
        ),
        array(
            'id'            => 'opt-menubar-font-size',
            'type'          => 'slider',
            'title'         => __( 'Menu Font Size', 'origin-theme' ),
            'subtitle'      => __( 'This slider fix the font size of Menu.', 'origin-theme' ),
            'desc'          => __( 'Font size of menu. Min: 12, max: 18, step: 1, default value: 14', 'origin-theme' ),
            'default'       => 14,
            'min'           => 12,
            'step'          => 1,
            'max'           => 18,
            'display_value' => 'label'
        ),
        array(
            'id'       => 'opt-side-menu-text-allignment',
            'type'     => 'select',
            'required' => array('opt-main-menu-position', '!=', 'topMenu'),
            'title'    => __( 'Side Menu Text Allignment', 'origin-theme' ),
            'subtitle' => __( 'Select text alignment.', 'origin-theme' ),
            // 'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
            //Must provide key => value pairs for select options
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right',
            ),
            'default'  => 'left'
        ),
        array(
            'id'       => 'opt-menubar-background',
            'type'     => 'background',
            'required' => array( 'switch-menubar', '=', '1' ),
            //'compiler' => array('.main-menu-bar .top-bar'),
            //'mode'     => 'background',
            'title'    => __('Menubar Background', 'redux-framework-demo'),
            'subtitle' => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
            'default'  => array(
                'background-color' => '#fff',
            )
        ),
        array(
            'id'       => 'opt-menu-link-color',
            'type'     => 'link_color',
            'required' => array( 'switch-menubar', '=', '1' ),
            'compiler' => true,
            'title'    => __( 'Menu Link Color', 'origin-theme' ),
            'subtitle' => __( 'Only color validation can be done on this field type', 'origin-theme' ),
            'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
            //'regular'   => false, // Disable Regular Color
            //'hover'     => false, // Disable Hover Color
            //'active'    => false, // Disable Active Color
            //'visited'   => true,  // Enable Visited Color
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#7B88CC',
                'active'  => '#7B88CC',
            )
        ),
        array(
            'id'       => 'opt-select-menu-box-shadow-effect',
            'type'     => 'select',
            'required' => array( 'switch-menubar', '=', '1' ),
            'required' => array( 'opt-radio-menubar-width', '=', 'fixedWidth' ),
            'title'    => __( 'Menu Box Shadow Effect', 'origin-theme' ),
            'subtitle' => __( 'Select box shadow effect for menu.', 'origin-theme' ),
            'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
            //Must provide key => value pairs for select options
            'options'  => array(
                'none'      => 'None',
                'effect1'   => 'Effect1',
                'effect2'   => 'Effect2',
                'effect3'   => 'Effect3',
                'effect4'   => 'Effect4',
                'effect5'   => 'Effect5',
                'effect6'   => 'Effect6',
                'effect7'   => 'Effect7',
                'effect8'   => 'Effect8',
            ),
            'default'  => 'none',
        ),
        array(
            'id'             => 'opt-menubar-border-radius',
            'type'           => 'spacing',
            'required'       => array( 'switch-menubar', '=', '1' ),
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
            'title'    => __( 'Menubar Border Radius', 'origin-theme' ),
            'subtitle' => __( 'Subtitle', 'origin-theme' ),
            'desc'     => __( 'Type number with px. (5px)', 'origin-theme' ),
            'default'        => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            )
        ),
        array(
            'id'        =>  'switch-sticky-menu',
            'type'     => 'switch',
            'required' => array( 'switch-menubar', '=', '1' ),
            'title'    => __( 'Enable Sticky Menu', 'origin-theme' ),
            'subtitle' => __( 'This will enable/disable Sticky Menu.', 'origin-theme' ),
            'default'  => 0,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'        =>  'switch-topbar-menu',
            'type'     => 'switch',
            'title'    => __( 'Enable Topbar Menu', 'origin-theme' ),
            'subtitle' => __( 'This will enable/disable Topbar Menu.', 'origin-theme' ),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'opt-radio-topbar-menu-location',
            'type'     => 'radio',
            'required' => array( 'switch-topbar-menu', '=', '1' ),
            'title'    => __( 'Topbar Menu Location', 'origin-theme' ),
            'subtitle' => __( 'Select position you want for topbar menu.', 'origin-theme' ),
            //'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
            //Must provide key => value pairs for radio options
            'options'  => array(
                'left'  => 'Left',
                'right' => 'Right'                    
            ),
            'default'  => 'right'
        ),
    )
) );
?>