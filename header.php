<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<a class="skip-link screen-reader-text" href="#page"><?php _e( 'Skip to content', 'boxcard' ); ?></a>

<div id="wrapper">
	
	<?php if ( get_header_image() ) : ?>
		<div class="site-header">
			<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
				<img class="site-image" src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			</a>
		</div>
	<?php endif; ?>
	
	<div id="wrapper-inner">

		<header id="header">
			
			<?php echo boxcard_site_title(); ?>
			<?php if ( display_header_text() == true ): ?>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			<?php endif; ?>
			
			<?php if ( get_theme_mod( 'header-social', 'on' ) == 'on' ): ?>
				<?php boxcard_social_links() ; ?>
			<?php endif; ?>

			<?php if ( has_nav_menu('header') ): ?>
				<nav class="nav-container group" id="nav-header">
					<div class="nav-toggle"><i class="fas fa-bars"></i></div>
					<div class="nav-text"><!-- put your mobile menu text here --></div>
					<div class="nav-wrap container">
					
					<?php if ( get_theme_mod( 'header-search', 'on' ) == 'on' ): ?>
						<div class="header-search">
							<?php get_search_form(); ?>
						</div>
					<?php endif; ?>
					
					<?php wp_nav_menu(array('theme_location'=>'header','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>				
				</nav><!--/#nav-header-->
			<?php endif; ?>
			
			<?php if ( has_nav_menu('mobile') ): ?>
				<nav class="nav-container group" id="nav-mobile">
					<div class="nav-toggle"><i class="fas fa-bars"></i></div>
					<div class="nav-text"><!-- put your mobile menu text here --></div>
					<div class="nav-wrap container">
					
					<?php if ( get_theme_mod( 'header-search', 'on' ) == 'on' ): ?>
						<div class="header-search">
							<?php get_search_form(); ?>
						</div>
					<?php endif; ?>
					
					<?php wp_nav_menu(array('theme_location'=>'mobile','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>									
				</nav><!--/#nav-mobile-->
			<?php endif; ?>
			
			<?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') ): ?>
				<div id="profile" class="group">
					<div id="profile-inner">
						<?php if ( get_theme_mod('profile-image') ): ?>
							<div id="profile-image"><img src="<?php echo get_theme_mod('profile-image'); ?>" alt="" /></div>
						<?php endif; ?>
						<?php if ( get_theme_mod('profile-name') ): ?>
							<div id="profile-name"><?php echo get_theme_mod('profile-name'); ?></div>
						<?php endif; ?>
						<?php if ( get_theme_mod('profile-description') ): ?>
							<div id="profile-description"><?php echo get_theme_mod('profile-description'); ?></div>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

			<div id="move-sidebar-header"></div>
			<?php get_sidebar(); ?>
			
		</header><!--/#header-->
		
		<div class="main" id="page">
			<div class="main-inner group">