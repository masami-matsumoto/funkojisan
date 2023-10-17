<?php get_header(); ?>
<main id="main-area">
<section class="section fixed_page">
<h2>
  <?php the_title(); ?>
</h2>
<?php if (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endif; ?>
</section>

<?php get_footer(); ?>