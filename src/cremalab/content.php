

<div class="Cremalab__Navbar--work">
    <?php get_header(); ?>
</div>

<?php
  $client1=get_field('client_logo_1', 52);
  $client2=get_field('client_logo_2', 52);
  $client3=get_field('client_logo_3', 52);
  $client4=get_field('client_logo_4', 52);
?>

<?php

    $args = array( 'post_type' => 'work', 'posts_per_page' => 10);
    $loop = new WP_Query( $args );
    $count = 0;
    while ( $loop->have_posts() ) : $loop->the_post();
        set_query_var('post_count', $count);
        get_template_part('templates/work', 'list');
        $count++;
    endwhile; ?>

<div class="Cremalab-Work-Clients">


<div class="Cremalab__Work--clientLogo"
  style=" background: url( <?php echo $client1['url']?>) no-repeat center;
          background-size:contain;"
></div>
<div class="Cremalab__Work--clientLogo"
    style=" background: url( <?php echo $client2['url']?>) no-repeat center;
          background-size:contain;"
></div>
<div class="Cremalab__Work--clientLogo"
  style=" background: url( <?php echo $client3['url']?>) no-repeat center;
        background-size:contain;"
></div>
<div class="Cremalab__Work--clientLogo"
  style=" background: url( <?php echo $client4['url']?>) no-repeat center;
          background-size:contain;"
></div>
</div>

<?php get_footer(); ?>
