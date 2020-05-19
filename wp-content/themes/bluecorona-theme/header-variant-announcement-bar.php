<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link href="https://unpkg.com/swiper/css/swiper.min.css" rel="stylesheet">
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
</head>

<body>
 <header class="bc_header">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class=" col-md-4 col-lg-4 col-sm-4 col-12 mr-0 p-4">
                    <a href="<?php echo get_home_url();?>">
                        <img src="<?php echo get_template_directory_uri();?>/img/logo.jpg" class="bc_branding_logo" alt="logo" width="250">
                    </a>
                </div>

                <div class="col-md-5 offset-md-3 offset-lg-0 col-lg-5 col-sm-8  my-auto col-xs-12 text-center">
                    <span class="">
                        <button class="btn bc_hero_btn_bg_color p-3 mb-2 text-white bc_branding_btn_1" >
                            <span class="">
                                <i class="fa fa-calendar-plus-o " style="font-size:1em" aria-hidden="true"></i>&nbsp;Schedule Service
                            </span>
                        </button>
                        <button class="btn p-3 mb-2 bc_branding_btn_2">
                            <i aria-hidden="true" class="fa fa-mobile" style="font-size:1.2em"></i>&nbsp; Call: <strong>(555) 555-5555</strong>
                        </button>
                    </span>
                </div>
                <div class="col-sm-12 text-lg-left text-center col-lg-3 my-auto p-0">
                        <?php echo get_search_form(['icon_color_class' => 'bc_primary_content_blue'])?>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part( 'page-templates/common/bc-nav-menu' ); ?>
</header>