<div class="Cremalab__Navbar">

  <a href="#" class="Cremalab__Navbar-logoImageContainer">

      <img class="Cremalab__Navbar-logoImage" src="../wp-content/themes/cremalab/assets/images/cremalab_logo.svg" alt="" /> <span class="Cremalab__Nabar-logoTitle">Crema</span>

  </a>

  <div class="Cremalab__Nav-navItems">

    <ul>
      <?php $args = array
      (
          'title_li' => '',
          'depth' => 1,
          'exclude' => '2',
          'sort_order' => 'ASC'
      )
      ?>
      <?php wp_list_pages($args); ?>
    </ul>
  </div>

</div>
