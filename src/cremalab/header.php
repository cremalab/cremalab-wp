<?php $pageID = get_the_ID(); ?>

      <?php
        if($pageID == '20'){
          echo '<div class="Cremalab__Navbar--careers">';
        }else{
          echo '<div class="Cremalab__Navbar">';
        }
      ?>





    <a href="/" class="Cremalab__Navbar-logoImageContainer">

      <?php
        if($pageID == '2'){
          echo '<img class="Cremalab__Navbar-logoImage" src="../wp-content/themes/cremalab/assets/images/cremalab_logo.svg" alt="" />';
        }
        else {
         echo '<img class="Cremalab__Navbar-logoImage" src="../wp-content/themes/cremalab/assets/images/cremalab_icon.svg" alt="" />';
        }
      ?>

      <span class="Cremalab__Nabar-logoTitle">Crema</span>
  </a>

  <?php
    if($pageID == '2'){
      echo '<div class="Cremalab__Nav-navItems--frontPage">';
    } else {
      echo '<div class="Cremalab__Nav-navItems">';
    }
  ?>
  <?php wp_nav_menu() ?>

  </div>

</div>
