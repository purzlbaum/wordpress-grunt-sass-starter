<?php get_header(); ?>
<div class="container">
  <div class="row">
    <section id="content" class="col-sm-8" role="main">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          get_template_part('template-parts/content', get_post_format());
        }
      } else {
        get_template_part('template-parts/content', '404');
      }
      ?>
    </section>

    <aside id="sidebar" class="col-sm-4" role="complementary">
      <?php get_sidebar( 'sidebar-1' ); ?>
    </aside>
  </div>
</div>
<?php get_footer(); ?>
