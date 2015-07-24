<?php
/**
 * Template Name: Donate
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" role="main">
        <div ui-view></div>
      </main>
    </div>
  </div>

  <?php get_ng_templates("donate") ?>

<?php endwhile; ?>
