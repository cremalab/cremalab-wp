<div class="teamMember">
  <div class="picture sub-cover" style="background-image: url(https://cremalab.s3.amazonaws.com/uploads/profile/avatar/7/display_Michael.png)"><img src="https://cremalab.s3.amazonaws.com/uploads/profile/avatar/7/display_Michael.png"></div>
  <div class="teamMember-size">
    <div class="teamMember-size-info">
      <div class="teamMember-size-info-content">
        <h2><?php the_title() ?></h2>
        <div class="teamMember-size-info-content-links">
          <div class="socialLinks sub-team">

            <?php if ( get_field('twitter_link') ): ?>
              <a class="icon-twitter-circle" href="<?php the_field('twitter_link'); ?>">
                <span class="hiddenText">Twitter</span>
              </a>
            <?php endif; ?>
            <?php if ( get_field('dribbble_link') ): ?>
              <a class="icon-dribbble-circle" href="<?php the_field('dribbble_link'); ?>">
                <span class="hiddenText">dribbble</span>
              </a>
            <?php endif; ?>
            <?php if ( get_field('rdio_link') ): ?>
              <a class="icon-rdio-circle" href="<?php the_field('rdio_link'); ?>">
                <span class="hiddenText">Rdio</span>
              </a>
            <?php endif; ?>
            <?php if ( get_field('linkedin_link') ): ?>
              <a class="icon-linked_in-circle" href="<?php the_field('linkedin_link'); ?>">
                <span class="hiddenText">LinkedIn</span>
              </a>
            <?php endif; ?>
            <?php if ( get_field('website') ): ?>
              <a class="icon-website-circle" href="<?php the_field('website'); ?>">
                <span class="hiddenText">Website</span>
              </a>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
