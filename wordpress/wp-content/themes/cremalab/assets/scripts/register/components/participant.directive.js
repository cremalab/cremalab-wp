(function() {
  var Controller = function($scope) {
    $scope.remove = function() {
      $scope.participant.remove = true;
    };
  };

  var Directive = function () {
    return {
      restrict: 'E',
      templateUrl: 'register/participant.html',
      replace: true,
      scope: {
        'participant': '='
      },
      controller: ['$scope', Controller]
    };
  };

  angular.module("app").directive("kcwParticipant", [Directive]);

})();