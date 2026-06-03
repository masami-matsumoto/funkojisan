<?php if ( is_home() ) { ?>
<div class="bgextend bgLRextendTrigger">
      <div class="bgappearTrigger">
        <section id="contact">
          <div class="contact-detail"> <a href="/contact/">
            <h2>Contact</h2>
            <p>お気軽にお問い合わせください。</p>
            <!--/contact-detail--></a></div>
        </section>
        <!--/bgappearTrigger--></div>
      <!--/bgextend--></div>
      <?php } else { ?>
        <div class="bgextend">
      <div class="">
        <section id="contact">
          <div class="contact-detail"> <a href="/contact/">
            <h2>Contact</h2>
            <p>お気軽にお問い合わせください。</p>
            <!--/contact-detail--></a></div>
        </section>
        <!--/bgappearTrigger--></div>
      <!--/bgextend--></div>
      <?php } ?>  
  </main>
<footer id="footer">
    <div class="footer-info">
      <p class="footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/funkojisan_white_w.png"></p>
      <address>
      〒185-0021<br>
      東京都国分寺市南町2丁目1-13<br>
      国分寺駅南口より徒歩7分
      </address>
      <ul>
        <li>
          <dl>
            <dt>営業時間</dt>
            <dd>不定</dd>
            <dd>当店は完全予約制となっております、他のお客様のご迷惑となりますのでご来店の際は必ず事前にメールにてご連絡ください。</dd>
          </dl>
        </li>
      </ul>
    </div>
    <div class="footer-link">
    <?php wp_nav_menu(
          array(
              'theme_location' => 'place_footer',
              'container' => false,
              )
              );
		?>
      <!-- <ul>
        <li><a href="#">特定商取引法に基づく表記・古物営業法に基づく表記</a></li>
        <li><a href="#">プライバシーポリシーについて</a></li>
        <li><a href="#">修理保証について</a></li>
        <li><a href="#">よくある質問(FAQ)</a></li>
        <li><a href="#">スタッフ募集</a></li>
      </ul> -->
      <small>Copyright &copy; ギター屋funk ojisan All Rights Reserved.</small> </div>
    <p id="page-top" class="hide-btn"><a href="#"><span></span></a></p>
  </footer>
  
  <!--/container--></div>

<!--=============JS ===============--> 
<!--jQuery--> 
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
<!--機能編 6-1-4 動きを組み合わせて全画面で見せる--> 
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
<!--機能編 6-2-1 複数の画像を一覧で見せる--> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script> 
<!--印象編　8-6 アルファベットがランダムに変化して出現--> 
<script src="https://cdn.jsdelivr.net/npm/shuffle-text@0.3.0/build/shuffle-text.min.js"></script> 
<!--自作のJS--> 
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php if(  is_singular( 'original_guitar' ) || is_singular( 'amplifier' ) || is_singular('effector') || is_singular('pick_up') || is_singular('other') ) :?>
<script>
	$(function () {
  // メイン画像のオプション
  $(".slider").slick({
    autoplay: false, // 自動再生ON
    arrows: false, // 矢印非表示  
	fade: true,  
    asNavFor: ".thumbnail", // サムネイルと同期  
  });
  // サムネイルのオプション
  $(".thumbnail").slick({
    slidesToShow: 10, // サムネイルの表示数
    asNavFor: ".slider", // メイン画像と同期
    focusOnSelect: true, // サムネイルクリックを有効化
  });
});
	</script>
  <?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>