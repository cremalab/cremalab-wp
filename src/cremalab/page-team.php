<?php
/**
 * Template Name: Team
 */
?>

<div class="Cremalab__Navbar-BlackHeader">
    <?php get_header(); ?>
</div>





<div class="Cremalab__teamPageWrapper">
  <div class="Cremalab__teamContainer--centerWrapper">
    <div class="Cremalab__teamContainer">

        <?php
        $args = array( 'post_type' => 'team_member', 'posts_per_page' => 30 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
          get_template_part('templates/team', 'list');
        endwhile;
        ?>


    </div>
  </div>


  <?php

  $joinUsImage1 = get_field('join_us_image_1', 27);
  $joinUsImage2 = get_field('join_us_image_2', 27);
  $joinUsImage3 = get_field('join_us_image_3', 27);
  $joinUsImage4 = get_field('join_us_image_4', 27);
  $joinUsImage5 = get_field('join_us_image_5', 27);
  $joinUsImage6 = get_field('join_us_image_6', 27);

  $joinUsHeader1 = get_field('join_us_text_header_1', 27);
  $joinUsHeader2 = get_field('join_us_text_header_2', 27);
  $joinUsHeader3 = get_field('join_us_text_header_3', 27);
  $joinUsHeader4 = get_field('join_us_text_header_4', 27);
  $joinUsHeader5 = get_field('join_us_text_header_5', 27);
  $joinUsHeader6 = get_field('join_us_text_header_6', 27);

  $joinUsText1 = get_field('join_us_text_content_1', 27);
  $joinUsText2 = get_field('join_us_text_content_2', 27);
  $joinUsText3 = get_field('join_us_text_content_3', 27);
  $joinUsText4 = get_field('join_us_text_content_4', 27);
  $joinUsText5 = get_field('join_us_text_content_5', 27);
  $joinUsText6 = get_field('join_us_text_content_6', 27);

  ?>


  <div class="Cremalab__CareersIntroContainer">
    <h1 class="Cremalab__CareersHeader">Together, we solve problems <br>that better lives</h1>
    <div class="CremalabCareersIntroFirstRow">
      <div class="Cremalab__CareersIntroFeatures--smallImage"
           style="background: url( <?php echo $joinUsImage1['url']?>) no-repeat top center;
           background-size:cover;">

      </div>
      <div class="Cremalab__CareersIntroFeatures--wideCopy  flex-2">
        <h3 class="Cremalab__CareersIntroFeatures-Header"><?php echo $joinUsHeader1?></h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          <?php echo $joinUsText1 ?>
        </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--smallImage flex-4"
           style="background: url( <?php echo $joinUsImage2['url']?>) no-repeat top center;
           background-size:cover;">
      </div>
    </div>


    <div class="CremalabCareersIntroSecondRow">
      <div class="Cremalab__CareersIntroFeatures--smallCopy flex-3">
        <h3 class="Cremalab__CareersIntroFeatures-Header"><?php echo $joinUsHeader2?></h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          <?php echo $joinUsText2 ?>
        </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--wideImage flex-5"
           style="background: url( <?php echo $joinUsImage3['url']?>) no-repeat top center;
           background-size:cover;">

      </div>


      <div class="Cremalab__CareersIntroFeatures--smallCopy flex-6">
        <h3 class="Cremalab__CareersIntroFeatures-Header"><?php echo $joinUsHeader3?></h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          <?php echo $joinUsText3 ?>
        </p>
      </div>

    </div>


    <div class="CremalabCareersIntroThirdRow">
      <div class="Cremalab__CareersIntroFeatures--smallImage flex-7"
           style="background: url( <?php echo $joinUsImage4['url']?>) no-repeat top center;
           background-size:cover;">
      </div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy flex-8">
        <h3 class="Cremalab__CareersIntroFeatures-Header">
          <?php echo $joinUsHeader4?>
        </h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          <?php echo $joinUsText4 ?>
        </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--wideImage flex-9"
           style="background: url( <?php echo $joinUsImage5['url']?>) no-repeat top center;
           background-size:cover;">
    </div>


    </div>

    <div class="CremalabCareersIntroFourthRow">
      <div class="Cremalab__CareersIntroFeatures--smallCopy flex-10">
        <h3 class="Cremalab__CareersIntroFeatures-Header">
          <?php echo $joinUsHeader5?>
        </h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          <?php echo $joinUsText5 ?>
        </p>
      </div>

      <div class="Cremalab__CareersIntroFeatures--smallImage flex-9"
           style="background: url( <?php echo $joinUsImage6['url']?>) no-repeat top center;
           background-size:cover;">
      </div>

      <div class="Cremalab__CareersIntroFeatures--wideCopy flex-2">
        <h3 class="Cremalab__CareersIntroFeatures-Header"><?php echo $joinUsHeader6?></h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          <?php echo $joinUsText6 ?>
        </p>
      </div>



    </div>








    </div>

  </div>





  <div class="Cremalab__CareersListWrapper">
    <div class="Cremalab__CareersListContainer">
      <h1 class="Cremalab__CareersListHeader">We're growing, so<br>come on board!</h1>

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

<?php get_footer(); ?>






