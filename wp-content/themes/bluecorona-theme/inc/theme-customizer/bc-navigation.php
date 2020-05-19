<?php 
function bc_customize_navigation($wp_customize){
    
    $wp_customize->add_section('bc_site_navigation_scheme', array(
        'title'    => __('Navigation', 'bc'),
        'description' => '',
        'priority' => 110,
    ));
 
    //  =============================
    //  = Nav bar background        =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][nav_bar_background]', array(
        'default'           => '#253e91',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][nav_bar_background]', array(
        'label'    => __('Nav bar background', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][nav_bar_background]',
    )));

    //  =============================
    //  = Top Level Link        =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][top_level_link]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][top_level_link]', array(
        'label'    => __('Top-level link', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][top_level_link]',
    )));

    //  =============================
    //  = Top Level Link Hover      =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][top_level_link_hover]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][top_level_link_hover]', array(
        'label'    => __('Top-level link hover', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][top_level_link_hover]',
    )));

    //  =============================
    //  = Dropdown Icon      =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][dropdown_icon]', array(
        'default'           => '#116eab',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][dropdown_icon]', array(
        'label'    => __('Dropdown Icon', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][dropdown_icon]',
    )));

    //  =============================
    //  = Dropdown Icon Hover      =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][dropdown_icon_hover]', array(
        'default'           => '#253E91',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][dropdown_icon_hover]', array(
        'label'    => __('Dropdown Icon Hover', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][dropdown_icon_hover]',
    )));

    //  =============================
    //  = Dropdown Background      =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][dropdown_background]', array(
        'default'           => '#116eab',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][dropdown_background]', array(
        'label'    => __('Dropdown Background', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][dropdown_background]',
    )));

    //  =============================
    //  = Dropdown Link      =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][dropdown_link]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][dropdown_link]', array(
        'label'    => __('Dropdown Link', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][dropdown_link]',
    )));

    //  =============================
    //  = Dropdown Link Hover     =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][dropdown_link_hover]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][dropdown_link_hover]', array(
        'label'    => __('Dropdown Link Hover', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][dropdown_link_hover]',
    )));

    //  =====================================
    //  = Dropdown Link Hover Background    =
    //  =====================================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][dropdown_link_hover_background]', array(
        'default'           => '#F38527',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][dropdown_link_hover_background]', array(
        'label'    => __('Dropdown Link Hover Background', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][dropdown_link_hover_background]',
    )));
    
    //  =====================================
    //  = Mobile Nav Icon    =
    //  =====================================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][mobile_nav_icon]', array(
        'default'           => '#F38527',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][mobile_nav_icon]', array(
        'label'    => __('Mobile Nav Icon', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][mobile_nav_icon]',
    )));

    //  ============================
    //  = Mobile Nav Background    =
    //  ============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][mobile_nav_background]', array(
        'default'           => '#253E91',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][mobile_nav_background]', array(
        'label'    => __('Mobile Nav Background', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][mobile_nav_background]',
    )));
    
    //  =======================================
    //  = Mobile nav icon  =
    //  ========================================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][mobile_nav_icon_code]', array(
        'default'        => '<i class="fa fa-address-book-o" aria-hidden="true"></i>',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control('bc_theme_options[navigation_bar][mobile_nav_icon_code]', array(
        'label'      => __('Mobile nav icon', 'bc'),
        'section'    => 'bc_site_navigation_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_options[navigation_bar][mobile_nav_icon_code]',
    ));

}

add_action('customize_register', 'bc_customize_navigation');
