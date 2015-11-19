
<div class="Cremalab__Navbar-BlackHeader">
  <?php get_header(); ?>
</div>

<div class="Cremalab__BlogIndexPageWrapper">
  <div class="Cremalab__YellowBackground"></div>


  <div class="Cremalab__BlogItemsContainer">
    <?php while (have_posts()) : the_post(); ?>
    <a class="Cremalab__BlogItemLinkBlock" href="<?php the_permalink() ?>">
      <div class="Cremalab__BlogItemWrapper">

        <?php $format = get_post_format( $post_id );
        if($format == 'video'){
          echo '<img class="Cremalab__BlogItem--videoIndicator" src="../wp-content/themes/cremalab/assets/images/videoIndicator.svg" alt="" />';
        }
        ?>

        <!--<img class="Cremalab__BlogItem--indexImage" src="http://placehold.it/300x301">-->
        <?php $postHeaderImage = get_field('post_intro_image') ?>
        <img class="Cremalab__BlogItem--indexImage" src="<?php  echo $postHeaderImage['url'] ?>" alt="">

        <?php  $category = get_the_category(); ?>

        <?php
          if(esc_html($category[0]->name) == 'Culture'){
            echo '<div class="Cremalab__BlogItemCategory--green">';
          }elseif(esc_html($category[0]->name) == 'Products'){
            echo '<div class="Cremalab__BlogItemCategory--red">';
          }elseif(esc_html($category[0]->name) == 'Process'){
            echo '<div class="Cremalab__BlogItemCategory--purple">';
          }elseif(esc_html($category[0]->name) == 'Innovation'){
            echo '<div class="Cremalab__BlogItemCategory--blue">';
          }elseif(esc_html($category[0]->name) == 'Design'){
            echo '<div class="Cremalab__BlogItemCategory--hotPink">';
          }
          else{
            echo '<div class="Cremalab__BlogItemCategory">';
          }
        ?>
          <p><?php echo esc_html($category[0]->name) ?></p>
        </div>





        <div class="Cremalab__BlogItem--TitleContainer">

          <h1 class="Cremalab__BlogItemTitle"><?php the_title(); ?></h1>
          <p class="Cremalab__BlogItemAuthor"><?= get_the_author(); ?></p>
<!--          <a href="--><?php //the_permalink() ?><!--">Read More</a>-->
        </div>

      </div>
  </a>
    <?php endwhile; ?>
  </div>


</div>




</div>



<?php get_footer(); ?>
