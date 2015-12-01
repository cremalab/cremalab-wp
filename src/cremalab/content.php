

<div class="Cremalab__Navbar--work">
    <?php get_header(); ?>
</div>


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
    <img src="http://placehold.it/400x300">
    <img src="http://placehold.it/400x300">
    <img src="http://placehold.it/400x300">
    <img src="http://placehold.it/400x300">
</div>

<?php get_footer(); ?>
