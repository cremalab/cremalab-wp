
(function($){
  console.log('customjs');
var teamMember = $('.Cremalab__teamMemberWrapper');
var homePageCaseItem = $('.Cremalab__Work-EntryWrapper--Homepage');
var blogVideoPlayButton = $('.Cremalab__BlogPost--videoIndicator');
var videoContainer =  $('.Cremalab__BlogPost-VideoOverlay');
var teamPhotoCenterContainer = $('.Cremalab__teamContainer--centerWrapper');
var blogPostListContainer = $('.Cremalab__BlogItemsContainer');


//Page transition - why doesn't this work??????
$(window).on('load', function(){
  $('body').velocity("fadeIn", {duration:"50"});
});


// Team Member Smile/Goofy switch
teamMember.on({
 mouseenter:function(e){
   console.log('enter', e);
   var hideOnMouseover = $(e.currentTarget.children[0]);
   var showOnMouseOver = $(e.currentTarget.children[1]);
   hideOnMouseover.velocity("fadeOut", {duration:0});
   showOnMouseOver.velocity("fadeIn", {duration:0});
   },
 mouseleave:function(e){
   console.log('leave', e);
   var hideOnMouseover = $(e.currentTarget.children[0]);
   var showOnMouseOver = $(e.currentTarget.children[1]);
   showOnMouseOver.velocity("fadeOut", {duration:0});
   hideOnMouseover.velocity("fadeIn", {duration:0});
   }
});

//Case Study Height Adjust
var caseStudySliderContainer = $('.Cremalab__CaseStudySlider');
var sliderInitialHeight = 563;

$(window).on('load', function(){
  caseStudySliderContainer.css('height', sliderInitialHeight);
});

$(window).on('resize', function(){
  var sliderWindowHeight = $('.soliloquy-item').height();
  console.log('Height:', sliderWindowHeight);
  caseStudySliderContainer.css('height', sliderWindowHeight);
});



//Team Member Page Photo Sizing
//One box is 320px;

  $(window).on('load', function(){
    var numberOfPhotos = Math.floor($(window).width()/320);
    var containerWidth = (320 * numberOfPhotos).toString()+'px';
    teamPhotoCenterContainer.css('width', containerWidth);
    blogPostListContainer.css('width', containerWidth);
  });

  $(window).on('resize', function(){
    var numberOfPhotos = Math.floor($(window).width()/320);
    var containerWidth = (320 * numberOfPhotos).toString()+'px';
    teamPhotoCenterContainer.css('width', containerWidth);
    blogPostListContainer.css('width', containerWidth);
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

  var showForm = $('.Cremalab__footerUnderline');
  var cancelTemplate = '<span class="Cremalab__footer--close">&#10005;</span>';
  var thankYouMessageTemplate = '<span class="Cremalab__footer--thankYouMessage">Thanks!</span>'
  var ninjaContainer = $('.ninja-forms-cont');
  ninjaContainer.prepend(cancelTemplate);
  var hideForm = $('.Cremalab__footer--close');
  var welcomeContent = $('.Cremalab__footerWelcomeContainer');
  var footerHeight = $('.Cremalab__footerWrapper').height();
  var formContainer = $('.Cremalab__footerFormContainer');


  showForm.on({
    click:function(e){
      welcomeContent.velocity({height:0},{duration:250});
      formContainer.velocity({height:300}, {duration:250});
    }
  });

  hideForm.on({
    click:function(e){
      welcomeContent.velocity({height:300},{duration:250});
      formContainer.velocity({height:0}, {duration:250});

    }
  });

//Footer Submit Button Re-draw
  var footerSubmit  = $('input[type=submit].ninja-forms-field');
  footerSubmit.on({
    click:function(e){
      $(thankYouMessageTemplate).insertAfter($(".Cremalab__footer--close"))
    }
  })



})(jQuery);
