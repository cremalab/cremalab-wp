<?php
/**
 * Template Name: Approach
 */
?>

<?php $approachHeroImage= get_field('approach_hero_image')?>


<div class="Cremalab__ApproachPageWrapper">
  <div class="Cremalab__Navbar-BlackHeader">
    <?php get_header(); ?>
  </div>
  <div class="Cremalab__ApproachPage-HeroWrapper"
    style=" background: url( <?php echo $approachHeroImage['url']?>) no-repeat center;
                background-size:cover;"
    >
    <div class="Cremalab__ApproachPageHeaderWrapper">
      <h1 class="Cremalab__ApproachPageHeading">We turn good <br> ideas into great <br> product experiences</h1>
    </div>
  </div>
  <h1 class="Cremalab__ApproachPage-StartupHeader">A startup team for hire</h1>
  <div class="Cremalab__ApproachPage-StartupTeamWrapper">


    <div class="Cremalab__ApproachPage-StartupTeam--subItem">
        <p class="Cremalab__ApproachPage-StartupTeam--subItemContent">Discovery</p>
        <p class="Cremalab__ApproachPage-StartupTeam--subItemContent">Strategy</p>
        <p class="Cremalab__ApproachPage-StartupTeam--subItemContent">Business Model Validation</p>
        <p class="Cremalab__ApproachPage-StartupTeam--subItemContent">Market Research</p>
    </div>
    <div class="Cremalab__ApproachPage-StartupTeam--subItem">
        <p class="Cremalab__ApproachPage-StartupTeam--subItemContent">Responsive web design</p>
        <p class="Cremalab__ApproachPage-StartupTeam--subItemContent">Visual Design</p>
        <p class="Cremalab__ApproachPage-StartupTeam--subItemContent">Branding</p>
        <p class="Cremalab__ApproachPage-StartupTeam--subItemContent">User Testing</p>
    </div>
    <div class="Cremalab__ApproachPage-StartupTeam--subItem">
        <p class="Cremalab__ApproachPage-StartupTeam--subItemContent">Web app development</p>
        <p class="Cremalab__ApproachPage-StartupTeam--subItemContent">Front-end development</p>
        <p class="Cremalab__ApproachPage-StartupTeam--subItemContent">Information Architecture</p>
        <p class="Cremalab__ApproachPage-StartupTeam--subItemContent">Usability testing</p>
    </div>


  <div class="Cremalab__ApproachPage-ProcessWrapper">

      <h1 class="CremalabApproachPage--ProcessHeader">A cross-disciplinary team</h1>
      <div class="CremalabApproachPage--crossDisciplineImage"></div>
      <!-- <img class="CremalabApproachPage--crossDisciplineImage" src="https://s3.amazonaws.com/cremalab/wp-cremalab/Images/cross_disciplanary_approach.png" alt=""> -->

    <div class="Cremalab__ApproachPage-ProcessAnimationWrapper">
        <h1 class="CremalabApproachPage--ProcessHeader">An iterative approach</h1>
        <img class="Cremalab__ApproachPage--processImage"   src="http://placehold.it/1200x400?text=Iterative+Approach+Wikkity+Wah+Wah+George+Animation" alt="">
    </div>

  </div>

</div>



<?php get_footer(); ?>
