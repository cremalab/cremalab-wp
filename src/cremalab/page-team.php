<?php
/**
 * Template Name: Team
 */
?>
<div class="Cremalab__Navbar-BlackHeader">
  <?php get_header(); ?>
</div>

<h1>This is the Team page</h1>
    <?php
    $args = array( 'post_type' => 'team_member', 'posts_per_page' => 30 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
      get_template_part('templates/team', 'list');
    endwhile;
    ?>




</main>
