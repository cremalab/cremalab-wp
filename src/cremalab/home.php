
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
        <?php $postHeaderImage = get_field('post_intro_image') ?>
        <img class="Cremalab__BlogItem--indexImage" src="<?php  echo $postHeaderImage['url'] ?>" alt="">
        <?php
          $display_category = get_field('display_category');
          if($display_category == 'culture'){
            echo '<div class="Cremalab__BlogItemCategory--green">';
          }elseif($display_category == 'products'){
            echo '<div class="Cremalab__BlogItemCategory--red">';
          }elseif($display_category == 'process'){
            echo '<div class="Cremalab__BlogItemCategory--purple">';
          }elseif($display_category == 'innovation'){
            echo '<div class="Cremalab__BlogItemCategory--blue">';
          }elseif($display_category == 'design'){
            echo '<div class="Cremalab__BlogItemCategory--hotPink">';
          }elseif($display_category == 'development') {
            echo '<div class="Cremalab__BlogItemCategory--orange">';
          }else{
            echo '<div class="Cremalab__BlogItemCategory">';
          }
        ?>
        <p><?php echo $display_category ?></p>

      </div>
        <div class="Cremalab__BlogItem--TitleContainer">
          <h1 class="Cremalab__BlogItemTitle"><?php the_title(); ?></h1>
          <p class="Cremalab__BlogItemAuthor"><?= get_the_author(); ?></p>
        </div>
      </div>
  </a>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
