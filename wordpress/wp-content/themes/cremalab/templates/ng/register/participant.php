<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-xs-8">
        <input type="text" class="form-control" placeholder="Name" ng-model="participant.name" />
      </div>
      <div class="col-xs-4">
        <input type="text" class="form-control" placeholder="Age" ng-model="participant.age" />
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" ng-model="participant.patient">
            Current/former patient?
          </label>
        </div>
      </div>
      <div class="col-xs-6">
        <a ng-click="remove()">Remove</a>
      </div>
    </div>
  </div>
</div>