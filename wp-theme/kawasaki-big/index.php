<?php
/**
 * Fallback / Blog index
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

    <section class="s-page-hero" data-section="page-hero" aria-label="ページ見出し">
      <div class="s-page-hero__bg" style="background-image: url('https://www.kawasaki-big.com/img/slide/spa-04.jpg');" aria-hidden="true"></div>
      <div class="s-page-hero__overlay" aria-hidden="true"></div>
      <div class="l-container s-page-hero__inner">
        <h1 class="s-page-hero__title js-fade"><?php
          if (is_search()) printf('「%s」の検索結果', esc_html(get_search_query()));
          elseif (is_category() || is_archive()) single_cat_title('');
          else echo 'お知らせ一覧';
        ?></h1>
        <nav aria-label="パンくず">
          <ol class="c-breadcrumb js-fade">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
            <li><span aria-current="page">お知らせ</span></li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="s-news" data-section="news" aria-label="お知らせ">
      <div class="l-container s-news__inner">
        <ul class="s-news__list">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li class="s-news__item">
              <time class="s-news__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
              <?php $cats = get_the_category(); if (!empty($cats)) : ?>
                <span class="s-news__cat"><?php echo esc_html($cats[0]->name); ?></span>
              <?php endif; ?>
              <a href="<?php the_permalink(); ?>" class="s-news__link"><?php the_title(); ?></a>
            </li>
          <?php endwhile; else : ?>
            <li class="s-news__item"><span class="s-news__link">投稿がまだありません。</span></li>
          <?php endif; ?>
        </ul>

        <div style="text-align:center; margin-top:2rem;">
          <?php the_posts_pagination(['mid_size' => 2]); ?>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
