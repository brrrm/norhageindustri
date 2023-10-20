<?php
/**
 * norhageindustri functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package norhageindustri
 */

if ( ! defined( '_G_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_G_VERSION', '0.0.1' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function norhageindustri_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on norhageindustri, use a find and replace
		* to change 'norhageindustri' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'norhageindustri', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'norhageindustri' ),
			'menu-2' => esc_html__( 'Secondary navigation', 'norhageindustri' ),
			'menu-3' => esc_html__( 'Footer navigation', 'norhageindustri' ),
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

	add_theme_support( 'align-wide' );

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'norhageindustri_custom_background_args',
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
add_action( 'after_setup_theme', 'norhageindustri_setup' );

/**
 * We use WordPress's init hook to make sure
 * our blocks are registered early in the loading
 * process.
 *
 * @link https://developer.wordpress.org/reference/hooks/init/
 */
function norhageindustri_register_acf_blocks() {
    /**
     * We register our block's with WordPress's handy
     * register_block_type();
     *
     * @link https://developer.wordpress.org/reference/functions/register_block_type/
     */
    register_block_type( __DIR__ . '/blocks/headerblock' );
    register_block_type( __DIR__ . '/blocks/product-header-block' );
    register_block_type( __DIR__ . '/blocks/text-image-block' );
    register_block_type( __DIR__ . '/blocks/projects-block' );
    register_block_type( __DIR__ . '/blocks/cta-block' );
    register_block_type( __DIR__ . '/blocks/cta-within-text-block' );
    register_block_type( __DIR__ . '/blocks/reviews-block' );
    register_block_type( __DIR__ . '/blocks/categories-block' );
}
// Here we call our tt3child_register_acf_block() function on init.
add_action( 'init', 'norhageindustri_register_acf_blocks' );

// Our custom post type function
function norhageindustri_create_posttypes() {
	$taxonomies = [
		'product-type'		=> [
			'machine-name'					=> 'product-type',
			'content-type'					=> 'product',
			'labels'						=> [
				'name' => _x( 'Product type', 'taxonomy general name' ),
				'singular_name' => _x( 'Product types', 'taxonomy singular name' ),
				'search_items' =>  __( 'Search product types' ),
				'all_items' => __( 'All product types' ),
				'parent_item' => __( 'Parent product type' ),
				'parent_item_colon' => __( 'Parent product type:' ),
				'edit_item' => __( 'Edit product type' ),
				'update_item' => __( 'Update product type' ),
				'add_new_item' => __( 'Save product type' ),
				'new_item_name' => __( 'New product type name' ),
				'menu_name' => __( 'Product types' ),
			]
		],
		'plastic-type'		=> [
			'machine-name'					=> 'plastic-type',
			'content-type'					=> 'plastic',
			'labels'						=> [
				'name' => _x( 'Plastic type', 'taxonomy general name' ),
				'singular_name' => _x( 'Plastic types', 'taxonomy singular name' ),
				'search_items' =>  __( 'Search plastic types' ),
				'all_items' => __( 'All plastic types' ),
				'parent_item' => __( 'Parent plastic type' ),
				'parent_item_colon' => __( 'Parent plastic type:' ),
				'edit_item' => __( 'Edit plastic type' ),
				'update_item' => __( 'Update plastic type' ),
				'add_new_item' => __( 'Save plastic type' ),
				'new_item_name' => __( 'New plastic type name' ),
				'menu_name' => __( 'Plastic types' ),
			]
		],
		'constr-mat-type'		=> [
			'machine-name'					=> 'constr-mat-type',
			'content-type'					=> 'construction',
			'labels'						=> [
				'name' => _x( 'Material type', 'taxonomy general name' ),
				'singular_name' => _x( 'Material types', 'taxonomy singular name' ),
				'search_items' =>  __( 'Search material types' ),
				'all_items' => __( 'All Material types' ),
				'parent_item' => __( 'Parent Material type' ),
				'parent_item_colon' => __( 'Parent Material type:' ),
				'edit_item' => __( 'Edit Material type' ),
				'update_item' => __( 'Update Material type' ),
				'add_new_item' => __( 'Save Material type' ),
				'new_item_name' => __( 'New Material type name' ),
				'menu_name' => __( 'Material types' ),
			]
		],
		'service-type'		=> [
			'machine-name'					=> 'service-type',
			'content-type'					=> 'service',
			'labels'						=> [
				'name' => _x( 'Service type', 'taxonomy general name' ),
				'singular_name' => _x( 'Service types', 'taxonomy singular name' ),
				'search_items' =>  __( 'Search service types' ),
				'all_items' => __( 'All Service types' ),
				'parent_item' => __( 'Parent Service type' ),
				'parent_item_colon' => __( 'Parent Service type:' ),
				'edit_item' => __( 'Edit Service type' ),
				'update_item' => __( 'Update Service type' ),
				'add_new_item' => __( 'Save Service type' ),
				'new_item_name' => __( 'New Service type name' ),
				'menu_name' => __( 'Service types' ),
			]
		]
	];

	$defaultTaxonomySettings = [
		// Hierarchical taxonomy (like categories)
		'hierarchical' => false,
		// Control the slugs used for this taxonomy
		'rewrite' => [
			'with_front' => false, // Don't display the category base before "/locations/"
			'hierarchical' => false // This will allow URL's like "/locations/boston/cambridge/"
		],
		'show_in_rest'				=> true,
	];

	foreach($taxonomies as $type){
		$settings = $defaultTaxonomySettings;
		$settings['labels'] = $type['labels'];
		$settings['rewrite']['slug'] = $type['machine-name'];
		register_taxonomy($type['machine-name'], $type['content-type'], $settings);
	}



 	$contentTypes = [
 		'product'	=> [
 			'slug'		=> 'product',
 			'taxonomies'	=> ['product-type'],
 			'labels'	=> [
				'name' 						=> __( 'Products', 'norhageindustri' ),
				'singular_name' 			=> __( 'Product', 'norhageindustri' ),
				'add_new' 					=> __( 'New product', 'norhageindustri' ),
				'add_new_item' 				=> __( 'Add new product', 'norhageindustri' ),
				'edit_item' 				=> __( 'Edit product', 'norhageindustri' ),
				'new_item'					=> __( 'New product', 'norhageindustri' ),
				'view_item' 				=> __( 'View product', 'norhageindustri' ),
				'search_items'				=> __( 'Search products', 'norhageindustri' ),
				'not_found' 				=>  __( 'No products found', 'norhageindustri' ),
				'not_found_in_trash' 		=> __( 'No products found in trash', 'norhageindustri'),
			]
		],
 		'plastic'	=> [
 			'slug'		=> 'plastic',
 			'taxonomies'	=> ['plastic-type'],
 			'labels'	=> [
				'name' 						=> __( 'Plastics', 'norhageindustri' ),
				'singular_name' 			=> __( 'Plastic', 'norhageindustri' ),
				'add_new' 					=> __( 'New plastic', 'norhageindustri' ),
				'add_new_item' 				=> __( 'Add new plastic', 'norhageindustri' ),
				'edit_item' 				=> __( 'Edit plastic', 'norhageindustri' ),
				'new_item'					=> __( 'New plastic', 'norhageindustri' ),
				'view_item' 				=> __( 'View plastics', 'norhageindustri' ),
				'search_items'				=> __( 'Search plastics', 'norhageindustri' ),
				'not_found' 				=>  __( 'No plastics found', 'norhageindustri' ),
				'not_found_in_trash' 		=> __( 'No plastics found in trash', 'norhageindustri'),
			]
		],
 		'service'	=> [
 			'slug'		=> 'service',
 			'taxonomies'	=> ['service-type'],
 			'labels'	=> [
				'name' 						=> __( 'Services', 'norhageindustri' ),
				'singular_name' 			=> __( 'Service', 'norhageindustri' ),
				'add_new' 					=> __( 'New service', 'norhageindustri' ),
				'add_new_item' 				=> __( 'Add new service', 'norhageindustri' ),
				'edit_item' 				=> __( 'Edit service', 'norhageindustri' ),
				'new_item'					=> __( 'New service', 'norhageindustri' ),
				'view_item' 				=> __( 'View service', 'norhageindustri' ),
				'search_items'				=> __( 'Search services', 'norhageindustri' ),
				'not_found' 				=>  __( 'No services found', 'norhageindustri' ),
				'not_found_in_trash' 		=> __( 'No services found in trash', 'norhageindustri'),
			]
		],
 		'construction'	=> [
 			'slug'		=> 'construction',
 			'taxonomies'	=> ['constr-mat-type'],
 			'labels'	=> [
				'name' 						=> __( 'Construction materials', 'norhageindustri' ),
				'singular_name' 			=> __( 'Construction material', 'norhageindustri' ),
				'add_new' 					=> __( 'New construction material', 'norhageindustri' ),
				'add_new_item' 				=> __( 'Add new construction material', 'norhageindustri' ),
				'edit_item' 				=> __( 'Edit construction material', 'norhageindustri' ),
				'new_item'					=> __( 'New construction material', 'norhageindustri' ),
				'view_item' 				=> __( 'View construction material', 'norhageindustri' ),
				'search_items'				=> __( 'Search construction materials', 'norhageindustri' ),
				'not_found' 				=>  __( 'No construction materials found', 'norhageindustri' ),
				'not_found_in_trash' 		=> __( 'No construction materials found in trash', 'norhageindustri'),
			]
		]
	];

	$defaultPostSettings = [
		'public' 				=> true,
		'exclude_from_search'	=> false,
		'has_archive' 			=> false,
		'rewrite' 				=> array('slug' => 'product'),
		'show_in_rest' 			=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'menu_position'			=> 4,
		'menu_icon'				=> 'dashicons-carrot',
		'taxonomies'			=> ['product-type'],
		'supports'				=> [
			'title',
			'editor',
			'author',
			'revisions',
			'thumbnail',
		],
		'template'				=> [
			[
				'norhageindustri/product-header-block',
				[
					'lock'		=> [
						'move'		=> true,
						'remove'	=> true
					]
				]
			]
		]
	];

	foreach($contentTypes as $type){
		$settings = array_merge($defaultPostSettings, [
			'labels'			=> $type['labels'],
            'rewrite' 			=> ['slug' => $type['slug']],
            'taxonomies'		=> $type['taxonomies']
		]);
		register_post_type($type['slug'], $settings);
	}
}
add_action( 'init', 'norhageindustri_create_posttypes' );

function ggstyle_menu_item_count( $output, $item, $depth, $args ) {
    // Check if the item is a Category or Custom Taxonomy
    if( $item->type == 'taxonomy' ) {
        $object = get_term($item->object_id, $item->object);
        $posts = get_posts([
        	'post_type'		=> 'product',
        	'numberposts'	=> -1,
        	'tax_query'		=> [
        		[
	        		'taxonomy'		=> 'product-type',
	        		'field'			=> 'term_id',
	        		'terms'			=> $item->object_id
	        	]
        	]
        ]);

        // Check count, if more than 0 display count
        if(count($posts) > 0){
        	$output .= '<ul class="products-sub-menu">';
        	foreach($posts as $post){
        		$thumb = get_the_post_thumbnail($post->ID);
        		$output .= '<li><a href="' . esc_url( get_permalink($post) ) . '">' . $thumb . '<span class="title-link">' . get_the_title($post) . '</span></a></li>' ;
        	}
        	$output .= '</ul>';
        }
    }    

    return $output;
}
add_action( 'walker_nav_menu_start_el', 'ggstyle_menu_item_count', 10, 4 );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
/*
function norhageindustri_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'norhageindustri_content_width', 800 );
}
add_action( 'after_setup_theme', 'norhageindustri_content_width', 0 );
*/

/**
 * Enqueue scripts and styles.
 */
function norhageindustri_scripts() {
	wp_enqueue_style( 'norhageindustri-style', get_stylesheet_uri(), array(), _G_VERSION );
	/*
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}*/
}
add_action( 'wp_enqueue_scripts', 'norhageindustri_scripts' );

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

add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
     
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }
 
    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
 
    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});


