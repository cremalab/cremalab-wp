<div class="sub-main">
  <a class="site_nav-list-logo" href="/"></a>
  <div class="sideBarToggle icon-list"></div>
</div>
<aside class="layout-sidebar">

  <div class="site_nav">
    <nav class="site_nav-list" role="navigation">
      <div class="site_nav-list-logo-placeholder"></div>

      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array(
            'theme_location' => 'primary_navigation',
            'items_wrap' => '<ul>%3$s</ul>',
            'menu_class' => 'nav navbar-nav'
          ));
        endif;
      ?>
    </nav>
    <nav class="site_nav-list sub-social">
      <?php
        if (has_nav_menu('social_navigation')) :
          wp_nav_menu(array('theme_location' => 'social_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>

</aside>

<!--<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_bloginfo('template_directory') ?>/dist/images/kccares_logo.png" alt="<?php echo get_bloginfo('name'); ?>" />
      </a>
    </div>

    <nav class="collapse navbar-collapse navbar-right" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>-->
