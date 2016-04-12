<?php
function compiler_action($options, $css, $changed_values) {
    global $wp_filesystem;
    
    $filename = get_template_directory().'/assets/css/user-style.css';

    if( empty( $wp_filesystem ) ) {
        require_once( ABSPATH .'/wp-admin/includes/file.php' );
        WP_Filesystem();
    }
    
    $menu_bg_color_small = $options['opt-menubar-background-small']['background-color'];
    $menu_bg_color_default = $options['opt-menubar-background']['background-color'];

    $menu_regular_color = $options['opt-menu-link-color']['regular'];
    $menu_hover_color = $options['opt-menu-link-color']['hover'];
    $menu_active_color = $options['opt-menu-link-color']['active'];
    $menu_visited_color = $options['opt-menu-link-color']['visited'];

    $slider_top_left 		= $options['opt-slider-radius']['padding-top'];
    $slider_top_right 		= $options['opt-slider-radius']['padding-right'];
    $slider_bottom_right 	= $options['opt-slider-radius']['padding-bottom'];
    $slider_bottom_left		= $options['opt-slider-radius']['padding-left'];

	$menubar_top_left 		= $options['opt-menubar-border-radius']['padding-top'];
    $menubar_top_right 		= $options['opt-menubar-border-radius']['padding-right'];
    $menubar_bottom_right 	= $options['opt-menubar-border-radius']['padding-bottom'];
    $menubar_bottom_left	= $options['opt-menubar-border-radius']['padding-left'];



    if($slider_top_left != '' || $slider_top_right != '' || $slider_bottom_right != '' || $slider_bottom_left != '') {
        $css .= '.mainslider .slick-list {
            -webkit-border-top-left-radius: '.$slider_top_left.';
            -webkit-border-top-right-radius: '.$slider_top_right.';
            -webkit-border-bottom-right-radius: '.$slider_bottom_right.';
            -webkit-border-bottom-left-radius: '.$slider_bottom_left.';
            -moz-border-radius-topleft: '.$slider_top_left.';
            -moz-border-radius-topright: '.$slider_top_right.';
            -moz-border-radius-bottomright: '.$slider_bottom_right.';
            -moz-border-radius-bottomleft: '.$slider_bottom_left.';
            border-top-left-radius: '.$slider_top_left.';
            border-top-right-radius: '.$slider_top_right.';
            border-bottom-right-radius: '.$slider_bottom_right.';
            border-bottom-left-radius: '.$slider_bottom_left.';
        }
    ';
    }

    if($menubar_top_left != '' || $menubar_top_right != '' || $menubar_bottom_right != '' || $menubar_bottom_left != '') {
        $css .= '.main-menu-bar, .main-menu-bar .top-bar {
            -webkit-border-top-left-radius: '.$menubar_top_left.';
            -webkit-border-top-right-radius: '.$menubar_top_right.';
            -webkit-border-bottom-right-radius: '.$menubar_bottom_right.';
            -webkit-border-bottom-left-radius: '.$menubar_bottom_left.';
            -moz-border-radius-topleft: '.$menubar_top_left.';
            -moz-border-radius-topright: '.$menubar_top_right.';
            -moz-border-radius-bottomright: '.$menubar_bottom_right.';
            -moz-border-radius-bottomleft: '.$menubar_bottom_left.';
            border-top-left-radius: '.$menubar_top_left.';
            border-top-right-radius: '.$menubar_top_right.';
            border-bottom-right-radius: '.$menubar_bottom_right.';
            border-bottom-left-radius: '.$menubar_bottom_left.';
        }
    ';
    }

    

    
    
    $css .= '

    .row, .contain-to-grid .top-bar, .reveal-modal, .reveal-modal.tiny, .reveal-modal.small, .reveal-modal.medium, .reveal-modal.large, .reveal-modal.xlarge, .reveal-modal.full {
        max-width: '.$options['opt-dimensions-site-width']['width'].';
    }
    
    .top-bar-section li.active:not(.has-form) a:not(.button){
        color: ' . $menu_active_color .';
    }
    .top-bar-section ul li:hover:not(.has-form) > a, .top-bar-section li.active:not(.has-form) a:not(.button):hover {
        color: ' . $menu_hover_color . ';
    }

    .top-bar-section ul li > a {
        color: ' . $menu_regular_color . ';
    }
    .main-menu-bar .top-bar, .top-bar ul {
        background-color: '. $menu_bg_color_default .';
    }
    @media screen and (max-width: 39.9375em) {
        .top-bar ul {
            background-color: '. $menu_bg_color_small .';
        }
    }

    .main-menu-bar .top-bar {
        height: '. $options['opt-menubar-height']['height'] .';
    }

    .top-bar li a {
        font-size: '. $options['opt-menubar-font-size'].'px;
    }
    

    
    
    ';

    if( $wp_filesystem ) {
        $wp_filesystem->put_contents(
            $filename,
            $css,
            FS_CHMOD_FILE // predefined mode settings for WP files
        );
    }


    
}

?>