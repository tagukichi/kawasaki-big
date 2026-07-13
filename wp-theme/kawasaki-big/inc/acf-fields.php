<?php
/**
 * Kawasaki Big - ACF field group definitions
 *
 * Registered as "local field groups" so they live in source control
 * and don't require manual DB import per environment.
 *
 * Requires Advanced Custom Fields PRO (5.0+).
 */
if (!defined('ABSPATH')) exit;

if (!function_exists('acf_add_local_field_group')) {
    // ACF not active — nothing to register. Templates will use fallbacks.
    return;
}

/* =========================================================================
   FIELD GROUP 1: TOP ページ
   ローケーション: 静的ページとして設定された「ホーム」（front page）
   ========================================================================= */
acf_add_local_field_group([
    'key' => 'group_kb_top',
    'title' => 'TOP ページ設定',
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'location' => [
        [
            ['param' => 'page_type', 'operator' => '==', 'value' => 'front_page'],
        ],
    ],
    'fields' => [

        /* --- FV スライドショー --- */
        [
            'key' => 'field_kb_fv_tab',
            'label' => 'FV (メインビジュアル)',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_kb_fv_slides',
            'label' => 'スライド画像',
            'name' => 'fv_slides',
            'type' => 'repeater',
            'instructions' => '4枚を基準に。1枚あたり約8秒で表示し無限ループします。未入力の場合は既存4枚（IMG_0218 / 0T8A2705 / 0T8A4965 / restaurant_masao1）が表示されます。',
            'min' => 0,
            'max' => 6,
            'layout' => 'block',
            'button_label' => 'スライドを追加',
            'sub_fields' => [
                [
                    'key' => 'field_kb_fv_slide_image',
                    'label' => '画像',
                    'name' => 'image',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'required' => 1,
                ],
            ],
        ],

        /* --- INFO バナー --- */
        [
            'key' => 'field_kb_info_tab',
            'label' => 'INFO バナー',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_kb_info_banner',
            'label' => 'INFO バナー画像',
            'name' => 'info_banner_image',
            'type' => 'image',
            'return_format' => 'url',
            'instructions' => 'FV直下に表示。24時間営業 / 駅前3分 / TEL / 入れ墨禁止 などのアイコンバナー（横長）。',
        ],

        /* --- ABOUT --- */
        [
            'key' => 'field_kb_about_tab',
            'label' => 'ABOUT (日常から、すこし離れて。)',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_kb_about_heading',
            'label' => '見出し',
            'name' => 'about_heading',
            'type' => 'text',
            'instructions' => '改行は <br> で挿入してください。未入力なら「日常から、<br>すこし離れて。」',
        ],
        [
            'key' => 'field_kb_about_body',
            'label' => '本文',
            'name' => 'about_body',
            'type' => 'wysiwyg',
            'tabs' => 'visual',
            'toolbar' => 'basic',
            'media_upload' => 0,
            'instructions' => '未入力なら現状の2段落テキストが表示されます。',
        ],
        [
            'key' => 'field_kb_about_mascot',
            'label' => 'まさおイラスト',
            'name' => 'about_mascot',
            'type' => 'image',
            'return_format' => 'url',
            'instructions' => '見出し横に表示するイラスト。未入力なら masaru_02.png。',
        ],

        /* --- 予約バナー --- */
        [
            'key' => 'field_kb_reserve_tab',
            'label' => 'ご予約バナー',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_kb_reserve_banner',
            'label' => '予約バナー画像',
            'name' => 'reservation_banner_image',
            'type' => 'image',
            'return_format' => 'url',
            'instructions' => '未入力なら banner_reserve.png。',
        ],

        /* --- 館内のご案内 4カード --- */
        [
            'key' => 'field_kb_services_tab',
            'label' => '館内のご案内 (4カード)',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_kb_services_cards',
            'label' => 'カード',
            'name' => 'services_cards',
            'type' => 'repeater',
            'instructions' => '通常4枚。並び順は上から表示順。未入力なら現状4枚がデフォルト表示。',
            'min' => 0,
            'max' => 8,
            'layout' => 'row',
            'button_label' => 'カードを追加',
            'sub_fields' => [
                ['key' => 'field_kb_svc_image', 'label' => '画像', 'name' => 'image', 'type' => 'image', 'return_format' => 'url'],
                ['key' => 'field_kb_svc_num', 'label' => '番号', 'name' => 'num', 'type' => 'text', 'wrapper' => ['width' => '20']],
                ['key' => 'field_kb_svc_title', 'label' => 'タイトル', 'name' => 'title', 'type' => 'text', 'wrapper' => ['width' => '40']],
                ['key' => 'field_kb_svc_link', 'label' => 'リンク先URL', 'name' => 'link_url', 'type' => 'url', 'wrapper' => ['width' => '40'], 'instructions' => '例: /spa_sauna/ または https://...'],
                ['key' => 'field_kb_svc_desc', 'label' => '説明', 'name' => 'description', 'type' => 'textarea', 'rows' => 2],
            ],
        ],

        /* --- レストランメニュー 4品 --- */
        [
            'key' => 'field_kb_restaurant_tab',
            'label' => '2F レストラン 24時間営業',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_kb_restaurant_heading',
            'label' => '見出し',
            'name' => 'restaurant_heading',
            'type' => 'text',
            'instructions' => '未入力なら「2F レストラン 24時間営業」。',
        ],
        [
            'key' => 'field_kb_restaurant_items',
            'label' => 'メニュー (4品)',
            'name' => 'restaurant_items',
            'type' => 'repeater',
            'instructions' => '通常4品。未入力なら現状4品がデフォルト表示。',
            'min' => 0,
            'max' => 8,
            'layout' => 'row',
            'button_label' => 'メニューを追加',
            'sub_fields' => [
                ['key' => 'field_kb_rest_image', 'label' => '画像', 'name' => 'image', 'type' => 'image', 'return_format' => 'url'],
                ['key' => 'field_kb_rest_num', 'label' => '番号', 'name' => 'num', 'type' => 'text', 'wrapper' => ['width' => '20']],
                ['key' => 'field_kb_rest_name', 'label' => 'メニュー名', 'name' => 'name', 'type' => 'text', 'wrapper' => ['width' => '80']],
            ],
        ],

        /* --- お知らせ --- */
        [
            'key' => 'field_kb_news_tab',
            'label' => 'お知らせ',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_kb_news_mascot',
            'label' => 'お知らせ見出し横まさお',
            'name' => 'news_mascot',
            'type' => 'image',
            'return_format' => 'url',
            'instructions' => '未入力なら masaru_03.png。',
        ],
    ],
]);


