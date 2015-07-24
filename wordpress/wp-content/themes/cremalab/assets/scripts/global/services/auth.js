(function() {
  var Auth = function($q) {

    function logout() {
      var deferred = $q.defer();

      luminateExtend.api.request({
        api: 'cons', 
        callback: function(data) {
          deferred.resolve(data);
        },
        data: jQuery.param({
          method: 'logout'
        })
      });

      return deferred.promise;
    }

    function test() {
      var deferred = $q.defer();

      luminateExtend.api.request({
        api: 'cons', 
        callback: function(data) {
          if (data.errorResponse) {
            deferred.reject(data.errorResponse.message);
          } else {
            deferred.resolve(data);
          }
        },
        data: jQuery.param({
          method: 'loginTest'
        })
      });

      return deferred.promise;
    }

    function login(data) {
      var deferred = $q.defer();

      luminateExtend.api.request({
        api: 'cons', 
        callback: function(data) {
          if (data.errorResponse) {
            deferred.reject(data.errorResponse.message);
          } else {
            deferred.resolve(data);  
          }
        }, 

        requiresAuth: true,

        data: jQuery.param({
          method: 'login',
          user_name: data.user_name,
          password: data.password
        })

      });

      return deferred.promise;
    }

    return {
      login: login,
      test: test,
      logout: logout
    };
  };

  angular.module('app').factory('Auth', ['$q', Auth]);
})();