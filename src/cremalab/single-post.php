

<div class="Cremalab__Navbar-BlackHeader">
    <?php get_header('blog'); ?>
</div>



<article id="post-<?php the_ID(); ?>" >

    <?php $postHeaderImage = get_field('post_intro_image') ?>
    <img class="Cremalab__BlogPost--HeaderImage" src="<?php  echo $postHeaderImage['url'] ?>" alt="">
    <p>ID: <?php echo $post->ID; ?></p>
    <header class="entry-header">
        <p>Title:</p><?php the_title(); ?>
    </header>
<?php echo $post->post_content ?>




</article><!-- #post-## -->