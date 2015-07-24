
  <div role="teamtabs" class="teamtabs">
    <ul class="nav nav-tabs">
      <li class="active">
        <a href="#addteam" data-toggle="tab">Add a Team</a>
      </li>
      <li>
        <a href="#jointeam" data-toggle="tab">Join a Team</a>
      </li>
    </ul>
    <div class="tab-content">
      <div id="addteam" class="tab-pane active">
        <form name="AddTeam">
          <div class="form-group">
            <label>Team Name:</label>
            <input type="text" class="form-control kcw-autofocus" id="team_name" name="team_name" ng-model="model.team_name" validator="required" />
          </div>
          <div class="form-group">
            <label>Team Description:</label>
            <textarea class="form-control" id="team_description" name="team_description" ng-model="model.team_description"></textarea>
          </div>
          <div class="center-block">
            <button class="btn btn-primary" validation-submit="AddTeam" ng-click="next()" >
              Continue
            </button>
          </div>
        </form>
      </div>
      <div id="jointeam" class="tab-pane">
        <form>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-search"></span>
              </span>
              <input type="text" class="form-control" placeholder="Find a team..." />  
            </div>
          </div>
          <div class="center-block">
            <a class="btn btn-primary" ui-sref="root.payment">
              Continue
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>