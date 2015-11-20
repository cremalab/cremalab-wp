<?php
$id= get_the_ID();
$post=get_post($id);
$content = $post->post_content;
$authorID = $post->post_author;
$content_text = apply_filters('the_content', $content);
$display_category = get_field('display_category');
$postHeaderImage = get_field('post_intro_image')
?>

<?php echo $content_text ?>