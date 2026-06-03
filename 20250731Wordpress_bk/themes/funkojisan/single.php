<?php get_header(); ?>
<main id="main-area">
<section class="section">
<h2>
  <?php the_title(); ?>
</h2>
<div class="content-area">
<?php if (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endif; ?>
</div>
<p class="detail-btn"><a href="https://funkojisan.com/blog/" class="btn">一覧に戻る</a></p>
</section>

<?php get_footer(); ?>