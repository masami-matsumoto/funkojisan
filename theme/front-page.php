<?php get_header(); ?>

  <section id="vidual-area">
    <div id="slider-area" class="bgextend bgRLextendTrigger">
      <div class="bgappearTrigger">
        <div id="slider">
          <div>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/DSC03077-scaled.jpg" media="(max-width: 960px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/DSC03855-3.jpg" alt=""/> </picture>
          </div>
          <div>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/DSC03103-577x1024-1.jpg" media="(max-width: 960px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/DSC03852-2.jpg" alt=""/></picture>
          </div>
          <div>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/DSC03848-1.jpg" media="(max-width: 960px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/DSC03859-4.jpg" alt=""/></picture>
          </div>
        </div>
      </div>
      <!--/slider-area--></div>
    <h2>
      <span class="js_typing">ギター屋</span><br>
      <span class="js_typing">FUNK</span><br>
      <span class="js_typing">OJISAN</span>
    </h2>
    <dl>
      <!-- <dt>Follow Us</dt> -->
      <dd>
        <ul>
          <li><a href="https://www.youtube.com/@funkojisan4807"><img src="<?php echo get_template_directory_uri(); ?>/img/ico_youtube.svg" alt=""></a></li>
          <!-- <li><a href="#"><img src="/img/ico_music.svg" alt=""></a></li> -->
          <li><a href="https://www.facebook.com/profile.php?id=100054525036947"><img src="<?php echo get_template_directory_uri(); ?>/img/ico_fb.svg" alt=""></a></li>
          <li><a href="https://twitter.com/funk_ojisan"><img src="<?php echo get_template_directory_uri(); ?>/img/ico_tw.svg" alt=""></a></li>
          <li><a href="https://www.instagram.com/funkojisan/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/img/ico_insta.svg" alt=""></a></li>
        </ul>
      </dd>
    </dl>
    <div class="scrolldown1"><span>Scroll</span></div>
    
    <!--/vidual-area--></section>
  <main id="main-area">
    <section id="service">
      <h2 class="js_typing vidual-area_h2">Service</h2>
      <p class="service-lead"><span class="bgextend bgRLextendTrigger"><span class="bgappearTrigger">国分寺を拠点に、都内のみならず日本全国のギター、ベース、各種機材の修理・改造を手掛けるリペアショップです。<br>
        その他、ハンドメイド機材の開発等を行っております。<br>
        プロミュージシャンの楽器の調整やカスタマイズ、エフェクター開発も数多くおこなっています。</span></span></p>
      <div class="service-area">
        <section class="bgextend bgLRextendTrigger">
          <div class="bgappearTrigger">
            <header>
              <h3>Custom-Made</h3>
            </header>
            <p>オリジナルのエフェクター、ピックアップ、アンプの製造、販売しております。その他グッズの販売もしております。</p>
            <a href="/custom-made/" class="btnlinestretches2">More</a> </div>
        </section>
        <section class="bgextend bgLRextendTrigger">
          <div class="bgappearTrigger">
            <header>
              <h3>Used Selling</h3>
            </header>
            <p>当店でメンテナンスされた中古楽器を販売しているページです。<br>
              ギター、ベース、エフェクター、アンプ、ピックアップなども販売中です。</p>
            <a href="https://funkojisan.shop/" class="btnlinestretches2">Store</a> </div>
        </section>
        <section class="bgextend bgLRextendTrigger">
          <div class="bgappearTrigger">
            <header>
              <h3>Used Buying</h3>
            </header>
            <p>こちらでは、中古機材の買取を行っております。<br>
              ギター、ベース、エフェクター、アンプ、オーディオ機材などを中心に、楽器、バンド機材なら何でもお問い合わせください。
              リペアショップの強みを生かし、壊れた機材でも買い取り、お引き取りいたします。</p>
            <a href="/purchase/" class="btnlinestretches2">More</a> </div>
        </section>
        <section class="bgextend bgLRextendTrigger">
          <div class="bgappearTrigger">
            <header>
              <h3>Repair/Maintenance</h3>
            </header>
            <p>ギター、ベース、エフェクターからアンプまでリペア、メンテナンス、モディファイをします。</p>
            <a href="/repair_maintenance/" class="btnlinestretches2">More</a> </div>
        </section>
        <!--/service-area--></div>
    </section>
    <div class="news-img-wrapper bgextend bgRLextendTrigger">
      <div class="bgappearTrigger">
        <div class="news-img"></div>
      </div>
      <!--/news-img-wrapper--></div>
    <section id="news">
      <h2 class="js_typing vidual-area_h2">Blog</h2>
      <div class="tab-area bgextend bgLRextendTrigger">
        <div class="bgappearTrigger">
          <ul class="tab">
            <li class="active"><a href="#topics">Topics</a></li>
            <li><a href="#parts">New Arrivals</a></li>
          </ul>
          <div class="tab-choice-area">
            <div id="topics" class="area is-active">
            <?php
        $args = array(
          'post_type' => 'post',
          'category_name' => 'topics',
          'posts_per_page' => 3,
        );
        $news_posts = new WP_Query( $args );
        if ( $news_posts->have_posts() ):
        ?>
              <ul>
              <?php while ( $news_posts->have_posts() ): $news_posts->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>">
                  <time datetime="2021-12-23"><?php the_time( 'Y.m.d' ); ?></time>
                  <?php the_title(); ?></a></li>
                <?php endwhile; ?>
              </ul>
              <?php
        wp_reset_postdata();
        endif;
        ?>
              <!--/area--></div>
            <div id="parts" class="area">
            <?php
        $args = array(
          'post_type' => 'post',
          'category_name' => 'new-arrivals',
          'posts_per_page' => 10,
        );
        $news_posts = new WP_Query( $args );
        if ( $news_posts->have_posts() ):
        ?>
              <ul>
                <?php while ( $news_posts->have_posts() ): $news_posts->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>">
                  <time datetime="2021-09-23"><?php the_time( 'Y.m.d' ); ?></time>
                  <?php the_title(); ?></a>
                </li>
                <?php endwhile; ?>
              </ul>
              <?php
        wp_reset_postdata();
        endif;
        ?>
              <!--/area--></div>
            <!--/tab-choice-area--></div>
            <a href="/blog/" class="btnlinestretches2 btnlinestretches-light">More</a>
        </div>
        <!--/tab-area--></div>
    </section>
    <?php
        $args = array(
          'post_type' => array('original_guitar','effector','pick_up','amplifier','other'),
          'category_name' => 'pickupitems',
          'posts_per_page' => 8,
        );
        $news_posts = new WP_Query( $args );
        if ( $news_posts->have_posts() ):
        ?>
    <ul id="gallery" class="gallery">
    <?php while ( $news_posts->have_posts() ): $news_posts->the_post(); ?>
      <li class="bgextend bgLRextendTrigger zoomInRotate">
        <div class="bgappearTrigger"><a href="<?php the_permalink(); ?>">
        <span class="mask"><img src="<?php the_field('picture11'); ?>" alt=""></span></a></div>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php
        wp_reset_postdata();
        endif;
        ?>
  
  <?php get_footer(); ?>