(function($) {

  var bindCancel, bindContactForm, bindSidebar, playVideo, setupScrollWatcher;

  setupScrollWatcher = function() {
    if ($(".work-showcase").length) {
      return $(".work-showcase").each(function(i, el) {
        var $el;
        $el = $(el);
        if (!window.scrollWatcher) {
          window.scrollWatcher = new ScrollWatcher();
        }
        return window.scrollWatcher.addItem($el.parent());
      });
    }
  };

  bindCancel = function() {
    return $(".layout-main-wrapper.open").on('click', function(e) {
      e.stopPropagation();
      e.preventDefault();
      $('.layout-main-wrapper').removeClass('open');
      return $('.menu_bar, .sideBarToggle').removeClass('close');
    });
  };

  bindSidebar = function() {
    $('.layout-main-wrapper').bind('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function(e) {
      return $(window).trigger('nav-transition-done');
    });
    $(window).on('nav-transition-done', function() {
      if ($('.layout-main-wrapper').hasClass('open')) {
        return bindCancel();
      } else {
        return $(".layout-main-wrapper").off('click');
      }
    });
    return $('.site_nav-list:not(.sub-social) a ').on('click', function(e) {
      var href;
      href = this.href;
      //e.preventDefault();
      $('.layout-main-wrapper').toggleClass('open');
      $('button#sideBarToggle').toggleClass('close');
      return $(window).on('nav-transition-done', function() {
        $(window).off('nav-transition-done');
        $(".layout-main-wrapper").off();
      });
    });
  };

  bindContactForm = function() {
    var $form;
    $form = $("#new_message");
    return $form.on("ajax:success", function(e, data, status, xhr) {
      var message_json, name;
      $form.find(".form-errors").remove();
      message_json = $.parseJSON(xhr.responseText);
      name = message_json.name;
      $form[0].reset();
      return $form.prepend("<h4>Thanks for contacting us, " + name + ".</h4>");
    }).bind("ajax:error", function(e, xhr, status, error) {
      var $err_list, errs, j, len, markup, results;
      errs = $.parseJSON(xhr.responseText);
      $err_list = $form.find(".form-errors");
      if ($form.find(".form-errors").length) {
        $err_list.empty();
      } else {
        $err_list = $("<ul class='form-errors'></ul>");
        $form.prepend($err_list);
      }
      results = [];
      for (j = 0, len = errs.length; j < len; j++) {
        error = errs[j];
        markup = "<li>" + error + "</li>";
        results.push($err_list.append(markup));
      }
      return results;
    });
  };

  playVideo = function() {
    if ($(".videoBackground").length) {
      return $(".videoBackground video")[0].play();
    }
  };

  $(document).on('ready', function() {
    if (Modernizr.touch) {
      $('body').addClass('touch');
    }
    playVideo();
    //setupScrollWatcher();
    $('pre code').each(function(i, e) {
      return hljs.highlightBlock(e);
    });
    $('.sideBarToggle').on('click', function() {
      $('.layout-main-wrapper').toggleClass('open');
      return $('.menu_bar, .sideBarToggle').toggleClass('close');
    });
    bindContactForm();
    $(window).off('nav-transition-done');
    if (Modernizr.csstransitions) {
      return bindSidebar();
    }
  });

})(jQuery);
