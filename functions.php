<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function webcolours_setup() {
	load_theme_textdomain( 'webcolours', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'webcolours' ),
		)
	);

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

	add_theme_support(
		'custom-background',
		apply_filters(
			'webcolours_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'webcolours_setup' );

function webcolours_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'webcolours_content_width', 640 );
}
add_action( 'after_setup_theme', 'webcolours_content_width', 0 );

function register_widget_areas() {
  register_sidebar( array(
    'name'          => 'Footer area one',
    'id'            => 'footer_area_one',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-one">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
  register_sidebar( array(
    'name'          => 'Footer area two',
    'id'            => 'footer_area_two',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-two">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
  register_sidebar( array(
    'name'          => 'Footer area three',
    'id'            => 'footer_area_three',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-three">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
}
add_action( 'widgets_init', 'register_widget_areas' );

/*
* ASSETS LINK
*/
function webcolours_style_css(){
   wp_enqueue_style('css_base', get_stylesheet_directory_uri() . '/assets/css/base.css');
   wp_enqueue_style('css_grid', get_stylesheet_directory_uri() . '/assets/css/grid.css');
   wp_enqueue_style('css_formv', get_stylesheet_directory_uri() . '/assets/css/form.css');		
   wp_enqueue_style('css_nav', get_stylesheet_directory_uri() . '/assets/css/nav.css');		
   wp_enqueue_style('css_modules', get_stylesheet_directory_uri() . '/assets/css/modules.css');
   wp_enqueue_style('css_responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css');		
}
add_action('wp_enqueue_scripts','webcolours_style_css');

/**
 * Enqueue scripts and styles.
 */
function webcolours_scripts() {
	wp_enqueue_style( 'webcolours-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'webcolours-style', 'rtl', 'replace' );
	wp_enqueue_script( 'webcolours-customizer', get_template_directory_uri() . '/js/customizer.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'webcolours-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'webcolours_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*
* Function qui autorise les fichiers SVG
*/
function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/*
* Function qui change en Numérique le nombre de post par page
*/
function pagination_bar() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


/*
* Fonction de création d'un post personnalisé
*/
function custom_post_type() {
// On définit les labels pour le post personnalisé
    $labels = array(
        'name'                => _x( 'portfolio', 'Post Type General Name', 'webcolours' ),
        'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'webcolours' ),
        'menu_name'           => __( 'portfolio', 'webcolours' ),
        'parent_item_colon'   => __( 'Parent Portfolio', 'webcolours' ),
        'all_items'           => __( 'All portfolio', 'webcolours' ),
        'view_item'           => __( 'View Portfolio', 'webcolours' ),
        'add_new_item'        => __( 'Add New Portfolio', 'webcolours' ),
        'add_new'             => __( 'Add New', 'webcolours' ),
        'edit_item'           => __( 'Edit Portfolio', 'webcolours' ),
        'update_item'         => __( 'Update Portfolio', 'webcolours' ),
        'search_items'        => __( 'Search Portfolio', 'webcolours' ),
        'not_found'           => __( 'Not Found', 'webcolours' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'webcolours' ),
    );  
// On définit les autres options pour le post personnalisé
    $args = array(
        'label'               => __( 'portfolio', 'webcolours' ),
        'description'         => __( 'Portfolio news and reviews', 'webcolours' ),
        'labels'              => $labels,
// On peut l'éditer dans l'éditeur de posts, définir un résumé, des champs personnalisés...
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
// On l'associe avec une taxonomie (ici genres).
        'taxonomies'          => array( 'genres' ),
/* Un post personnalisé hiérarchique est comme une Page et peut avoir un
 Parent et des enfants. Un PP non-hiérarchique est comme un article. */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
// Enregistrer le Type de Post personnalisé
    register_post_type( 'portfolio', $args );
}
/* Utiliser le hook 'init' pour exécuter l’action d’enregistrement du
* post personnalisé.
*/
add_action( 'init', 'custom_post_type', 0 );
/**
*Créer une taxonomie
*/
add_action( 'init', 'define_categories_portfolio_taxonomy' );
	function define_categories_portfolio_taxonomy() {
	register_taxonomy(
	'categories',
	'portfolio',
	array(
	'hierarchical' => true,
	'label' => 'Categories',
	'query_var' => true,
	'rewrite' => true
	)
	);
	}
/**
*For fixing custom post not found please use below code in your functions.php :
*/
flush_rewrite_rules( false );



// ==========================================================================
// SECURITY
// ==========================================================================

// Limit Direct Access to functions.php: Ensure that your functions.php file cannot be accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Limit Login Attempts: Limit the number of login attempts to prevent brute force attacks.
function custom_login_attempt_limit() {
    if ( isset( $_GET['wp-login.php'] ) && ( $GLOBALS['pagenow'] == 'wp-login.php' ) ) {
        if ( ! isset( $_COOKIE['attempted_logins'] ) ) {
            setcookie( 'attempted_logins', 1, time() + 3600, COOKIEPATH, COOKIE_DOMAIN, false );
        } else {
            $_COOKIE['attempted_logins']++;
            setcookie( 'attempted_logins', $_COOKIE['attempted_logins'], time() + 3600, COOKIEPATH, COOKIE_DOMAIN, false );
        }
        if ( $_COOKIE['attempted_logins'] > 3 ) {
            wp_die( 'You have attempted too many logins. Please try again later.' );
        }
    }
}
add_action( 'init', 'custom_login_attempt_limit' );

// Disable XML-RPC: If you're not using XML-RPC, it's generally recommended to disable it to prevent certain types of attacks
add_filter( 'xmlrpc_enabled', '__return_false' );


// CACHE LA VERSION DE WORDPRESS AFIN DE SÉCURISER LE SITE
function remove_wp_version_strings($src) {
    global $wp_version;
    parse_str(parse_url($src, PHP_URL_QUERY), $query);
    if (!empty($query['ver']) && $query['ver'] === $wp_version) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('script_loader_src', 'remove_wp_version_strings');
add_filter('style_loader_src', 'remove_wp_version_strings');
function remove_wp_version_tag() {
    return '';
}
add_filter('the_generator', 'remove_wp_version_tag');

// MESSAGE D'ALERTE POUR LES TENTATIVES DE LOG INDÉSIRABLES
function no_wordpress_errors(){
  return 'WARNING, ADMIN AREA IS PRIVATE';
}
add_filter( 'login_errors', 'no_wordpress_errors' );



