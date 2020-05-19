<?php
/**
 * Template Name: SubPage-Siderbar Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
global $post;
?>
<main>
    <div class="container-fluid p-0 bc_hero_container bc_home_section_bg">
        <div class="container p-4">
            <div class="row">
                <h1 class="bc_alternate_font_blue m-auto py-5">
                    <?php $title = get_post_meta( $post->ID, 'title_overlay', true );
                    if(isset($title) && !empty($title)){
                        echo $title;
                    }?>
                </h1>
            </div>
        </div>
    </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row">
                <!-- The Content Starts -->
                <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
                <!-- The Content ends --> 
                <!-- right sidebar starts -->
                <?php get_template_part( 'sidebar-templates/sidebar', 'subpagerightsidebar' ); ?>
                <!-- right sidebar ends -->
                </div>
            </div>
        </div>
        <!-- Heating Service Start -->
        <div class="container-fluid p-5 mt-4" style="background: radial-gradient(#5b95ba, #1871ac);">
            <div class="container">
                <h2 class="bc_alternate_font_blue m-auto text-white text-center pb-5">All of our Heating Services Include</h2>
                <div class="row py-4">
                    <div class="col-md-4 col-lg-4 text-center text-white">
                        <i class="fas fa-calendar-day fa-3x"></i>
                        <h4 class="py-3">SAME-DAY SERVICE</h4>
                    </div>
                    <div class="col-md-4 col-lg-4 text-center text-white">
                        <i class="fas fa-usd-circle fa-3x"></i>
                        <h4 class="py-3">UPFRONT PRICING</h4>
                    </div>
                    <div class="col-md-4 col-lg-4 text-center text-white">
                        <i class="fas fa-shield-check fa-3x"></i>
                        <h4 class="py-3">100% SATISFACTION</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Heating Service ends -->
        <!-- Service Not Found starts -->
        <div class="container-fluid bc_about_bg">
            <div class="container pt-5 pb-5 m-auto">
                <h1 class="bc_primary_heading_blue text-center">Don't see the service you need? </h1>
                <div class="col-md-12 mt-4">
                    <div class="row text-center">
                        <span class="m-auto">
                        <button class="btn bc_hero_btn_bg_color pl-4 pr-4 pt-2 pb-2 mr-2 mb-2 text-white bc_branding_btn_1"><span class="">Schedule Service <i aria-hidden="true" class="fa fa-chevron-circle-right"></i></span></button>
                        <span class="bc_alternate_font_blue" style="font-size: 36px; color: #686868">or</span>
                        <button class="btn btn-primary pl-4 pr-4 pt-2 pb-2  mr-2 mb-2 bc_branding_btn_2">Call: <strong>(555) 555-5555</strong></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Not Found ends -->
        
    <!--  Include blogs file here -->
    <?php get_template_part( 'page-templates/common/blogs' ); ?>
    <!--  Include testimonial file here -->
    <?php get_template_part( 'page-templates/common/testimonials' ); ?>
</main>
<?php get_footer();?>
