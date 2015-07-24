(function() {
  var Controller = function($scope, $state) {
    $scope.next = function() {
      $state.go("root.team");
    };
    $scope.addParticipant = function() {
      $scope.model.participants.push({});
    };
  };

  var Directive = function () {
    return {
      restrict: 'E',
      templateUrl: 'register/info.html',
      replace: true,
      scope: {
        'model': '='
      },
      controller: ['$scope', '$state', Controller],
      controllerAs: "infoCtrl"
    };
  };

  angular.module("app").directive("kcwGeneralinfo", [Directive]);

})();