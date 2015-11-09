<?php
/**
 * Template Name: Team
 */
?>

<div class="Cremalab__Navbar-BlackHeader">
    <?php get_header(); ?>
</div>

<div class="Cremalab__BlueBackground--upper"></div>

<div class="Cremalab__lowerWhiteBackground"></div>

<div class="Cremalab__teamPageWrapper">

  <h1 class="Cremalab__teamPageWrapper--pageHeader">Meet The Team</h1>
  <div class="Cremalab__teamContainer">

        <?php
        $args = array( 'post_type' => 'team_member', 'posts_per_page' => 30 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
          get_template_part('templates/team', 'list');
        endwhile;
        ?>
  </div>

  <div class="Cremalab__workHardPlayHardWrapper">
    <h1>Picture Things here</h1>
    <ul>
    <li>Picture</li>
    <li>Picture</li>
    <li>Picture</li>
    <li>Picture</li>
    <li>Picture</li>
    <li>Picture</li>
    <li>Picture</li>
    <li>Picture</li>
    <li>Picture</li>
    <li>Picture</li>
    <li>Picture</li>
    <li>Picture</li></ul>
  </div>

<div class="Cremalab__BlueBackground--lower"></div>

<?php get_footer(); ?>

</div>