/* =========================================================================
   FIELD GROUP 2: ページヘッダー (帯部分) — 全下層ページ共通
   ========================================================================= */
acf_add_local_field_group([
    'key' => 'group_kb_page_hero',
    'title' => 'ページヘッダー (帯部分)',
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'location' => [
        [
            ['param' => 'post_type', 'operator' => '==', 'value' => 'page'],
            ['param' => 'page_type', 'operator' => '!=', 'value' => 'front_page'],
        ],
    ],
    'fields' => [
        [
            'key' => 'field_kb_hero_bg',
            'label' => '帯の背景画像',
            'name' => 'hero_bg',
            'type' => 'image',
            'return_format' => 'url',
            'instructions' => 'ページ上部の帯（パンくず＋タイトル）の背景。未入力ならテンプレート既定画像。',
        ],
        [
            'key' => 'field_kb_hero_title',
            'label' => '帯タイトル',
            'name' => 'hero_title',
            'type' => 'text',
            'instructions' => '空欄なら固定ページのタイトルが入ります。',
        ],
        [
            'key' => 'field_kb_hero_sub',
            'label' => 'サブタイトル',
            'name' => 'hero_sub',
            'type' => 'text',
            'instructions' => '帯タイトル下の小さなテキスト。',
        ],
        [
            'key' => 'field_kb_cf7_shortcode',
            'label' => 'Contact Form 7 ショートコード',
            'name' => 'cf7_shortcode',
            'type' => 'text',
            'instructions' => 'お問合せページでのみ使用。例) [contact-form-7 id="123" title="お問合せ"] ／ 未入力でも CF7 が有効なら「お問合せ」というタイトルのフォームを自動表示します。CF7 未導入なら静的フォームが表示されます。',
        ],
    ],
]);


/* =========================================================================
   OPTIONS PAGE: サイト共通設定（全ページ共通の要素をここで管理）
   ========================================================================= */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'サイト共通設定',
        'menu_title' => 'サイト共通設定',
        'menu_slug'  => 'kb-site-settings',
        'capability' => 'edit_posts',
        'icon_url'   => 'dashicons-admin-generic',
        'position'   => 59,
        'redirect'   => false,
    ]);
}

