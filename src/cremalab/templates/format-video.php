
<?php
$id= get_the_ID();
$post=get_post($id);
$content = $post->post_content;
$authorID = $post->post_author;
$content_text = apply_filters('the_content', $content);
$display_category = get_field('display_category');
$videoUrl = get_field('post_video');
$videoID = get_field('youtube_video_id');
?>
<!--<div class="Cremalab__BlogPost-VideoWrapper">-->
<!--    <iframe width="560" height="315" src="https://www.youtube.com/embed/26x6VJgMwpg" frameborder="0" allowfullscreen></iframe>-->
<!--</div>-->

<div class="Cremalab__BlogPost-VideoOverlay">
    <div class="Cremalab__BlogPost-VideoWrapper">
        <iframe  width="560" height="315" src="https://www.youtube.com/embed/<?php echo $videoID ?>" frameborder="0" allowfullscreen></iframe>
    </div>
</div>


