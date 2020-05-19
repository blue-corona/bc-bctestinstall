<?php
/**
 * Testimonials
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="container-fluid bc_testimonials_container bc_home_section_bg py-5  text-center" style="background-image:url('<?php echo get_template_directory_uri();?>/img/slider_bg_img.jpg'); background-position:center;">
    <div class="text-center"><h3 class="bc_alternate_font_blue pb-4">Testimonials</h3></div>
    <div class="container">
        <div class="bc_testimonial_swiper swiper-container">
            <div class="swiper-wrapper text-center">
                <div class="swiper-slide"> 
                    <div class="swiper-slide-container">
                        <div class="swiper-slide-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"> 
                    <div class="swiper-slide-container">
                        <div class="swiper-slide-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"> 
                    <div class="swiper-slide-container">
                        <div class="swiper-slide-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <!-- Add Arrows -->
            <div class="bc_testimonial_swiper_next swiper-button-next d-none d-lg-block"><em class="fa fa-chevron-circle-right"></em></div>
            <div class="bc_testimonial_swiper_prev swiper-button-prev d-none d-lg-block"><em class="fa fa-chevron-circle-left"></em></div>
        </div>
    </div>
    <br>
    <button class="btn bc_default_primary mt-2 mb-2 text-white " type="button">Read Testimonials</button>
    <br>
</div>

<?php function swiperJavascript() {?>
<script>
var testimonialSwiper = new Swiper('.bc_testimonial_swiper', {
    pagination: false,
    navigation: {
        nextEl: '.bc_testimonial_swiper_next',
        prevEl: '.bc_testimonial_swiper_prev',
    },
});
</script>
<?php }
add_action( 'wp_footer' , 'swiperJavascript' );?>
