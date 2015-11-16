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


  <div class="Cremalab__CareersIntroFeatures">
      <h1 class="Cremalab__pageHeaderOne Cremalab__CareersHeader">Together, we create <br> experiences that <br> people love</h1>
      <div class="Cremalab__CareersIntroFeatures--smallImage flex-1"><img src="http://placehold.it/313x210?text=FLEX-1" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--wideCopy background-green flex-2">
        <h3 class="Cremalab__CareersIntroFeatures-Header--white ">Results Based Culture</h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          We leverage our team's own creative instincts to empower them to work when and where they need to in order to
          deliver the highest results, on time. FLEX-2
          </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy background-grey flex-3">
        <h3 class="Cremalab__CareersIntroFeatures-Header--blue">Ever-flowing Coffee</h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          Because we all need it FLEX-3
        </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--wideImage flex-4" id="Cremalab__Careers--primaryImage"><img src="http://placehold.it/626x210?text=FLEX-4" alt=""></div>

      <div class="Cremalab__CareersIntroFeatures--smallImage flex-5"><img src="http://placehold.it/313x210?text=FLEX-5" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy background-grey flex-6">
        <h3 class="Cremalab__CareersIntroFeatures-Header--green">In the heart of kansas city</h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          We're located in the Crossroads District of Kansas City, footsteps away from some of the city's best coffee shops,
          events, and culture. FLEX-6
        </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--smallImage flex-7"><img src="http://placehold.it/313x210?text=FLEX-7" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy background-blue flex-8">
        <h3 class="Cremalab__CareersIntroFeatures-Header--white">
          Ongoing Learning FLEX-8
        </h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          We want to provide an environment that allows us to exercise our minds, learn new skills, and create amazing experiences,
          together.
        </p>
      </div>
      <div class="Cremalab__CareersIntroFeatures--smallImage flex-9"><img src="http://placehold.it/313x210?text=FLEX-9" alt=""></div>
      <div class="Cremalab__CareersIntroFeatures--smallCopy background-green flex-10">
        <h3 class="Cremalab__CareersIntroFeatures-Header--white">
          Team Happy Hours
        </h3>
        <p class="Cremalab__CareersIntroFeatures-text">
          Part of having a thriving team is enjoying your teammates.  And for that reason we like to get out and enjoy one another's company
          every once in a while. FLEX-10
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
