(function() {

  var Directive = function () {
    return {
      restrict: 'E',
      templateUrl: 'register/payment.html',
      replace: true,
      scope: {
        'model': '='
      }
    };
  };

  angular.module("app").directive("kcwPayment", [Directive]);

})();