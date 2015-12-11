<?php
  $pageID = get_the_ID();
  $whiteLogo = get_field('header_image_white', 2);
  $blackLogo = get_field('header_image_black', 2);
?>




  <div class="Cremalab__Navbar">


    <a href="/" class="Cremalab__Navbar-brandTitle--Container">
      <?php if(is_front_page()): ?>
        <img class="Cremalab__Navbar-brandImage--white" src="https://s3.amazonaws.com/cremalab/wp-cremalab/Images/Crema_WordLogoWhite.png" alt="Cremalab">

      <?php else: ?>
        <img class="Cremalab__Navbar-brandImage" src="https://s3.amazonaws.com/cremalab/wp-cremalab/Images/Crema_logo.png" alt="Cremalab">
      <?php  endif; ?>
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

<!--$pageID =='180' or $pageID == '24' or $pageID == '27' or $pageID == '138' or $pageID == '20')-->

<?php if(is_front_page()): ?>
  <button class="c-hamburger c-hamburger--black c-hamburger--htx">
    <span class="Cremalab__Navbar--hamburger">toggle menu</span>
  </button>
  <span class="Cremalab__NavbarMoreLabel--black">More</span>
<?php else: ?>
  <button class="c-hamburger c-hamburger--htx">
  <span class="Cremalab__Navbar--hamburger">toggle menu</span>
  </button>
  <span class="Cremalab__NavbarMoreLabel">More</span>
<?php endif; ?>

<div class="Cremalab__Navbar--mobile">
  <?php wp_nav_menu() ?>
</div>

</div>
