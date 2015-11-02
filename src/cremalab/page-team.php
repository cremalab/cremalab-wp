<?php
/**
 * Template Name: Team
 */
?>

<main class="layout-main-content">

  <header class="layout-header sub-team">
    <div class="layout-content">
      <h1>The faces behind the beaker.</h1>
    </div>
  </header>
  <div class="layout-grid sub-three">
    <?php 
    $args = array( 'post_type' => 'team_member', 'posts_per_page' => 30 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
      get_template_part('templates/team', 'list');
    endwhile;
    ?>
  </div>

  <a class="layout-footer" href="/contact">
    <span class="text">Ready to get started? Let's chat.</span>
    <span class="text icon-arrow-right"></span>
    <div class="sub-bg sub-contact"></div>
  </a>

</main>
