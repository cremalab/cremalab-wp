
<div class="Cremalab__Homepage--pageWrapper">

<?php get_header(); ?>

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
