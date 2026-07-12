<?php
/**
 * Page template for /bodycare/
 */
if (!defined('ABSPATH')) exit;
get_header();

// --- ACF: ページヘッダー（帯）---
$kb_page_obj = get_queried_object();
$kb_default_title = ($kb_page_obj && !empty($kb_page_obj->post_title)) ? $kb_page_obj->post_title : 'ボディケア';
$hero_bg    = kb_field_image_url('hero_bg', 'img03-03.jpg');
$hero_title = kb_field('hero_title', $kb_default_title);
$hero_sub   = kb_field('hero_sub', '日々の疲れを、専門の手で。2F・11:00〜翌3:30。');
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
            <li><span aria-current="page">ボディケア</span></li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- ====================== BODY CARE / 足つぼ / スカルプケア ====================== -->
    <section class="s-block" data-section="bodycare-courses" aria-label="ボディケア＆足つぼ＆スカルプケア ご利用料金">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">ボディケア＆足つぼ＆スカルプケア ご利用料金</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <?php $kb_b_bc = kb_option_image_url('banner_bodycare_price', ''); if ($kb_b_bc) : ?>
        <figure class="c-info-banner c-info-banner--full js-fade">
          <img src="<?php echo esc_url($kb_b_bc); ?>" alt="ボディケア＆足つぼ＆スカルプケアのご利用料金" loading="lazy" decoding="async" />
        </figure>
        <?php endif; ?>

        <!-- ボディケア＆足つぼ コース -->
        <h3 class="c-heading js-fade" style="font-size:1.2rem; margin-top:2.5rem; margin-bottom:1rem;">ボディケア＆足つぼ</h3>
        <div class="c-bath-grid">
          <article class="c-bath-card js-fade">
            <div class="c-bath-card__body">
              <h3 class="c-bath-card__title">クイックコース<br /><span class="c-bath-card__meta">20分 / ¥1,980</span></h3>
              <p class="c-bath-card__desc">足裏または部分対応。サクッと疲れをリセットしたい方におすすめ。</p>
            </div>
          </article>
          <article class="c-bath-card js-fade">
            <div class="c-bath-card__body">
              <h3 class="c-bath-card__title">ショートコース<br /><span class="c-bath-card__meta">40分 / ¥3,600</span></h3>
              <p class="c-bath-card__desc">うつぶせまたは足裏中心。仕事終わりのリラックスに。</p>
            </div>
          </article>
          <article class="c-bath-card js-fade">
            <div class="c-bath-card__body">
              <h3 class="c-bath-card__title">レギュラーコース<br /><span class="c-bath-card__meta">60分 / ¥5,300</span></h3>
              <p class="c-bath-card__desc">全身対応。じっくりと身体全体をほぐしたい方に。</p>
            </div>
          </article>
          <article class="c-bath-card js-fade">
            <div class="c-bath-card__body">
              <h3 class="c-bath-card__title">ロングコース<br /><span class="c-bath-card__meta">80分 / ¥7,000</span></h3>
              <p class="c-bath-card__desc">ボディ＋足裏セット推奨。芯までほぐす贅沢な時間。</p>
            </div>
          </article>
          <article class="c-bath-card js-fade">
            <div class="c-bath-card__body">
              <h3 class="c-bath-card__title">VIPコース<br /><span class="c-bath-card__meta">120分 / ¥10,000</span></h3>
              <p class="c-bath-card__desc">ボディ＋足裏セット推奨。最上級のリラクゼーション体験を。</p>
            </div>
          </article>
        </div>

        <!-- スカルプケア＆オイルリンパ -->
        <h3 class="c-heading js-fade" style="font-size:1.2rem; margin-top:3rem; margin-bottom:1rem;">スカルプケア＆オイルリンパ</h3>
        <div class="c-price-list">
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">スカルプコース<span class="c-price-list__sub">20分</span></span>
            <span class="c-price-list__price">¥2,500〜</span>
          </div>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">オイルリンパ 背面コース<span class="c-price-list__sub">40分</span></span>
            <span class="c-price-list__price">¥5,000〜</span>
          </div>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">オイルリンパ 全身コース<span class="c-price-list__sub">60分</span></span>
            <span class="c-price-list__price">¥7,500〜</span>
          </div>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">オイルリンパ VIPコース<span class="c-price-list__sub">80分</span></span>
            <span class="c-price-list__price">¥12,000</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================== AKASURI ====================== -->
    <section class="s-block s-block--alt" data-section="akasuri" aria-label="アカスリご利用料金">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">アカスリご利用料金</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <?php $kb_b_aka = kb_option_image_url('banner_akasuri', ''); if ($kb_b_aka) : ?>
        <figure class="c-info-banner c-info-banner--full js-fade">
          <img src="<?php echo esc_url($kb_b_aka); ?>" alt="アカスリご利用料金" loading="lazy" decoding="async" />
        </figure>
        <?php endif; ?>

        <div class="c-price-list"<?php echo $kb_b_aka ? ' style="margin-top:2rem;"' : ''; ?>>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">
              A コース「基本コース」<span class="c-price-list__sub">30分</span>
              <small style="display:block; margin-top:.3rem; color:var(--color-text-muted); font-weight:400;">①全身アカスリ ②オイル＆海藻トリートメント</small>
            </span>
            <span class="c-price-list__price">¥3,980</span>
          </div>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">
              B コース おすすめ「満足コース」<span class="c-price-list__sub">50分</span>
              <small style="display:block; margin-top:.3rem; color:var(--color-text-muted); font-weight:400;">A＋オイル＆海藻トリートメント</small>
            </span>
            <span class="c-price-list__price">¥6,980</span>
          </div>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">
              C コース「ご褒美コース」<span class="c-price-list__sub">70分</span>
              <small style="display:block; margin-top:.3rem; color:var(--color-text-muted); font-weight:400;">B＋蒸しタオルケア＋かかと角質ケア</small>
            </span>
            <span class="c-price-list__price">¥9,800</span>
          </div>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">
              D コース「VIPコース」<span class="c-price-list__sub">90分</span>
              <small style="display:block; margin-top:.3rem; color:var(--color-text-muted); font-weight:400;">C＋頭皮（スカルプ）ケア＋おしり側面ツボ押し</small>
            </span>
            <span class="c-price-list__price">¥12,000</span>
          </div>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">
              お得なセットコース おすすめ<span class="c-price-list__sub">60分</span>
              <small style="display:block; margin-top:.3rem; color:var(--color-text-muted); font-weight:400;">アカスリ30分＋オイル30分</small>
            </span>
            <span class="c-price-list__price">¥7,980</span>
          </div>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">
              オプション（コース延長）<span class="c-price-list__sub">10分</span>
              <small style="display:block; margin-top:.3rem; color:var(--color-text-muted); font-weight:400;">足の定期メンテナンスに①かかと角質／長時間の運転デスクワークに②おしり側面ツボ押し</small>
            </span>
            <span class="c-price-list__price">¥1,700</span>
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
