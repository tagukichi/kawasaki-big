<?php
/**
 * Page template for /inquiry/
 */
if (!defined('ABSPATH')) exit;
get_header();
?>
<section class="s-page-hero" data-section="page-hero" aria-label="ページ見出し">
      <div class="s-page-hero__bg" style="background-image: url('https://www.kawasaki-big.com/img/slide/spa-06_2.jpg');" aria-hidden="true"></div>
      <div class="s-page-hero__overlay" aria-hidden="true"></div>
      <div class="l-container s-page-hero__inner">
        <h1 class="s-page-hero__title js-fade">お問合せ</h1>
        <p class="s-page-hero__sub js-fade">ご質問・ご要望は下記フォームよりお寄せください。</p>
        <nav aria-label="パンくず">
          <ol class="c-breadcrumb js-fade">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
            <li><span aria-current="page">お問合せ</span></li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- ====================== TEL CONTACT ====================== -->
    <section class="s-block" data-section="tel-contact" aria-label="お電話でのお問合せ">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">お電話でのお問合せ</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-tel-block js-fade">
          <p class="c-tel-block__label">お電話でのお問い合わせ</p>
          <a href="tel:0442460008" class="c-tel-block__num">044-246-0008</a>
          <p class="c-tel-block__sub">24時間 年中無休 / 神奈川県川崎市川崎区小川町15-11</p>
        </div>
      </div>
    </section>

    <!-- ====================== INQUIRY FORM ====================== -->
    <section class="s-block s-block--alt" data-section="inquiry-form" aria-label="お問合せフォーム">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">お問合せフォーム</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <form action="#" method="post" class="c-form js-fade" novalidate>
          <div class="c-form__row">
            <label for="form-name" class="c-form__label">
              お名前
              <span class="c-form__required">必須</span>
            </label>
            <input type="text" id="form-name" name="name" class="c-form__input" placeholder="例) 川崎 太郎" required aria-required="true" autocomplete="name" />
          </div>

          <div class="c-form__row">
            <label for="form-tel" class="c-form__label">
              電話番号
            </label>
            <input type="tel" id="form-tel" name="tel" class="c-form__input" placeholder="例) 09012345678（半角数字）" pattern="[0-9]*" autocomplete="tel" />
          </div>

          <div class="c-form__row">
            <label for="form-email" class="c-form__label">
              メールアドレス
              <span class="c-form__required">必須</span>
            </label>
            <input type="email" id="form-email" name="email" class="c-form__input" placeholder="例) name@example.com" required aria-required="true" autocomplete="email" />
          </div>

          <div class="c-form__row">
            <label for="form-message" class="c-form__label">
              お問合せ内容
              <span class="c-form__required">必須</span>
            </label>
            <textarea id="form-message" name="message" class="c-form__textarea" placeholder="ご質問・ご要望をお書きください。" required aria-required="true"></textarea>
          </div>

          <p class="c-form__note">
            ※IPアドレスを記録しております。迷惑メール等はご遠慮ください。
          </p>

          <div class="c-form__submit-wrap">
            <button type="submit" class="c-btn c-btn--primary c-btn--xl">確認画面へ →</button>
          </div>
        </form>
      </div>
    </section>

    <!-- ====================== PRIVACY POLICY ====================== -->
    <section class="s-block" data-section="privacy" aria-label="プライバシーポリシー">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">プライバシーポリシー</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-policy js-fade">
          <p>
            当サイトは、川崎ビッグ（以下、当社といいます。）が運営する『カプセル＆サウナ川崎ビッグ（以下、川崎ビッグといいます。）の情報を提供することを目的として運営されております。
          </p>
          <p>
            以下は、当サイトにおけるプライバシーポリシーに関する説明です。
          </p>

          <h3>お客様のプライバシーと当社</h3>
          <p>
            当サイトはお客様へのサービスとして運営されております。
          </p>
          <p>
            お客様が当サイトをご利用される場合、一部のサイトではお客様の個人情報をお伺いする場合があります（アンケート、お問い合せ、メール送付登録等のお客様の任意かつ自主的にご利用いただくサービス）。お伺いする情報は、お客様のお名前、メールアドレス、電話番号、住所といった、川崎ビッグのサービスに関する情報をご提供する際などに必要となる、お客様の個人情報が主なものになります。
          </p>
          <p>
            また、お客様の必要に即したサービスに関する情報のご提供等の目的で、それ以外の質問をさせていただく場合がありますが、これは必要最低限の項目を除いて、お客様自身が選択可能なものになっており、お客様の任意でご提供いただけるものです。尚、当社が、お客様の同意なしにお伺いする情報を改変することはありません。
          </p>
          <p>
            お伺いした情報は、当サイトのサービスの種類によっては、第三者に通知する場合があることをあらかじめご了承ください。
          </p>
          <p>
            （例えば、配送等のサービスを委託した会社にお客様の名前と宛先を知らせる場合がこれにあたります）
          </p>
          <p>
            当社は以上の方針を改定することがあります。その場合すべての改定は当サイトで通知いたします。
          </p>
        </div>
      </div>
    </section>

    <!-- ====================== PERSONAL INFO POLICY ====================== -->
    <section class="s-block s-block--alt" data-section="personal-info" aria-label="個人情報保護方針">
      <div class="l-container">
        <header class="s-block__head">
          <h2 class="c-heading js-fade">個人情報保護方針</h2>
          <span class="c-accent-line" aria-hidden="true"></span>
        </header>

        <div class="c-policy js-fade">
          <p>
            川崎ビッグ（以下「当社」といいます）は、お客様の個人情報を保護することが当社事業の基本であり社会的責務であると考え、以下の通り個人情報保護方針を定めこれを実行し維持することを努めます。
          </p>

          <h3>1. 個人情報の収集と利用</h3>
          <p>
            当社は、収集目的を明確にした上で、目的の範囲内に限り、個人情報を収集します。<br />
            また個人情報の利用は、その収集目的から逸脱しない範囲とします。
          </p>

          <h3>2. 個人情報の管理と保護</h3>
          <p>
            個人情報の管理は、厳重に行うこととし、お客さまにご承諾いただいた場合および、あらかじめその利用目的を公表している場合を除き、第三者に対しデータを開示・提供することはいたしません。<br />
            また個人情報に関する不正アクセス、紛失、破壊、改ざん、漏洩を防ぐための適切な処置を行います。
          </p>

          <h3>3. 準拠法等</h3>
          <p>
            当社は、当社が保有する個人情報に関して適用される法令、規範を遵守いたします。
          </p>

          <h3>4. 個人情報保護管理体制および仕組みの継続的改善</h3>
          <p>
            当社では、個人情報保護に関する管理の体制と仕組みについて継続的改善を実施いたします。
          </p>
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
