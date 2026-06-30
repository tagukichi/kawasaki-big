<?php
/**
 * Single post (お知らせ詳細)
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

    <!-- ====================== PAGE HERO ====================== -->
    <section class="s-page-hero" data-section="page-hero" aria-label="ページ見出し">
      <div class="s-page-hero__bg" style="background-image: url('<?php echo kb_img('IMG_0218.JPG'); ?>');" aria-hidden="true"></div>
      <div class="s-page-hero__overlay" aria-hidden="true"></div>
      <div class="l-container s-page-hero__inner">
        <h1 class="s-page-hero__title js-fade">お知らせ</h1>
        <nav aria-label="パンくず">
          <ol class="c-breadcrumb js-fade">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
            <li><a href="<?php echo esc_url(home_url('/#news')); ?>">お知らせ</a></li>
            <li><span aria-current="page"><?php the_title(); ?></span></li>
          </ol>
        </nav>
      </div>
    </section>

    <?php while (have_posts()) : the_post(); ?>
    <article class="s-article" data-section="article">
      <div class="l-container s-article__inner">

        <header class="s-article__head">
          <div class="s-article__meta">
            <time class="s-article__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
            <?php
            $cats = get_the_category();
            if (!empty($cats)) :
              foreach ($cats as $cat) : ?>
                <span class="s-article__cat"><?php echo esc_html($cat->name); ?></span>
            <?php endforeach;
            endif; ?>
          </div>
          <h1 class="s-article__title"><?php the_title(); ?></h1>
        </header>

        <div class="s-article__body">
          <?php the_content(); ?>
        </div>

        <footer class="s-article__foot">
          <a href="<?php echo esc_url(home_url('/#news')); ?>" class="c-btn c-btn--outline">お知らせ一覧へ戻る</a>
        </footer>

      </div>
    </article>
    <?php endwhile; ?>

    <!-- ====================== RESERVATION BANNER ====================== -->
    <section class="s-reservation" data-section="reservation" id="reservation" aria-label="ご予約">
      <div class="l-container">
        <a href="<?php echo kb_reserve_url(); ?>" class="s-reservation__banner js-fade">
          <img src="<?php echo kb_img('banner_reserve.png'); ?>"
               alt="ご予約はこちら｜公式サイトご予約が一番お得です（ベストレート保証）"
               width="880" height="220"
               loading="lazy" decoding="async" />
        </a>
      </div>
    </section>

<?php get_footer(); ?>
