!function(e){function t(e){e.addEventListener("click",function(e){e.preventDefault(),this.classList.contains("is-active")===!0?this.classList.remove("is-active"):this.classList.add("is-active"),this.classList.contains("is-active")===!0?c.velocity("fadeIn",{duration:150}):c.velocity("fadeOut",{duration:150})})}function t(e){e.addEventListener("click",function(e){e.preventDefault(),this.classList.contains("is-active")===!0?this.classList.remove("is-active"):this.classList.add("is-active"),this.classList.contains("is-active")===!0?c.velocity("fadeIn",{duration:150}):c.velocity("fadeOut",{duration:150})})}console.log("customjs");var a=(e(".Cremalab__teamMemberWrapper"),e(".Cremalab__Work-EntryWrapper--Homepage")),i=e(".Cremalab__BlogPost--videoIndicator"),o=e(".Cremalab__BlogPost-VideoOverlay");e(window).on("load",function(){e("body").velocity("fadeIn",{duration:"1500"})}),e("a").on("click",function(){e("body").velocity("fadeOut",{duration:"500"})}),a.on({mouseenter:function(t){var a=e(t.currentTarget.children[1]);a.velocity("fadeIn",{duration:"350"})},mouseleave:function(t){var a=e(t.currentTarget.children[1]);a.velocity("fadeOut",{duration:"350"})}}),i.on({click:function(e){console.log("Play Button Clicked"),o.velocity({height:"100%"},{duration:1e3})}});for(var n=e(".c-hamburger"),c=e(".Cremalab__Navbar--mobile"),r=n.length-1;r>=0;r--){var l=n[r];t(l)}for(var s=e(".c-hamburger-black"),r=s.length-1;r>=0;r--){var d=s[r];t(d)}var u=e(".Cremalab__footerUnderline"),v=e(".Cremalab__footerWelcomeContainer"),f=e(".Cremalab__footerFormContainer");u.on({click:function(e){console.log("Form show clicked",e),v.velocity("fadeOut",{duration:150}),f.velocity("fadeIn",{duration:150})}})}(jQuery);
//# sourceMappingURL=custom.js.map
