<div class="Cremalab__Navbar-BlackHeader">
  <?php get_header(); ?>
</div>

<div class="Cremalab__ContactPageWrapper">
  <h1 class="Cremalab__pageHeaderOne">Work with us</h1>

  <div class="Cremalab__ContactPage-FormWrapper">
    <p class="Cremalab__linkCopy">Want to work with us?  Fill out <span class="Cremalab__ContactPage--underline">this form.</span></p>
    <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>
  </div>


  <div class="Cremalab__ContactPage--spacer"></div>

  <h1 class="Cremalab__pageHeaderOne">Join Us</h1>
  <p class="Cremalab__linkCopy">We're hiring.  <span class="Cremalab__ContactPage--underline"><a href="/careers">Learn more.</a></span></p>

  <div class="Cremalab__ContactPage--spacer"></div>

  <h1 class="Cremalab__pageHeaderOne">Follow Us</h1>
  <ul class="Cremalab__ContactPage-contactlist" >
    <li><a href="#" class="Cremalab__ContactPage--socialLink"><span class="contact-icons icon-facebook-circle"></span></a></li>
    <li><a href="#" class="Cremalab__ContactPage--socialLink"><span class="contact-icons icon-twitter-circle"></span></a></li>
    <li><a href="#" class="Cremalab__ContactPage--socialLink"><span class="contact-icons icon-instagram"></span></a></li>
    <li><a href="#" class="Cremalab__ContactPage--socialLink"><span class="contact-icons icon-linked_in-circle"></span></a></li>
    <li><a href="#" class="Cremalab__ContactPage--socialLink"><span class="contact-icons icon-dribbble-circle"></span></a></li>
    <li><a href="#" class="Cremalab__ContactPage--socialLink"><span class="contact-icons icon-github-circle"></span></a></li>
  </ul>
</div>

<?php get_footer(); ?>
