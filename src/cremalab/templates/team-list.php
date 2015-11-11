
<?php
  $image = get_field('team_member_photo');
?>

  <div class="Cremalab__teamMemberWrapper">
        <img src="<?php echo $image['url'] ?>" alt="" class="Cremalab__teamMemberPhoto">



    <div class="Cremalab__teamMemberInfo animated once slideInUp">
      <p class="Cremalab__teamQuestionsCopy">Favorite Movie: <span class="Cremalab__teamAnswersCopy"><?php the_field('favorite_movie') ?></span></p>
      <p class="Cremalab__teamQuestionsCopy">Favorite thing about kansas: <span class="Cremalab__teamAnswersCopy"><?php the_field('favorite_kc_thing') ?></span></p>
      <p class="Cremalab__teamQuestionsCopy">City: <span class="Cremalab__teamAnswersCopy">CITY</span></p>
      <p class="Cremalab__teamQuestionsCopy">Favorite kc restaurant: <span class="Cremalab__teamAnswersCopy"><?php the_field('favorite_kc_restaurant') ?></span></p>
      <p class="Cremalab__teamQuestionsCopy">The one thing you could eat every day: <span class="Cremalab__teamAnswersCopy"><?php the_field('every_day_eat') ?></span></p>
      <p class="Cremalab__teamQuestionsCopy">WHat you wanted to be when you grew up: <span class="Cremalab__teamAnswersCopy"><?php the_field('be_when_grow_up') ?></span></p>
      <p class="Cremalab__teamQuestionsCopy">What would your super power be: <span class="Cremalab__teamAnswersCopy"><?php the_field('super_power') ?></span></p>
      <p class="Cremalab__teamQuestionsCopy">Also involved in: <span class="Cremalab__teamAnswersCopy"><?php the_field('also_involved_in') ?></span></p>
    </div>
    <div class="Cremalab__teamMemberNameTitle">
      <h3 class="Cremalab__teamMemberName"><?php the_field('employee_name') ?></h3>
      <p class="Cremalab__teamMemberTitle"><?php the_field('title') ?></p>
    </div>


  </div>



