<?php get_header(); ?>
<!-- main -->
  <main id="main-area">
    <section class="section">
      <h2><?php the_field('title'); ?></h2>
      <div class="container">
      <?php $field_picture = array('picture1','picture2','picture3','picture4','picture5','picture7','picture8','picture9','picture10');
            $pictures = array();
              foreach ($field_picture as $field) {
              $value = get_field($field);
              $pictures[$field] = $value;
    }
        ?>
        <div class="slider">
        <?php foreach ($pictures as $field_name => $value) { ?>
          <div class="slick-img"> <img src="<?php  echo $value; ?>" alt=""/> </div>
          <?php } ?>
        </div>
        <div class="thumbnail">
        <?php foreach ($pictures as $field_name => $value) { ?>
          <div class="thumbnail-img"> <img src="<?php  echo $value; ?>" alt=""/> </div>
          <?php } ?>
        </div>
      </div>
      <div class="container">
        <p>
          <time datetime="2023-04-01" class="date"><?php the_time( 'Y.m.d' ); ?></time>
        </p>
        <p class="detail">商品名：<?php the_field('title'); ?></p>
        <p class="detail">価格：<?php the_field('price'); ?>円（税込）</p>
        <p class="detail">在庫：<?php the_field('stock'); ?></p>
        <p class="detail-area"><?php the_field('comment'); ?></p>
        <?php if( get_field('button') ) { ?>
          <?php $button = get_field('button');
          if($button === 'STOREへ'){ ?>
            <p class="detail-btn"><a href="<?php the_field('store-url'); ?>" class="btn">STORE</a></p>
          <?php }else { ?>
            <h3 class="detail-msg">こちらの商品はお問い合わせくださいませ。</h3>
          <?php } ?>
          <?php } ?>
          <p class="detail-btn"><a href="/contact/" class="btn">お問い合わせ</a></p>
          <!-- youtube area1 -->
          <?php
            $video = '';
            if (get_field('video_field')) {
                $video = get_field('video_field');
               }
              ?>
          <div class="video">
           <?php if (!empty($video)) : ?>
            <?php echo $video; ?>
          <?php endif; ?>
          </div>
          <!-- youtube area2 -->
          <?php
            $video2 = '';
            if (get_field('video_field2')) {
                $video2 = get_field('video_field2');
               }
              ?>
          <div class="video">
           <?php if (!empty($video2)) : ?>
            <?php echo $video2; ?>
          <?php endif; ?>
          </div>
          <!-- youtube area3 -->
          <?php
            $video3 = '';
            if (get_field('video_field3')) {
                $video3 = get_field('video_field3');
               }
              ?>
          <div class="video">
           <?php if (!empty($video3)) : ?>
            <?php echo $video3; ?>
          <?php endif; ?>
          </div>
    </section>
    <?php get_footer(); ?>