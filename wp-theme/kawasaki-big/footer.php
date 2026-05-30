<?php
/**
 * Common footer
 */
if (!defined('ABSPATH')) exit;
?>
  </main>

  <!-- ====================== FOOTER ====================== -->
  <footer class="l-footer" data-section="footer" aria-label="フッター">

    <div class="l-container l-footer__inner">
      <!-- 左：ブランド + 所在地 + SNS -->
      <div class="l-footer__brand">
        <p class="l-footer__logo-jp"><?php bloginfo('name'); ?></p>
        <p class="l-footer__logo-en">CAPSULE &amp; SAUNA</p>
        <p class="l-footer__lead">カプセル＆サウナ <?php bloginfo('name'); ?></p>

        <address class="l-footer__addr">
          〒210-0023<br />
          神奈川県川崎市川崎区<br />小川町15-11<br />
          <a href="tel:<?php echo esc_attr(str_replace('-', '', KAWASAKI_BIG_TEL)); ?>">TEL <?php echo esc_html(KAWASAKI_BIG_TEL); ?></a><br />
          <span>24時間 年中無休</span>
        </address>

        <ul class="l-footer__sns" aria-label="SNS">
          <li>
            <a href="https://www.facebook.com/kawasakibig/" target="_blank" rel="noopener" aria-label="Facebook" class="l-footer__sns-link">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
                <path fill="currentColor" d="M13.5 22v-8h2.7l.4-3.1h-3.1V8.9c0-.9.3-1.5 1.6-1.5h1.7V4.6c-.3 0-1.3-.1-2.5-.1-2.5 0-4.1 1.5-4.1 4.2v2.3H7.5V14h2.7v8h3.3z"/>
              </svg>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/kwskbig/" target="_blank" rel="noopener" aria-label="Instagram" class="l-footer__sns-link">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
                <path fill="currentColor" d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.3 2.2.4.6.2 1 .5 1.4.9.4.4.7.9.9 1.4.2.4.4 1 .4 2.2.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.3 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.9.7-1.4.9-.4.2-1 .4-2.2.4-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.3-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.9-.9-1.4-.2-.4-.4-1-.4-2.2-.1-1.2-.1-1.6-.1-4.8s0-3.6.1-4.8c.1-1.2.3-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.9-.7 1.4-.9.4-.2 1-.4 2.2-.4 1.2-.1 1.6-.1 4.8-.1M12 0C8.7 0 8.3 0 7.1.1 5.8.1 5 .3 4.2.6c-.8.3-1.5.7-2.2 1.4C1.3 2.7.9 3.4.6 4.2.3 5 .1 5.8.1 7.1 0 8.3 0 8.7 0 12s0 3.7.1 4.9c.1 1.3.3 2.1.6 2.9.3.8.7 1.5 1.4 2.2.7.7 1.4 1.1 2.2 1.4.8.3 1.6.5 2.9.6 1.2.1 1.6.1 4.9.1s3.7 0 4.9-.1c1.3-.1 2.1-.3 2.9-.6.8-.3 1.5-.7 2.2-1.4.7-.7 1.1-1.4 1.4-2.2.3-.8.5-1.6.6-2.9.1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.1-1.3-.3-2.1-.6-2.9-.3-.8-.7-1.5-1.4-2.2C21.3 1.3 20.6.9 19.8.6 19 .3 18.2.1 16.9.1 15.7 0 15.3 0 12 0z"/>
                <path fill="currentColor" d="M12 5.8c-3.4 0-6.2 2.8-6.2 6.2s2.8 6.2 6.2 6.2 6.2-2.8 6.2-6.2-2.8-6.2-6.2-6.2zm0 10.2c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"/>
                <circle fill="currentColor" cx="18.4" cy="5.6" r="1.4"/>
              </svg>
            </a>
          </li>
          <li>
            <a href="https://page.line.me/522mzpgr?openQrModal=true" target="_blank" rel="noopener" aria-label="LINE" class="l-footer__sns-link">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
                <path fill="currentColor" d="M19.4 11c0-3.3-3.3-6-7.4-6S4.6 7.7 4.6 11c0 3 2.6 5.5 6.2 6 .2.1.5.2.6.4.1.2.1.5 0 .7l-.1.6c0 .2-.1.7.6.4.7-.3 4.1-2.4 5.6-4.1 1.1-1.1 1.9-2.4 1.9-4zM9.3 12.8H7.8c-.2 0-.4-.2-.4-.4V9.5c0-.2.2-.4.4-.4s.4.2.4.4V12h1.1c.2 0 .4.2.4.4 0 .2-.2.4-.4.4zm1.6-.4c0 .2-.2.4-.4.4s-.4-.2-.4-.4V9.5c0-.2.2-.4.4-.4s.4.2.4.4v2.9zm3.5 0c0 .2-.1.3-.3.4h-.4l-1.5-2v1.6c0 .2-.2.4-.4.4s-.4-.2-.4-.4V9.5c0-.2.1-.3.3-.4h.4l1.5 2V9.5c0-.2.2-.4.4-.4s.4.2.4.4v2.9zm2.4-1.9c.2 0 .4.2.4.4s-.2.4-.4.4h-1.1v.7h1.1c.2 0 .4.2.4.4s-.2.4-.4.4h-1.5c-.2 0-.4-.2-.4-.4V9.5c0-.2.2-.4.4-.4h1.5c.2 0 .4.2.4.4s-.2.4-.4.4h-1.1v.7h1.1z"/>
              </svg>
            </a>
          </li>
        </ul>
      </div>

      <!-- 中：MENU -->
      <nav class="l-footer__menu" aria-label="フッターナビゲーション">
        <h3 class="l-footer__col-title">メニュー</h3>
        <ul class="l-footer__links">
          <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
          <li><a href="<?php echo esc_url(home_url('/spa-sauna/')); ?>">浴室・サウナ</a></li>
          <li><a href="<?php echo esc_url(home_url('/restaurant/')); ?>">レストラン</a></li>
          <li><a href="<?php echo esc_url(home_url('/bodycare/')); ?>">ボディケア</a></li>
          <li><a href="<?php echo esc_url(home_url('/hours-prices/')); ?>">営業時間・料金</a></li>
          <li><a href="<?php echo esc_url(home_url('/floor/')); ?>">館内案内</a></li>
          <li><a href="<?php echo esc_url(home_url('/access/')); ?>">アクセス</a></li>
          <li><a href="<?php echo esc_url(home_url('/inquiry/')); ?>">お問合せ</a></li>
        </ul>
      </nav>

      <!-- 中右：RESERVATION -->
      <nav class="l-footer__reserve" aria-label="ご予約メニュー">
        <h3 class="l-footer__col-title">ご予約</h3>
        <ul class="l-footer__links">
          <li><a href="https://www5.489pro.com/asp/489/menu.asp?id=14000064&amp;lan=JPN" target="_blank" rel="noopener">ご予約</a></li>
          <li><a href="https://www5.489pro.com/asp/489/refer_login.asp?yaid=14000064&amp;lan=JPN" target="_blank" rel="noopener">予約の確認</a></li>
          <li><a href="https://www5.489pro.com/asp/489/henkou_login.asp?yaid=14000064&amp;lan=JPN" target="_blank" rel="noopener">予約の変更</a></li>
          <li><a href="https://www5.489pro.com/asp/489/cancel_login.asp?yaid=14000064&amp;lan=JPN" target="_blank" rel="noopener">予約のキャンセル</a></li>
        </ul>
      </nav>

      <!-- 右：キービジュアル -->
      <figure class="l-footer__keyvisual">
        <img src="http://www.kawasaki-big.com/img/foot_bottom.png"
             alt="カプセル＆サウナ <?php bloginfo('name'); ?>"
             width="960" height="300"
             loading="lazy" decoding="async" />
      </figure>
    </div>

    <div class="l-footer__bottom">
      <div class="l-container l-footer__bottom-inner">
        <p class="l-footer__copy">Copyright&copy; <?php echo esc_html(date('Y')); ?> カプセル＆サウナ <?php bloginfo('name'); ?> All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <button class="c-pagetop js-pagetop" type="button" aria-label="ページトップへ戻る">
    <span class="c-pagetop__arrow" aria-hidden="true"></span>
  </button>

  <!-- ベストレート保証 PCポップアップ（右下にスライドイン） -->
  <aside class="c-bestrate-popup" id="bestrate-popup" role="complementary" aria-label="ベストレート保証" aria-hidden="true">
    <button type="button" class="c-bestrate-popup__close" aria-label="閉じる" data-bestrate-close="1">×</button>
    <div class="c-bestrate-popup__inner">
      <span class="c-bestrate-popup__badge">公式が最安値</span>
      <div class="c-bestrate-popup__media">
        <img src="https://www.kawasaki-big.com/spa_sauna/img/221212-01.jpg" alt="" loading="lazy" decoding="async" />
      </div>
      <p class="c-bestrate-popup__lead">川崎駅前 / 24時間営業</p>
      <p class="c-bestrate-popup__label">ベストレート保証</p>
      <p class="c-bestrate-popup__price">¥3,500<small>〜 / 1泊</small></p>
      <a href="<?php echo kb_reserve_url(); ?>" target="_blank" rel="noopener" class="c-bestrate-popup__cta">ご予約はこちら</a>
    </div>
  </aside>

  <?php wp_footer(); ?>
</body>
</html>
