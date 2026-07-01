<?php
/**
 * Page template for /spa_sauna/
 */
if (!defined('ABSPATH')) exit;
get_header();

// --- ACF: ページヘッダー（帯）---
$kb_page_obj = get_queried_object();
$kb_default_title = ($kb_page_obj && !empty($kb_page_obj->post_title)) ? $kb_page_obj->post_title : '浴室・サウナ';
$hero_bg    = kb_field_image_url('hero_bg', 'IMG_0218.JPG');
$hero_title = kb_field('hero_title', $kb_default_title);
$hero_sub   = kb_field('hero_sub', '6つのお風呂と2つのサウナ。芯から、ととのえる。');
?>
<!-- ====================== PAGE HERO ====================== -->
    <section class="s-page-hero" data-section="page-hero" aria-label="ページ見出し">
      <div class="s-page-hero__bg" style="background-image: url('<?php echo esc_url($hero_bg); ?>');" aria-hidden="true"></div>
      <div class="s-page-hero__overlay" aria-hidden="true"></div>
      <div class="l-container s-page-hero__inner">
        <h1 class="s-page-hero__title js-fade"><?php echo esc_html($hero_title); ?></h1>
        <p class="s-page-hero__sub js-fade"><?php echo esc_html($hero_sub); ?></p>
        <nav aria-label="パンくず">
          <ol class="c-breadcrumb js-fade">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
            <li><span aria-current="page">浴室・サウナ</span></li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- ====================== INTRO ====================== -->
    <section class="s-block" data-section="intro" aria-label="イントロ">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">芯から、ととのう。</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>
        <p class="s-block__lead js-fade">
          身体の芯まで温まり、明日への活力を蘇らせる。多彩な6種のお風呂と本格サウナで、あなたの「ととのう」をお届けします。
        </p>
      </div>
    </section>

    <!-- ====================== BATH LIST ====================== -->
    <section class="s-block s-block--alt" data-section="bath-list" aria-label="お風呂一覧">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">6つのお風呂</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-bath-grid">

          <article class="c-bath-card js-fade">
            <div class="c-bath-card__media">
              <img src="<?php echo kb_img('0T8A2705.JPG'); ?>" alt="富士見風呂の様子" loading="lazy" decoding="async" width="800" height="600" />
            </div>
            <div class="c-bath-card__body">
              <p class="c-bath-card__num">01</p>
              <h3 class="c-bath-card__title">富士見風呂</h3>
              <p class="c-bath-card__desc">
                富士山と河津桜を菜の花畑の中から眺めるイメージのお風呂です。のんびり浸かって身体を芯から温めて、疲労回復、ストレス解消、手足を温めてください。
              </p>
            </div>
          </article>

          <article class="c-bath-card js-fade">
            <div class="c-bath-card__media">
              <img src="<?php echo kb_img('IMG_5938.jpg'); ?>" alt="バイブラバスの様子" loading="lazy" decoding="async" width="800" height="600" />
            </div>
            <div class="c-bath-card__body">
              <p class="c-bath-card__num">02</p>
              <h3 class="c-bath-card__title">バイブラバス</h3>
              <p class="c-bath-card__desc">
                浴槽の底から発生する大量の泡が浴槽全体に広がるお風呂です。身体を芯から温めて血行を促進するので疲労回復、ストレス解消などにも効果的です。
              </p>
            </div>
          </article>

          <article class="c-bath-card js-fade">
            <div class="c-bath-card__media">
              <img src="<?php echo kb_img('IMG_5957.jpg'); ?>" alt="薬風呂の様子" loading="lazy" decoding="async" width="800" height="600" />
            </div>
            <div class="c-bath-card__body">
              <p class="c-bath-card__num">03</p>
              <h3 class="c-bath-card__title">薬風呂</h3>
              <p class="c-bath-card__desc">
                古くから入浴に利用されてきた生薬を使用したお風呂です。ポカポカと身体の芯まで温まり、明日への活力を蘇らせます。
              </p>
            </div>
          </article>

          <article class="c-bath-card js-fade">
            <div class="c-bath-card__media">
              <img src="<?php echo kb_img('IMG_0253.JPG'); ?>" alt="ラドン風呂の様子" loading="lazy" decoding="async" width="800" height="600" />
            </div>
            <div class="c-bath-card__body">
              <p class="c-bath-card__num">04</p>
              <h3 class="c-bath-card__title">ラドン風呂</h3>
              <p class="c-bath-card__desc">
                ラジウム鉱石が自然崩壊することにより発生するアルファ線を利用したお風呂です。入湯中、ラドンの空気イオンを十分に吸引することが、疲労回復、肩こり解消などに効果的です。
              </p>
              <p class="c-bath-card__note">
                入浴時間 5〜10分 / 1日2回まで / 入浴間隔は2時間以上をお取りください。
              </p>
            </div>
          </article>

          <article class="c-bath-card js-fade">
            <div class="c-bath-card__media">
              <img src="<?php echo kb_img('IMG_5929.jpg'); ?>" alt="日替り風呂の様子" loading="lazy" decoding="async" width="800" height="600" />
            </div>
            <div class="c-bath-card__body">
              <p class="c-bath-card__num">05</p>
              <h3 class="c-bath-card__title">日替り風呂</h3>
              <p class="c-bath-card__desc">
                その日ごとの趣を楽しめる特別湯。夜8時〜翌朝11時の間は、身体に優しく香り立つ酒風呂になります。
              </p>
            </div>
          </article>

          <article class="c-bath-card js-fade">
            <div class="c-bath-card__media">
              <img src="<?php echo kb_img('IMG_5917.jpg'); ?>" alt="水風呂の様子" loading="lazy" decoding="async" width="800" height="600" />
            </div>
            <div class="c-bath-card__body">
              <p class="c-bath-card__num">06</p>
              <h3 class="c-bath-card__title">水風呂</h3>
              <p class="c-bath-card__desc">
                サウナ後のキリッと冷たい水風呂で、ととのいの瞬間を。火照った身体を一気にクールダウンさせ、深い静けさへと導きます。
              </p>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- ====================== SAUNA FEATURE ====================== -->
    <section class="s-block" data-section="sauna" aria-label="サウナ">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">本格フィンランド式サウナ</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-banner js-fade">
          <div class="c-banner__media">
            <img src="<?php echo kb_img('IMG_0218.JPG'); ?>" alt="本格フィンランド式サウナの内観" loading="lazy" decoding="async" width="1200" height="800" />
          </div>
          <div class="c-banner__body">
            <h3 class="c-banner__title">朝も、夜も。<br />ととのう時間を。</h3>
            <p class="c-banner__desc">
              サウナの発汗効果により、朝入れば1日のウォーミングアップに、夜入れば安眠のために。ある時はストレス解消、疲労回復、減量に。あなたの目的に寄り添う、本格フィンランド式サウナをご用意しております。
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================== INFO BANNER（virus.jpg を1枚どーんと） ====================== -->
    <section class="s-block" data-section="info-banner" aria-label="お知らせ">
      <div class="l-container">
        <figure class="c-info-banner c-info-banner--full js-fade">
          <img src="https://www.kawasaki-big.com/spa_sauna/img/virus.jpg"
               alt="新型コロナウイルス感染症対策について" loading="lazy" decoding="async" />
        </figure>
      </div>
    </section>

    <!-- ====================== NOTES ====================== -->
    <section class="s-block s-block--alt" data-section="notes" aria-label="ご利用上の注意">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">ご利用にあたって</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-notes js-fade">
          <p class="c-notes__title">ご注意</p>
          <ul class="c-notes__list">
            <li>大浴場・サウナは地下2階（B2F）にございます。</li>
            <li>11:00〜12:00 は清掃時間となります。ご利用いただけません。</li>
            <li>ラドン風呂は入浴時間5〜10分、1日2回まで（入浴間隔2時間以上）でお願いいたします。</li>
            <li>カプセル宿泊のお客様はサウナを無料でご利用いただけます。</li>
            <li>タトゥー・刺青のあるお客様のご入浴はご遠慮いただいております。</li>
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
