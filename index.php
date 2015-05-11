<?php get_header(); ?>
<section id="content" class="col-sm-8" role="main">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      get_template_part('content', get_post_format());
    }
  } else {
    get_template_part('content', '404');
  }
  ?>

</section>

<aside id="sidebar" class="col-sm-4" role="complementary">
  <?php get_sidebar(); ?>
</aside>
<?php get_footer(); ?>
