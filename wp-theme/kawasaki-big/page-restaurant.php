<?php
/**
 * Page template for /restaurant/
 */
if (!defined('ABSPATH')) exit;
get_header();

// --- ACF: ページヘッダー（帯）---
$kb_page_obj = get_queried_object();
$kb_default_title = ($kb_page_obj && !empty($kb_page_obj->post_title)) ? $kb_page_obj->post_title : '2F レストラン 24時間営業';
$hero_bg    = kb_field_image_url('hero_bg', 'restaurant.png');
$hero_title = kb_field('hero_title', $kb_default_title);
$hero_sub   = kb_field('hero_sub', '和・洋・中華、四季折々の100種類以上。');

// --- ACF: おすすめメニュー（未設定なら現状6品）---
$kb_menu = function_exists('get_field') ? get_field('restaurant_menu') : null;
if (!is_array($kb_menu) || empty($kb_menu)) {
    $kb_menu = [
        ['image' => kb_img('251117aburamazesoba.jxl.jpg'), 'name' => '油混ぜそば'],
        ['image' => kb_img('251117ikaten.jpg'),            'name' => 'やわらかイカ天'],
        ['image' => kb_img('220804_02.JPG'),               'name' => 'がぶのみヤクルト VS ヤクマンV'],
        ['image' => kb_img('220804_03.JPG'),               'name' => 'オロポ・オロヤク'],
        ['image' => kb_img('250802kakigori.jpg'),          'name' => 'かき氷（カルピス）'],
        ['image' => kb_img('250802ryomen.jpg'),            'name' => '涼麺（夏季限定）'],
    ];
}

// --- ACF: 季節のメニュー バナー（未設定なら現状3枚）---
$kb_seasonal = function_exists('get_field') ? get_field('restaurant_seasonal') : null;
if (!is_array($kb_seasonal) || empty($kb_seasonal)) {
    $kb_seasonal = [
        ['image' => kb_img('230707_restaurant_natsu.jpg'), 'alt' => '夏を味わうメニュー'],
        ['image' => kb_img('230911_restaurant_aki.jpg'),   'alt' => '秋を味わうメニュー'],
        ['image' => kb_img('220804_01.JPG'),               'alt' => '夏限定 冷やしメニュー'],
    ];
}

// ACF image サブフィールド（URL文字列 or 配列）を URL に正規化
if (!function_exists('kb_norm_img')) {
    function kb_norm_img($v) {
        if (is_array($v)) return $v['url'] ?? '';
        return is_string($v) ? $v : '';
    }
}
?>
<section class="s-page-hero" data-section="page-hero" aria-label="ページ見出し">
      <div class="s-page-hero__bg" style="background-image: url('<?php echo esc_url($hero_bg); ?>');" aria-hidden="true"></div>
      <div class="s-page-hero__overlay" aria-hidden="true"></div>
      <div class="l-container s-page-hero__inner">
        <h1 class="s-page-hero__title js-fade"><?php echo esc_html($hero_title); ?></h1>
        <p class="s-page-hero__sub js-fade"><?php echo esc_html($hero_sub); ?></p>
        <nav aria-label="パンくず">
          <ol class="c-breadcrumb js-fade">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
            <li><span aria-current="page">レストラン</span></li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- ====================== CONCEPT ====================== -->
    <section class="s-block" data-section="concept" aria-label="コンセプト">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">いつでも、心まで満たす一皿を。</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>
        <p class="s-block__lead js-fade">
          和・洋・中華、四季折々の料理を取り揃え、お客様をお待ちしております。100種類を超えるメニューをご用意し、深夜の一杯からモーニングまで、24時間いつでもご利用いただけます。
        </p>
      </div>
    </section>

    <!-- ====================== FOOD MENU ====================== -->
    <section class="s-block s-block--alt" data-section="food-menu" aria-label="フードメニュー">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">おすすめメニュー</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-food-grid">
          <?php foreach ($kb_menu as $i => $kb_item) :
            $kb_img_url = kb_norm_img($kb_item['image'] ?? '');
            $kb_name    = $kb_item['name'] ?? '';
            if (!$kb_img_url && !$kb_name) continue;
          ?>
          <article class="c-food-card js-fade">
            <figure class="c-food-card__figure">
              <?php if ($kb_img_url) : ?>
              <img src="<?php echo esc_url($kb_img_url); ?>" alt="<?php echo esc_attr($kb_name); ?>" loading="lazy" decoding="async" width="600" height="600" />
              <?php endif; ?>
            </figure>
            <div class="c-food-card__caption">
              <span class="c-food-card__num"><?php echo esc_html(sprintf('%02d', $i + 1)); ?></span>
              <h3 class="c-food-card__name"><?php echo esc_html($kb_name); ?></h3>
            </div>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ====================== SEASONAL MENU BANNERS ====================== -->
    <section class="s-block" data-section="seasonal-menu" aria-label="季節のメニュー">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">季節のメニュー</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-info-banners">
          <?php foreach ($kb_seasonal as $kb_b) :
            $kb_b_url = kb_norm_img($kb_b['image'] ?? '');
            $kb_b_alt = $kb_b['alt'] ?? '';
            if (!$kb_b_url) continue;
          ?>
          <figure class="c-info-banner js-fade">
            <img src="<?php echo esc_url($kb_b_url); ?>" alt="<?php echo esc_attr($kb_b_alt); ?>" loading="lazy" decoding="async" />
          </figure>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ====================== DRINK MENU ====================== -->
    <section class="s-block s-block--alt" data-section="drink-menu" aria-label="ドリンクメニュー">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">ドリンクメニュー</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-drink-list">
          <div class="c-drink-list__item js-fade">
            <span class="c-drink-list__jp">ビール各種</span>
          </div>
          <div class="c-drink-list__item js-fade">
            <span class="c-drink-list__jp">ハイボール各種</span>
          </div>
          <div class="c-drink-list__item js-fade">
            <span class="c-drink-list__jp">日本酒各種</span>
          </div>
          <div class="c-drink-list__item js-fade">
            <span class="c-drink-list__jp">ワイン・梅酒</span>
          </div>
          <div class="c-drink-list__item js-fade">
            <span class="c-drink-list__jp">焼酎各種</span>
          </div>
          <div class="c-drink-list__item js-fade">
            <span class="c-drink-list__jp">ノンアルコール各種</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================== HOURS NOTE ====================== -->
    <section class="s-block s-block--alt" data-section="hours-note" aria-label="営業時間メモ">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">営業時間</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-notes js-fade">
          <p class="c-notes__title">レストラン営業時間</p>
          <ul class="c-notes__list">
            <li>24時間営業（年中無休）</li>
            <li>5:00〜9:30 はモーニングメニューをご提供しております。</li>
            <li>ランチタイム・ディナータイムを問わず、お好きな時にお食事いただけます。</li>
            <li>カプセルご宿泊以外のお客様もご利用いただけます。</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ====================== RESERVATION BANNER ====================== -->
    <section class="s-reservation" data-section="reservation" id="reservation" aria-label="ご予約">
      <div class="l-container">
        <a href="https://www5.489pro.com/asp/489/menu.asp?id=14000064&amp;lan=JPN"
           class="s-reservation__banner js-fade">
          <!-- TODO: 予約バナー画像を差し替えてください -->
          <img src="<?php echo kb_img('banner_reserve.png'); ?>"
               alt="ご予約はこちら｜公式サイトご予約が一番お得です（ベストレート保証）"
               width="880" height="220"
               loading="lazy" decoding="async" />
        </a>
      </div>
    </section>

<?php get_footer(); ?>
