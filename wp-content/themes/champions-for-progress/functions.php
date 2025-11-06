<?php
/**
 * Champions for Progress Theme Functions
 *
 * @package Champions_For_Progress
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Theme setup
 */
function champions_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'custom-logo' );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'champions-for-progress' ),
        'footer'  => __( 'Footer Menu', 'champions-for-progress' ),
    ) );
}
add_action( 'after_setup_theme', 'champions_setup' );

/**
 * Enqueue scripts and styles
 */
function champions_scripts() {
    wp_enqueue_style( 'champions-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'champions_scripts' );

/**
 * Register widget areas
 */
function champions_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'champions-for-progress' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here.', 'champions-for-progress' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer', 'champions-for-progress' ),
        'id'            => 'footer-1',
        'description'   => __( 'Footer widget area.', 'champions-for-progress' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'champions_widgets_init' );

/**
 * Custom membership levels for Paid Memberships Pro
 *
 * This will be activated when PMPro is installed
 */
function champions_pmpro_custom_levels() {
    if ( ! function_exists( 'pmpro_getAllLevels' ) ) {
        return;
    }

    // Membership levels configuration
    // Uncomment and modify after PMPro installation
    /*
    $levels = array(
        array(
            'name' => 'Basic Business Listing',
            'description' => 'Essential business profile with contact information',
            'initial_payment' => 29.00,
            'billing_amount' => 29.00,
            'cycle_number' => 1,
            'cycle_period' => 'Month',
            'billing_limit' => 0,
            'trial_amount' => 0,
            'trial_limit' => 0,
        ),
        array(
            'name' => 'Premium Business Listing',
            'description' => 'Featured listing with photos and social media',
            'initial_payment' => 49.00,
            'billing_amount' => 49.00,
            'cycle_number' => 1,
            'cycle_period' => 'Month',
            'billing_limit' => 0,
            'trial_amount' => 0,
            'trial_limit' => 0,
        ),
        array(
            'name' => 'Platinum Business Listing',
            'description' => 'Premium features with job posting credits',
            'initial_payment' => 99.00,
            'billing_amount' => 99.00,
            'cycle_number' => 1,
            'cycle_period' => 'Month',
            'billing_limit' => 0,
            'trial_amount' => 0,
            'trial_limit' => 0,
        ),
    );
    */
}
add_action( 'init', 'champions_pmpro_custom_levels' );

/**
 * GeoDirectory customization
 */
function champions_geodir_custom_fields( $fields, $post_type ) {
    if ( $post_type !== 'gd_place' ) {
        return $fields;
    }

    // Add custom fields for business listings
    // This will be activated when GeoDirectory is installed
    return $fields;
}
add_filter( 'geodir_custom_fields', 'champions_geodir_custom_fields', 10, 2 );

/**
 * WP Job Manager customization
 */
function champions_job_manager_custom_fields() {
    if ( ! class_exists( 'WP_Job_Manager' ) ) {
        return;
    }

    // Add custom fields for job categorization
    // Church/Ministry vs General Jobs
    // LA Area vs Nationwide
}
add_action( 'init', 'champions_job_manager_custom_fields' );

/**
 * Prayer Call Section - Custom Post Type
 */
function champions_prayer_call_post_type() {
    $labels = array(
        'name'               => 'Prayer Calls',
        'singular_name'      => 'Prayer Call',
        'menu_name'          => 'Prayer Calls',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Prayer Call',
        'edit_item'          => 'Edit Prayer Call',
        'new_item'           => 'New Prayer Call',
        'view_item'          => 'View Prayer Call',
        'search_items'       => 'Search Prayer Calls',
        'not_found'          => 'No prayer calls found',
        'not_found_in_trash' => 'No prayer calls found in Trash',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => false,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'prayer_call', $args );
}
add_action( 'init', 'champions_prayer_call_post_type' );

/**
 * Custom user roles
 */
function champions_add_custom_roles() {
    // Job Seeker role (free)
    add_role(
        'job_seeker',
        'Job Seeker',
        array(
            'read'         => true,
            'edit_posts'   => false,
            'delete_posts' => false,
        )
    );

    // Business Member role will be managed by Paid Memberships Pro
}
add_action( 'init', 'champions_add_custom_roles' );

/**
 * Shortcode for Prayer Call Zoom Link
 */
function champions_zoom_link_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'url'  => '',
        'text' => 'Join Prayer Call on Zoom',
    ), $atts, 'zoom_link' );

    if ( empty( $atts['url'] ) ) {
        return '<p>Zoom link not configured.</p>';
    }

    return sprintf(
        '<div class="zoom-link-container">
            <a href="%s" class="button zoom-button" target="_blank" rel="noopener">%s</a>
            <p class="zoom-info">Every Wednesday at 12:00 PM PST</p>
        </div>',
        esc_url( $atts['url'] ),
        esc_html( $atts['text'] )
    );
}
add_shortcode( 'zoom_link', 'champions_zoom_link_shortcode' );

/**
 * Admin notice for required plugins
 */
function champions_admin_notice_plugins() {
    $required_plugins = array(
        'paid-memberships-pro/paid-memberships-pro.php' => 'Paid Memberships Pro',
        'geodirectory/geodirectory.php' => 'GeoDirectory',
        'wp-job-manager/wp-job-manager.php' => 'WP Job Manager',
    );

    $missing_plugins = array();

    foreach ( $required_plugins as $plugin => $name ) {
        if ( ! is_plugin_active( $plugin ) ) {
            $missing_plugins[] = $name;
        }
    }

    if ( ! empty( $missing_plugins ) ) {
        printf(
            '<div class="notice notice-warning is-dismissible">
                <p><strong>Champions for Progress:</strong> The following recommended plugins are not active: %s</p>
            </div>',
            implode( ', ', $missing_plugins )
        );
    }
}
add_action( 'admin_notices', 'champions_admin_notice_plugins' );
