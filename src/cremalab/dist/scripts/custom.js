!function(t){function e(t){t.addEventListener("click",function(t){t.preventDefault(),this.classList.contains("is-active")===!0?this.classList.remove("is-active"):this.classList.add("is-active"),this.classList.contains("is-active")===!0?c.velocity("fadeIn",{duration:150}):c.velocity("fadeOut",{duration:150})})}function e(t){t.addEventListener("click",function(t){t.preventDefault(),this.classList.contains("is-active")===!0?this.classList.remove("is-active"):this.classList.add("is-active"),this.classList.contains("is-active")===!0?c.velocity("fadeIn",{duration:150}):c.velocity("fadeOut",{duration:150})})}console.log("customjs");var o=(t(".Cremalab__teamMemberWrapper"),t(".Cremalab__Work-EntryWrapper--Homepage")),i=t(".Cremalab__BlogPost--videoIndicator"),a=t(".Cremalab__BlogPost-VideoOverlay"),n=t(".Cremalab__teamContainer--centerWrapper");t(window).on("load",function(){t("body").velocity("fadeIn",{duration:"250"})}),t("a").on("click",function(){t("body").velocity("fadeOut",{duration:"250"})}),t(window).on("load",function(){var e=Math.floor(t(window).width()/320),o=(320*e).toString()+"px";n.css("width",o),console.log("ContainerWidth ",o)}),t(window).on("resize",function(){var e=Math.floor(t(window).width()/320),o=(320*e).toString()+"px";n.css("width",o),console.log("ContainerWidth ",o)}),o.on({mouseenter:function(e){var o=t(e.currentTarget.children[1]);o.velocity("fadeIn",{duration:"350"})},mouseleave:function(e){var o=t(e.currentTarget.children[1]);o.velocity("fadeOut",{duration:"350"})}}),i.on({click:function(t){console.log("Play Button Clicked"),a.velocity({height:"100%"},{duration:1e3})}});for(var r=t(".c-hamburger"),c=t(".Cremalab__Navbar--mobile"),l=r.length-1;l>=0;l--){var s=r[l];e(s)}for(var d=t(".c-hamburger-black"),l=d.length-1;l>=0;l--){var u=d[l];e(u)}var v=t(".Cremalab__footerUnderline"),f=t(".Cremalab__footerWelcomeContainer"),h=t(".Cremalab__footerFormContainer");v.on({click:function(t){console.log("Form show clicked",t),f.velocity("fadeOut",{duration:150}),h.velocity("fadeIn",{duration:150})}})}(jQuery);
//# sourceMappingURL=custom.js.map
