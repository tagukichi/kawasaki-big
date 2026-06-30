<?php
/**
 * Common header
 */
if (!defined('ABSPATH')) exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />

  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%23ffffff' stroke='%232c4a6e' stroke-width='6'/%3E%3Ctext x='50' y='70' font-family='serif' font-style='italic' font-size='62' text-anchor='middle' fill='%232c4a6e'%3EB%3C/text%3E%3C/svg%3E" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <a href="#main" class="u-skip-link">本文へスキップ</a>

  <!-- ====================== HEADER ====================== -->
  <header class="l-header" data-section="header">
    <nav class="nav l-container" aria-label="グローバルナビゲーション">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="nav__logo" aria-label="<?php bloginfo('name'); ?>">
        <img src="<?php echo kb_img('title_l.png'); ?>" alt="<?php bloginfo('name'); ?>" class="nav__logo-img" width="220" height="60" />
      </a>

      <a href="<?php echo kb_reserve_url(); ?>" class="nav__bestrate" aria-label="ベストレート保証｜ご予約はコチラから">
        <img src="<?php echo kb_img('banner_reserve.png'); ?>" alt="ベストレート保証｜ご予約はコチラから" class="nav__bestrate-img" />
      </a>

      <?php if (has_nav_menu('primary')) : ?>
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'nav__links',
            'depth'          => 1,
            'fallback_cb'    => 'kawasaki_big_default_primary_menu',
            'link_before'    => '',
            'link_after'     => '',
            'walker'         => new Kawasaki_Big_Nav_Walker(),
        ]);
        ?>
      <?php else: kawasaki_big_default_primary_menu(); endif; ?>

      <div class="nav__actions">
        <a href="tel:<?php echo esc_attr(str_replace('-', '', KAWASAKI_BIG_TEL)); ?>" class="nav__tel" aria-label="電話番号 <?php echo esc_attr(KAWASAKI_BIG_TEL); ?>">
          <span class="nav__tel-label">電話番号</span>
          <span class="nav__tel-num"><?php echo esc_html(KAWASAKI_BIG_TEL); ?></span>
        </a>
        <a href="<?php echo kb_reserve_url(); ?>" class="c-btn c-btn--primary nav__cta">ご予約</a>
      </div>

      <button class="hamburger js-hamburger" type="button" aria-label="メニューを開く" aria-expanded="false" aria-controls="mobile-menu">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
      </button>

      <div class="mobile-menu" id="mobile-menu">
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'mobile-menu__list',
                'depth'          => 1,
                'fallback_cb'    => 'kawasaki_big_default_mobile_menu',
            ]);
        } else {
            kawasaki_big_default_mobile_menu();
        }
        ?>
        <div class="mobile-menu__contact">
          <a href="tel:<?php echo esc_attr(str_replace('-', '', KAWASAKI_BIG_TEL)); ?>" class="mobile-menu__tel">
            <span>電話番号</span> <?php echo esc_html(KAWASAKI_BIG_TEL); ?>
          </a>
          <a href="<?php echo kb_reserve_url(); ?>" class="c-btn c-btn--primary mobile-menu__cta">ご予約はこちら</a>
        </div>
      </div>
    </nav>
  </header>

  <main id="main">
<?php
// --- Default menu fallbacks ---
function kawasaki_big_default_primary_menu() {
    $url = kb_reserve_url();
    echo '<ul class="nav__links">'
        . '<li><a class="nav__link" href="' . esc_url(home_url('/')) . '">ホーム</a></li>'
        . '<li><a class="nav__link" href="' . $url . '">ご予約</a></li>'
        . '<li><a class="nav__link" href="' . esc_url(home_url('/spa_sauna/')) . '">浴室・サウナ</a></li>'
        . '<li><a class="nav__link" href="' . esc_url(home_url('/restaurant/')) . '">レストラン</a></li>'
        . '<li><a class="nav__link" href="' . esc_url(home_url('/hours_prices/')) . '">営業時間・料金</a></li>'
        . '<li><a class="nav__link" href="' . esc_url(home_url('/bodycare/')) . '">ボディケア</a></li>'
        . '<li><a class="nav__link" href="' . esc_url(home_url('/floor/')) . '">館内案内</a></li>'
        . '<li><a class="nav__link" href="' . esc_url(home_url('/access/')) . '">アクセス</a></li>'
        . '<li><a class="nav__link" href="' . esc_url(home_url('/inquiry/')) . '">お問合せ</a></li>'
        . '</ul>';
}
function kawasaki_big_default_mobile_menu() {
    $url = kb_reserve_url();
    echo '<ul class="mobile-menu__list">'
        . '<li><a href="' . esc_url(home_url('/')) . '">ホーム</a></li>'
        . '<li><a href="' . $url . '">ご予約</a></li>'
        . '<li><a href="' . esc_url(home_url('/spa_sauna/')) . '">浴室・サウナ</a></li>'
        . '<li><a href="' . esc_url(home_url('/restaurant/')) . '">レストラン</a></li>'
        . '<li><a href="' . esc_url(home_url('/hours_prices/')) . '">営業時間・料金</a></li>'
        . '<li><a href="' . esc_url(home_url('/bodycare/')) . '">ボディケア</a></li>'
        . '<li><a href="' . esc_url(home_url('/floor/')) . '">館内案内</a></li>'
        . '<li><a href="' . esc_url(home_url('/access/')) . '">アクセス</a></li>'
        . '<li><a href="' . esc_url(home_url('/inquiry/')) . '">お問合せ</a></li>'
        . '</ul>';
}

// --- Custom nav walker: outputs <li><a class="nav__link">...</a></li> ---
if (!class_exists('Kawasaki_Big_Nav_Walker')) {
    class Kawasaki_Big_Nav_Walker extends Walker_Nav_Menu {
        public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
            $classes = empty($item->classes) ? [] : (array) $item->classes;
            $current = in_array('current-menu-item', $classes, true) ? ' aria-current="page"' : '';
            $target  = !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
            $rel     = !empty($item->xfn)    ? ' rel="' . esc_attr($item->xfn) . '"' : '';
            $url     = !empty($item->url) ? esc_url($item->url) : '#';
            $title   = esc_html($item->title);
            $output .= '<li><a class="nav__link"' . $current . ' href="' . $url . '"' . $target . $rel . '>' . $title . '</a></li>';
        }
        public function end_el(&$output, $item, $depth = 0, $args = null) { /* nothing */ }
    }
}
