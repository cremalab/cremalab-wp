<?php $pageID = get_the_ID(); ?>
      <div class="Cremalab__Navbar">


    <a href="/" class="Cremalab__Navbar-brandTitle--Container">
      <?php if($pageID == '2'): ?>
        <h1 class="Cremalab__Navbar-brandTitle--homePage">Crema</h1>
      <?php else: ?>
        <h1 class="Cremalab__Navbar-brandTitle">Crema</h1>
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

<?php if($pageID != '2'): ?>
  <button class="c-hamburger--black c-hamburger--htx">
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
