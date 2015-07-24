(function() {
  var Config = function($stateProvider, $urlRouterProvider) {
    
    $urlRouterProvider.otherwise('/');

    $stateProvider
      .state('root', {
        url: '',
        abstract: true,
        templateUrl: 'register/index.html',
        controller: 'RegisterController'
      })
      .state('root.index', {
        url: "/",
        template: "<kcw-generalinfo model=\"registration.info\"></kcw-generalinfo>"
      })
      .state('root.team', {
        url: "/team",
        template: "<kcw-jointeam model=\"registration.team\"></kcw-jointeam>"
      })
      .state('root.payment', {
        url: "/payment",
        template: "<kcw-payment model=\"registration.payment\"></kcw-payment>"
      });

  };
  angular.module("app").config(['$stateProvider', '$urlRouterProvider', Config]);
})();
