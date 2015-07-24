<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" role="main">
        <?php get_template_part('templates/content', 'page'); ?>
      </main>
    </div>
  </div>
<?php endwhile; ?>
