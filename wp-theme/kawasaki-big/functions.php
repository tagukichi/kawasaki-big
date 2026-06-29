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
   Helpers: ACF field fetchers (with safe fallbacks)
   ACF未導入でも壊れないように、必ず fallback を返す。
   ----------------------------------------------------------------------- */
function kb_field($name, $fallback = '') {
    if (!function_exists('get_field')) return $fallback;
    $v = get_field($name);
    return ($v !== null && $v !== '' && $v !== false) ? $v : $fallback;
}

/**
 * ACF image フィールドから URL を返す。fallback は kb_img() で /img/ 配下の filename を渡す。
 */
function kb_field_image_url($name, $fallback_filename = '') {
    $v = function_exists('get_field') ? get_field($name) : null;
    if (is_array($v) && !empty($v['url'])) return esc_url($v['url']);
    if (is_string($v) && $v !== '') return esc_url($v);
    if (is_numeric($v)) {
        $url = wp_get_attachment_image_url($v, 'full');
        if ($url) return esc_url($url);
    }
    return $fallback_filename ? kb_img($fallback_filename) : '';
}

/**
 * FV スライドショー画像の配列を返す（URL 文字列の配列）。
 */
function kb_get_fv_slides() {
    $slides = function_exists('get_field') ? get_field('fv_slides') : null;
    if (is_array($slides) && !empty($slides)) {
        $urls = [];
        foreach ($slides as $s) {
            $img = $s['image'] ?? null;
            if (is_array($img) && !empty($img['url'])) $urls[] = $img['url'];
            elseif (is_string($img) && $img !== '') $urls[] = $img;
            elseif (is_numeric($img)) {
                $u = wp_get_attachment_image_url($img, 'full');
                if ($u) $urls[] = $u;
            }
        }
        if (!empty($urls)) return $urls;
    }
    // fallback: 既存4枚
    return [
        kb_img('IMG_0218.JPG'),
        kb_img('0T8A2705.JPG'),
        kb_img('0T8A4965.JPG'),
        kb_img('restaurant_masao1.png'),
    ];
}

/**
 * 「館内のご案内」4カードの配列を返す。
 * 各要素: ['image', 'num', 'title', 'description', 'link_url']
 */
function kb_get_services_cards() {
    $cards = function_exists('get_field') ? get_field('services_cards') : null;
    if (is_array($cards) && !empty($cards)) {
        return array_map(function ($c) {
            $img = $c['image'] ?? '';
            if (is_array($img)) $img = $img['url'] ?? '';
            elseif (is_numeric($img)) $img = wp_get_attachment_image_url($img, 'full') ?: '';
            return [
                'image'       => $img,
                'num'         => $c['num'] ?? '',
                'title'       => $c['title'] ?? '',
                'description' => $c['description'] ?? '',
                'link_url'    => $c['link_url'] ?? '',
            ];
        }, $cards);
    }
    // fallback: 既存 4 カード
    return [
        ['image' => kb_img('topsaunahuro.png'),  'num' => '01', 'title' => '浴室・サウナ',                 'description' => '7つのお風呂と本格フィンランド式サウナで芯から、ととのう。', 'link_url' => home_url('/spa-sauna/')],
        ['image' => kb_img('restaurant.png'),    'num' => '02', 'title' => '2F レストラン 24時間営業',     'description' => '和・洋・中華、四季折々の100種類以上のメニュー。',                   'link_url' => home_url('/restaurant/')],
        ['image' => 'https://www.kawasaki-big.com/floor/img/bodycare02.jpg', 'num' => '03', 'title' => 'ボディケア', 'description' => '日々の疲れを、専門の手で。2F・11:00〜翌3:30。', 'link_url' => home_url('/bodycare/')],
        ['image' => 'https://www.kawasaki-big.com/floor/img/floorguide.jpg', 'num' => '04', 'title' => '館内案内',   'description' => '7フロアにわたる、休息のためのすべて。',                              'link_url' => home_url('/floor/')],
    ];
}

/**
 * レストラン 4品メニューの配列を返す。
 * 各要素: ['image', 'num', 'name']
 */
function kb_get_restaurant_items() {
    $items = function_exists('get_field') ? get_field('restaurant_items') : null;
    if (is_array($items) && !empty($items)) {
        return array_map(function ($i) {
            $img = $i['image'] ?? '';
            if (is_array($img)) $img = $img['url'] ?? '';
            elseif (is_numeric($img)) $img = wp_get_attachment_image_url($img, 'full') ?: '';
            return [
                'image' => $img,
                'num'   => $i['num'] ?? '',
                'name'  => $i['name'] ?? '',
            ];
        }, $items);
    }
    // fallback: 既存 4 品
    return [
        ['image' => kb_img('251117aburamazesoba.jxl.jpg'), 'num' => '01', 'name' => '油混ぜそば'],
        ['image' => kb_img('251117ikaten.jpg'),            'num' => '02', 'name' => 'やわらかイカ天'],
        ['image' => kb_img('220804_02.JPG'),               'num' => '03', 'name' => 'がぶのみヤクルト VS ヤクマンV'],
        ['image' => kb_img('251117ikaten.jpg'),            'num' => '04', 'name' => '（画像準備中）'],
    ];
}

/* -----------------------------------------------------------------------
   Include ACF field group definitions
   ----------------------------------------------------------------------- */
$kb_acf = get_template_directory() . '/inc/acf-fields.php';
if (file_exists($kb_acf)) {
    require_once $kb_acf;
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
