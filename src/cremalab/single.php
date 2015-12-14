


<div class="Cremalab__Navbar-BlackHeader">
    <?php get_header(); ?>
</div>

<?php
    $id= get_the_ID();
    $post=get_post($id);
    $content = $post->post_content;
    $authorID = $post->post_author;
    $content_text = apply_filters('the_content', $content);
    $display_category = get_field('display_category');
    $postHeaderImage = get_field('post_intro_image');
    $videoUrl = get_field('post_video');
    $videoID = get_field('youtube_video_id');

?>


<div id="post-<?php the_ID(); ?>" >
    <?php
        $format = get_post_format( $id );
        if ( false === $format ) {
            $format = 'standard';
        }
    ?>
    <div class="Cremalab__BlogPost-HeaderWrapper">


        <div class="Cremalab__BlogPost--HeaderImage">
            <?php if($format == 'video'): ?>

                <img src="http://img.youtube.com/vi/<?php echo $videoID ?>/0.jpg" alt="">
                <img class="Cremalab__BlogPost--videoIndicator" src="../wp-content/themes/cremalab/assets/images/videoIndicator.svg" alt="" />

            <?php else: ?>
                <img  src="<?php  echo $postHeaderImage['url'] ?>" alt="">
            <?php endif ?>

        </div>
            <?php


                if($display_category == 'culture'){
                    echo '<div class="Cremalab__BlogPost--categoryDisplay--green">';
                }elseif($display_category == 'products'){
                    echo '<div class="Cremalab__BlogPost--categoryDisplay--red">';
                }elseif($display_category == 'process'){
                    echo '<div class="Cremalab__BlogPost--categoryDisplay--purple">';
                }elseif($display_category == 'innovation'){
                    echo '<div class="Cremalab__BlogPost--categoryDisplay--blue">';
                }elseif($display_category == 'design'){
                    echo '<div class="Cremalab__BlogPost--categoryDisplay--hotPink">';
                }elseif($display_category == 'development') {
                    echo '<div class="Cremalab__BlogPost--categoryDisplay--orange">';
                }else{
                    echo '<div class="Cremalab__BlogPost--categoryDisplay--orange">';
                }
            ?>
            <p><?php echo $display_category ?></p>
        </div>
    </div>
    <div class="Cremalab__BlogPost-ContentContainer">
        <h1 class="Cremalab__BlogPost--Title"><?php the_title(); ?></h1>
        <p class="Cremalab__BlogPost--authorDisplay"> <?php echo get_the_author_meta('display_name', $authorID); ?> &mdash; <?php the_time('F j, Y'); ?>

        <?php
            if($display_category == 'culture' and $format != 'video'){
                echo '<div class="Cremalab__BlogPost-categoryHighlight--green"></div>';
            }elseif($display_category == 'products' and $format != 'video'){
                echo '<div class="Cremalab__BlogPost-categoryHighlight--red"></div>';
            }elseif($display_category == 'process' and $format != 'video'){
                echo '<div class="Cremalab__BlogPost-categoryHighlight--purple"></div>';
            }elseif($display_category == 'innovation' and $format != 'video'){
                echo '<div class="Cremalab__BlogPost-categoryHighlight--blue"></div>';
            }elseif($display_category == 'design' and $format != 'video'){
                echo '<div class="Cremalab__BlogPost-categoryHighlight--hotPink"></div>';
            }elseif($display_category == 'development' and $format != 'video') {
                echo '<div class="Cremalab__BlogPost-categoryHighlight--orange"></div>';
            }else{
                echo '<div class="Cremalab__BlogPost-categoryHighlight--empty"></div>';
            }
        ?>
        <div class="Cremalab__BlogPostContent">
            <?php
                get_template_part('/templates/format', $format);
            ?>
        </div>
    </div>



    <div class="Cremalab__BlogItem--navLinksWrapper">
<?php //$posts = query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--        --><?php //previous_post_link( '<div class="Cremalab__BlogItem--navLink previous">%link</div>'); ?>
<!--        &nbsp;&nbsp;&nbsp;&nbsp;-->
<!--        --><?php //next_post_link('<div class="Cremalab__BlogItem--navLink next">  %link </div> '); ?>
<?php //endwhile; endif; ?>
    </div>
<?php get_footer(); ?>
