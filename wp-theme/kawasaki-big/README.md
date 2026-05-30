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
├── page-spa-sauna.php   ← /spa-sauna/
├── page-restaurant.php  ← /restaurant/
├── page-hours-prices.php ← /hours-prices/
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
| 浴室・サウナ | `spa-sauna` | `page-spa-sauna.php`（自動） |
| レストラン | `restaurant` | `page-restaurant.php`（自動） |
| 営業時間・料金 | `hours-prices` | `page-hours-prices.php`（自動） |
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
