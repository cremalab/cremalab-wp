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



      <?php
      $image1 = get_field('workhardimage1', 27);
      $image2 = get_field('workhardimage2', 27);
      $image3 = get_field('workhardimage3', 27);
      $image4 = get_field('workhardimage4', 27);
      $image5 = get_field('workhardimage5', 27);
      $image6 = get_field('workhardimage6', 27);
      $image7 = get_field('workhardimage7', 27);
      $image8 = get_field('workhardimage8', 27);
      $image9 = get_field('workhardimage9', 27);
      $image10 = get_field('workhardimage10', 27);
      $image11 = get_field('workhardimage11', 27);
      $image12 = get_field('workhardimage12', 27);
      ?>

      <img src="<?php echo $image1['url']; ?>" alt="Image1" class="Cremalab__workHardPlayHardImage">
      <img src="<?php echo $image2['url']; ?>" alt="Image1" class="Cremalab__workHardPlayHardImage">
      <img src="<?php echo $image3['url']; ?>" alt="Image1" class="Cremalab__workHardPlayHardImage">
      <img src="<?php echo $image4['url']; ?>" alt="Image1" class="Cremalab__workHardPlayHardImage">

      <img src="<?php echo $image5['url']; ?>" alt="Image1" class="Cremalab__workHardPlayHardImage">
      <img src="<?php echo $image6['url']; ?>" alt="Image1"  class="Cremalab__workHardPlayHardImage">
      <img src="<?php echo $image7['url']; ?>" alt="Image1" class="Cremalab__workHardPlayHardImage">
      <img src="<?php echo $image8['url']; ?>" alt="Image1" class="Cremalab__workHardPlayHardImage">

      <img src="<?php echo $image9['url']; ?>" alt="Image1" class="Cremalab__workHardPlayHardImage">
      <img src="<?php echo $image10['url']; ?>" alt="Image1"  class="Cremalab__workHardPlayHardImage">
      <img src="<?php echo $image11['url']; ?>" alt="Image1"  class="Cremalab__workHardPlayHardImage">
      <img src="<?php echo $image12['url']; ?>" alt="Image1"  class="Cremalab__workHardPlayHardImage">
    </div>
  </div>

<div class="Cremalab__BlueBackground--lower">
  <h1 class="Cremalab__pageHeaderTwo Cremalab__teamPage--joinHeader" >Want to join the team?</h1>
  <a href="/careers" class=" Cremalab__linkCopy Cremalab__teamPage--joinAction">Check out our openings</a>
</div>



</div>

<?php get_footer(); ?>






