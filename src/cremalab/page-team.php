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
    <h1 class="Cremalab__workHardPlayHard--header">Work Hard, play hard</h1>
    <div class="Cremalab_workHardPlayHardInnerWrapper">

      <img src="http://placehold.it/299x200" alt="">
      <img src="http://placehold.it/299x200" alt="">
      <img src="http://placehold.it/299x200" alt="">
      <img src="http://placehold.it/299x400" alt="">
      <img src="http://placehold.it/299x400" alt="">
      <img src="http://placehold.it/299x200" alt="">
      <img src="http://placehold.it/299x200" alt="">
      <img src="http://placehold.it/299x200" alt="">
      <img src="http://placehold.it/299x200" alt="">
      <img src="http://placehold.it/299x400" alt="">
      <img src="http://placehold.it/299x200" alt="">
      <img src="http://placehold.it/299x200" alt="">
    </div>
  </div>

<div class="Cremalab__BlueBackground--lower"></div>

<?php get_footer(); ?>

</div>






