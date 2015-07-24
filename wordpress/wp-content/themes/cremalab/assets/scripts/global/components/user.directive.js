(function() {
  var Controller = function($scope, $state, $modal, Auth) {
    var modalInstance;

    $scope.loggedIn = false;
    $scope.user = {};
    $scope.loginMessage = "";

    Auth.test().then(function() {
      $scope.loggedIn = true;
    });

    $scope.login = function() {
      $scope.loginMessage = "";
      modalInstance = $modal.open({
        templateUrl: 'global/login.html',
        scope: $scope,
        size: 'sm'
      });
    };

    $scope.logout = function() {
      Auth.logout().then(function() {
        $scope.loggedIn = false;
      });
    };

    $scope.submit = function() {
      Auth.login($scope.user)
        .then(function(user) {
          $scope.loggedIn = true;
          modalInstance.close();
        })
        .catch(function(message) {
          $scope.loginMessage = message;
        });

    };

    $scope.cancel = function() {
      modalInstance.close();
    };
  };

  var Directive = function () {
    return {
      restrict: 'CE',
      template: '<div><span ng-click="login()" ng-if="!loggedIn">Login</span><span ng-if="loggedIn" ng-click="logout()">Logout</span></div>',
      replace: true,
      controller: ['$scope', '$state', '$modal', 'Auth', Controller]
    };
  };

  angular.module("app").directive("kcwLogin", [Directive]);

})();