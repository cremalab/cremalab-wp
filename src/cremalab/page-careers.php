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
      <div class="Cremalab__CareersIntroFeatures--wideCopy background-green">
        <h3 class="Cremalab__CareersIntroFeatures-Header--white">Results Based Culture</h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          We leverage our team's own creative instincts to empower them to work when and where they need to in order to
          deliver the highest results, on time.
          </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy background-grey">
        <h3 class="Cremalab__CareersIntroFeatures-Header--blue">Ever-flowing Coffee</h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          Because we all need it
        </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--wideImage"><img src="http://placehold.it/627x210" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallImage"><img src="http://placehold.it/313x210" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy background-grey">
        <h3 class="Cremalab__CareersIntroFeatures-Header--green">In the heart of kansas city</h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          We're located in the Crossroads District of Kansas City, footsteps away from some of the city's best coffee shops,
          events, and culture.
        </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--smallImage"><img src="http://placehold.it/313x210" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy background-blue">
        <h3 class="Cremalab__CareersIntroFeatures-Header--white">
          Ongoing Learning
        </h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          We want to provide an environment that allows us to exercise our minds, learn new skills, and create amazing experiences,
          together.
        </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--smallImage"><img src="http://placehold.it/313x210" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy background-green">
        <h3 class="Cremalab__CareersIntroFeatures-Header--white">
          Team Happy Hours
        </h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          Part of having a thriving team is enjoying your teammates.  And for that reason we like to get out and enjoy one another's company
          every once in a while.
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
