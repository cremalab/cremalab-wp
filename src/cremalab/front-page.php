
<div class="Cremalab__Homepage--pageWrapper">

<?php get_header(); ?>

</div>

<div class="Cremalab__Homepage-Approach">
    <h1 class="Cremalab__Homepage-Approach--header">What we do</h1>
    <h3 class="Cremalab__Homepage-Approach--subheader">We create the best solutions that solve problems and better lives</h3>
    <a class="Cremalab__Homepage-Approach--byline" href="/work"><span class="Cremalab__Homepage-Approach--underline"><span>Check out our approach</span></span></a>
</div>

<?php
    $args = array( 'post_type' => 'work', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    $count = 0;
    while ( $loop->have_posts() ) : $loop->the_post();
        set_query_var('post_count', $count);
        get_template_part('templates/work', 'list');
        $count++;
    endwhile; ?>
<!-- footer if any -->
<?php get_footer(); ?>
