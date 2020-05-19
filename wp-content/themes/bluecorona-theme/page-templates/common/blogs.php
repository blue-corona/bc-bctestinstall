<?php
/**
 * Blogs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container-fluid bc_affiliations_container">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3 m-auto text-center">
                <h3 class="text-center my-5 bc_alternate_font_blue">Our Blog</h3>
                <div class="swiper-container bc_affiliation_swiper bc_blog_swiper container mb-5 swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-duplicate">
                            <div class="text-center"><img alt="blog-image-1" src="<?php echo get_site_url();?>/wp-content/uploads/2019/11/blog_img_02.png"></div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate">
                            <div class="text-center"><img alt="blog-image-2" src="<?php echo get_site_url();?>/wp-content/uploads/2019/11/blog_img_03.png"></div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate">
                            <div class="text-center"><img alt="blog-image-3" src="<?php echo get_site_url();?>/wp-content/uploads/2019/11/blog_img_04.png"></div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev">
                            <div class="text-center"><img alt="blog-image-4" src="<?php echo get_site_url();?>/wp-content/uploads/2019/11/blog_img_01.png"></div>
                        </div>
                        <div class="swiper-slide swiper-slide-active">
                            <div class="text-center"><img alt="blog-image-5" src="<?php echo get_site_url();?>/wp-content/uploads/2019/11/blog_img_02.png"></div>
                        </div>
                        <div class="swiper-slide swiper-slide-next">
                            <div class="text-center"><img alt="blog-image-6" src="<?php echo get_site_url();?>/wp-content/uploads/2019/11/blog_img_03.png"></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-center"><img alt="blog-image-7" src="<?php echo get_site_url();?>/wp-content/uploads/2019/11/blog_img_01.png"></div>
                        </div>
                    </div>
                    <div class="af-swiper-button-next swiper-button-next d-none d-lg-block" tabindex="0" role="button" aria-label="Next slide"><em class="fa fa-angle-right"></em> </div>
                    <div class="af-swiper-button-prev swiper-button-prev d-none d-lg-block" tabindex="0" role="button" aria-label="Previous slide"> <em class="fa fa-angle-left"></em></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn bc_default_primary text-white px-4 mb-5" type="button"> Visit Our Blog</button>
        </div>
    </div>
</div>

<?php function blogSwiperJavascript() {?>
<script>
var swiper = new Swiper('.bc_blog_swiper', {
    slidesPerView: 3,
    spaceBetween: 32,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    breakpoints: {
        320: {
            slidesPerView: 1
        },
        480: {
            slidesPerView: 2
        },
        640: {
            slidesPerView: 2
        },
        768: {
            slidesPerView: 3
        },
        1000: {
            slidesPerView: 3
        }
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: false,
    },
    navigation: {
        nextEl: '.af-swiper-button-next',
        prevEl: '.af-swiper-button-prev',
    },
});
</script>
<?php }
add_action( 'wp_footer' , 'blogSwiperJavascript' );?>
