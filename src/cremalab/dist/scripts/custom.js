!function(t){function e(t){t.addEventListener("click",function(t){t.preventDefault(),this.classList.contains("is-active")===!0?this.classList.remove("is-active"):this.classList.add("is-active"),this.classList.contains("is-active")===!0?c.velocity("fadeIn",{duration:150}):c.velocity("fadeOut",{duration:150})})}function e(t){t.addEventListener("click",function(t){t.preventDefault(),this.classList.contains("is-active")===!0?this.classList.remove("is-active"):this.classList.add("is-active"),this.classList.contains("is-active")===!0?c.velocity("fadeIn",{duration:150}):c.velocity("fadeOut",{duration:150})})}console.log("customjs");var a=(t(".Cremalab__teamMemberWrapper"),t(".Cremalab__Work-EntryWrapper--Homepage")),i=t(".Cremalab__BlogPost--videoIndicator"),n=t(".Cremalab__BlogPost-VideoOverlay");a.on({mouseenter:function(e){var a=t(e.currentTarget.children[1]);a.velocity("fadeIn",{duration:"350"})},mouseleave:function(e){var a=t(e.currentTarget.children[1]);a.velocity("fadeOut",{duration:"350"})}}),i.on({click:function(t){console.log("Play Button Clicked"),n.velocity({height:"100%"},{duration:1e3})}});for(var s=t(".c-hamburger"),c=t(".Cremalab__Navbar--mobile"),o=s.length-1;o>=0;o--){var r=s[o];e(r)}for(var l=t(".c-hamburger-black"),o=l.length-1;o>=0;o--){var v=l[o];e(v)}}(jQuery);
//# sourceMappingURL=custom.js.map
