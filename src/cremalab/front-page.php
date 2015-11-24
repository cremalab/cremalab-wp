
<div class="Cremalab__Homepage--pageWrapper">

<?php get_header(); ?>

<?php $heroImage = get_field('home_page_hero') ?>
<!---->
<!--    <video autobuffer="autobuffer" autoplay="autoplay" class="Cremalab__Homepage-videoBackground" loop="loop">-->
<!--      <source src="https://s3.amazonaws.com/cremalab/static/video/cremalab.mp4" type="video/mp4; codecs=avc1.42E01E,mp4a.40.2" />-->
<!--      <source src="https://s3.amazonaws.com/cremalab/static/video/cremalab.webm" type="video/webm; codecs=vp8,vorbis" />-->
<!--      <source src="https://s3.amazonaws.com/cremalab/static/video/cremalab.ogv" type="video/ogg; codecs=theora,vorbis" />-->
<!--    </video>-->

<!--                <img  class="Cremalab__Homepage--heroImage" src="--><?php //echo $heroImage['url']; ?><!-- " alt="">-->

    <img class="Cremalab__Homepage--TitleLogo" src="../wp-content/themes/cremalab/assets/images/Crema_WordLogoWhite.svg"  alt="CREMA LOGO">
</div>

<h1 class="Cremalab__WorkHeader--home">Check out our work</h1>

<?php
    $args = array( 'post_type' => 'work', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
        get_template_part('templates/work', 'list');
    endwhile; ?>
<!-- footer if any -->
<?php get_footer(); ?>
