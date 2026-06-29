# Kawasaki Big — WordPress テーマ

site3 案3 デザインを WordPress テーマ化したもの。

## ディレクトリ構成

```
wp-theme/kawasaki-big/
├── style.css            ← テーマヘッダー + 全CSS
├── functions.php        ← テーマセットアップ・helper関数・enqueue
├── header.php           ← 共通ヘッダー（ロゴ・ナビ・ベストレートバナー）
├── footer.php           ← 共通フッター + ポップアップ
├── front-page.php       ← TOP（フロントページ）
├── single.php           ← 投稿詳細（お知らせ）
├── page.php             ← 固定ページ（fallback）
├── page-spa_sauna.php   ← /spa_sauna/
├── page-restaurant.php  ← /restaurant/
├── page-hours_prices.php ← /hours_prices/
├── page-bodycare.php    ← /bodycare/
├── page-floor.php       ← /floor/
├── page-access.php      ← /access/
├── page-inquiry.php     ← /inquiry/
├── index.php            ← 一覧（アーカイブ・検索の本体）
├── archive.php          ← index にフォールバック
├── search.php           ← index にフォールバック
├── 404.php
├── script.js            ← フロントJS（ヘッダースクロール・ハンバーガー・ポップアップ等）
└── img/                 ← 画像ファイル
```

## セットアップ手順

### 1. テーマをアップロード
`wp-theme/kawasaki-big/` を `wp-content/themes/kawasaki-big/` にアップロード。
（FTP・SCP・管理画面のテーマアップロード zip いずれでも可）

### 2. テーマを有効化
WordPress 管理画面 → 外観 → テーマ → "Kawasaki Big" を有効化。

### 3. 固定ページを作成
管理画面 → 固定ページ → 新規追加 で以下のページを作成し、**パーマリンクのスラッグ** をそれぞれ以下の通りに設定。

| ページタイトル | スラッグ | 適用テンプレート |
|---|---|---|
| 浴室・サウナ | `spa_sauna` | `page-spa_sauna.php`（自動） |
| レストラン | `restaurant` | `page-restaurant.php`（自動） |
| 営業時間・料金 | `hours_prices` | `page-hours_prices.php`（自動） |
| ボディケア | `bodycare` | `page-bodycare.php`（自動） |
| 館内案内 | `floor` | `page-floor.php`（自動） |
| アクセス | `access` | `page-access.php`（自動） |
| お問合せ | `inquiry` | `page-inquiry.php`（自動） |

各ページの中身は **空のまま** でOK（テンプレート側にすべて記述されています）。

### 4. フロントページ・投稿ページ設定
管理画面 → 設定 → 表示設定 で以下を設定：

- **ホームページの表示**：固定ページを使用しない場合は、front-page.php が自動的に使われます（追加設定不要）。
- **投稿の一覧（お知らせ一覧）**：必要であれば「お知らせ」という固定ページを作って投稿ページとして指定すると、`index.php` が表示されます。

### 5. メニュー作成
管理画面 → 外観 → メニュー で「メインメニュー」などのメニューを作成し、項目に以下を追加：

- ホーム（カスタムリンク: `/`）
- ご予約（カスタムリンク: `https://www5.489pro.com/asp/489/menu.asp?id=14000064&lan=JPN`、新しいウィンドウで開く）
- 浴室・サウナ（固定ページ）
- レストラン（固定ページ）
- 営業時間・料金（固定ページ）
- ボディケア（固定ページ）
- 館内案内（固定ページ）
- アクセス（固定ページ）
- お問合せ（固定ページ）

メニュー設定の **位置** で **メインナビゲーション** にチェック。

> メニュー未作成でもフォールバックの既定メニューが表示されます。

### 6. お知らせ（投稿）を作成
管理画面 → 投稿 → 新規追加 で「お知らせ」を作成。カテゴリーを「重要」「営業」「メニュー」等から選ぶと、フロントの `.s-news__cat` に表示されます。

### 7. パーマリンク設定
管理画面 → 設定 → パーマリンク で「投稿名」または「カスタム構造 `/%postname%/`」を選択して保存。

## 主な定数（functions.php）

