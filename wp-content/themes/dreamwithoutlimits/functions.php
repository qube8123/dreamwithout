<?php
/**
 * Deram Without Limits functions and definitions
 *
  *
 * @package WordPress
 * @subpackage Deram Without Limits
 * @since Deram Without Limits 1.0
 */


function deramwithoutlimits_theme_support() {

	
	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}


	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	// Add custom image size used in Cover Template.
	add_image_size( 'deramwithoutlimits-fullscreen', 1980, 9999 );

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);


	add_theme_support( 'title-tag' );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);


		register_nav_menus(
			array(
				'primary' => __( 'Primary', 'deramwithoutlimits' ),
				'footer' => __( 'Footer Menu', 'deramwithoutlimits' ),
				'social' => __( 'Social Links Menu', 'deramwithoutlimits' ),
			)
		);


}

add_action( 'after_setup_theme', 'deramwithoutlimits_theme_support' );

/*woocoomerce end*/

function deramwithoutlimits_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Header', 'deramwithoutlimits' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'deramwithoutlimits' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'deramwithoutlimits' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'deramwithoutlimits' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="footer_item_title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'deramwithoutlimits' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'deramwithoutlimits' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="footer_item_title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer 3', 'deramwithoutlimits' ),
			'id'            => 'sidebar-4',
			'description'   => __( 'Add widgets here to appear in your footer.', 'deramwithoutlimits' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="footer_item_title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer 4', 'deramwithoutlimits' ),
			'id'            => 'sidebar-5',
			'description'   => __( 'Add widgets here to appear in your footer.', 'deramwithoutlimits' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="footer_item_title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Copyright Left', 'deramwithoutlimits' ),
			'id'            => 'sidebar-6',
			'description'   => __( 'Add widgets here to appear in your footer.', 'deramwithoutlimits' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="footer_item_title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Copyright Right', 'deramwithoutlimits' ),
			'id'            => 'sidebar-7',
			'description'   => __( 'Add widgets here to appear in your footer.', 'deramwithoutlimits' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="footer_item_title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Cart', 'deramwithoutlimits' ),
			'id'            => 'sidebar-8',
			'description'   => __( 'Add widgets here to appear in your header.', 'deramwithoutlimits' ),			
			'before_title'  => '<h4 class="footer_item_title">',
			'after_title'   => '</h4>',
		)
	);

}
add_action( 'widgets_init', 'deramwithoutlimits_widgets_init' );


function custom_post_type() {
 
// Set UI labels for Custom Post Type
  

     $testimoniallabels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'deramwithoutlimits' ),
        'singular_name'       => _x( 'Testimonials', 'Post Type Singular Name', 'deramwithoutlimits' ),
        'menu_name'           => __( 'Testimonials', 'deramwithoutlimits' ),
        'parent_item_colon'   => __( 'Parent Testimonials', 'deramwithoutlimits' ),
        'all_items'           => __( 'All Testimonials', 'deramwithoutlimits' ),
        'view_item'           => __( 'View Testimonials', 'deramwithoutlimits' ),
        'add_new_item'        => __( 'Add New Testimonial', 'deramwithoutlimits' ),
        'add_new'             => __( 'Add New', 'deramwithoutlimits' ),
        'edit_item'           => __( 'Edit Testimonial', 'deramwithoutlimits' ),
        'update_item'         => __( 'Update Testimonial', 'deramwithoutlimits' ),
        'search_items'        => __( 'Search Testimonial', 'deramwithoutlimits' ),
        'not_found'           => __( 'Not Found', 'deramwithoutlimits' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'deramwithoutlimits' ),
    );
     
     
    $testimonialargs = array(
        'label'               => __( 'Testimonials', 'deramwithoutlimits' ),
        'description'         => __( 'Testimonials', 'deramwithoutlimits' ),
        'labels'              => $testimoniallabels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 21,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'menu_icon'			  => 'dashicons-format-quote',
        'show_in_rest' => true,
 
    );
    register_post_type( 'testimonials', $testimonialargs );


    $sliderproductlabels = array(
        'name'                => _x( 'Product Slider ', 'Post Type General Name', 'deramwithoutlimits' ),
        'singular_name'       => _x( 'Product Slider', 'Post Type Singular Name', 'deramwithoutlimits' ),
        'menu_name'           => __( 'Product Slider', 'deramwithoutlimits' ),
        'parent_item_colon'   => __( 'Product Slider', 'deramwithoutlimits' ),
        'all_items'           => __( 'All Slider Product', 'deramwithoutlimits' ),
        'view_item'           => __( 'View Slider Product', 'deramwithoutlimits' ),
        'add_new_item'        => __( 'Add New Slider Product', 'deramwithoutlimits' ),
        'add_new'             => __( 'Add New', 'deramwithoutlimits' ),
        'edit_item'           => __( 'Edit Slider Product', 'deramwithoutlimits' ),
        'update_item'         => __( 'Update Slider Product', 'deramwithoutlimits' ),
        'search_items'        => __( 'Search Slider Product', 'deramwithoutlimits' ),
        'not_found'           => __( 'Not Found', 'deramwithoutlimits' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'deramwithoutlimits' ),
    );
     
     
    $sliderproductargs = array(
        'label'               => __( 'Product Slider', 'deramwithoutlimits' ),
        'description'         => __( 'Product Slider', 'deramwithoutlimits' ),
        'labels'              => $sliderproductlabels,
        'supports'            => array( 'title',  'thumbnail', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 22,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'menu_icon'           => 'dashicons-format-image',        
        'show_in_rest' => true,
 
    );
    register_post_type( 'slidersproduct', $sliderproductargs );


}
 
 
add_action( 'init', 'custom_post_type', 0 );


