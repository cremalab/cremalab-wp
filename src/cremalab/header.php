<?php $pageID = get_the_ID(); ?>

      <?php
        if($pageID == '20'){
          echo '<div class="Cremalab__Navbar--careers">';
        }elseif($pageID == '42'){
          echo '<div class="Cremalab__Navbar--contact">';
        }
        else{
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
