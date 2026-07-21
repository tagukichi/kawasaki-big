<?php
/**
 * Page template for /access/
 */
if (!defined('ABSPATH')) exit;
get_header();

// --- ACF: ページヘッダー（帯）---
$kb_page_obj = get_queried_object();
$kb_default_title = ($kb_page_obj && !empty($kb_page_obj->post_title)) ? $kb_page_obj->post_title : 'アクセス';
$hero_bg    = kb_field_image_url('hero_bg', 'IMG_0218.JPG');
$hero_title = kb_field('hero_title', $kb_default_title);
$hero_sub   = kb_field('hero_sub', 'JR川崎駅から徒歩3分。京急川崎駅から徒歩5分。');
$access_icon = kb_field_image_url('access_icon', '');
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
            <li><span aria-current="page">アクセス</span></li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- ====================== INFO + MAP ====================== -->
    <section class="s-block" data-section="info-map" aria-label="施設情報">
      <div class="l-container">
        <?php if ($access_icon) : ?>
        <figure class="c-section-icon js-fade">
          <img src="<?php echo esc_url($access_icon); ?>" alt="" loading="lazy" decoding="async" />
        </figure>
        <?php endif; ?>
        <header class="s-block__head">
          <h2 class="c-heading js-fade">施設情報</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-info-map">
          <div class="js-fade">
            <dl class="s-access__list">
              <div class="s-access__row">
                <dt>施設名</dt>
                <dd>カプセル＆サウナ 川崎ビッグ</dd>
              </div>
              <div class="s-access__row">
                <dt>所在地</dt>
                <dd>〒210-0023<br />神奈川県川崎市川崎区小川町15-11</dd>
              </div>
              <div class="s-access__row">
                <dt>電話番号</dt>
                <dd><a href="tel:0442460008">044-246-0008</a></dd>
              </div>
              <div class="s-access__row">
                <dt>営業時間</dt>
                <dd>24時間 年中無休</dd>
              </div>
              <div class="s-access__row">
                <dt>最寄駅</dt>
                <dd>
                  JR川崎駅 東口より徒歩3分<br />
                  京急川崎駅より徒歩5分
                </dd>
              </div>
            </dl>
          </div>

          <div class="s-access__map js-fade">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3247.0!2d139.703!3d35.532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z44Kr44OX44K744Or77yG44K144Km44OK5bed5bSO44OT44OD44Kw!5e0!3m2!1sja!2sjp!4v1700000000000"
              width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="川崎ビッグ周辺地図"></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================== ROUTES ====================== -->
    <section class="s-block s-block--alt" data-section="routes" aria-label="駅からの行き方">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">駅からの行き方</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-route-grid">
          <article class="c-route js-fade">
            <header class="c-route__head">
              <h3 class="c-route__title">JR川崎駅から</h3>
            </header>
            <ol class="c-route__steps">
              <li class="c-route__step">東口を出て、右手方向へ進みます。</li>
              <li class="c-route__step">地下街「アゼリア」を通過します。</li>
              <li class="c-route__step">地上出口36から地上に出て、そのまま直進します。</li>
              <li class="c-route__step">2つ目の交差点「小土呂橋」を右折します。</li>
              <li class="c-route__step">そこから100m進むと、右手に川崎ビッグが見えてきます。</li>
            </ol>
          </article>

          <article class="c-route js-fade">
            <header class="c-route__head">
              <h3 class="c-route__title">京急川崎駅から</h3>
            </header>
            <ol class="c-route__steps">
              <li class="c-route__step">駅を出て、左方向に進みます。</li>
              <li class="c-route__step">最初の通りを右折します。</li>
              <li class="c-route__step">アーケード街（銀座街・銀柳街）を通り抜けます。</li>
              <li class="c-route__step">チネチッタ入口手前を左折します。</li>
              <li class="c-route__step">1つ目の交差点「小土呂橋」を右折します。</li>
              <li class="c-route__step">そこから100m進むと、右手に川崎ビッグが見えてきます。</li>
            </ol>
          </article>
        </div>
      </div>
    </section>

    <!-- ====================== WIDE ACCESS ====================== -->
    <section class="s-block" data-section="wide-access" aria-label="広域アクセス">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">広域からのアクセス</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-facility-list">
          <div class="c-facility-card js-fade">
            <p class="c-facility-card__name">東京駅から</p>
            <p class="c-facility-card__hours">東海道本線 約15分</p>
            <p class="c-facility-card__note">JR川崎駅にて下車</p>
          </div>
          <div class="c-facility-card js-fade">
            <p class="c-facility-card__name">横浜駅から</p>
            <p class="c-facility-card__hours">東海道本線 約8分</p>
            <p class="c-facility-card__note">JR川崎駅にて下車</p>
          </div>
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
