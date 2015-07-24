(function() {
  var Config = function($validationProvider) { 
    $validationProvider.setErrorHTML(function (msg) {
      return  "<label class=\"control-label has-error\">" + msg + "</label>";
    });
  };

  angular.module("app").config(['$validationProvider', Config]);

})();