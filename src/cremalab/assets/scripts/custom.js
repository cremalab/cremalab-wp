
(function($){
  console.log('customjs');
var teamMember = $('.Cremalab__teamMemberWrapper');
var homePageCaseItem = $('.Cremalab__Work-EntryWrapper--Homepage');
var blogVideoPlayButton = $('.Cremalab__BlogPost--videoIndicator');
var videoContainer =  $('.Cremalab__BlogPost-VideoOverlay');
var teamPhotoCenterContainer = $('.Cremalab__teamContainer--centerWrapper');


//Page transition - why doesn't this work??????
$(window).on('load', function(){

  $('body').velocity("fadeIn", {duration:"1500"});
});

$('a').on('click', function(){
  $('body').velocity("fadeOut", {duration:"500"});
});


//Team Member info card slide-up
//teamMember.on({
//  mouseenter:function(e){
//    console.log(e);
//    var slideUpContainer = $(e.currentTarget.children[1]);
//    var line = $(e.currentTarget.children[1].children[8]);
//    slideUpContainer.velocity({height:"371px"}, {duration:175});
//    line.velocity("fadeIn" , {duration:500});
//    },
//  mouseleave:function(e){
//    var slideUpContainer = $(e.currentTarget.children[1]);
//    var line = $(e.currentTarget.children[1].children[8]);
//    line.velocity("fadeOut" , {duration:50});
//    slideUpContainer.velocity({height:"0"}, {duration:175});
//  }
//});


//Team Member Page Photo Sizing
//One box is 320px;
  $(window).on('resize', function(){
    var numberOfPhotos = Math.floor($(window).width()/320);
    var containerWidth = (320 * numberOfPhotos).toString()+'px';
    teamPhotoCenterContainer.css('width', containerWidth);
    console.log('ContainerWidth ', containerWidth);
  });

//Case Study Mouseover Action
  homePageCaseItem.on({
    mouseenter:function(e){
      var contentIn = $(e.currentTarget.children[1]);
      contentIn.velocity("fadeIn", {duration:"350"});
    },
    mouseleave:function(e){
      var contentOut = $(e.currentTarget.children[1]);
      contentOut.velocity("fadeOut", {duration:"350"});
    }
  });

//Start video playback on video blogposts
blogVideoPlayButton.on({
    click:function(e){
        console.log('Play Button Clicked');
        videoContainer.velocity({height:"100%"}, {duration:1000})
    }
});


//Mobile Menu Toggle
  var toggles = $(".c-hamburger");
  var mobileMenu = $('.Cremalab__Navbar--mobile');

  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };

  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
      (this.classList.contains("is-active") === true) ? mobileMenu.velocity("fadeIn",{duration:150}) :  mobileMenu.velocity("fadeOut",{duration:150})
    });
  }

//Non Homepage Mobile Menu Toggles
  var togglesBlack = $(".c-hamburger-black");
  for (var i = togglesBlack.length - 1; i >= 0; i--) {
    var togglesB = togglesBlack[i];
    toggleHandler(togglesB);
  };

  function toggleHandler(togglesB) {
    togglesB.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
      (this.classList.contains("is-active") === true) ? mobileMenu.velocity("fadeIn",{duration:150}) :  mobileMenu.velocity("fadeOut",{duration:150})
    });
  }

//Footer Form Show/Hide
  var showForm = $('.Cremalab__footerUnderline')
  var welcomeContent = $('.Cremalab__footerWelcomeContainer');
  var formContainer = $('.Cremalab__footerFormContainer');
  showForm.on({
    click:function(e){
      console.log('Form show clicked', e);
      welcomeContent.velocity("fadeOut", {duration:150});
      formContainer.velocity("fadeIn", {duration:150});
    }
  })



})(jQuery);
