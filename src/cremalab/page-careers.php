<?php
/**
 * Template Name: Career
 */
?>
<div class="Cremalab__Navbar-BlackHeader">
  <?php get_header(); ?>
</div>

<div class="Cremalab__CareersPageWrapper">

<div class="Cremalab__CareersIntroContainer">
  <h1 class="Cremalab__pageHeaderOne">Together, we create <br> experiences that <br> people love</h1>

  <div class="Cremalab__CareersIntroFeatures">
      <div class="Cremalab__CareersIntroFeatures--smallImage"><img src="http://placehold.it/313x210" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--wideCopy">Wide Copy</div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy">Small Copy</div>
      <div class="Cremalab__CareersIntroFeatures--wideImage"><img src="http://placehold.it/313x210" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallImage"><img src="http://placehold.it/627x210" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy">Small Copy</div>
      <div class="Cremalab__CareersIntroFeatures--smallImage"><img src="http://placehold.it/313x210" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy">Small Copy</div>
      <div class="Cremalab__CareersIntroFeatures--smallImage"><img src="http://placehold.it/313x210" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy">Small Copy</div>
  </div>

</div>



    <?php
    $args = array( 'post_type' => 'career', 'posts_per_page' => 30 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
      get_template_part('templates/career', 'list');
    endwhile;
    ?>

</div>

</main>
<?php get_footer(); ?>
