<?php
// SIDEBARS AND WIDGETIZED AREAS
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'auraweb'),
		'description' => __('The first (primary) sidebar.', 'auraweb'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'auraweb'),
		'description' => __('The offcanvas sidebar.', 'auraweb'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'leftSidebar',
		'name' => __('Sidebar Left', 'origintheme'),
		'description' => __('The left sidebar.', 'origintheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'rightSidebar',
		'name' => __('Sidebar Right', 'origintheme'),
		'description' => __('The right sidebar.', 'origintheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	
	register_sidebar( array(
		'name'          => 'Menu Bar Right Section',
		'id'            => 'menu_bar_right_section',
		'before_widget' => '<div class="right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Middle Bar Right Section',
		'id'            => 'middle_bar_right_section',
		'before_widget' => '<div class="right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => 'Header',
		'id'            => 'header_area',
		'before_widget' => '<div class="header_area_widget_area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Homa Page',
		'id'            => 'homepage_content',
		'before_widget' => '<div id="%1$s" class="homepage_content widget %2$s">',
		'after_widget' => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Augmented Reality Page',
		'id'            => 'arpage_content',
		'before_widget' => '<div id="%1$s" class="arpage_content widget %2$s">',
		'after_widget' => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Virtual Reality Page',
		'id'            => 'vrpage_content',
		'before_widget' => '<div id="%1$s" class="vrpage_content widget %2$s">',
		'after_widget' => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Aura School Page',
		'id'            => 'auraschool_content',
		'before_widget' => '<div id="%1$s" class="auraschool_content widget %2$s">',
		'after_widget' => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Contact Page',
		'id'            => 'contactpage_content',
		'before_widget' => '<div id="%1$s" class="contactpage_content widget %2$s">',
		'after_widget' => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'About Page',
		'id'            => 'aboutpage_content',
		'before_widget' => '<div id="%1$s" class="aboutpage_content widget %2$s">',
		'after_widget' => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'SolarAR Page',
		'id'            => 'solararpage_content',
		'before_widget' => '<div id="%1$s" class="solararpage_content widget %2$s">',
		'after_widget' => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer_content',
		'before_widget' => '<div id="%1$s" class="footer_content widget %2$s">',
		'after_widget' => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Apps Page Sidebar',
		'id'            => 'apps_page_sidebar',
		'before_widget' => '<div id="%1$s" class="apps_page_sidebar widget %2$s">',
		'after_widget' => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Apps Single Page Secondary Sidebar',
		'id'            => 'apps_single_page_sidebar',
		'before_widget' => '<div id="%1$s" class="apps_single_page_sidebar widget %2$s">',
		'after_widget' => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );


	register_sidebar( array(
		'name'          => 'Header Section After Logo',
		'id'            => 'header_section_after_logo',
		'before_widget' => '<div id="%1$s" class="arpage_content widget %2$s">',
		'after_widget' => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'auraweb'),
		'description' => __('The second (secondary) sidebar.', 'auraweb'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!