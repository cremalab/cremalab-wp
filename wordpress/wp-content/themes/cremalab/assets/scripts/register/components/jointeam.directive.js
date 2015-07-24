(function() {
  var Controller = function($scope, $state) {
    $scope.next = function() {
      $state.go("root.payment");
    };
  };

  var Directive = function () {
    return {
      restrict: 'E',
      templateUrl: 'register/team.html',
      replace: true,
      scope: {
        'model': '='
      },
      controller: ['$scope', '$state', Controller]
    };
  };

  angular.module("app").directive("kcwJointeam", [Directive]);

})();