  <div class="Cremalab__Navbar">


    <a href="/" class="Cremalab__Navbar-brandTitle--Container">
      <?php if(is_front_page()): ?>
        <img class="Cremalab__Navbar-brandImage--white" src="https://s3.amazonaws.com/cremalab/wp-cremalab/Images/Crema_WordLogoWhite.png" alt="Cremalab">

      <?php else: ?>
        <img class="Cremalab__Navbar-brandImage" src="https://s3.amazonaws.com/cremalab/wp-cremalab/Images/Crema_logo.png" alt="Cremalab">
      <?php  endif; ?>
  </a>

  <?php
    if(is_front_page()){
      echo '<div class="Cremalab__Nav-navItems--frontPage">';
    } else {
      echo '<div class="Cremalab__Nav-navItems">';
    }
  ?>
  <?php wp_nav_menu() ?>
  </div>
</div>