/* =========================================================================
   FIELD GROUP 3: ベストレート保証ポップアップ（右下スライドイン）
    location: 上記オプションページ
   ========================================================================= */
acf_add_local_field_group([
    'key' => 'group_kb_popup',
    'title' => 'ベストレート保証ポップアップ（右下）',
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'location' => [
        [
            ['param' => 'options_page', 'operator' => '==', 'value' => 'kb-site-settings'],
        ],
    ],
    'fields' => [
        [
            'key' => 'field_kb_popup_enabled',
            'label' => 'ポップアップを表示する',
            'name' => 'popup_enabled',
            'type' => 'true_false',
            'ui' => 1,
            'default_value' => 1,
            'instructions' => 'OFFにすると右下のポップアップを非表示にします。',
        ],
        [
            'key' => 'field_kb_popup_image',
            'label' => 'ポップアップ画像',
            'name' => 'popup_image',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
            'instructions' => 'ポップアップ内に表示する画像。未設定の場合はテーマ内の既定画像が表示されます。',
        ],
        [
            'key' => 'field_kb_popup_badge',
            'label' => 'バッジ文言',
            'name' => 'popup_badge',
            'type' => 'text',
            'default_value' => '公式が最安値',
            'wrapper' => ['width' => '50'],
        ],
        [
            'key' => 'field_kb_popup_lead',
            'label' => 'リード文',
            'name' => 'popup_lead',
            'type' => 'text',
            'default_value' => '川崎駅前 / 24時間営業',
            'wrapper' => ['width' => '50'],
        ],
        [
            'key' => 'field_kb_popup_label',
            'label' => 'ラベル',
            'name' => 'popup_label',
            'type' => 'text',
            'default_value' => 'ベストレート保証',
            'wrapper' => ['width' => '50'],
        ],
        [
            'key' => 'field_kb_popup_price',
            'label' => '価格',
            'name' => 'popup_price',
            'type' => 'text',
            'default_value' => '¥3,500',
            'wrapper' => ['width' => '25'],
        ],
        [
            'key' => 'field_kb_popup_price_note',
            'label' => '価格の補足',
            'name' => 'popup_price_note',
            'type' => 'text',
            'default_value' => '〜 / 1泊',
            'wrapper' => ['width' => '25'],
        ],
        [
            'key' => 'field_kb_popup_link',
            'label' => 'リンク先URL',
            'name' => 'popup_link',
            'type' => 'url',
            'instructions' => '「ご予約はこちら」ボタンのリンク先。未入力なら予約システムURL（デフォルト）。',
        ],
    ],
]);

/* =========================================================================
   FIELD GROUP 4: 各ページの画像バナー（旧サイトの外部画像を差し替える用）
    location: サイト共通設定オプションページ
    - 画像をアップロードすると各ページの該当箇所に表示されます
    - 未設定の箇所は非表示（壊れ画像は出ません）
   ========================================================================= */
acf_add_local_field_group([
    'key' => 'group_kb_page_banners',
    'title' => '各ページの画像バナー',
    'menu_order' => 1,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'location' => [
        [
            ['param' => 'options_page', 'operator' => '==', 'value' => 'kb-site-settings'],
        ],
    ],
    'fields' => [
        [
            'key' => 'field_kb_banner_hours',
            'label' => '営業時間・料金：営業時間のご案内 画像',
            'name' => 'banner_hours',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
            'instructions' => '営業時間ページ上部に表示。未設定なら非表示（下の営業時間カードは常に表示）。',
        ],
        [
            'key' => 'field_kb_banner_payment',
            'label' => '営業時間・料金：お支払い方法 画像',
            'name' => 'banner_payment',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
            'instructions' => 'お支払い方法セクションに表示。未設定ならテキスト（現金／クレジット／電子マネー）を表示。',
        ],
        [
            'key' => 'field_kb_banner_bodycare_price',
            'label' => 'ボディケア：ボディケア＆足つぼ＆スカルプケア料金 画像',
            'name' => 'banner_bodycare_price',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
            'instructions' => 'ボディケアページの料金セクションに表示。未設定なら非表示（下のコース表は常に表示）。',
        ],
        [
            'key' => 'field_kb_banner_akasuri',
            'label' => 'ボディケア：アカスリ料金 画像',
            'name' => 'banner_akasuri',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
            'instructions' => 'アカスリ料金セクションに表示。未設定なら非表示（下の料金表は常に表示）。',
        ],
        [
            'key' => 'field_kb_banner_floor_guide',
            'label' => '館内案内：フロアガイド 画像',
            'name' => 'banner_floor_guide',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
            'instructions' => '館内案内ページ上部のフロアガイド。未設定なら非表示（下のフロア構成は常に表示）。',
        ],
        [
            'key' => 'field_kb_banner_spa_info',
            'label' => '浴室・サウナ：お知らせバナー 画像',
            'name' => 'banner_spa_info',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
            'instructions' => '浴室・サウナページ下部に1枚表示。未設定なら非表示。',
        ],
    ],
]);


