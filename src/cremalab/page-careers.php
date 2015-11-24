<?php
/**
 * Template Name: Career
 */
?>

<?php

    $joinUsImage1 = get_field('join_us_image_1', 20);
    $joinUsImage2 = get_field('join_us_image_2', 20);
    $joinUsImage3 = get_field('join_us_image_3', 20);
    $joinUsImage4 = get_field('join_us_image_4', 20);
    $joinUsImage5 = get_field('join_us_image_5', 20);

    $joinUsHeader1 = get_field('join_us_text_header_1', 20);
    $joinUsHeader2 = get_field('join_us_text_header_2', 20);
    $joinUsHeader3 = get_field('join_us_text_header_3', 20);
    $joinUsHeader4 = get_field('join_us_text_header_4', 20);
    $joinUsHeader5 = get_field('join_us_text_header_5', 20);

    $joinUsText1 = get_field('join_us_text_content_1', 20);
    $joinUsText2 = get_field('join_us_text_content_2', 20);
    $joinUsText3 = get_field('join_us_text_content_3', 20);
    $joinUsText4 = get_field('join_us_text_content_4', 20);
    $joinUsText5 = get_field('join_us_text_content_5', 20);

?>

<div class="Cremalab__Navbar-BlackHeader">
  <?php get_header(); ?>
</div>

<div class="Cremalab__CareersPageWrapper">

<div class="Cremalab__CareersIntroContainer">


  <div class="Cremalab__CareersIntroFeatures">
      <h1 class="Cremalab__CareersHeader">Together, we create <br> experiences that <br> people love</h1>
      <div class="Cremalab__CareersIntroFeatures--smallImage flex-1">

          <img src="<?php echo $joinUsImage1['url']; ?>" alt="">
      </div>
      <div class="Cremalab__CareersIntroFeatures--wideCopy background-green flex-2">
        <h3 class="Cremalab__CareersIntroFeatures-Header--white "><?php echo $joinUsHeader1?></h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          <?php echo $joinUsText1 ?>
          </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy background-grey flex-3">
        <h3 class="Cremalab__CareersIntroFeatures-Header--blue"><?php echo $joinUsHeader2?></h3>
        <p class="Cremalab__CareersIntroFeatures-text">
            <?php echo $joinUsText2 ?>
        </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--wideImage flex-4" id="Cremalab__Careers--primaryImage"><img src="<?php echo $joinUsImage2['url']; ?>" alt=""></div>

      <div class="Cremalab__CareersIntroFeatures--smallImage flex-5"><img src="<?php echo $joinUsImage3['url']; ?>" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy background-grey flex-6">
        <h3 class="Cremalab__CareersIntroFeatures-Header--green"><?php echo $joinUsHeader3?></h3>
        <p class="Cremalab__CareersIntroFeatures-text">
            <?php echo $joinUsText3 ?>
        </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--smallImage flex-7"><img src="<?php echo $joinUsImage4['url']; ?>" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy background-blue flex-8">
        <h3 class="Cremalab__CareersIntroFeatures-Header--white">
            <?php echo $joinUsHeader4?>
        </h3>
        <p class="Cremalab__CareersIntroFeatures-text">
            <?php echo $joinUsText4 ?>
        </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--smallImage flex-9"><img src="<?php echo $joinUsImage5['url']; ?>" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy background-green flex-10">
        <h3 class="Cremalab__CareersIntroFeatures-Header--white">
            <?php echo $joinUsHeader5?>
        </h3>
        <p class="Cremalab__CareersIntroFeatures-text">
            <?php echo $joinUsText5 ?>
        </p>
      </div>
  </div>

</div>

<div class="Cremalab__CareersListWrapper">
  <div class="Cremalab__CareersListContainer">
  <h1 class="Cremalab__pageHeaderOne Cremalab__CareersListHeader">We're growing, so<br>come on board!</h1>

  <?php
      $args = array( 'post_type' => 'career', 'posts_per_page' => 30 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
        get_template_part('templates/career', 'list');
      endwhile;
    ?>
  </div>


</div>



</div>

</main>
<?php get_footer(); ?>
