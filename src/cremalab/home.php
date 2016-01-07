<!--USED FOR BLOG POSTS-->

<div class="Cremalab__Navbar-BlackHeader">
  <?php if( my_wp_is_mobile() ): ?>
  <div class="Cremalab__Navbar--blog">
    <?php get_header('mobile'); ?>
  </div>
  <?php else: ?>

  <div class="Cremalab__Navbar-BlackHeader">
    <?php get_header(); ?>
  </div>
  <?php endif?>


<div class="Cremalab__BlogIndexPageWrapper">

  <div class="Cremalab__BlogItemsContainer">
    <?php while (have_posts()) : the_post(); ?>

      <?php
      $postHeaderImage = get_field('blog_index_image');
      $postTitle = get_field('blog_title');
      $postAuthor = get_field('blog_author');
      $postLink = get_field('blog_link');
      $postType = get_field('blog_post_type');
      ?>

    <a class="Cremalab__BlogItemLinkBlock" href="<?php echo $postLink ?>" target="_blank">
      <div class="Cremalab__BlogItemWrapper">
        <?php
        if($postType == 'Video'){
          echo '<img class="Cremalab__BlogItem--videoIndicator" src="../wp-content/themes/cremalab/assets/images/videoIndicator.svg" alt="" />';
        }
        ?>

        <img class="Cremalab__BlogItem--indexImage" src="<?php  echo $postHeaderImage['url'] ?>" alt="">

        <div class="Cremalab__BlogItem--TitleContainer">
          <h1 class="Cremalab__BlogItemTitle"><?php echo $postTitle; ?></h1>
          <p class="Cremalab__BlogItemAuthor"><?php echo $postAuthor; ?></p>
        </div>
      </div>
  </a>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
