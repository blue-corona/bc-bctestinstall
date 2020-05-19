<?php 
/*Custom widget*/
// BC Promotions Widget
class BC_Promotions_Widget extends WP_Widget {
	public function __construct() {

		$id = 'BC_Promotions_widget';
		$title = esc_html__('BC Promotions Widget', 'bc-promotion-custom-widget');
		$options = array(
			'classname' => 'bc-promotion-markup-widget',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc-promotion-custom-widget')
		);
		parent::__construct( $id, $title, $options );
	}
	
	function addSwiperInitPromotionJsToFooter($instance){
			echo "
			<script>
			var sidebarTestimonialSwiper = new Swiper('#".$instance."', {
	            pagination: false,
	            navigation: {
	                nextEl: '.bc_promotion_swiper_next',
	                prevEl: '.bc_promotion_swiper_prev',
	            },
        	});
			</script>
			";
	}

public function widget( $args, $instance ) {
	//Add JS for widget to footer
	$widgetInstance = $this->id;
	add_action('wp_footer', function() use ( $widgetInstance ) { 
    $this->addSwiperInitPromotionJsToFooter( $widgetInstance ); });
?>

<div class="mt-5">
<?php 
	if ( isset( $instance['title'] ) && !empty($instance['title']) ) {
		echo $args['before_title'] . $instance['title'] . $args['after_title']; 
	}
?>

		<!-- before pase -->
		<div id="<?php echo $this->id ?>" class="bc_promotions swiper-container text-center my-4 swiper-container-initialized swiper-container-horizontal">
		<div class="swiper-wrapper text-center">
			<div class="swiper-slide swiper-slide-active">
				<div class="text-white bc_default_primary p-4 mb-3">
                    <div class="p-3 pt-0 border-white bc_coupon_container">
                        <p class="bc_alternate_font_white mt-3">Coupon 1</p>
                        <h3 class="mb-4 mt-2 "><strong>$50 OFF</strong></h3>
                        <p class="mb-3 text-white ">expires 00/00/00</p>
                    </div>
                </div>
			</div>
			<div class="swiper-slide swiper-slide-next">
				<div class="text-white bc_default_primary p-4 mb-3">
                    <div class="p-3 pt-0 border-white bc_coupon_container ">
                        <p class="bc_alternate_font_white mt-3 ">Coupon 2</p>
                        <h3 class="mb-4 mt-2 "><strong>$50 OFF</strong></h3>
                        <p class="mb-3 text-white ">expires 00/00/00</p>
                    </div>
                </div>
			</div>
			<div class="swiper-slide">
			    <div class="text-white bc_default_primary p-4 mb-3">
                    <div class="p-3 pt-0 border-white bc_coupon_container ">
                        <p class="bc_alternate_font_white mt-3 ">Coupon 3</p>
                        <h3 class="mb-4 mt-2 "><strong>$50 OFF</strong></h3>
                        <p class="mb-3 text-white ">expires 00/00/00</p>
                    </div>
                </div>
			</div>
		</div>
		<ul class=" list-unstyled">
		 	<li class="list-inline-item bc_promotion_swiper_prev bc_swiper-button-prev swiper-button-disabled" tabindex="0" role="button " aria-label="Previous slide" aria-disabled="true "><em class="fa fa-chevron-circle-left "></em></li>
		 	<li class="list-inline-item bc_promotion_swiper_next bc_swiper-button-next" tabindex="0 " role="button " aria-label="Next slide " aria-disabled="false"><em class="fa fa-chevron-circle-right "></em></li>
		</ul>
		<span class="swiper-notification " aria-live="assertive " aria-atomic="true "></span></div>
		<div class="text-center "><button class="btn bc_default_primary text-white px-4 " type="button "> View Promotions</button></div>

</div>
<?php echo $args['after_widget'];
}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( isset( $new_instance['title'] ) && ! empty( $new_instance['title'] ) ) {
			$instance['title'] = $new_instance['title'];
		}
		return $instance;
	}
	public function form( $instance ) {
		$id = $this->get_field_id( 'title' );
		$for = $this->get_field_id( 'title' );
		$name = $this->get_field_name( 'title' );
		$label = __( 'Title', 'bc-promotion-custom-widget' );
		$title = '';
		if ( isset( $instance['title'] ) && ! empty( $instance['title'] ) ) {
			$title = $instance['title'];
		}
		?>
		<p>
			<label for="<?php echo esc_attr( $for ); ?>"><?php echo esc_html( $label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $id ); ?>" name="<?php echo esc_attr( $name ); ?>"><?php echo esc_textarea( $title ); ?></textarea>
		</p>
<?php }
}
// register widget
function bc_promotions_register_widgets() {
	register_widget( 'BC_Promotions_Widget' );
}
add_action( 'widgets_init', 'bc_promotions_register_widgets' );
