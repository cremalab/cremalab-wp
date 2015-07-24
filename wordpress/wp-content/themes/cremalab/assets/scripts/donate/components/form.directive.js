(function() {
  var Controller = function($scope, $state, DonateService) {
    this.donate = {};
    this.submit = function() {
      DonateService.donate(this.donate);
    };
  };

  var Directive = function () {
    return {
      restrict: 'E',
      templateUrl: 'donate/index.html',
      replace: true,
      scope: {},
      controller: ['$scope', '$state', 'DonateService', Controller],
      controllerAs: "form"
    };
  };

  angular.module("app").directive("kcwDonateForm", [Directive]);

})();