

<div class="Cremalab__Navbar-BlackHeader">
    <?php get_header('blog'); ?>
</div>



<article id="post-<?php the_ID(); ?>" >


    <?php $postHeaderImage = get_field('post_intro_image') ?>


    <div class="Cremalab__BlogPost--HeaderImage">
        <img  src="<?php  echo $postHeaderImage['url'] ?>" alt="">
    </div>
        <h1 class="Cremalab__BlogPost--Title"><?php the_title(); ?></h1>
    <?php
    $id= get_the_ID();
    $post=get_post($id);
    $content = $post->post_content;
    $authorID = $post->post_author;
    $content_text = apply_filters('the_content', $content);
    ?>

    <p>Written by: <?php echo get_the_author_meta('first_name', $authorID); ?></p>

    <?php echo $content_text ?>




</article>