
<?php
    $headerImage = get_field('case_study_header_image');
    $Title = get_field('cs_title');
    $Subheading = get_field('cs_subheading');
    $link = get_field('cs_link');
    $slider = get_field('cs_image_slider');

    $FullWidth1 = get_field('cs_full_width_image_1');
    $FullWidth2 = get_field('cs_full_width_image_2');
    $FullWidth3 = get_field('cs_full_width_image_3');

    $BodyText1 = get_field('cs_body_text_1');
    $BodyText2 = get_field('cs_body_text_2');
    $BodyText3 = get_field('cs_body_text_3');
    $BodyText4 = get_field('cs_body_text_4');



?>

<div class="Cremalab__Navbar-BlackHeader">
    <?php get_header(); ?>
</div>
<div class="Cremalab__CaseStudyWrapper">
<div class="Cremalab__CaseStudySlider"><?php echo do_shortcode($slider); ?></div>
<div class="Cremalab__CaseStudyContentContainer">
    <h1 class="Cremalab__caseStudyTitle">
        <?php echo $Title ?>
    </h1>

    <h3 class="Cremalab__caseStudySubHeader"><?php echo $Subheading ?></h3>

    <div class="Cremalab__caseStudyhighlightLine"></div>

    <div class="Cremalab__caseStudyTextContainer"><?php echo $BodyText1 ?></div>
    <img class="Cremalab__caseStudy--fullWidthImage" src="<?php echo $FullWidth1['url'] ?>" alt="">
    <div class="Cremalab__caseStudyTextContainer"><?php echo $BodyText2 ?></div>
    <img class="Cremalab__caseStudy--fullWidthImage" src="<?php echo $FullWidth2['url'] ?>" alt="">
    <div class="Cremalab__caseStudyTextContainer"><?php echo $BodyText3 ?></div>
    <img class="Cremalab__caseStudy--fullWidthImage" src="<?php echo $FullWidth3['url'] ?>" alt="">
    <div class="Cremalab__caseStudyTextContainer">
        <?php echo $BodyText4 ?>
        <a class="Cremalab__caseStudyLink" href="<?php echo $link?>">See it live</a>
    </div>
</div>

</div>




<div class="Cremalab__ContentNavContainer">
    <?php $posts = query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="Cremalab__contentNavPrevious">
        <?php previous_post_link( ' %link '); ?>
    </div>
    <div class="Cremalab__contentNavNext">
        <?php next_post_link('  %link  '); ?>
    </div>
    <?php endwhile; endif; ?>
</div>



<?php get_footer(); ?>