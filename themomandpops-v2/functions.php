<?php
/**
 * themomandpops functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package themomandpops
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '2.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function themomandpops_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on themomandpops, use a find and replace
		* to change 'themomandpops' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'themomandpops', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'themomandpops' ),
			'menu-2' => esc_html__( 'Quick Links', 'themomandpops' ),
			'menu-3' => esc_html__( 'Popsicles', 'themomandpops' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'themomandpops_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'themomandpops_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function themomandpops_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'themomandpops_content_width', 640 );
}
add_action( 'after_setup_theme', 'themomandpops_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function themomandpops_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'themomandpops' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'themomandpops' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'themomandpops_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function themomandpops_scripts() {
	wp_enqueue_style( 'themomandpops-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'themomandpops-style', 'rtl', 'replace' );

	// v2: new component styles (button tiers, social proof, GF, city pages). See css/v2-components.css.
	wp_enqueue_style( 'themomandpops-v2-components', get_template_directory_uri() . '/css/v2-components.css', array( 'themomandpops-style' ), _S_VERSION );

	wp_enqueue_script( 'themomandpops-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'themomandpops_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


add_action('after_setup_theme', 'custom_woocommerce_image_sizes');

function custom_woocommerce_image_sizes() {
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 300,
        'single_image_width'    => 600,
        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ));
}


add_action( 'wp', function() {
    if ( is_shop() || is_product_category() || is_product_tag() ) {
        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
        add_filter( 'woocommerce_show_page_title', '__return_false' );
    }
});

add_action( 'woocommerce_after_shop_loop_item', 'custom_shop_now_button', 10 );

function custom_shop_now_button() {
    global $product;
    echo '<div class="banner-btn">';
    echo '<a href="' . esc_url( get_permalink( $product->get_id() ) ) . '" class="button-74">Shop Now</a>';
    echo '</div>';
}


remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
    if( function_exists('acf_add_options_sub_page') ) {
        $parent = acf_add_options_page(array(
            'page_title'  => __('Header & Footer Settings'),
            'menu_title'  => __('Header & Footer Settings'),
            'redirect'    => false,
        ));
    }
}

add_filter( 'wpcf7_validate_configuration', '__return_false' );

function hide_acf_update_notification( $value ) {
    if ( isset( $value ) && isset( $value->response['advanced-custom-fields-pro-master/acf.php'] ) ) {
        unset( $value->response['advanced-custom-fields-pro-master/acf.php'] );
    }
    return $value;
}
add_filter( 'site_transient_update_plugins', 'hide_acf_update_notification' );


function register_my_menus() {
    register_nav_menus(
        array(
            'menu-2' => __( 'Menu 2' )
        )
    );
}
add_action( 'after_setup_theme', 'register_my_menus' );



function my_theme_register_menus() {
    register_nav_menus(
        array(
            'menu-1' => 'Main Navigation', // The name of the menu location
        )
    );
}
add_action('after_setup_theme', 'my_theme_register_menus');




class Custom_Nav_Walker extends Walker_Nav_Menu {

    // UL start
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="sub-menu">';
    }

    // LI start
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

        $li_classes = 'nav-item';
        $a_classes  = 'nav-link hvr-overline-from-left';

        // Active class
        if (in_array('current-menu-item', $item->classes)) {
            $a_classes .= ' active';
        }

        $output .= '<li class="'. esc_attr($li_classes) .'">';

        $attributes  = '';
        $attributes .= ' class="'. esc_attr($a_classes) .'"';
        $attributes .= ' href="'. esc_url($item->url) .'"';

        // aria-current for active
        if (in_array('current-menu-item', $item->classes)) {
            $attributes .= ' aria-current="page"';
        }

        $output .= '<a'. $attributes .'>';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }

    // LI end
    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}


// product thankyou page code
add_filter('the_title', 'change_thankyou_page_title', 10, 2);

function change_thankyou_page_title($title, $id){
    if (is_order_received_page() && get_the_ID() == $id) {
        return 'Thank You for Your Order';
    }
    return $title;
}


add_action('woocommerce_checkout_process', 'check_distance_limit');

function check_distance_limit() {

    if (empty($_POST['shipping_address_1'])) return;

    $origin = "2013 Wells Branch Parkway, Suite 304, Austin, TX 78728";

    $destination = sanitize_text_field($_POST['shipping_address_1']) . ', ' .
                   sanitize_text_field($_POST['shipping_city']) . ', ' .
                   sanitize_text_field($_POST['shipping_state']) . ' ' .
                   sanitize_text_field($_POST['shipping_postcode']) . ', ' .
                   sanitize_text_field($_POST['shipping_country']);

    $api_key = "AIzaSyCtfqqFhq0qDta_ahflrSbaA7zlDa5Lk30";

    $request = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=" . urlencode($origin) . "&destinations=" . urlencode($destination) . "&units=imperial&key=" . $api_key;

    $response = wp_remote_get($request);

    if (is_wp_error($response)) {
        wc_add_notice('Distance check failed (API error)', 'error');
        return;
    }

    $body = json_decode(wp_remote_retrieve_body($response), true);

 

    if ($body['status'] != 'OK' || $body['rows'][0]['elements'][0]['status'] != 'OK') {
        wc_add_notice('Unable to calculate delivery distance.', 'error');
        return;
    }

    $distance_meters = $body['rows'][0]['elements'][0]['distance']['value'];
    $distance_miles = $distance_meters * 0.000621371;

    if ($distance_miles > 20) {
       wc_add_notice('Sorry, we currently deliver within a 20-mile radius of our store.', 'error');
    }
}

// Remove category description from top
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );

// Add category description after products
add_action( 'woocommerce_after_shop_loop', 'custom_category_description_bottom', 20 );

function custom_category_description_bottom() {

    if ( is_product_category() ) {

        $term = get_queried_object();

        if ( ! empty( $term->description ) ) {
            echo '<div class="category-description-bottom">';
            echo wpautop( wp_kses_post( $term->description ) );
            echo '</div>';
        }
    }
}
 
 add_action('woocommerce_after_shop_loop', 'show_product_category_content', 20);

function show_product_category_content() {

    if (is_product_category()) {

        $content = get_field('category_content', 'product_cat_' . get_queried_object_id());

        if ($content) {
            ?>
            <div class="container">
                <div class="category-content-wrap">
                    <?php echo wp_kses_post($content); ?>
                </div>
            </div>
            <?php
        }
    }
}

add_action('woocommerce_after_main_content', 'custom_category_bottom_content', 5);

function custom_category_bottom_content() {

    if (is_product_category()) {

        $content = get_field('category_content', 'product_cat_' . get_queried_object_id());

        if (!empty($content)) {
            echo '<div class="custom-category-content container">';
            echo wp_kses_post($content);
            echo '</div>';
        }
    }
}