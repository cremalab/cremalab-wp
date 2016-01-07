




<?php if( my_wp_is_mobile() ): ?>
  <div class="Cremalab__Homepage--pageWrapper">
<?php get_header('mobile'); ?>
  <img class="Cremalab__Homepage-MobileLogo" src="https://s3.amazonaws.com/cremalab/wp-cremalab/Images/Crema_logo.png" alt="Crema" />
<?php  else: ?>
  <div class="Cremalab__Homepage--pageWrapper">
  <?php get_header(); ?>
  <div class="Cremalab__Homepage--videoWrapper">

    <video loop autoplay muted>
      <source src="https://s3.amazonaws.com/cremalab/wp-cremalab/video/Crema+Culture+v4-HD.mp4">
    </video>
  </div>

<?php endif; ?>

  </div>






<div class="Cremalab__Homepage-Approach">

    <h1 class="Cremalab__Homepage-Approach--header">What we do</h1>
    <h3 class="Cremalab__Homepage-Approach--subheader">We create the best solutions that solve problems and better lives</h3>
    <a class="Cremalab__Homepage-Approach--byline" href="/approach"><span class="Cremalab__Homepage-Approach--underline"><span>Check out our approach</span></span></a>
</div>


<div class="Cremalab__HomepageCaseStudyList">
<?php
    $args = array( 'post_type' => 'work', 'posts_per_page' => 4 );
    $loop = new WP_Query( $args );
    $count = 0;
    while ( $loop->have_posts() ) : $loop->the_post();
        set_query_var('post_count', $count);
        get_template_part('templates/workH', 'list');
        $count++;
    endwhile; ?>

</div>
<?php get_footer(); ?>
