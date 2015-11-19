
(function($){
  console.log('customjs');
var teamMember = $('.Cremalab__teamMemberWrapper');
var caseStudyCover = $('.Cremalab__Work-EntryWrapper');


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

})(jQuery);
