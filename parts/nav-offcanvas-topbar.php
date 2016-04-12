<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->


<?php 
	global $origin_theme, 
	$is_logo_set, 
	$topbar_menu_pos, 
	$logo_location, 
	$menubar_width, 
	$topbar_menu, 
	$menu_box_shadow, 
	$slider_position,	
	$is_menu;

	$classes = get_body_class();
	if (in_array('post-type-archive-apps', $classes) || in_array('tax-appscat', $classes) || in_array('tax-appscatmain', $classes) || in_array('single-apps', $classes) ) {
	    $apps_page = true;
	} else {
	    $apps_page = false;
	}
?>



<?php if ( $logo_location == 'aboveMenu' || is_active_sidebar( 'middle_bar_right_section' )) : ?>
	<div class="show-for-medium contain-to-grid middle-bar">
		<nav class="top-bar" data-topbar>
			<?php if($is_logo_set && ($logo_location == 'aboveMenu')){ ?>
				<div class="float-left">
					<?php require_once(get_template_directory().'/parts/content-logo.php');  ?>
				</div>
			<?php } ?>
			<section class="top-bar-section">
				<?php if ( is_active_sidebar( 'middle_bar_right_section' ) ) : ?>
					<div id="middle-bar-right-sidebar" class="middle-bar-right-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'middle_bar_right_section' ); ?>
					</div><!-- #middle-bar-right-sidebar -->
				<?php endif; ?>
			</section>
		</nav>
	</div>
<?php endif; ?>



<?php if ( $is_menu ) : ?>
	<div class="show-for-medium  <?php if ($menu_box_shadow != 'none') { echo $menu_box_shadow; } if ($menubar_width == 'fixedWidth') { echo ' row '; } ?> main-menu-bar">
		<nav class="top-bar" data-topbar>
			<?php if ( $logo_location == 'besidesMenu') : ?>
				<div class="float-left">
					<?php require_once(get_template_directory().'/parts/content-logo.php');  ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'header_section_after_logo' ) ) : ?>
				<div id="header-section-after-logo" class="header-section-after-logo widget-area" role="complementary">
					<?php dynamic_sidebar( 'header_section_after_logo' ); ?>
				</div><!-- #middle-bar-right-sidebar -->
			<?php endif; ?>
			
			<section class="top-bar-section <?php if ( $logo_location == 'besidesMenu') { echo 'float-right'; } ?>">
				
				<?php
					if (!$apps_page)  {
						joints_top_nav();
					}
				?>
				<?php
					if ( $apps_page)  {
						if(is_tax( 'appscatmain' )) {
							echo '<span class="current_cat_parent"><span class="current_cat">';
							single_cat_title();
							echo '</span></span>';
						}
						joints_top_nav_apps();
					}
				?>
			</section>
			<?php if ( is_active_sidebar( 'menu_bar_right_section' ) ) : ?>
				<div id="menu-bar-right-sidebar" class="menu-bar-right-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'menu_bar_right_section' ); ?>
				</div><!-- #middle-bar-right-sidebar -->
			<?php endif; ?>
		</nav>
	</div>
<?php endif; ?>

<div class="hide-for-large">
	<?php get_template_part( 'parts/nav', 'offcanvas' ); ?>
</div>