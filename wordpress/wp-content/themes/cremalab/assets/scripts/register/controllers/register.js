
(function() {

  var Controller = function ($scope) {
    $scope.registration = {
      info: {
        participants: []
      },
      team: {},
      payment: {
        copy_name: true,
        copy_email: true
      }
    };
    $scope.foo = 'bar';

    $scope.$watch("registration", function(object) {
      if (object.payment.copy_name) {
        $scope.registration.payment.billing_name = object.info.name;
      }
      if (object.payment.copy_email) {
        $scope.registration.payment.billing_email = object.info.email;
      }

      var participants = object.info.participants;
      if (participants) {
        for (var i=0; i<participants.length; i++) {
          console.log(participants[i].remove);
          if (participants[i].remove) {
            $scope.registration.info.participants.splice(i, 1);
          }
        }
      }
    }, true);
  };

  angular.module("app").controller("RegisterController", ['$scope', Controller]);

})();