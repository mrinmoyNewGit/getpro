<?php
/**
 * GetPro Design Theme Functions
 */

// Theme Setup
function getpro_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 50,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    ));
    
    // Register Navigation Menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'getpro-design'),
    ));
}
add_action('after_setup_theme', 'getpro_theme_setup');

// Enqueue Scripts and Styles
function getpro_enqueue_scripts() {
    // Styles
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '2.3.4');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '2.3.4');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
    wp_enqueue_style('getpro-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    
    // Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
    wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-1.3.0.js', array('jquery'), '1.3.0', true);
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.js', array('jquery'), '4.0.0', true);
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'getpro_enqueue_scripts');

// Register Widget Areas
function getpro_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'getpro-design'),
        'id' => 'footer-widget-area',
        'description' => __('Footer widget area', 'getpro-design'),
        'before_widget' => '<div class="footer_element">',
        'after_widget' => '</div>',
        'before_title' => '<h6>',
        'after_title' => '</h6>',
    ));
}
add_action('widgets_init', 'getpro_widgets_init');

// Custom Post Type for Team Members
function getpro_register_team_post_type() {
    register_post_type('team_member',
        array(
            'labels' => array(
                'name' => __('Team Members'),
                'singular_name' => __('Team Member')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-groups',
        )
    );
}
add_action('init', 'getpro_register_team_post_type');

// Custom Post Type for Portfolio/Work
function getpro_register_portfolio_post_type() {
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => __('Portfolio'),
                'singular_name' => __('Portfolio Item')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-portfolio',
        )
    );
}
add_action('init', 'getpro_register_portfolio_post_type');
add_image_size('banner-size', 511, 523, false); // exact banner size, no crop
// Custom Post Type for Banner Slides
function getpro_register_banner_post_type() {
    register_post_type('banner',
        array(
            'labels' => array(
                'name' => __('Banners'),
                'singular_name' => __('Banner')
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-images-alt2',
        )
    );
}
add_action('init', 'getpro_register_banner_post_type');
?>