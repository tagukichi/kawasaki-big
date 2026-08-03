<?php
/**
 * Front page (TOP)
 *
 * ACF設定:
 *   - 管理画面で固定ページ「ホーム」を作成 → 設定 → 表示設定 → ホームページに指定
 *   - ACF PRO が有効なら「TOP ページ設定」タブから各要素を編集できます
 *   - 未入力フィールドは下記の fallback 値が表示されます
 */
if (!defined('ABSPATH')) exit;
get_header();

// --- ACF: TOP ページ各要素を取得（未設定なら fallback） ---
$fv_slides         = kb_get_fv_slides();
$info_banner       = kb_field_image_url('info_banner_image', 'annai2.png');
$about_heading     = kb_field('about_heading', '日常から、<br />すこし離れて。');
$about_body        = kb_field('about_body', '<p>川崎駅東口から徒歩3分。喧騒を抜けて扉を開けば、そこには時間に縛られない静かな休息が広がります。広々とした大浴場と本格サウナで日々の疲れをほどき、24時間営業のレストランで心まで満たす。深夜の到着でも、早朝の出発でも。あなたの時間に寄り添うカプセルホテル。</p><p>ビジネスの拠点として、旅の途中の一夜として、あるいは自分自身を取り戻す数時間として——。' . esc_html(get_bloginfo('name')) . 'は、この街で過ごすすべての夜と昼に、静けさと温もりを差し出します。</p>');
$about_mascot      = kb_field_image_url('about_mascot', 'masaru_02.png');
$reserve_banner    = kb_field_image_url('reservation_banner_image', 'banner_reserve.png');
$services          = kb_get_services_cards();
$services_icon     = kb_field_image_url('services_icon', '');
$restaurant_head   = kb_field('restaurant_heading', '2F レストラン 24時間営業');
$restaurant_items  = kb_get_restaurant_items();
$news_mascot       = kb_field_image_url('news_mascot', 'masaru_03.png');
?>

    <!-- ====================== HERO ====================== -->
    <section class="s-hero" data-section="hero" aria-label="メインビジュアル">
      <div class="s-hero__slides" aria-hidden="true">
        <?php foreach ($fv_slides as $slide_url) : ?>
        <div class="s-hero__slide" style="background-image: url('<?php echo esc_url($slide_url); ?>');"></div>
        <?php endforeach; ?>
      </div>
      <div class="s-hero__overlay" aria-hidden="true"></div>

      <div class="s-hero__inner l-container">
        <h1 class="s-hero__title js-fade" data-fade-delay="120">
          <span class="s-hero__title-line">川崎駅前、</span>
          <span class="s-hero__title-line">24時間の休息</span>
        </h1>
        <p class="s-hero__sub js-fade" data-fade-delay="320">
          カプセルホテル × サウナ × レストラン<br />
          都市の真ん中で、心と体をととのえる。
        </p>
        <?php if ($reserve_banner) : ?>
        <div class="s-hero__banner js-fade" data-fade-delay="420">
          <a href="<?php echo kb_reserve_url(); ?>" class="s-hero__banner-link" aria-label="ベストレート保証｜ご予約はコチラから">
            <img src="<?php echo esc_url($reserve_banner); ?>"
                 alt="ベストレート保証｜公式サイトからのご予約が一番お得です"
                 decoding="async" />
          </a>
        </div>
        <?php endif; ?>
        <div class="s-hero__cta js-fade" data-fade-delay="480">
          <a href="<?php echo kb_reserve_url(); ?>" class="c-btn c-btn--primary c-btn--lg">ご予約はこちら</a>
          <a href="<?php echo esc_url(home_url('/floor/')); ?>" class="c-btn c-btn--outline c-btn--lg">館内を見る</a>
        </div>
      </div>

      <div class="s-hero__foot" aria-hidden="true">
        <div class="s-hero__scroll">
          <span class="s-hero__scroll-label">SCROLL</span>
          <span class="s-hero__scroll-line"></span>
        </div>
        <div class="s-hero__hours">
          <span>24h</span>
          <span class="s-hero__hours-sep"></span>
          <span>365 days</span>
        </div>
      </div>
    </section>

    <!-- ====================== INFO BAR ====================== -->
    <?php if ($info_banner) : ?>
    <section class="s-info" data-section="info" aria-label="営業情報">
      <div class="l-container">
        <figure class="s-info__banner js-fade">
          <img src="<?php echo esc_url($info_banner); ?>"
               alt="24時間営業（年中無休）／川崎駅前 徒歩3分／TEL <?php echo esc_attr(KAWASAKI_BIG_TEL); ?>／入れ墨禁止（タトゥー含む）"
               loading="lazy" decoding="async" />
        </figure>
      </div>
    </section>
    <?php endif; ?>

    <!-- ====================== ABOUT ====================== -->
    <section class="s-about" data-section="about" id="about" aria-label="コンセプト">
      <div class="l-container s-about__inner">
        <div class="s-about__head">
          <h2 class="c-heading js-fade"><?php echo wp_kses_post($about_heading); ?></h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </div>
        <div class="s-about__cols">
          <?php if ($about_mascot) : ?>
          <div class="s-about__media js-fade">
            <img src="<?php echo esc_url($about_mascot); ?>" alt="" aria-hidden="true" loading="lazy" decoding="async" onerror="this.style.display='none'" />
          </div>
          <?php endif; ?>
          <div class="s-about__body js-fade">
            <?php echo wp_kses_post($about_body); ?>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================== RESERVATION BANNER ====================== -->
    <section class="s-reservation" data-section="reservation" id="reservation" aria-label="ご予約">
      <div class="l-container">
        <a href="<?php echo kb_reserve_url(); ?>" class="s-reservation__banner js-fade">
          <img src="<?php echo esc_url($reserve_banner); ?>"
               alt="ご予約はこちら｜公式サイトご予約が一番お得です（ベストレート保証）"
               width="880" height="220"
               loading="lazy" decoding="async" />
        </a>
      </div>
    </section>

    <!-- ====================== SERVICES (館内のご案内) ====================== -->
    <section class="s-services" data-section="services" aria-label="館内のご案内">
      <div class="l-container">
        <?php if ($services_icon) : ?>
        <figure class="c-section-icon js-fade">
          <img src="<?php echo esc_url($services_icon); ?>" alt="" loading="lazy" decoding="async" />
        </figure>
        <?php endif; ?>
        <header class="s-services__head">
          <h2 class="c-heading js-fade">館内のご案内</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="s-services__grid">
          <?php foreach ($services as $card) : ?>
          <article class="c-card">
            <a href="<?php echo esc_url($card['link_url'] ?: '#'); ?>" class="c-card__link">
              <div class="c-card__media">
                <?php if (!empty($card['image'])) : ?>
                <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async" width="800" height="500" />
                <?php endif; ?>
              </div>
              <div class="c-card__body">
                <?php if (!empty($card['num'])) : ?><span class="c-card__num"><?php echo esc_html($card['num']); ?></span><?php endif; ?>
                <h3 class="c-card__title"><?php echo esc_html($card['title']); ?></h3>
                <?php if (!empty($card['description'])) : ?><p class="c-card__desc"><?php echo esc_html($card['description']); ?></p><?php endif; ?>
                <span class="c-card__more">詳しく見る <span class="c-card__arrow"></span></span>
              </div>
            </a>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ====================== RESTAURANT MENU ====================== -->
    <section class="s-restaurant" data-section="restaurant" id="restaurant" aria-label="レストランメニュー">
      <div class="l-container">
        <header class="s-restaurant__head">
          <h2 class="c-heading js-fade"><?php echo esc_html($restaurant_head); ?></h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <ul class="s-restaurant__list">
          <?php foreach ($restaurant_items as $item) : ?>
          <li class="s-restaurant__item js-fade">
            <figure class="s-restaurant__figure">
              <?php if (!empty($item['image'])) : ?>
              <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['name']); ?>" loading="lazy" decoding="async" width="600" height="600" />
              <?php endif; ?>
            </figure>
            <div class="s-restaurant__caption">
              <?php if (!empty($item['num'])) : ?><span class="s-restaurant__num"><?php echo esc_html($item['num']); ?></span><?php endif; ?>
              <h3 class="s-restaurant__name"><?php echo esc_html($item['name']); ?></h3>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>

    <!-- ====================== NEWS (WP_Query 最新3件) ====================== -->
    <section class="s-news" data-section="news" aria-label="お知らせ">
      <div class="l-container s-news__inner">
        <header class="s-news__head">
          <h2 class="c-heading js-fade">お知らせ</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
          <?php if ($news_mascot) : ?>
          <img src="<?php echo esc_url($news_mascot); ?>" alt="" class="c-mascot c-mascot--sm js-fade" aria-hidden="true" loading="lazy" decoding="async" onerror="this.style.display='none'" />
          <?php endif; ?>
        </header>

        <ul class="s-news__list">
          <?php
          $news_query = new WP_Query([
              'post_type'      => 'post',
              'posts_per_page' => 3,
              'orderby'        => 'date',
              'order'          => 'DESC',
          ]);
          if ($news_query->have_posts()) :
              while ($news_query->have_posts()) : $news_query->the_post();
                  $cats = get_the_category();
                  $cat_name = !empty($cats) ? esc_html($cats[0]->name) : 'お知らせ';
          ?>
            <li class="s-news__item">
              <time class="s-news__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
              <span class="s-news__cat"><?php echo $cat_name; ?></span>
              <a href="<?php the_permalink(); ?>" class="s-news__link"><?php the_title(); ?></a>
            </li>
          <?php
              endwhile;
              wp_reset_postdata();
          else :
          ?>
            <li class="s-news__item">
              <span class="s-news__date">--</span>
              <span class="s-news__cat">お知らせ</span>
              <span class="s-news__link">投稿がまだありません。</span>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </section>

    <!-- ====================== ACCESS ====================== -->
    <section class="s-access" data-section="access" aria-label="アクセス">
      <div class="l-container s-access__inner">
        <div class="s-access__info">
          <h2 class="c-heading js-fade">アクセス</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
          <dl class="s-access__list">
            <div class="s-access__row"><dt>施設名</dt><dd>カプセル＆サウナ <?php bloginfo('name'); ?></dd></div>
            <div class="s-access__row"><dt>所在地</dt><dd>〒210-0023 神奈川県川崎市川崎区小川町15-11</dd></div>
            <div class="s-access__row"><dt>電話番号</dt><dd><a href="tel:<?php echo esc_attr(str_replace('-', '', KAWASAKI_BIG_TEL)); ?>"><?php echo esc_html(KAWASAKI_BIG_TEL); ?></a></dd></div>
            <div class="s-access__row"><dt>営業時間</dt><dd>24時間 年中無休</dd></div>
            <div class="s-access__row"><dt>最寄駅</dt><dd>JR川崎駅 東口 徒歩3分</dd></div>
          </dl>
        </div>
        <div class="s-access__map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3247.886!2d139.7016!3d35.5306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185d2f96267f8b%3A0xf2b1cb55cca4c2a5!2zSlLlt53lt6Trp4U!5e0!3m2!1sja!2sjp!4v1700000000000!5m2!1sja!2sjp"
                  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="アクセスマップ"></iframe>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
