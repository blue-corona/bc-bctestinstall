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
    <div class="container-fluid bc_default_primary bc_announcement_bar p-0">
        <div class="container">
            <div class="row text-center text-lg-left">
                    <div class="col-sm-12 col-lg-4 col-md-12 pt-2" style="color:#f9d71c;">
                        <h5>
                            <i aria-hidden="true" class="fa fa-star"></i>
                            <i aria-hidden="true" class="fa fa-star"></i>
                            <i aria-hidden="true" class="fa fa-star"></i>
                            <i aria-hidden="true" class="fa fa-star"></i>
                            <i aria-hidden="true" class="fa fa-star"></i>
                            <span>
                                <a class="text-white no_hover_underline" href="#">
                                    &nbsp; Read Our Reviews <i aria-hidden="true" class="fa fa-chevron-circle-right"></i>
                                </a>
                            </span>
                        </h5>
                    </div>
                    <div class="col-sm-12 col-lg-8 col-md-12">
                        <div class="text-center text-lg-right">
                            <button class="btn rounded-0 bc_hero_btn_bg_color pl-4 pr-4 pt-2 pb-2 mx-0  text-white bc_branding_btn_1" >
                                    <i class="fa fa-calendar-plus-o " style="font-size:1em" aria-hidden="true"></i>&nbsp;Schedule Service
                            </button><button class="btn rounded-0 pl-4 pr-4 pt-2 pb-2 mx-0 bc_branding_btn_2">
                                <i aria-hidden="true" class="fa fa-mobile" style="font-size:1.2em"></i>&nbsp; Call: <strong>(555) 555-5555</strong>
                            </button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class=" col-sm-12 mr-0 py-3 text-center">
                    <a href="<?php echo get_home_url();?>">
                        <img src="<?php echo get_template_directory_uri();?>/img/logo.jpg" class="bc_branding_logo img-fluid" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part( 'page-templates/common/bc-nav-menu' ); ?>
</header>