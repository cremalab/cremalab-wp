!function(t){function e(t){t.addEventListener("click",function(t){t.preventDefault(),this.classList.contains("is-active")===!0?this.classList.remove("is-active"):this.classList.add("is-active"),this.classList.contains("is-active")===!0?s.velocity("fadeIn",{duration:150}):s.velocity("fadeOut",{duration:150})})}function e(t){t.addEventListener("click",function(t){t.preventDefault(),this.classList.contains("is-active")===!0?this.classList.remove("is-active"):this.classList.add("is-active"),this.classList.contains("is-active")===!0?s.velocity("fadeIn",{duration:150}):s.velocity("fadeOut",{duration:150})})}console.log("customjs");var o=(t(".Cremalab__teamMemberWrapper"),t(".Cremalab__Work-EntryWrapper--Homepage")),i=t(".Cremalab__BlogPost--videoIndicator"),a=t(".Cremalab__BlogPost-VideoOverlay"),n=t(".Cremalab__teamContainer--centerWrapper"),r=t(".Cremalab__BlogItemsContainer");t(window).on("load",function(){t("body").velocity("fadeIn",{duration:"250"})}),t("a").on("click",function(){t("body").velocity("fadeOut",{duration:"250"}),t("body").velocity("fadeIn",{duration:"250"})}),t(window).on("load",function(){var e=Math.floor(t(window).width()/320),o=(320*e).toString()+"px";n.css("width",o),r.css("width",o),console.log("ContainerWidth ",o)}),t(window).on("resize",function(){var e=Math.floor(t(window).width()/320),o=(320*e).toString()+"px";n.css("width",o),r.css("width",o),console.log("ContainerWidth ",o)}),o.on({mouseenter:function(e){var o=t(e.currentTarget.children[1]);o.velocity("fadeIn",{duration:"350"})},mouseleave:function(e){var o=t(e.currentTarget.children[1]);o.velocity("fadeOut",{duration:"350"})}}),i.on({click:function(t){console.log("Play Button Clicked"),a.velocity({height:"100%"},{duration:1e3})}});for(var c=t(".c-hamburger"),s=t(".Cremalab__Navbar--mobile"),l=c.length-1;l>=0;l--){var d=c[l];e(d)}for(var u=t(".c-hamburger-black"),l=u.length-1;l>=0;l--){var v=u[l];e(v)}var f=t(".Cremalab__footerUnderline"),h=t(".Cremalab__footerWelcomeContainer"),m=t(".Cremalab__footerFormContainer");f.on({click:function(t){console.log("Form show clicked",t),h.velocity("fadeOut",{duration:150}),m.velocity("fadeIn",{duration:150})}})}(jQuery);
//# sourceMappingURL=custom.js.map
