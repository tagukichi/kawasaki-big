<?php
/**
 * Page template for /hours_prices/
 */
if (!defined('ABSPATH')) exit;
get_header();

// --- ACF: ページヘッダー（帯）---
$kb_page_obj = get_queried_object();
$kb_default_title = ($kb_page_obj && !empty($kb_page_obj->post_title)) ? $kb_page_obj->post_title : '営業時間・料金';
$hero_bg    = kb_field_image_url('hero_bg', 'IMG_5938.jpg');
$hero_title = kb_field('hero_title', $kb_default_title);
$hero_sub   = kb_field('hero_sub', '24時間年中無休。あなたの時間に合わせた豊富なプラン。');
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
            <li><span aria-current="page">営業時間・料金</span></li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- ====================== HOURS ====================== -->
    <section class="s-block" data-section="hours" aria-label="営業時間">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">営業時間</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-facility-list">
          <div class="c-facility-card js-fade">
            <p class="c-facility-card__name">カプセル</p>
            <p class="c-facility-card__hours">PM 3:00 — AM 10:00</p>
            <p class="c-facility-card__note">早朝プラン: AM 5:00 — PM 6:00</p>
          </div>
          <div class="c-facility-card js-fade">
            <p class="c-facility-card__name">レストラン</p>
            <p class="c-facility-card__hours">24時間営業</p>
            <p class="c-facility-card__note">5:00〜9:30 はモーニングメニュー</p>
          </div>
          <div class="c-facility-card js-fade">
            <p class="c-facility-card__name">ボディケア</p>
            <p class="c-facility-card__hours">AM 11:00 — AM 3:30</p>
            <p class="c-facility-card__note">2F フロア</p>
          </div>
          <div class="c-facility-card js-fade">
            <p class="c-facility-card__name">大浴場 / サウナ</p>
            <p class="c-facility-card__hours">24時間ご利用可能</p>
            <p class="c-facility-card__note">11:00〜12:00 は清掃時間</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================== SAUNA PRICE TABLE ====================== -->
    <section class="s-block s-block--alt" data-section="sauna-price" aria-label="サウナ利用料金">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">サウナ利用料金</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-price-table__wrap js-fade">
          <table class="c-price-table">
            <caption>サウナ料金一覧</caption>
            <thead>
              <tr>
                <th scope="col">プラン</th>
                <th scope="col">時間帯</th>
                <th scope="col">料金</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="c-price-table__plan">普通サウナ</td>
                <td>9:00 – 23:00</td>
                <td class="c-price-table__price">¥2,200</td>
              </tr>
              <tr>
                <td class="c-price-table__plan">深夜追加</td>
                <td>23:00 – 11:00</td>
                <td class="c-price-table__price">+¥900</td>
              </tr>
              <tr>
                <td class="c-price-table__plan">早朝サウナ</td>
                <td>5:00 – 18:00 ※10:00までの入館</td>
                <td class="c-price-table__price">¥1,750</td>
              </tr>
              <tr>
                <td class="c-price-table__plan">タイムサービス</td>
                <td>10:00 – 16:00 ※14:00までの入館</td>
                <td class="c-price-table__price">¥1,100</td>
              </tr>
              <tr>
                <td class="c-price-table__plan">3時間タイムサービス</td>
                <td>24時間受付</td>
                <td class="c-price-table__price">¥1,100</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ====================== TICKETS ====================== -->
    <section class="s-block" data-section="tickets" aria-label="回数券">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">回数券</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-price-list">
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">サウナ 6回分</span>
            <span class="c-price-list__price">¥11,000</span>
          </div>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">早朝 11回分</span>
            <span class="c-price-list__price">¥15,000</span>
          </div>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">タイムサービス 11回分</span>
            <span class="c-price-list__price">¥11,000</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================== BODYCARE PRICE ====================== -->
    <section class="s-block s-block--alt" data-section="bodycare-price" aria-label="ボディケア料金">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">ボディケア料金</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-price-list">
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">クイック<span class="c-price-list__sub">20分</span></span>
            <span class="c-price-list__price">¥1,980</span>
          </div>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">ショート<span class="c-price-list__sub">40分</span></span>
            <span class="c-price-list__price">¥3,600</span>
          </div>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">レギュラー<span class="c-price-list__sub">60分</span></span>
            <span class="c-price-list__price">¥5,300</span>
          </div>
          <div class="c-price-list__item js-fade">
            <span class="c-price-list__label">オイルコース<span class="c-price-list__sub">20分〜</span></span>
            <span class="c-price-list__price">¥2,500〜</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================== AKASURI ====================== -->
    <section class="s-block" data-section="akasuri" aria-label="アカスリ">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">アカスリ（韓国式）</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-price-list">
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

    <!-- ====================== BENEFITS ====================== -->
    <section class="s-block s-block--alt" data-section="benefits" aria-label="特典・割引">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">特典・割引</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-notes js-fade">
          <p class="c-notes__title">特典</p>
          <ul class="c-notes__list">
            <li>カプセル宿泊のお客様：サウナ無料でご利用いただけます。</li>
            <li>駐車場ご利用のお客様：駐車券提示で入館料 500円OFF。</li>
            <li>※サービスコース・予約済みのお客様は割引対象外となります。</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ====================== PAYMENT ====================== -->
    <section class="s-block" data-section="payment" aria-label="お支払い方法">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">お支払い方法</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-notes js-fade">
          <ul class="c-notes__list">
            <li>現金</li>
            <li>各種クレジットカード（VISA / Mastercard / JCB / AMEX / Diners ほか）</li>
            <li>各種電子マネー・QRコード決済</li>
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