- `KAWASAKI_BIG_VERSION` … テーマバージョン
- `KAWASAKI_BIG_RESERVE_URL` … 予約システムURL（489pro）
- `KAWASAKI_BIG_TEL` … 電話番号

予約URL・電話番号を変更する場合は functions.php の冒頭を編集してください。

## ヘルパー関数

- `kb_img('foo.png')` … `wp-content/themes/kawasaki-big/img/foo.png` の URL を返す
- `kb_reserve_url()` … 予約URLを返す（escape済）

## 残作業 / 既知の注意

- `page-*.php` の **内部リンクはほぼ全自動置換済み** ですが、もしリンク切れがあれば確認してください。
- `s-page-hero__bg` の背景画像 URL は外部参照（`www.kawasaki-big.com`）のままになっているため、必要に応じてローカル画像に差し替え可能です。
- フォーム（お問合せページ）はそのままだとローカル動作しないため、`Contact Form 7` などのプラグインに置き換えるか、`page-inquiry.php` の `<form>` のアクションを差し替えてください。
- フッターのキービジュアル画像 `foot_bottom.png` は外部 (`http://www.kawasaki-big.com/img/foot_bottom.png`) を参照。ローカル化する場合は `img/` に置いて `footer.php` の src を `kb_img('foot_bottom.png')` に変えてください。

## ACF PRO 連携（カスタムフィールド編集）

このテーマは **Advanced Custom Fields PRO** に対応しています。
プラグインを有効化すると、固定ページの編集画面から下記の項目を編集できます。
**ACFが未導入でもサイトは壊れません** — その場合は各テンプレートに記述された fallback 値が表示されます。

### フィールドグループ

#### 1. TOP ページ設定（ホーム固定ページ）

タブ別に下記のフィールドを編集できます:

| タブ | フィールド | 型 | 説明 |
|---|---|---|---|
| FV | `fv_slides` | リピーター（画像） | スライドショー画像（4枚推奨・1枚8秒・無限ループ） |
| INFO | `info_banner_image` | 画像 | FV直下のインフォバナー（annai2.png） |
| ABOUT | `about_heading` | テキスト | 見出し（改行は `<br>`） |
| ABOUT | `about_body` | WYSIWYG | 本文 |
| ABOUT | `about_mascot` | 画像 | 見出し横のまさおイラスト |
| 予約バナー | `reservation_banner_image` | 画像 | ベストレート保証バナー |
| 館内のご案内 | `services_cards` | リピーター（image, num, title, description, link_url） | 4カード |
| レストラン | `restaurant_heading` | テキスト | 見出し |
| レストラン | `restaurant_items` | リピーター（image, num, name） | 4品メニュー |
| お知らせ | `news_mascot` | 画像 | 見出し横のまさお |

#### 2. ページヘッダー（帯部分）— 全下層固定ページ共通

| フィールド | 型 | 説明 |
|---|---|---|
| `hero_bg` | 画像 | 帯（パンくず＋タイトル）の背景画像 |
| `hero_title` | テキスト | 帯タイトル（空欄なら固定ページのタイトル） |
| `hero_sub` | テキスト | サブタイトル |

### セットアップ手順（ACF）

1. **ACF PRO プラグインをインストール → 有効化**
2. **固定ページ「ホーム」を作成し、設定 → 表示設定 → ホームページ に指定**
   - これで `front-page.php` が読み込まれ、TOP ページ設定フィールドが「ホーム」の編集画面に出現します
3. **各下層固定ページの編集画面で「ページヘッダー（帯部分）」フィールドから帯画像/タイトル/サブを編集**
4. **未入力の項目はテンプレート既定値が表示されます**（例: hero_bg 未設定 → ページ既定画像）

### フィールドは自動登録（DB import 不要）

`inc/acf-fields.php` が `acf_add_local_field_group()` で field group を登録するので、
別環境で同テーマを有効化するだけで同じフィールドが表示されます。
DB 投入や JSON import は不要です。

### 既存ハードコード値を上書きしたいだけなら

ACF フィールドを 1 つでも入力すれば、その項目だけ ACF 値で上書きされます。
他は fallback のままなので、必要な箇所だけ少しずつ設定していけます。
