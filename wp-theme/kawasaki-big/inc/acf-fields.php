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
