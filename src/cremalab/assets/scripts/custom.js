
(function($){
  console.log('customjs');
var teamMember = $('.Cremalab__teamMemberWrapper');
var caseStudyCover = $('.Cremalab__Work-EntryWrapper');
var blogVideoPlayButton = $('.Cremalab__BlogPost--videoIndicator');
var videoContainer =  $('.Cremalab__BlogPost-VideoOverlay');


//Team Member info card slide-up
teamMember.on({
  mouseenter:function(e){
    console.log(e);
    var slideUpContainer = $(e.currentTarget.children[1]);
    var line = $(e.currentTarget.children[1].children[8]);
    slideUpContainer.velocity({height:"371px"}, {duration:175});
    line.velocity("fadeIn" , {duration:500});
    },
  mouseleave:function(e){
    var slideUpContainer = $(e.currentTarget.children[1]);
    var line = $(e.currentTarget.children[1].children[8]);
    line.velocity("fadeOut" , {duration:50});
    slideUpContainer.velocity({height:"0"}, {duration:175});
  }
});

//Case Study Mouseover Action
  caseStudyCover.on({
    mouseenter:function(e){
      var hideHeader = $(e.currentTarget.children[0].children[1]);
      var caseStudyHoverContainer = $(e.currentTarget.children[1]);
      caseStudyHoverContainer.velocity("fadeIn", {duration:250});
      hideHeader.velocity("fadeOut", {duration:250});
    },
    mouseleave:function(e){
      var hideHeader = $(e.currentTarget.children[0].children[1]);
      var caseStudyHoverContainer = $(e.currentTarget.children[1]);
      caseStudyHoverContainer.velocity("fadeOut", {duration:250})
      hideHeader.velocity("fadeIn", {duration:250});

    }
  })

//Start video playback on video blogposts
blogVideoPlayButton.on({
    click:function(e){
        console.log('Play Button Clicked');
        videoContainer.velocity({height:"100%"}, {duration:1000})
    }
})


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

})(jQuery);
