!function(e){console.log("customjs");var r=e(".Cremalab__teamMemberWrapper");e(".Cremalab__teamMemberInfo");r.on({mouseenter:function(r){console.log(r);var n=e(r.currentTarget.children[1]),t=e(r.currentTarget.children[1].children[8]);n.velocity({height:"371px"},{duration:175}),t.velocity("fadeIn",{duration:500})},mouseleave:function(r){var n=e(r.currentTarget.children[1]),t=e(r.currentTarget.children[1].children[8]);t.velocity("fadeOut",{duration:50}),n.velocity({height:"0"},{duration:175})}})}(jQuery);
//# sourceMappingURL=custom.js.map
