<?php 

global $origin_theme, $is_logo_set, $is_logo_set_for_apps;
$classes = get_body_class();
    if (in_array('post-type-archive-apps', $classes) || in_array('tax-appscat', $classes) || in_array('single-apps', $classes) ) {
        $apps_page = true;
    } else {
        $apps_page = false;
    }

if($is_logo_set || $is_logo_set_for_apps) : ?>
    <div class='site-logo'>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
        	<?php if($is_logo_set && !$apps_page) : ?>
        		<img src='<?php echo $origin_theme['media-logo']['url']; ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
        	<?php endif; ?>
        	<?php if($is_logo_set_for_apps && $apps_page) : ?>
        		<img src='<?php echo $origin_theme['media-logo-for-apps']['url']; ?>' alt='Aura Apps'>
        	<?php endif; ?>
        </a>
    </div>
<?php else : ?>
    <hgroup>
        <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
        <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
    </hgroup>
<?php endif; ?>
