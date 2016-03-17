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
?>



<?php if ( $logo_location == 'aboveMenu' || is_active_sidebar( 'middle_bar_right_section' )) : ?>
	<div class="show-for-medium-up contain-to-grid middle-bar">
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
	<div class="show-for-medium-up <?php if ($menu_box_shadow != 'none') { echo $menu_box_shadow; } if ($menubar_width == 'fixedWidth') { echo ' row '; } ?> main-menu-bar">
		<nav class="top-bar" data-topbar>
			<?php if ( $logo_location == 'besidesMenu') : ?>
				<div class="float-left">
					<?php require_once(get_template_directory().'/parts/content-logo.php');  ?>
				</div>
			<?php endif; ?>
			<section class="top-bar-section <?php if ( $logo_location == 'besidesMenu') { echo 'float-right'; } ?>">
				<?php joints_top_nav(); ?>
			</section>
			<?php if ( is_active_sidebar( 'menu_bar_right_section' ) ) : ?>
				<div id="menu-bar-right-sidebar" class="menu-bar-right-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'menu_bar_right_section' ); ?>
				</div><!-- #middle-bar-right-sidebar -->
			<?php endif; ?>
		</nav>
	</div>
<?php endif; ?>