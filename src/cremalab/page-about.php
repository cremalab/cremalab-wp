<?php
/**
 * Template Name: About
 */
?>


<div class="Cremalab__Navbar--about">
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


  <h2 class="Cremalab__About--subheader"><span class="Cremalab__About--number">1.</span>Trust</h2>
  <div class="Cremalab__About-TrustTriangleWrapper">

      <img class="Cremalab__About-image" src="https://s3.amazonaws.com/cremalab/wp-cremalab/Images/trustTriangle.png" alt="Trust">


  </div>
  <div class="Cremalab__AboutCopyWrapper">
    <p class="Cremalab__About-copy" >Our team works to earn the trust of our clients and vendors.
      We don't take it lightly.  At the end of the day, we want to lead our clients to the best possible outcome for
      their business</p>
  </div>

  <div class="Cremalab__About--separatorLine"></div>


  <h2 class="Cremalab__About--subheader"><span class="Cremalab__About--number">2.</span> Constant Improvement</h2>
    <img class="Cremalab__About-image" src="https://s3.amazonaws.com/cremalab/wp-cremalab/Images/improvementShapes.png" alt="Constant Improvement">

  <div class="Cremalab__AboutCopyWrapper">
    <p class="Cremalab__About-copy">We will constantly improve ourselves, our product experiences, and our company.</p>
  </div>


  <div class="Cremalab__About--separatorLine"></div>


  <h2 class="Cremalab__About--subheader"><span class="Cremalab__About--number">3.</span> Collaboration</h2>
    <img class="Cremalab__About-image" src="https://s3.amazonaws.com/cremalab/wp-cremalab/Images/collaborationCaterpillars.png" alt="Collaboration">

  <div class="Cremalab__AboutCopyWrapper">
    <p class="Cremalab__About-copy">We believe that a truly great product experience is only as good as the team that
      creates it.  We become an extension of your team and your become and extension of ours.</p>
  </div>



  <div class="Cremalab__About--separatorLine"></div>


  <h2 class="Cremalab__About--subheader"><span class="Cremalab__About--number">4.</span> Results</h2>
    <img class="Cremalab__About-image" src="https://s3.amazonaws.com/cremalab/wp-cremalab/Images/resultsThing.png" alt="Results">

  <div class="Cremalab__AboutCopyWrapper">
    <p class="Cremalab__About-copy">We desire to build product experiences that move people, solve problems for our
      clients, and ultimately create measurable value for the customers they serve.</p>
  </div>

  <div class="Cremalab__About--separatorLine"></div>

  <h2 class="Cremalab__About--subheader"><span class="Cremalab__About--number">5.</span> Generosity</h2>
    <img class="Cremalab__About-image" src="https://s3.amazonaws.com/cremalab/wp-cremalab/Images/generosityBlackHole.png" alt="Generosity">

  <div class="Cremalab__AboutCopyWrapper">
    <p class="Cremalab__About-copy">We desire to be generous with our time, talents and influence to get the right
      things done for the good of others.</p>
  </div>

</div>



<?php get_footer(); ?>