add_action( 'admin_init', 'hide_editor' );

function hide_editor() {
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;

  // Hide the editor on the page titled 'Homepage'
  /*$homepgname = get_the_title($post_id);
  if($homepgname == 'Homepage'){ 
    remove_post_type_support('page', 'editor');
  }*/

  // Hide the editor on a page with a specific page template
  // Get the name of the Page Template file.
  $template_file = get_post_meta($post_id, '_wp_page_template', true);

  if($template_file == 'home.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
  
}

add_filter( 'woocommerce_output_related_products_args', 'bbloomer_change_number_related_products', 9999 );
 
function bbloomer_change_number_related_products( $args ) {
 $args['posts_per_page'] = 3; // # of related products
 $args['columns'] = 3; // # of columns per row
 return $args;
}

add_action( 'woocommerce_before_add_to_cart_quantity', 'bbloomer_display_quantity_plus' );

function bbloomer_display_quantity_plus() {
   echo '<button type="button" class="plus" >+</button>';
}

add_action( 'woocommerce_after_add_to_cart_quantity', 'bbloomer_display_quantity_minus' );

function bbloomer_display_quantity_minus() {
   echo '<button type="button" class="minus" >-</button>';
}

function hide_admin_bar(){ return false; }
add_filter( 'show_admin_bar', 'hide_admin_bar' );


function my_hide_shipping_when_free_is_available( $rates ) {
	$free = array();

	foreach ( $rates as $rate_id => $rate ) {
		if ( 'free_shipping' === $rate->method_id ) {
			$free[ $rate_id ] = $rate;
			break;
		}
	}

	return ! empty( $free ) ? $free : $rates;
}

add_filter( 'woocommerce_package_rates', 'my_hide_shipping_when_free_is_available', 100 );




/**

* Add custom field to the checkout page

*/

add_action('woocommerce_after_checkout_billing_form', 'custom_checkout_field');

function custom_checkout_field($checkout)

{

echo '<div id="custom_checkout_field">';

woocommerce_form_field('gift', array(

'type' => 'checkbox',

'class' => array(

'my-field-class form-row-wide'

) ,

'label' => __('Is this a gift purchase?') ,

) ,

$checkout->get_value('gift'));

echo '</div>';

}


add_action('woocommerce_checkout_update_order_meta', 'custom_checkout_field_update_order_meta');

function custom_checkout_field_update_order_meta($order_id)

{

if (!empty($_POST['gift'])) {

update_post_meta($order_id, 'Is this a gift purchase?',sanitize_text_field($_POST['gift']));

}

}

add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

function my_custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('Is this a gift purchase?').':</strong> <br/>' . get_post_meta( $order->get_id(), 'gift', true ) . '</p>';
}