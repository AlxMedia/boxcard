<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'boxcard', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'boxcard' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'boxcard' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'boxcard' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'boxcard' ),
	'button_url'  => 'https://wordpress.org/support/theme/boxcard/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'boxcard' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'boxcard' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'boxcard' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'boxcard' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'boxcard' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'boxcard' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'boxcard' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'boxcard' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'boxcard' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'boxcard' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'boxcard' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'boxcard' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'boxcard' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'boxcard' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'boxcard' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Heading
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'boxcard' ),
	'description'	=> esc_html__( 'Your blog heading', 'boxcard' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'boxcard' ),
	'description'	=> esc_html__( 'Your blog subheading', 'boxcard' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'boxcard' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'boxcard' ),
	'section'		=> 'blog',
	'default'		=> '26',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'boxcard' ),
	'description'	=> esc_html__( '2 columns of widgets', 'boxcard' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'boxcard' ),
	'description'	=> esc_html__( '2 columns of widgets', 'boxcard' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'boxcard' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'boxcard' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'boxcard' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'boxcard' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'boxcard' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'boxcard' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'boxcard' ),
		'categories'=> esc_html__( 'Related by categories', 'boxcard' ),
		'tags'		=> esc_html__( 'Related by tags', 'boxcard' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'boxcard' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'boxcard' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'boxcard' ),
		'content'	=> esc_html__( 'Below content', 'boxcard' ),
	),
) );
// Header: Search
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'boxcard' ),
	'description'	=> esc_html__( 'Header search button', 'boxcard' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'boxcard' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'boxcard' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'boxcard' ),
	'description'	=> esc_html__( 'Minimum width of 320px', 'boxcard' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'boxcard' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'boxcard' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'boxcard' ),
	'description'	=> esc_html__( 'A short description of you', 'boxcard' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'boxcard' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'boxcard' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'boxcard' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 2', 'boxcard' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'boxcard' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'boxcard' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'boxcard' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'boxcard' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'boxcard' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'boxcard' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'boxcard' ),
	'description'	=> esc_html__( 'Footer credit text', 'boxcard' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'boxcard' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'boxcard' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cr',
	'choices'     => array(
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'boxcard' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'boxcard' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'boxcard' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'boxcard' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'boxcard' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'boxcard' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'boxcard' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'boxcard' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'boxcard' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'boxcard' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'boxcard' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'boxcard' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'boxcard' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'boxcard' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function boxcard_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'boxcard_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'boxcard' ),
		'description'	=> esc_html__( '(is_home) Primary', 'boxcard' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxcard' ),
	) );
	Kirki::add_field( 'boxcard_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'boxcard' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'boxcard' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxcard' ),
	) );
	Kirki::add_field( 'boxcard_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'boxcard' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'boxcard' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxcard' ),
	) );
	Kirki::add_field( 'boxcard_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'boxcard' ),
		'description'	=> esc_html__( '(is_category) Primary', 'boxcard' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxcard' ),
	) );
	Kirki::add_field( 'boxcard_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'boxcard' ),
		'description'	=> esc_html__( '(is_search) Primary', 'boxcard' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxcard' ),
	) );
	Kirki::add_field( 'boxcard_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'boxcard' ),
		'description'	=> esc_html__( '(is_404) Primary', 'boxcard' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxcard' ),
	) );
	Kirki::add_field( 'boxcard_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'boxcard' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'boxcard' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxcard' ),
	) );
	
 } 
add_action( 'init', 'boxcard_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'boxcard' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'boxcard' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'boxcard' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'boxcard' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'boxcard' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'boxcard' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'boxcard' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'boxcard' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'boxcard' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'boxcard' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'boxcard' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'boxcard' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'boxcard' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'boxcard' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'boxcard' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'boxcard' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'boxcard' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'boxcard' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'boxcard' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'boxcard' ),
	'description'	=> esc_html__( 'Select font for the theme', 'boxcard' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'boxcard' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'boxcard' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'boxcard' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'boxcard' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'boxcard' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'boxcard' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'boxcard' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'boxcard' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'boxcard' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'boxcard' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'boxcard' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'boxcard' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'boxcard' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'boxcard' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'boxcard' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'boxcard' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'boxcard' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'boxcard' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'boxcard' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'boxcard' ),
		'arial'					=> esc_html__( 'Arial', 'boxcard' ),
		'georgia'				=> esc_html__( 'Georgia', 'boxcard' ),
		'verdana'				=> esc_html__( 'Verdana', 'boxcard' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'boxcard' ),
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'boxcard' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'boxcard' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Primary Color
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'boxcard' ),
	'section'		=> 'styling',
	'default'		=> '#b19c5e',
) );
// Styling: Container Width
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'boxcard' ),
	'description'	=> esc_html__( 'Max-width of the container. Set to default for full width.', 'boxcard' ),
	'section'		=> 'styling',
	'default'		=> '1280',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Card Height
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'card-height',
	'label'			=> esc_html__( 'Card Height', 'boxcard' ),
	'description'	=> esc_html__( 'Height of content card boxes', 'boxcard' ),
	'section'		=> 'styling',
	'default'		=> '500',
	'choices'     => array(
		'min'	=> '300',
		'max'	=> '720',
		'step'	=> '1',
	),
) );
// Styling: Card Max-width
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'card-width',
	'label'			=> esc_html__( 'Card Max-width', 'boxcard' ),
	'description'	=> esc_html__( 'Max-width of content card boxes', 'boxcard' ),
	'section'		=> 'styling',
	'default'		=> '1200',
	'choices'     => array(
		'min'	=> '720',
		'max'	=> '1400',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'boxcard_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'boxcard' ),
	'description'	=> esc_html__( 'Max-width of the content', 'boxcard' ),
	'section'		=> 'styling',
	'default'		=> '640',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1280',
		'step'	=> '1',
	),
) );
