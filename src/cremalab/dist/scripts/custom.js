!function(e){function t(e){e.addEventListener("click",function(e){e.preventDefault(),this.classList.contains("is-active")===!0?this.classList.remove("is-active"):this.classList.add("is-active"),this.classList.contains("is-active")===!0?u.velocity("fadeIn",{duration:150}):u.velocity("fadeOut",{duration:150})})}function t(e){e.addEventListener("click",function(e){e.preventDefault(),this.classList.contains("is-active")===!0?this.classList.remove("is-active"):this.classList.add("is-active"),this.classList.contains("is-active")===!0?u.velocity("fadeIn",{duration:150}):u.velocity("fadeOut",{duration:150})})}console.log("customjs");var i=e(".Cremalab__teamMemberWrapper"),o=e(".Cremalab__Work-EntryWrapper--Homepage"),a=e(".Cremalab__BlogPost--videoIndicator"),n=e(".Cremalab__BlogPost-VideoOverlay"),r=e(".Cremalab__teamContainer--centerWrapper"),c=e(".Cremalab__BlogItemsContainer");e(window).on("load",function(){e("body").velocity("fadeIn",{duration:"50"})}),i.on({mouseenter:function(t){console.log("enter",t);var i=e(t.currentTarget.children[0]),o=e(t.currentTarget.children[1]);i.velocity("fadeOut",{duration:0}),o.velocity("fadeIn",{duration:0})},mouseleave:function(t){console.log("leave",t);var i=e(t.currentTarget.children[0]),o=e(t.currentTarget.children[1]);o.velocity("fadeOut",{duration:0}),i.velocity("fadeIn",{duration:0})}});var l=e(".Cremalab__CaseStudySlider"),s=563;e(window).on("load",function(){l.css("height",s)}),e(window).on("resize",function(){var t=e(".soliloquy-item").height();console.log("Height:",t),l.css("height",t)}),e(window).on("load",function(){var t=Math.floor(e(window).width()/320),i=(320*t).toString()+"px";r.css("width",i),c.css("width",i)}),e(window).on("resize",function(){var t=Math.floor(e(window).width()/320),i=(320*t).toString()+"px";r.css("width",i),c.css("width",i)}),o.on({mouseenter:function(t){var i=e(t.currentTarget.children[1]);i.velocity("fadeIn",{duration:"350"})},mouseleave:function(t){var i=e(t.currentTarget.children[1]);i.velocity("fadeOut",{duration:"350"})}}),a.on({click:function(e){console.log("Play Button Clicked"),n.velocity({height:"100%"},{duration:1e3})}});for(var d=e(".c-hamburger"),u=e(".Cremalab__Navbar--mobile"),v=d.length-1;v>=0;v--){var h=d[v];t(h)}for(var f=e(".c-hamburger-black"),v=f.length-1;v>=0;v--){var m=f[v];t(m)}var g=e(".Cremalab__footerUnderline"),_=e(".Cremalab__footerWelcomeContainer"),y=(e(".Cremalab__footerWrapper").height(),e(".Cremalab__footerFormContainer"));g.on({click:function(e){_.velocity({height:0},{duration:250}),y.velocity({height:300},{duration:250})}})}(jQuery);
//# sourceMappingURL=custom.js.map
