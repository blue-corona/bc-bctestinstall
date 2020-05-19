<?php
/*Define Excerpt Lenght*/
function custom_excerpt_length( $length ) {
    global $post;
    return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/*Hard crop Image for blog post page*/
add_theme_support( 'post-thumbnails' );
add_image_size( 'blogpost-thumbnail', 250, 170, true ); // Hard Crop Mode

/*Create custom field (title) for pages, post, custom posts */
function bc_create_title_overlay_metabox() {
    add_meta_box(
        'bc_title_overlay', // Metabox ID
        'Title To Display On Image Overlay', // Title to display
        'bc_title_overlay', // Function to call that contains the metabox content
        '', // Post type to display metabox on
        'normal' // Where to put it (normal = main colum, side = sidebar, etc.)
    );
}
add_action( 'add_meta_boxes', 'bc_create_title_overlay_metabox' );
function bc_title_overlay() {
global $post;
$title = get_post_meta( $post->ID, 'title_overlay', true );
?>
<div id="titlediv">
	<div id="titlewrap">
		<input type="text" name="bc_title_overlay_heading" value="<?php echo $title;?>" id="title">
	</div>
</div>
<?php
wp_nonce_field( 'bc_title_overlay_metabox_nonce', 'bc_title_overlay_metabox_process' );
}
/**
 * Save the metabox
 * @param  Number $post_id The post ID
 * @param  Array  $post    The post data
 */
function bc_save_title_overlay( $post_id, $post ) {
    if ( !isset( $_POST['bc_title_overlay_metabox_process'] ) ) return;
    // Verify data came from edit/dashboard screen
    if ( !wp_verify_nonce( $_POST['bc_title_overlay_metabox_process'], 'bc_title_overlay_metabox_nonce' ) ) {
        return $post->ID;
    }
    // Verify user has permission to edit post
    if ( !current_user_can( 'edit_post', $post->ID )) {
        return $post->ID;
    }
    if ( !isset( $_POST['bc_title_overlay_heading'] ) ) {
        return $post->ID;
    }
    $sanitizedtitle = wp_filter_post_kses( $_POST['bc_title_overlay_heading'] );
    update_post_meta( $post->ID, 'title_overlay', $sanitizedtitle );
}
add_action( 'save_post', 'bc_save_title_overlay', 1, 2 );

add_filter( 'gform_submit_button', 'add_custom_css_class', 10, 2 );

function add_custom_css_class( $button, $form ) {
    if ($form['id'] != 3) return $button;
    $dom = new DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $classes = $input->getAttribute( 'class' );
    $classes .= " mt-3";
    $input->setAttribute( 'class', $classes );
    
    return $dom->saveHtml( $input );
}
