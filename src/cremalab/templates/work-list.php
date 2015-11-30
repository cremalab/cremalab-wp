<?php $headerImage = get_field('case_study_header_image');?>

<div class="Cremalab__Work-EntryWrapper">


  <?php if($post_count % 2 == 0): ?>


    <div class="Cremalab__Work-ImageContainer"
         style="background: url( <?php echo $headerImage['url']?>) no-repeat top center;
                background-size:cover;"
    >

    </div>


    <div class="Cremalab__Work-TitleContainer">

      <h3 class="Cremalab__Work-TitleContainer--header"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
      <p><?php the_excerpt() ?></p>
      <a class="Cremalab___Work-TitleContainer--caseLink" href="<?php the_permalink()?>"><span class="Cremalab__Work--underline">View Case Study</span></a>
    </div>



  <?php elseif($post_count % 2 !== 0): ?>

    <div class="Cremalab__Work-TitleContainer">

      <h3 class="Cremalab__Work-TitleContainer--header"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
      <p><?php the_excerpt() ?></p>
      <a class="Cremalab___Work-TitleContainer--caseLink" href="<?php the_permalink()?>"><span class="Cremalab__Work--underline">View Case Study</span></a>
    </div>

    <div class="Cremalab__Work-ImageContainer"
         style="background: url( <?php echo $headerImage['url']?>) no-repeat top center;
             background-size:cover;"
    >
    </div>


  <?php endif; ?>




</div>