/**
 * CREATE NORHAGE BLOCKS CATEGORY
 */
add_filter( 'block_categories_all' , function( $categories ) {

    // Adding a new category.
	array_unshift( $categories, array(
		'slug'  => 'norhage',
		'title' => 'Norhage'
	));

	return $categories;
} );




/**
 * REMOVE POSTS
 */
function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}
add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type_menu_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'new-post' );
}
add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );

function remove_add_new_post_href_in_admin_bar() {
    ?>
    <script type="text/javascript">
        function remove_add_new_post_href_in_admin_bar() {
            var add_new = document.getElementById('wp-admin-bar-new-content');
            if(!add_new) return;
            var add_new_a = add_new.getElementsByTagName('a')[0];
            if(add_new_a) add_new_a.setAttribute('href','#!');
        }
        remove_add_new_post_href_in_admin_bar();
    </script>
    <?php
}
add_action( 'admin_footer', 'remove_add_new_post_href_in_admin_bar' );

function remove_frontend_post_href(){
    if( is_user_logged_in() ) {
        add_action( 'wp_footer', 'remove_add_new_post_href_in_admin_bar' );
    }
}
add_action( 'init', 'remove_frontend_post_href' );










/**
 * REMOVE COMMENTS
 */ 
// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
 
// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);
 
// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});
 
// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});




