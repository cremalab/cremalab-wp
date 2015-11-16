
(function($){
  console.log('customjs');
var teamMember = $('.Cremalab__teamMemberWrapper');
var info = $('.Cremalab__teamMemberInfo');

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

})(jQuery);
