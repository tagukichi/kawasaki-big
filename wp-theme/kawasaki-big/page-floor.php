<?php
/**
 * Page template for /floor/
 */
if (!defined('ABSPATH')) exit;
get_header();
?>
<section class="s-page-hero" data-section="page-hero" aria-label="ページ見出し">
      <div class="s-page-hero__bg" style="background-image: url('img/img03-03.jpg');" aria-hidden="true"></div>
      <div class="s-page-hero__overlay" aria-hidden="true"></div>
      <div class="l-container s-page-hero__inner">
        <h1 class="s-page-hero__title js-fade">館内案内</h1>
        <p class="s-page-hero__sub js-fade">7フロアにわたる、休息のためのすべて。</p>
        <nav aria-label="パンくず">
          <ol class="c-breadcrumb js-fade">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
            <li><span aria-current="page">館内案内</span></li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- ====================== FLOOR GUIDE BANNER ====================== -->
    <section class="s-block" data-section="floor-guide" aria-label="フロアガイド">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">フロアガイド</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <figure class="c-info-banner c-info-banner--full js-fade">
          <img src="https://www.kawasaki-big.com/floor/img/floorguide.jpg"
               alt="館内フロアガイド" loading="lazy" decoding="async" />
        </figure>
      </div>
    </section>

    <!-- ====================== FLOOR TIMELINE + FACILITY HIGHLIGHTS ====================== -->
    <section class="s-block s-block--alt" data-section="floor-timeline" aria-label="フロア構成・各施設のご紹介">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">フロア構成</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-floor-timeline">

          <div class="c-floor-row js-fade">
            <div class="c-floor-row__label">
              <span class="c-floor-row__floor">3F – 7F</span>
            </div>
            <div class="c-floor-row__body">
              <h3 class="c-floor-row__title">カプセルルーム</h3>
              <p class="c-floor-row__desc">
                首都圏最大級、358室のカプセルルーム。5・6階は禁煙フロア、4階にはビールの自動販売機を完備。出張、深夜の休息、観光の拠点として、お一人様でも安心してご利用いただけます。
              </p>
              <div class="c-floor-row__media">
                <img src="https://www.kawasaki-big.com/floor/img/capsule01.jpg"
                     alt="3F〜7F カプセルルーム" loading="lazy" decoding="async" />
              </div>
            </div>
          </div>

          <div class="c-floor-row js-fade">
            <div class="c-floor-row__label">
              <span class="c-floor-row__floor">2F</span>
            </div>
            <div class="c-floor-row__body">
              <h3 class="c-floor-row__title">レストラン</h3>
              <p class="c-floor-row__desc">
                和・洋・中華、四季折々の100種類以上のメニューを24時間ご提供。深夜の一杯から早朝のモーニングまで、いつでもお楽しみいただけます。
              </p>
              <div class="c-floor-row__media">
                <img src="https://www.kawasaki-big.com/floor/img/restaurant01.jpg"
                     alt="2F レストラン" loading="lazy" decoding="async" />
              </div>
            </div>
          </div>

          <div class="c-floor-row js-fade">
            <div class="c-floor-row__label">
              <span class="c-floor-row__floor">2F</span>
            </div>
            <div class="c-floor-row__body">
              <h3 class="c-floor-row__title">ボディケア</h3>
              <p class="c-floor-row__desc">
                熟練のスタッフによるボディケア・足つぼ・スカルプケア・オイルリンパ。サウナ後の身体をやさしくほぐして、深い休息へと導きます。
              </p>
              <div class="c-floor-row__media">
                <img src="https://www.kawasaki-big.com/floor/img/bodycare02.jpg"
                     alt="2F ボディケア" loading="lazy" decoding="async" />
              </div>
            </div>
          </div>

          <div class="c-floor-row js-fade">
            <div class="c-floor-row__label">
              <span class="c-floor-row__floor">2F / 1F / B1F</span>
            </div>
            <div class="c-floor-row__body">
              <h3 class="c-floor-row__title">休憩室</h3>
              <p class="c-floor-row__desc">
                リクライニングチェアでくつろげる休憩室を3フロアに完備。お好みに合わせてお選びいただけます。<br />
                <strong>2F：禁煙</strong> ／ <strong>1F：喫煙</strong> ／ <strong>B1F：禁煙</strong>
              </p>
              <div class="c-floor-row__media">
                <img src="https://www.kawasaki-big.com/floor/img/restroom.jpg"
                     alt="休憩室" loading="lazy" decoding="async" />
              </div>
            </div>
          </div>

          <div class="c-floor-row js-fade">
            <div class="c-floor-row__label">
              <span class="c-floor-row__floor">B2F</span>
            </div>
            <div class="c-floor-row__body">
              <h3 class="c-floor-row__title">大浴場 / サウナ</h3>
              <p class="c-floor-row__desc">
                7つのお風呂と本格フィンランド式サウナ、水風呂を備えた、川崎ビッグの中心。富士見風呂、薬風呂、ラドン風呂など、多彩な湯処で「ととのう」体験を。
              </p>
              <div class="c-floor-row__media">
                <img src="https://www.kawasaki-big.com/floor/img/spa.jpg"
                     alt="B2F 大浴場 / サウナ" loading="lazy" decoding="async" />
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ====================== NOTES ====================== -->
    <section class="s-block" data-section="notes" aria-label="ご案内">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">ご利用にあたって</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-notes js-fade">
          <p class="c-notes__title">ご注意</p>
          <ul class="c-notes__list">
            <li>カプセルご宿泊のお客様は、サウナを無料でご利用いただけます。</li>
            <li>大浴場・サウナの清掃時間は 11:00〜12:00 です。この時間帯はご利用いただけません。</li>
            <li>ボディケアは 11:00〜翌3:30、レストランは 24時間営業です。</li>
            <li>5・6階は禁煙フロア、その他のカプセルフロアでは喫煙可となっております。</li>
            <li>タトゥー・刺青のあるお客様の大浴場ご利用はご遠慮いただいております。</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ====================== RESERVATION BANNER ====================== -->
    <section class="s-reservation" data-section="reservation" id="reservation" aria-label="ご予約">
      <div class="l-container">
        <a href="https://www5.489pro.com/asp/489/menu.asp?id=14000064&amp;lan=JPN"
           class="s-reservation__banner js-fade"
           target="_blank" rel="noopener">
          <!-- TODO: 予約バナー画像を差し替えてください -->
          <img src="<?php echo kb_img('banner_reserve.png'); ?>"
               alt="ご予約はこちら｜公式サイトご予約が一番お得です（ベストレート保証）"
               width="880" height="220"
               loading="lazy" decoding="async" />
        </a>
      </div>
    </section>

<?php get_footer(); ?>
