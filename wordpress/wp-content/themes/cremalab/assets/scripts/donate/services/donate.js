(function() {
  var Service = function($q) {

    function donate(data) {
      console.log(data);
    }

    return {
      donate: donate
    };
  };

  angular.module('app').factory('DonateService', ['$q', Service]);
})();