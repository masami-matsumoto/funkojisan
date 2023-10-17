<?php get_header(); ?>
  <main id="main-area">
    <section class="section">
      <h2>Amplifier</h2>
      <figure><img src="<?php echo get_template_directory_uri(); ?>/img/funkojisan_amp_top@2x.png" alt=""/></figure>
      <div class="container">
        <div class="post zoomInRotate"> 
        <?php
        $args = array(
          'post_type' => 'amplifier',
          'posts_per_page' => -1, // 取得数
          'paged' => get_query_var('paged') //追加事項　変数［paged］は「今、何ページ目？」という値を指定するものです。
        );
        $wp_query = new WP_Query( $args );
        if ( $wp_query->have_posts() ):
          while ( $wp_query->have_posts() ): $wp_query->the_post();
        ?>
          <a href="<?php the_permalink(); ?>">
          <dl class="post-item">
            <dt class="post-title">品名：<?php the_field('title'); ?></dt>
            <dd class="post-image"><img src="<?php the_field('picture1'); ?>" alt=""/></dd>
            <dd class="post-date"><?php the_time( 'Y.m.d' ); ?></dd>
            <dd class="post-price"><?php the_field('price'); ?>円（税込価格）</dd>
            <dd class="post-stock"><?php the_field('stock'); ?></dd>
          </dl>
          </a> 
          <?php
        endwhile;
        wp_reset_postdata();
        endif;
        ?>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>