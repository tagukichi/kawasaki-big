<?php
/**
 * Kawasaki Big - theme functions
 */
if (!defined('ABSPATH')) exit;

if (!defined('KAWASAKI_BIG_VERSION')) {
    define('KAWASAKI_BIG_VERSION', '1.0.0');
}
if (!defined('KAWASAKI_BIG_RESERVE_URL')) {
    define('KAWASAKI_BIG_RESERVE_URL', 'https://www5.489pro.com/asp/489/menu.asp?id=14000064&lan=JPN');
}
if (!defined('KAWASAKI_BIG_TEL')) {
    define('KAWASAKI_BIG_TEL', '044-246-0008');
}

/* -----------------------------------------------------------------------
   Theme setup
   ----------------------------------------------------------------------- */
function kawasaki_big_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('responsive-embeds');

    register_nav_menus([
        'primary' => __('メインナビゲーション', 'kawasaki-big'),
        'footer'  => __('フッターメニュー', 'kawasaki-big'),
        'footer_reservation' => __('フッター - 予約メニュー', 'kawasaki-big'),
    ]);

    add_image_size('news-thumb', 400, 240, true);
}
add_action('after_setup_theme', 'kawasaki_big_setup');

/* -----------------------------------------------------------------------
   Enqueue
   ----------------------------------------------------------------------- */
function kawasaki_big_enqueue() {
    // Google Fonts
    wp_enqueue_style(
        'kawasaki-big-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Zen+Kaku+Gothic+New:wght@400;700;900&display=swap',
        [],
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'kawasaki-big-style',
        get_stylesheet_uri(),
        ['kawasaki-big-fonts'],
        KAWASAKI_BIG_VERSION
    );

    // Main script
    wp_enqueue_script(
        'kawasaki-big-script',
        get_template_directory_uri() . '/script.js',
        [],
        KAWASAKI_BIG_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'kawasaki_big_enqueue');

/* -----------------------------------------------------------------------
   Helper: Image URL
   ----------------------------------------------------------------------- */
function kb_img($path) {
    return esc_url(get_template_directory_uri() . '/img/' . ltrim($path, '/'));
}

/* -----------------------------------------------------------------------
   Helper: Reservation link
   ----------------------------------------------------------------------- */
function kb_reserve_url() {
    return esc_url(KAWASAKI_BIG_RESERVE_URL);
}

/* -----------------------------------------------------------------------
   Body classes
   ----------------------------------------------------------------------- */
function kawasaki_big_body_classes($classes) {
    if (is_front_page()) $classes[] = 'is-home';
    return $classes;
}
add_filter('body_class', 'kawasaki_big_body_classes');

/* -----------------------------------------------------------------------
   Hide admin bar for non-admins on front
   ----------------------------------------------------------------------- */
function kawasaki_big_hide_admin_bar() {
    if (!current_user_can('manage_options')) show_admin_bar(false);
}
add_action('after_setup_theme', 'kawasaki_big_hide_admin_bar');

/* -----------------------------------------------------------------------
   Custom excerpt length
   ----------------------------------------------------------------------- */
function kawasaki_big_excerpt_length($length) { return 60; }
add_filter('excerpt_length', 'kawasaki_big_excerpt_length');

function kawasaki_big_excerpt_more($more) { return '…'; }
add_filter('excerpt_more', 'kawasaki_big_excerpt_more');
