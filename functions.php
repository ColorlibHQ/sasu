<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Define constant
	 *
	 */
	
	 
	// Base URI
	if( !defined( 'SASU_DIR_URI' ) )
		define( 'SASU_DIR_URI', get_template_directory_uri().'/' );
	
	// assets URI
	if( !defined( 'SASU_DIR_ASSETS_URI' ) )
		define( 'SASU_DIR_ASSETS_URI', SASU_DIR_URI.'assets/' );
	
	// Css File URI
	if( !defined( 'SASU_DIR_CSS_URI' ) )
		define( 'SASU_DIR_CSS_URI', SASU_DIR_ASSETS_URI .'css/' );
	
	// Js File URI
	if( !defined( 'SASU_DIR_JS_URI' ) )
		define( 'SASU_DIR_JS_URI', SASU_DIR_ASSETS_URI .'js/' );
	
	// Icon Images
	if( !defined('SASU_DIR_ICON_IMG_URI') )
		define( 'SASU_DIR_ICON_IMG_URI', SASU_DIR_ASSETS_URI.'img/icon/' );
	
	// Animate Icon Images
	if( !defined('SASU_DIR_ANIMATE_ICON_IMG_URI') )
		define( 'SASU_DIR_ANIMATE_ICON_IMG_URI', SASU_DIR_ASSETS_URI.'img/animate_icon/' );
	
	//DIR inc
	if( !defined( 'SASU_DIR_INC' ) )
		define( 'SASU_DIR_INC', SASU_DIR_URI.'inc/' );

	//Elementor Widgets Folder Directory
	if( !defined( 'SASU_DIR_ELEMENTOR' ) )
		define( 'SASU_DIR_ELEMENTOR', SASU_DIR_INC.'elementor-widgets/' );

	// Base Directory
	if( !defined( 'SASU_DIR_PATH' ) )
		define( 'SASU_DIR_PATH', get_parent_theme_file_path().'/' );
	
	//Inc Folder Directory
	if( !defined( 'SASU_DIR_PATH_INC' ) )
		define( 'SASU_DIR_PATH_INC', SASU_DIR_PATH.'inc/' );
	
	//Colorlib framework Folder Directory
	if( !defined( 'SASU_DIR_PATH_LIB' ) )
		define( 'SASU_DIR_PATH_LIB', SASU_DIR_PATH_INC.'libraries/' );
	
	//Classes Folder Directory
	if( !defined( 'SASU_DIR_PATH_CLASSES' ) )
		define( 'SASU_DIR_PATH_CLASSES', SASU_DIR_PATH_INC.'classes/' );

	
	//Widgets Folder Directory
	if( !defined( 'SASU_DIR_PATH_WIDGET' ) )
		define( 'SASU_DIR_PATH_WIDGET', SASU_DIR_PATH_INC.'widgets/' );
		
	//Elementor Widgets Folder Directory
	if( !defined( 'SASU_DIR_PATH_ELEMENTOR_WIDGETS' ) )
		define( 'SASU_DIR_PATH_ELEMENTOR_WIDGETS', SASU_DIR_PATH_INC.'elementor-widgets/' );
	

		
	/**
	 * Include File
	 *
	 */
	
	// Breadcrumbs file include
	require_once( SASU_DIR_PATH_INC . 'sasu-breadcrumbs.php' );
	// Sidebar register file include
	require_once( SASU_DIR_PATH_INC . 'widgets/sasu-widgets-reg.php' );
	// Post widget file include
	require_once( SASU_DIR_PATH_INC . 'widgets/sasu-recent-post-thumb.php' );
	// News letter widget file include
	require_once( SASU_DIR_PATH_INC . 'widgets/sasu-newsletter-widget.php' );
	//Social Links
	require_once( SASU_DIR_PATH_INC . 'widgets/sasu-social-links.php' );
	// Instagram Widget
	require_once( SASU_DIR_PATH_INC . 'widgets/sasu-instagram.php' );
	// Nav walker file include
	require_once( SASU_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
	// Theme function file include
	require_once( SASU_DIR_PATH_INC . 'sasu-functions.php' );

	// Theme Demo file include
	require_once( SASU_DIR_PATH_INC . 'demo/demo-import.php' );

	// Post Like
	require_once( SASU_DIR_PATH_INC . 'post-like.php' );
	// Theme support function file include
	require_once( SASU_DIR_PATH_INC . 'support-functions.php' );
	// Html helper file include
	require_once( SASU_DIR_PATH_INC . 'wp-html-helper.php' );
	// Pagination file include
	require_once( SASU_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
	// Elementor Widgets
	require_once( SASU_DIR_PATH_ELEMENTOR_WIDGETS . 'elementor-widget.php' );
	//
	require_once( SASU_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
	
	require_once( SASU_DIR_PATH_CLASSES . 'Class-Config.php' );
	// Customizer
	require_once( SASU_DIR_PATH_INC . 'customizer/customizer.php' );
	// Class autoloader
	require_once( SASU_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
	// Class sasu dashboard
	require_once( SASU_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );
	// Common css
	require_once( SASU_DIR_PATH_INC . 'sasu-commoncss.php' );


	if( class_exists( 'RW_Meta_Box' ) ){
		// Metabox Function
		require_once( SASU_DIR_PATH_INC . 'sasu-metabox.php' );
	}
	

	// Admin Enqueue Script
	function sasu_admin_script(){
		wp_enqueue_style( 'sasu-admin', get_template_directory_uri().'/assets/css/sasu_admin.css', false, '1.0.0' );
		wp_enqueue_script( 'sasu_admin', get_template_directory_uri().'/assets/js/sasu_admin.js', false, '1.0.0' );
	}
	add_action( 'admin_enqueue_scripts', 'sasu_admin_script' );

	 
	// WooCommerce style desable
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );


	/**
	 * Instantiate Sasu object
	 *
	 * Inside this object:
	 * Enqueue scripts, Google font, Theme support features, Sasu Dashboard .
	 *
	 */
	
	$Sasu = new Sasu();
	
