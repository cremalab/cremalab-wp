<?php $headerImage = get_field('case_study_header_image');?>

<div class="Cremalab__Work-EntryWrapper">

  <div class="Cremalab__Work-MainContainer">
    <img src=" <?php echo $headerImage['url'] ?>" alt="" class="Cremalab__Work-HeaderImage">
    <h3 class="Cremalab__WorkSubheader"><a href="#"><?php the_title() ?></a></h3>
  </div>


<!--  <div class="Cremalab__Work-HoverContainer">-->
<!--    <h3 class="Cremalab__WorkSubheader--Hover"><a href="#">--><?php //the_title() ?><!--</a></h3>-->
<!--    <p>--><?php //the_excerpt() ?><!--</p>-->
<!--    <a class="" href="--><?php //the_field('work_link') ?><!--">Case Study</a>-->
<!--  </div>-->


</div>


