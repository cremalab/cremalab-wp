<?php
/**
 * Template Name: Blog
 */
?>

<div class="Cremalab__Navbar-BlackHeader">
  <?php get_header(); ?>
</div>

<h1>Home.php</h1>

<?php while (have_posts()) : the_post(); ?>

    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <p><?php echo get_the_category_list($separator= ",")?></p>

      <p><?php echo the_permalink()?></p>
      <a href="<?php the_permalink() ?>">CLICK ME</a>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  
<?php endwhile; ?>


<?php get_footer(); ?>
