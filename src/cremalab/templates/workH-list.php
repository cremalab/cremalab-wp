<?php $headerImage = get_field('case_study_header_image');?>

<div class="Cremalab__Work-EntryWrapper--Homepage">
    <div class="Cremalab__Work-ImageContainer--Homepage"
         style="background: url( <?php echo $headerImage['url']?>) no-repeat top center;
             background-size:cover;"
    >



    </div>

    <div class="Cremalab__Work-TitleContainer--Homepage">
        <div class="Cremalab__Work-TitleContainer--HomepageFlex">
            <h3 class="Cremalab__Work-TitleContainer--header--Homepage"><?php the_title() ?></h3>
            <p><?php the_excerpt() ?></p>
            <a class="Cremalab___Work-TitleContainer--caseLink--Homepage" href="<?php the_permalink()?>"><span class="Cremalab__Work--underline--Homepage">View Case Study</span></a>
        </div>

    </div>

</div>