


<div class="Cremalab__Navbar-BlackHeader">
    <?php get_header('blog'); ?>
</div>

<?php
$id= get_the_ID();
$post=get_post($id);
$content = $post->post_content;
$authorID = $post->post_author;
$content_text = apply_filters('the_content', $content);
?>

<div id="post-<?php the_ID(); ?>" >
    <?php $postHeaderImage = get_field('post_intro_image') ?>
    <div class="Cremalab__BlogPost--HeaderImage">
        <img  src="<?php  echo $postHeaderImage['url'] ?>" alt="">
    </div>



    <div class="Cremalab__BlogPost-ContentContainer">
        <h1 class="Cremalab__BlogPost--Title"><?php the_title(); ?></h1>
        <p> <?php echo get_the_author_meta('display_name', $authorID); ?> <?php the_time('F j, Y'); ?>
        <?php echo $content_text ?>
    </div>


</div>