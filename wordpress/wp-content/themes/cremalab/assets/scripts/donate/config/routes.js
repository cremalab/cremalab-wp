(function() {
  var Config = function($stateProvider, $urlRouterProvider) {
    
    $urlRouterProvider.otherwise('/');

    $stateProvider
      .state('root', {
        url: '/',
        template: '<kcw-donate-form></kcw-donate-form>'
      });

  };
  angular.module("app").config(['$stateProvider', '$urlRouterProvider', Config]);
})();
