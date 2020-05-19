<?php 


function bc_customize_font($wp_customize){
    // Panel
    $wp_customize->add_panel('bc_site_font_scheme_panel', array(
        'title'    => __('Fonts', 'bc'),
        'description' => '',
        'priority' => 130,
    ));

    // H1 Section
    $wp_customize->add_section('bc_site_font_h1_scheme', array(
        'title'    => __('H1', 'bc'),
        'description' => 'H1 Font Family',
        'priority' => 130,
        'panel' => 'bc_site_font_scheme_panel',
    ));
    
    // H2 Section
    $wp_customize->add_section('bc_site_font_h2_scheme', array(
        'title'    => __('H2', 'bc'),
        'description' => 'H2 Font Family',
        'priority' => 130,
        'panel' => 'bc_site_font_scheme_panel',
    ));
    
    // H3 Section
    $wp_customize->add_section('bc_site_font_h3_scheme', array(
        'title'    => __('H3', 'bc'),
        'description' => 'H3 Font Family',
        'priority' => 130,
        'panel' => 'bc_site_font_scheme_panel',
    ));

    // H4 Section
    $wp_customize->add_section('bc_site_font_h4_scheme', array(
        'title'    => __('H4', 'bc'),
        'description' => 'H4 Font Family',
        'priority' => 130,
        'panel' => 'bc_site_font_scheme_panel',
    ));

    // H5 Section
    $wp_customize->add_section('bc_site_font_h5_scheme', array(
        'title'    => __('H5', 'bc'),
        'description' => 'H5 Font Family',
        'priority' => 130,
        'panel' => 'bc_site_font_scheme_panel',
    ));
    
    // H6 Section
    $wp_customize->add_section('bc_site_font_h6_scheme', array(
        'title'    => __('H6', 'bc'),
        'description' => 'H6 Font Family',
        'priority' => 130,
        'panel' => 'bc_site_font_scheme_panel',
    ));

    // P Section
    $wp_customize->add_section('bc_site_font_p_scheme', array(
        'title'    => __('P', 'bc'),
        'description' => 'P Font Family',
        'priority' => 130,
        'panel' => 'bc_site_font_scheme_panel',
    ));

    // A Section
    $wp_customize->add_section('bc_site_font_a_scheme', array(
        'title'    => __('Hyperlinks', 'bc'),
        'description' => 'Hyperlinks Font Family',
        'priority' => 130,
        'panel' => 'bc_site_font_scheme_panel',
    ));

    // Include H1 File
    $filepath_font_family = locate_template( 'inc/theme-customizer/bc-font-h1.php' );
    require_once $filepath_font_family;

    // Include H2 File
    $filepath_font_family = locate_template( 'inc/theme-customizer/bc-font-h2.php' );
    require_once $filepath_font_family;

    // Include H3 File
    $filepath_font_family = locate_template( 'inc/theme-customizer/bc-font-h3.php' );
    require_once $filepath_font_family;

    // Include H4 File
    $filepath_font_family = locate_template( 'inc/theme-customizer/bc-font-h4.php' );
    require_once $filepath_font_family;

    // Include H5 File
    $filepath_font_family = locate_template( 'inc/theme-customizer/bc-font-h5.php' );
    require_once $filepath_font_family;

    // Include H6 File
    $filepath_font_family = locate_template( 'inc/theme-customizer/bc-font-h6.php' );
    require_once $filepath_font_family;

    // Include P File
    $filepath_font_family = locate_template( 'inc/theme-customizer/bc-font-p.php' );
    require_once $filepath_font_family;

    // Include A File
    $filepath_font_family = locate_template( 'inc/theme-customizer/bc-font-a.php' );
    require_once $filepath_font_family;

}

add_action('customize_register', 'bc_customize_font');