/* =========================================================================
   CUSTOM LOCATION RULE: ページスラッグ
    固定ページのスラッグでフィールドグループを表示できるようにする
    （page-{slug}.php テンプレートに対して、固定ページ編集画面で編集可能に）
   ========================================================================= */
add_filter('acf/location/rule_types', function ($choices) {
    $choices['ページ']['kb_page_slug'] = 'ページスラッグ';
    return $choices;
});
add_filter('acf/location/rule_values/kb_page_slug', function ($choices) {
    $pages = get_pages();
    if ($pages) {
        foreach ($pages as $p) {
            $choices[$p->post_name] = $p->post_name . '（' . $p->post_title . '）';
        }
    }
    return $choices;
});
add_filter('acf/location/rule_match/kb_page_slug', function ($match, $rule, $options) {
    $post_id = !empty($options['post_id']) ? $options['post_id'] : 0;
    if (!$post_id || !is_numeric($post_id)) return false;
    $slug = get_post_field('post_name', (int) $post_id);
    if ($rule['operator'] === '==') return ($slug === $rule['value']);
    if ($rule['operator'] === '!=') return ($slug !== $rule['value']);
    return $match;
}, 10, 3);


/* =========================================================================
   FIELD GROUP 5: レストランページ設定
    location: 固定ページ（スラッグ = restaurant）の編集画面
    - おすすめメニュー（画像＋名前・繰り返し）
    - 季節のメニュー（バナー画像・繰り返し）
    - 未入力なら現状の内容がそのまま表示されます
   ========================================================================= */
acf_add_local_field_group([
    'key' => 'group_kb_restaurant',
    'title' => 'レストランページ設定',
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'location' => [
        [
            ['param' => 'kb_page_slug', 'operator' => '==', 'value' => 'restaurant'],
        ],
    ],
    'fields' => [

        /* --- おすすめメニュー --- */
        [
            'key' => 'field_kb_rest_menu_tab',
            'label' => 'おすすめメニュー',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_kb_restaurant_menu',
            'label' => 'おすすめメニュー（画像＋名前）',
            'name' => 'restaurant_menu',
            'type' => 'repeater',
            'instructions' => '上から順に表示されます。番号（01,02…）は自動採番。未入力の場合は現状の6品が表示されます。',
            'min' => 0,
            'max' => 12,
            'layout' => 'block',
            'button_label' => 'メニューを追加',
            'sub_fields' => [
                [
                    'key' => 'field_kb_rest_menu_image',
                    'label' => '画像',
                    'name' => 'image',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'wrapper' => ['width' => '40'],
                ],
                [
                    'key' => 'field_kb_rest_menu_name',
                    'label' => 'メニュー名',
                    'name' => 'name',
                    'type' => 'text',
                    'wrapper' => ['width' => '60'],
                ],
            ],
        ],

        /* --- 季節のメニュー（バナー） --- */
        [
            'key' => 'field_kb_rest_seasonal_tab',
            'label' => '季節のメニュー',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_kb_restaurant_seasonal',
            'label' => '季節のメニュー バナー画像',
            'name' => 'restaurant_seasonal',
            'type' => 'repeater',
            'instructions' => '横並びで表示されるバナー画像。未入力の場合は現状の3枚が表示されます。',
            'min' => 0,
            'max' => 9,
            'layout' => 'block',
            'button_label' => 'バナーを追加',
            'sub_fields' => [
                [
                    'key' => 'field_kb_rest_seasonal_image',
                    'label' => '画像',
                    'name' => 'image',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'wrapper' => ['width' => '60'],
                ],
                [
                    'key' => 'field_kb_rest_seasonal_alt',
                    'label' => '説明（代替テキスト）',
                    'name' => 'alt',
                    'type' => 'text',
                    'wrapper' => ['width' => '40'],
                ],
            ],
        ],
    ],
]);

