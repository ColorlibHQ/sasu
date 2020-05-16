<?php 
/**
 * @Packge     : Sasu
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'sasu_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'sasu' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'sasu_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'sasu' ),
            'panel'    => 'sasu_theme_options_panel',
            'priority' => 1,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'sasu_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'sasu' ),
            'panel'    => 'sasu_theme_options_panel',
            'priority' => 2,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'sasu_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'sasu' ),
            'panel'    => 'sasu_theme_options_panel',
            'priority' => 3,
        ),
    ),



    /**
     * 404 Page Section
     */
    array(
        'id'   => 'sasu_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'sasu' ),
            'panel'    => 'sasu_theme_options_panel',
            'priority' => 6,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'sasu_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'sasu' ),
            'panel'    => 'sasu_theme_options_panel',
            'priority' => 7,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>