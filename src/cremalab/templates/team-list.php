
<?php $image = get_field('team_member_photo');?>
<?php $goofyImage = get_field('team_member_goofy_photo');?>



  <div class="Cremalab__teamMemberWrapper">
  <?php $size='medium';?>
    <div class="Cremalab__teamMemberPhoto"
      style="background: url( <?php echo $image['sizes'][$size];?>) no-repeat top center;
                background-size:cover;"
    ></div>
    <div class="Cremalab__teamMemberPhotoGoofy"
      style="background: url( <?php echo $goofyImage['sizes'][$size];?>) no-repeat top center;
                background-size:cover;"
    ></div>



    <div class="Cremalab__teamMemberNameTitle">
      <h3 class="Cremalab__teamMemberName"><?php the_field('employee_name') ?></h3>
      <p class="Cremalab__teamMemberTitle"><?php the_field('title') ?></p>
    </div>

  </div>


