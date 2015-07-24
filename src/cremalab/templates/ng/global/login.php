<form name="LoginForm">
  <div class="modal-header">
      <h3 class="modal-title">Login</h3>
  </div>
  <div class="modal-body">
    <div class="alert alert-danger" role="alert" ng-if="loginMessage">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
      <span ng-bind="loginMessage">Enter a valid email address</span>
    </div>
    <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" ng-model="user.user_name" name="user_name" validator="required" />
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" ng-model="user.password" name="password" validator="required" />
    </div>
  </div>
  <div class="modal-footer">
      <button type="submit" validation-submit="LoginForm" class="btn btn-primary" ng-click="submit()">OK</button>
      <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
  </div>
</form>