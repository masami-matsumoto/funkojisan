<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ギター屋funk ojisan</title>
<meta name="description"  content="">
<meta name="robots" content="noindex,nofollow">
<meta name="keywords"  content="">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--=============Google Font ===============-->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP%7COswald&display=swap" rel="stylesheet">
<!--==============レイアウトを制御する独自のCSSを読み込み===============--> 
<!--機能編 6-1-4 動きを組み合わせて全画面で見せる-->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<!--機能編 6-2-1 複数の画像を一覧で見せる-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
<!--自作のCSS-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/parts.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/layout.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
<?php wp_head(); ?>
</head>

<body class="page <?php if( is_singular( 'original_guitar' ) || is_singular( 'amplifier' ) || is_singular('effector') || is_singular('pick_up') || is_singular('other') ) { echo 'single'; } ?>">
<div id="container">
  <header id="header">
    <h1><a href="http://funkojisan.com/">
    <img src="<?php echo get_template_directory_uri(); ?>/img/funkojisan_white.png">
   </a></h1>
    <div class="g-nav-openbtn">
      <div class="openbtn-area"><span></span><span></span><span></span></div>
    </div>
    <nav id="g-nav">
    <div id="g-nav-list">
    <?php wp_nav_menu(
          array(
              'theme_location' => 'place_global',
              'container' => false,
              'menu_id' => 'g-navi',//ulタグへid追加
              'menu_class' => 'nav01c',//ulタグへclass追加
              'add_li_class' => 'nav-menu-item', // liタグへclass追加
              )
              );
		?>
    <!-- <ul id="g-navi" class="nav01c">
          <li><a href="index.html">Top</a></li>
          <li class="has-child"><a href="#">Products</a>
            <ul>
              <li><a href="archive.html">Original Guitar</a></li>
              <li><a href="archive.html">Effector</a></li>
              <li><a href="archive.html">Pick Up</a></li>
              <li><a href="archive.html">Amplifier</a></li>
            </ul>
          </li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="about.html">Staff</a></li>
          <li><a href="#">Access</a></li>
          <li><a href="#">Contact</a></li>
        </ul> -->
    </div>
    </nav>
  </header>