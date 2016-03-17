<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

//Add Redux Framework
require_once(get_template_directory() . '/admin/admin-init.php');

require_once(get_template_directory() . '/assets/functions/widgets.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');
require_once(get_template_directory().'/assets/functions/menu-walkers.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php'); 

// Adds customizer support


	global $origin_theme, $slider_enabled, $is_logo_set, $topbar_menu_pos, $slider_position, $site_layout, $is_menu, $logo_location, $menubar_width, $topbar_menu, $menu_box_shadow, $site_sections;
		
	$origin_theme 		=	get_option( 'origin_theme' );
	$slider_enabled 	=	$origin_theme['switch-parent-slider'];
	$is_logo_set 		=	$origin_theme['media-logo']['url'] != '' ? true : false;
	$topbar_menu_pos	=	$origin_theme['opt-radio-topbar-menu-location'];
	$slider_position 	= 	$origin_theme['opt-main-slider-position'];
	$site_layout		= 	$origin_theme['switch-site-layout'];
	$is_menu			= 	$origin_theme['switch-menubar'];
	$logo_location		=	$origin_theme['opt-radio-logo-posotion'];
	$menubar_width		=	$origin_theme['opt-radio-menubar-width'];
	$topbar_menu		=	$origin_theme['switch-topbar-menu'];
	$menu_box_shadow	=	$origin_theme['opt-select-menu-box-shadow-effect'];
	$site_sections		=	$origin_theme['opt-layout-sections'];
	
	
