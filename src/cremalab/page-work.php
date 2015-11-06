<?php
/**
 * Template Name: Work
 */
?>
<div class="Cremalab__Navbar-BlackHeader">
  <?php get_header(); ?>
</div>


<h1>THIS IS THE WORK PAGE</h1>


<?php $args = array
(
    'title_li' => '',
    'depth' => 0,
    'child_of' => '33'
)
?>


<?php
$args = array( 'post_type' => 'work', 'posts_per_page' => 30 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  get_template_part('templates/work', 'list');
endwhile;
?>
