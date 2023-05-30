<?php get_header(); ?>
  <main id="main-area">
    <section class="section">
      <h2>ブログ</h2>
      <div class="container">
        <div class="blog zoomInRotate"> 
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 15, // 取得数
          'paged' => get_query_var('paged') //追加事項　変数［paged］は「今、何ページ目？」という値を指定するものです。
        );
        $news_posts = new WP_Query( $args );
        if ( $news_posts->have_posts() ):
        ?>
          <?php while ( $news_posts->have_posts() ): $news_posts->the_post(); ?>
          <dl class="blog-item">
            <dt class="blog-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></dt>
            <dd class="post-title"><?php the_title(); ?></a></dd>
            <dd class="post-date"><?php the_time( 'Y.m.d' ); ?></dd>
            <dd class="blog-category"><?php the_category(', '); ?></dd>
          </dl>
          </a> 
          <?php
        endwhile;
        wp_reset_postdata();
        endif;
        ?>
        </div>
      </div>
      <?php
$args = array(
    'mid_size' => 1,
    'prev_text' => '&lt;&lt;前へ',
    'next_text' => '次へ&gt;&gt;',
    'screen_reader_text' => ' ',
);
the_posts_pagination($args);
?>
    </section>
    <?php get_footer(); ?>