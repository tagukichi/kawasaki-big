<?php
/**
 * Front page (TOP)
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

    <!-- ====================== HERO ====================== -->
    <section class="s-hero" data-section="hero" aria-label="メインビジュアル">
      <div class="s-hero__slides" aria-hidden="true">
        <div class="s-hero__slide" style="background-image: url('https://www.kawasaki-big.com/img/slide/spa-06_2.jpg');"></div>
        <div class="s-hero__slide" style="background-image: url('https://www.kawasaki-big.com/img/slide/restaurant02.jpg');"></div>
        <div class="s-hero__slide" style="background-image: url('https://www.kawasaki-big.com/img/slide/240217_sauna_sl.jpg');"></div>
        <div class="s-hero__slide" style="background-image: url('https://www.kawasaki-big.com/img/slide/slide_fujimi-01.jpg');"></div>
        <div class="s-hero__slide" style="background-image: url('https://www.kawasaki-big.com/img/slide/spa-04.jpg');"></div>
        <div class="s-hero__slide" style="background-image: url('https://www.kawasaki-big.com/img/slide/bestlate02.jpg');"></div>
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
        <div class="s-hero__cta js-fade" data-fade-delay="480">
          <a href="<?php echo kb_reserve_url(); ?>" target="_blank" rel="noopener" class="c-btn c-btn--primary c-btn--lg">ご予約はこちら</a>
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
    <section class="s-info" data-section="info" aria-label="営業情報">
      <div class="l-container">
        <ul class="s-info__list">
          <li class="s-info__item">
            <span class="s-info__main">24時間営業</span>
            <span class="s-info__sub">年中無休</span>
          </li>
          <li class="s-info__item">
            <span class="s-info__main">川崎駅前 徒歩3分</span>
            <span class="s-info__sub">神奈川県川崎市川崎区小川町15-11</span>
          </li>
          <li class="s-info__item">
            <span class="s-info__main">
              <a href="tel:<?php echo esc_attr(str_replace('-', '', KAWASAKI_BIG_TEL)); ?>"><?php echo esc_html(KAWASAKI_BIG_TEL); ?></a>
            </span>
            <span class="s-info__sub">お電話でのご予約・お問い合わせ</span>
          </li>
        </ul>
      </div>
    </section>

    <!-- ====================== ABOUT ====================== -->
    <section class="s-about" data-section="about" id="about" aria-label="コンセプト">
      <div class="l-container s-about__inner">
        <div class="s-about__head">
          <h2 class="c-heading js-fade">日常から、<br />すこし離れて。</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </div>
        <div class="s-about__body js-fade">
          <p>川崎駅東口から徒歩3分。喧騒を抜けて扉を開けば、そこには時間に縛られない静かな休息が広がります。広々とした大浴場と本格サウナで日々の疲れをほどき、24時間営業のレストランで心まで満たす。深夜の到着でも、早朝の出発でも。あなたの時間に寄り添うカプセルホテル。</p>
          <p>ビジネスの拠点として、旅の途中の一夜として、あるいは自分自身を取り戻す数時間として——。<?php bloginfo('name'); ?>は、この街で過ごすすべての夜と昼に、静けさと温もりを差し出します。</p>
        </div>
      </div>
    </section>

    <!-- ====================== RESERVATION BANNER ====================== -->
    <section class="s-reservation" data-section="reservation" id="reservation" aria-label="ご予約">
      <div class="l-container">
        <a href="<?php echo kb_reserve_url(); ?>" target="_blank" rel="noopener" class="s-reservation__banner js-fade">
          <img src="<?php echo kb_img('banner_reserve.png'); ?>"
               alt="ご予約はこちら｜公式サイトご予約が一番お得です（ベストレート保証）"
               width="880" height="220"
               loading="lazy" decoding="async" />
        </a>
      </div>
    </section>

    <!-- ====================== SERVICES (館内のご案内 4×1) ====================== -->
    <section class="s-services" data-section="services" aria-label="館内のご案内">
      <div class="l-container">
        <header class="s-services__head">
          <h2 class="c-heading js-fade">館内のご案内</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="s-services__grid">
          <article class="c-card">
            <a href="<?php echo esc_url(home_url('/spa-sauna/')); ?>" class="c-card__link">
              <div class="c-card__media">
                <img src="https://www.kawasaki-big.com/spa_sauna/img/240217_sauna_s.jpg" alt="浴室・サウナ" loading="lazy" decoding="async" width="800" height="500" />
              </div>
              <div class="c-card__body">
                <span class="c-card__num">01</span>
                <h3 class="c-card__title">浴室・サウナ</h3>
                <p class="c-card__desc">7つのお風呂と本格フィンランド式サウナで芯から、ととのう。</p>
                <span class="c-card__more">詳しく見る <span class="c-card__arrow"></span></span>
              </div>
            </a>
          </article>

          <article class="c-card">
            <a href="<?php echo esc_url(home_url('/restaurant/')); ?>" class="c-card__link">
              <div class="c-card__media">
                <img src="<?php echo kb_img('230304_restaurant24h_am4-5clean.jpg'); ?>" alt="2F レストラン 24時間営業" loading="lazy" decoding="async" width="800" height="500" />
              </div>
              <div class="c-card__body">
                <span class="c-card__num">02</span>
                <h3 class="c-card__title">2F レストラン 24時間営業</h3>
                <p class="c-card__desc">和・洋・中華、四季折々の100種類以上のメニュー。</p>
                <span class="c-card__more">詳しく見る <span class="c-card__arrow"></span></span>
              </div>
            </a>
          </article>

          <article class="c-card">
            <a href="<?php echo esc_url(home_url('/bodycare/')); ?>" class="c-card__link">
              <div class="c-card__media">
                <img src="https://www.kawasaki-big.com/floor/img/bodycare02.jpg" alt="ボディケア" loading="lazy" decoding="async" width="800" height="500" />
              </div>
              <div class="c-card__body">
                <span class="c-card__num">03</span>
                <h3 class="c-card__title">ボディケア</h3>
                <p class="c-card__desc">日々の疲れを、専門の手で。2F・12:00〜翌3:30。</p>
                <span class="c-card__more">詳しく見る <span class="c-card__arrow"></span></span>
              </div>
            </a>
          </article>

          <article class="c-card">
            <a href="<?php echo esc_url(home_url('/floor/')); ?>" class="c-card__link">
              <div class="c-card__media">
                <img src="https://www.kawasaki-big.com/floor/img/floorguide.jpg" alt="館内案内" loading="lazy" decoding="async" width="800" height="500" />
              </div>
              <div class="c-card__body">
                <span class="c-card__num">04</span>
                <h3 class="c-card__title">館内案内</h3>
                <p class="c-card__desc">7フロアにわたる、休息のためのすべて。</p>
                <span class="c-card__more">詳しく見る <span class="c-card__arrow"></span></span>
              </div>
            </a>
          </article>
        </div>
      </div>
    </section>

    <!-- ====================== RESTAURANT MENU (4×1) ====================== -->
    <section class="s-restaurant" data-section="restaurant" id="restaurant" aria-label="レストランメニュー">
      <div class="l-container">
        <header class="s-restaurant__head">
          <h2 class="c-heading js-fade">2F レストラン 24時間営業</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <ul class="s-restaurant__list">
          <li class="s-restaurant__item js-fade">
            <figure class="s-restaurant__figure">
              <img src="<?php echo kb_img('251117aburamazesoba.jxl.jpg'); ?>" alt="油混ぜそば" loading="lazy" decoding="async" width="600" height="600" />
            </figure>
            <div class="s-restaurant__caption">
              <span class="s-restaurant__num">01</span>
              <h3 class="s-restaurant__name">油混ぜそば</h3>
            </div>
          </li>
          <li class="s-restaurant__item js-fade">
            <figure class="s-restaurant__figure">
              <img src="<?php echo kb_img('251117ikaten.jpg'); ?>" alt="やわらかイカ天" loading="lazy" decoding="async" width="600" height="600" />
            </figure>
            <div class="s-restaurant__caption">
              <span class="s-restaurant__num">02</span>
              <h3 class="s-restaurant__name">やわらかイカ天</h3>
            </div>
          </li>
          <li class="s-restaurant__item js-fade">
            <figure class="s-restaurant__figure">
              <img src="<?php echo kb_img('220804_02.JPG'); ?>" alt="がぶのみヤクルト VS ヤクマンV" loading="lazy" decoding="async" width="600" height="600" />
            </figure>
            <div class="s-restaurant__caption">
              <span class="s-restaurant__num">03</span>
              <h3 class="s-restaurant__name">がぶのみヤクルト VS ヤクマンV</h3>
            </div>
          </li>
          <li class="s-restaurant__item js-fade">
            <figure class="s-restaurant__figure">
              <img src="<?php echo kb_img('251117ikaten.jpg'); ?>" alt="（画像準備中）" loading="lazy" decoding="async" width="600" height="600" />
            </figure>
            <div class="s-restaurant__caption">
              <span class="s-restaurant__num">04</span>
              <h3 class="s-restaurant__name">（画像準備中）</h3>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- ====================== NEWS (WP_Query 最新3件) ====================== -->
    <section class="s-news" data-section="news" aria-label="お知らせ">
      <div class="l-container s-news__inner">
        <header class="s-news__head">
          <h2 class="c-heading js-fade">お知らせ</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
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
