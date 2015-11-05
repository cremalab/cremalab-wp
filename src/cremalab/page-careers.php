<?php
/**
 * Template Name: Career
 */
?>


<?php get_header(); ?>

  <?php
  $args = array( 'post_type' => 'career', 'posts_per_page' => 30 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
    get_template_part('templates/career', 'list');
  endwhile;
  ?>

</main>
<?php get_footer(); ?>
