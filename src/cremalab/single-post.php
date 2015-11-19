<h1>Single-post.php</h1>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <p>ID: <?php echo $post->ID; ?></p>

    <header class="entry-header">
        <p>Title:</p><?php the_title(); ?>
    </header><!-- .entry-header -->
<h1>Content: <?php echo $post->post_content ?></h1>




</article><!-- #post-## -->