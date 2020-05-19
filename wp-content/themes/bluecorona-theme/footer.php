<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!-- Footer -->
   <footer class="page-footer font-small blue">

        <div class="container-fluid bc_service_areas_container">
        <!-- Include servicearea file here -->
        <?php if ( is_front_page() ) {?>
            <?php get_template_part( 'page-templates/common/servicearea' ); ?>
        <?php }else{?>
            <div class="container py-4"></div>
        <?php } ?>
        </div>

        <!-- Footer Links -->
        <div class="container-fluid bc_default_primary text-md-left pl-0 pt-5">
            <img alt="footer man" height="323px" class="position-absolute d-none d-lg-block " src="<?php echo get_template_directory_uri();?>/img/footer_eng.png">
            <div class="container py-4">
                <div class="row">
                    <div class="col-lg-10 offset-0 offset-lg-2 col-md-12">
                        <div class="row">
                            <div class="col-md-4 px-5 px-md-0 text-white">
                                <img alt="footer logo" src="<?php echo get_template_directory_uri();?>/img/footerlogo.png">
                                <hr style="background-color:#5692b9;">
                                <h4 class="text-uppercase text-white"><em aria-hidden="true" class="fa fa-mobile"></em> (555) 555-5555</h4>
                            <div class="row text-white">
                                <div class="col-lg-1 pr-0">        <h4><em aria-hidden="true" class="far fa-map-marker-alt"></em></h4></div>
                                <div class="col-lg-9">
                                            <p class="text-white" style="font-size: 14px; line-height: 20px"> 1401 Central Avenue, Suite 11 Charlotte, NC 28205 </p>
                                </div>
                                <div class="ml-3">License - CLT140111</div>
                            </div>
                                <div class="bc_social_media" style="color: #5692b9;">
                                    <a class="fa fa-facebook-square mr-1 bc_social_media_fb mr-2 fa-lg" title="facebook" href="#"></a>
                                    <a class="fa fa-instagram mr-1 bc_social_media_insta mr-2 fa-lg" title="instagram" href="#"></a>
                                    <a class="fa fa-twitter-square mr-1 bc_social_media_twitter fa-lg" title="twitter" href="#"></a>
                                </div>
                            </div>
                            <div class="col-md-4 px-5 pt-2">
                                <h1 class="bc_alternate_font_white">Company</h1>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-white" href="#!">About</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="#!">Promotions</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="#!">Blog</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="#!">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 px-5 pt-2">
                                <h1 class="bc_alternate_font_white">Services</h1>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-white" href="#!">Heating</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="#!">Cooling</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="#!">Maintenance</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="#!">Air Quality</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="bc_footer_copyright_bar text-center text-lg-left py-2 container nunito">
           © 2019 Blue Corona Heating & Cooling &nbsp;|&nbsp; Web Design by
           <a class="bc_footer_copyright_links no_hover_underline  d-block d-lg-inline d-md-inline" href="#"><img src="<?php echo get_template_directory_uri();?>/img/bc_logo.png">&nbsp;Blue Corona</a>
          <span class="d-none d-lg-inline d-md-inline">&nbsp; | &nbsp;</span><a class="bc_footer_copyright_links no_hover_underline d-block d-lg-inline d-md-inline" href="#">Disclaimer</a>
          <span class="d-none d-lg-inline d-md-inline">&nbsp; | &nbsp;</span><a class=" bc_footer_copyright_links no_hover_underline d-block d-lg-inline d-md-inline" href="#">Privacy Policy</a>
       </div>
    </footer>
    <!-- Footer -->
<?php wp_footer(); ?>
</body>
</html>
