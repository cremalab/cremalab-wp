<?php
/**
 * Template Name: About
 */
?>


<div class="Cremalab__Navbar-BlackHeader">
  <?php get_header(); ?>
</div>
<?php
  $trustImage = get_field('about_first_image');
  $improvementImage = get_field('about_second_image');
  $collaborationImage = get_field('about_third_image');
  $resultsImage = get_field('about_fourth_image');
  $generosityImage = get_field('about_fifth_image');
?>
<div class="Cremalab__About-Wrapper">
  <h1 class="Cremalab__About--header">Our Vision</h1>
  <h3  class="Cremalab__About--byline">We will create the best solutions that solve problems and better lives</h3>
  <div class="Cremalab__About--separatorLine"></div>

  <h1 class="Cremalab__About--header">Our values</h1>
  <div class="Cremalab__About--hightlightLine"></div>


  <h2 class="Cremalab__About--subheader">1. Trust</h2>
  <div class="Cremalab__About-TrustTriangleWrapper">

      <img class="Cremalab__About-image" src=" <?php echo $trustImage['url']?>" alt="">

    
  </div>
  <div class="Cremalab__AboutCopyWrapper">
    <p class="Cremalab__About-copy" >Our team works to earn the trust of our clients and vendors.
      We don't take it lightly.  At the end of the day, we want to lead our clients to the best possible outcome for
      their business</p>
  </div>

  <div class="Cremalab__About--separatorLine"></div>


  <h2 class="Cremalab__About--subheader">2. Constant Improvement</h2>
    <img class="Cremalab__About-image" src=" <?php echo $improvementImage['url']?>" alt="">

  <div class="Cremalab__AboutCopyWrapper">
    <p class="Cremalab__About-copy">We will constantly improve ourselves, our product experiences, and our company.</p>
  </div>


  <div class="Cremalab__About--separatorLine"></div>


  <h2 class="Cremalab__About--subheader">3. Collaboration</h2>
    <img class="Cremalab__About-image" src=" <?php echo $collaborationImage['url']?>" alt="">

  <div class="Cremalab__AboutCopyWrapper">
    <p class="Cremalab__About-copy">We believe that a truly great product experience is only as good as the team that
      creates it.  We become an extension of your team and your become and extension of ours.</p>
  </div>



  <div class="Cremalab__About--separatorLine"></div>


  <h2 class="Cremalab__About--subheader">4. Results</h2>
    <img class="Cremalab__About-image" src=" <?php echo $resultsImage['url']?>" alt="">

  <div class="Cremalab__AboutCopyWrapper">
    <p class="Cremalab__About-copy">We desire to build product experiences that move people, solve problems for our
      clients, and ultimately create measurable value for the customers they serve.</p>
  </div>

  <div class="Cremalab__About--separatorLine"></div>

  <h2 class="Cremalab__About--subheader">5. Generosity</h2>
    <img class="Cremalab__About-image" src=" <?php echo $generosityImage['url']?>" alt="">

  <div class="Cremalab__AboutCopyWrapper">
    <p class="Cremalab__About-copy">We desire to be generous with our time, talents and influence to get the right
      things done for the good of others.</p>
  </div>

</div>



<?php get_footer(); ?>
