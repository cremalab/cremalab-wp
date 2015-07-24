<form name="GeneralInfo">
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label class="control-label" for="info_name">Name:</label>
        <input type="text" class="form-control kcw-autofocus" name="info_name" id="info_name" ng-model="model.name" validator="required" />
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label class="control-label" for="info_email">Email:</label>
        <input type="email" class="form-control" name="info_email" id="info_email" ng-model="model.email" validator="required, email" />
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="checkbox">
      <label>
        <input type="checkbox" value="" ng-model="model.patient">
        Are you a current/former patient?
      </label>
    </div>
  </div>
  <p>
    Don't forget to register your friends and family!
    <strong>Remember, children under 5 are Free!</strong>
  </p>
  <kcw-participant participant="participant" participants="model.participants" ng-repeat="participant in model.participants"></kcw-participant>
  <div class="form-group">
    <div class="btn-group">
      <a class="btn btn-info" ng-click="addParticipant()">
        <span class="glyphicon glyphicon-plus"></span>
        Add Participant
      </a>
      <button class="btn btn-primary" validation-submit="GeneralInfo" ng-click="next()">
        Continue
      </button>
    </div>
  </div>

</form>