


<div class="Cremalab__Navbar-BlackHeader">
    <?php get_header('blog'); ?>
</div>

<?php
    $id= get_the_ID();
    $post=get_post($id);
    $content = $post->post_content;
    $authorID = $post->post_author;
    $content_text = apply_filters('the_content', $content);
    $category = get_the_category();
?>

<div id="post-<?php the_ID(); ?>" >
    <?php $postHeaderImage = get_field('post_intro_image') ?>
    <div class="Cremalab__BlogPost--HeaderImage">
        <img  src="<?php  echo $postHeaderImage['url'] ?>" alt="">
    </div>

    <div class="Cremalab__BlogPost-ContentContainer">
        <h1 class="Cremalab__BlogPost--Title"><?php the_title(); ?></h1>
        <p class="Cremalab__BlogPost--authorDisplay"> <?php echo get_the_author_meta('display_name', $authorID); ?> &mdash; <?php the_time('F j, Y'); ?>
        <div class="Cremalab__BlogPostContent">
            <?php echo $content_text ?>
        </div>
    </div>

    <div class="Cremalab__BlogItem--navLinksWrapper">
<?php $posts = query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php previous_post_link( '<div class="Cremalab__BlogItem--navLink previous">%link</div>'); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <?php next_post_link('<div class="Cremalab__BlogItem--navLink next">  %link </div> '); ?>

<?php endwhile; endif; ?>
    </div>
<?php get_footer(); ?>