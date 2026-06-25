<?php
/**
 * Generic page template (固定ページ fallback)
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

    <section class="s-page-hero" data-section="page-hero" aria-label="ページ見出し">
      <div class="s-page-hero__bg" style="background-image: url('<?php echo kb_img('IMG_0218.JPG'); ?>');" aria-hidden="true"></div>
      <div class="s-page-hero__overlay" aria-hidden="true"></div>
      <div class="l-container s-page-hero__inner">
        <h1 class="s-page-hero__title js-fade"><?php the_title(); ?></h1>
        <nav aria-label="パンくず">
          <ol class="c-breadcrumb js-fade">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
            <li><span aria-current="page"><?php the_title(); ?></span></li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="s-block" data-section="page-content">
      <div class="l-container">
        <?php while (have_posts()) : the_post(); ?>
          <div class="c-policy"><?php the_content(); ?></div>
        <?php endwhile; ?>
      </div>
    </section>

<?php get_footer(); ?>
