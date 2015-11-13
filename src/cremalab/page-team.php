<?php
/**
 * Template Name: Team
 */
?>

<div class="Cremalab__Navbar-BlackHeader">
    <?php get_header(); ?>
</div>

<div class="Cremalab__BlueBackground--upper"></div>



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
    <div class="Cremalab__workHardPlayHardInnerWrapper">

      <img src="/wp-content/uploads/2015/11/WHPH1.jpg" class="Cremalab__workHardPlayHardImage grid-sizer" alt="">
      <img src="/wp-content/uploads/2015/11/WHPH2.jpg" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="/wp-content/uploads/2015/11/WHPH3.jpg" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="/wp-content/uploads/2015/11/WHPH4.jpg" class="Cremalab__workHardPlayHardImage " alt="">

      <img src="/wp-content/uploads/2015/11/WHPH5.jpg" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="/wp-content/uploads/2015/11/WHPH62.jpg" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="/wp-content/uploads/2015/11/WHPH7.jpg" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="/wp-content/uploads/2015/11/WHPH8.jpg" class="Cremalab__workHardPlayHardImage" alt="">

      <img src="/wp-content/uploads/2015/11/WHPH9.jpg" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="/wp-content/uploads/2015/11/WHPH10.jpg" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="/wp-content/uploads/2015/11/WHPH11.jpg" class="Cremalab__workHardPlayHardImage" alt="">
      <img src="/wp-content/uploads/2015/11/WHPH12.jpg" class="Cremalab__workHardPlayHardImage" alt="">
    </div>
  </div>

<div class="Cremalab__BlueBackground--lower">
  <h1 class="Cremalab__pageHeaderTwo Cremalab__teamPage--joinHeader" >Want to join the team?</h1>
  <a href="/careers" class=" Cremalab__linkCopy Cremalab__teamPage--joinAction">Check out our openings</a>
</div>



</div>

<?php get_footer(); ?>






