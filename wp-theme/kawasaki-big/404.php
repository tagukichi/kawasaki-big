<?php
/**
 * 404
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

    <section class="s-page-hero" data-section="page-hero" aria-label="ページ見出し">
      <div class="s-page-hero__bg" style="background-image: url('https://www.kawasaki-big.com/img/slide/spa-06_2.jpg');" aria-hidden="true"></div>
      <div class="s-page-hero__overlay" aria-hidden="true"></div>
      <div class="l-container s-page-hero__inner">
        <h1 class="s-page-hero__title js-fade">404 - ページが見つかりません</h1>
        <nav aria-label="パンくず">
          <ol class="c-breadcrumb js-fade">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
            <li><span aria-current="page">404</span></li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="s-block" data-section="404">
      <div class="l-container" style="text-align:center;">
        <p style="margin-bottom:2rem;">お探しのページは見つかりませんでした。<br />URLをご確認のうえ、もう一度お試しください。</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn c-btn--primary c-btn--lg">ホームへ戻る</a>
        <img src="<?php echo kb_img('masaru_01.png'); ?>" alt="" class="c-mascot c-mascot--center" aria-hidden="true" loading="lazy" decoding="async" onerror="this.style.display='none'" />
      </div>
    </section>

<?php get_footer(); ?>
