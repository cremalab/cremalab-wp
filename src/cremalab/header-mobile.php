<div class="Cremalab__Navbar">
  <a href="/" class="Cremalab__Navbar-brandTitle--Container">
    <?php if(is_front_page()): ?>
      <img class="Cremalab__Navbar-brandImage--white" src="https://s3.amazonaws.com/cremalab/wp-cremalab/Images/Crema_logo.png" alt="Cremalab">
    <?php else: ?>
      <img class="Cremalab__Navbar-brandImage" src="https://s3.amazonaws.com/cremalab/wp-cremalab/Images/Crema_logo.png" alt="Cremalab">
    <?php  endif; ?>
</a>

<?php if(is_front_page()): ?>
  <button class="c-hamburger c-hamburger--black c-hamburger--htx">
    <span class="Cremalab__Navbar--hamburger">toggle menu</span>
  </button>
  <span class="Cremalab__NavbarMoreLabel--black">More</span>
<?php else: ?>
  <button class="c-hamburger c-hamburger--black c-hamburger--htx">
    <span class="Cremalab__Navbar--hamburger">toggle menu</span>
  </button>
  <span class="Cremalab__NavbarMoreLabel--black">More</span>
<?php endif; ?>
  <div class="Cremalab__Navbar--mobile">
    <?php wp_nav_menu() ?>
  </div>
</div>
