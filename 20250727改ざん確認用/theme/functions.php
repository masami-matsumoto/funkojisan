<?php

//ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
array(
'place_global' => 'グローバル',
'place_footer' => 'フッターナビ',
)
);

function theme_enqueue_styles() {
    wp_enqueue_style( 'layout-style', get_template_directory_uri() . '/css/layout.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'parts-style', get_template_directory_uri() . '/css/parts.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/css/reset.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

//投稿アーカイブページの作成
function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog'; //スラッグ名
    }
    return $args;
    }
    add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

