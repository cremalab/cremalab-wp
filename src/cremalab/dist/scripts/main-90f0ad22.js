!function(n){var r,o,e,a,t;t=function(){return n(".work-showcase").length?n(".work-showcase").each(function(r,o){var e;return e=n(o),window.scrollWatcher||(window.scrollWatcher=new ScrollWatcher),window.scrollWatcher.addItem(e.parent())}):void 0},r=function(){return n(".layout-main-wrapper.open").on("click",function(r){return r.stopPropagation(),r.preventDefault(),n(".layout-main-wrapper").removeClass("open"),n(".menu_bar, .sideBarToggle").removeClass("close")})},e=function(){n(".layout-main-wrapper").bind("transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd",function(r){return n(window).trigger("nav-transition-done")}),n(window).on("nav-transition-done",function(){return n(".layout-main-wrapper").hasClass("open")?r():n(".layout-main-wrapper").off("click")})},o=function(){var r;return r=n("#new_message"),r.on("ajax:success",function(o,e,a,t){var i,s;return r.find(".form-errors").remove(),i=n.parseJSON(t.responseText),s=i.name,r[0].reset(),r.prepend("<h4>Thanks for contacting us, "+s+".</h4>")}).bind("ajax:error",function(o,e,a,t){var i,s,c,u,l,d;for(s=n.parseJSON(e.responseText),i=r.find(".form-errors"),r.find(".form-errors").length?i.empty():(i=n("<ul class='form-errors'></ul>"),r.prepend(i)),d=[],c=0,u=s.length;u>c;c++)t=s[c],l="<li>"+t+"</li>",d.push(i.append(l));return d})},a=function(){return n(".videoBackground").length?n(".videoBackground video")[0].play():void 0},n(document).on("ready",function(){return Modernizr.touch&&n("body").addClass("touch"),a(),n("pre code").each(function(n,r){return hljs.highlightBlock(r)}),n(".sideBarToggle").on("click",function(){return n(".layout-main-wrapper").toggleClass("open"),n(".menu_bar, .sideBarToggle").toggleClass("close")}),o(),n(window).off("nav-transition-done"),Modernizr.csstransitions?e():void 0})}(jQuery);