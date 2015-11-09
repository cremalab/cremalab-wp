
<?php
  $image = get_field('team_member_photo');
?>

  <div class="Cremalab__teamMemberWrapper">
        <img src="<?php echo $image['url'] ?>" alt="" class="Cremalab__teamMemberPhoto">
        <h3 class="Cremalab__teamMemberName"><?php the_field('employee_name') ?></h3>
        <p class="Cremalab__teamMemberTitle"><?php the_field('title') ?></p>
  </div>



