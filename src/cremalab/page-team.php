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
    <div class="Cremalab__workHardPlayHardInnerWrapper js-masonry"
      data-masonry-options='{
        "itemSelector": ".Cremalab__workHardPlayHardImage",
        "columnWidth" : ".grid-sizer"

      }'>

      <img src="http://placehold.it/299x200" class="Cremalab__workHardPlayHardImage grid-sizer" alt="">
      <img src="http://placehold.it/299x200" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="http://placehold.it/299x200" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="http://placehold.it/299x400" class="Cremalab__workHardPlayHardImage " alt="">

      <img src="http://placehold.it/299x400" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="http://placehold.it/299x200" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="http://placehold.it/299x200" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="http://placehold.it/299x200" class="Cremalab__workHardPlayHardImage" alt="">

      <img src="http://placehold.it/299x200" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="http://placehold.it/299x400" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="http://placehold.it/299x200" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="http://placehold.it/299x200" class="Cremalab__workHardPlayHardImage" alt="">
    </div>
  </div>

<div class="Cremalab__BlueBackground--lower">
  <h1 class="Cremalab__pageHeaderTwo Cremalab__teamPage--joinHeader" >Want to join the team?</h1>
  <a href="/careers" class=" Cremalab__linkCopy Cremalab__teamPage--joinAction">Check out our openings</a>
</div>



</div>

<?php get_footer(); ?>






