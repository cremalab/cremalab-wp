(function() {
  var Directive = function ($timeout) {
    return {
      restrict: 'AC',
      link: function(scope, element) {
        $timeout(function() {
          element[0].focus();
        }, 0);
      }
    };
  };

  angular.module("app").directive("kcwAutofocus", ['$timeout', Directive]);

})();
