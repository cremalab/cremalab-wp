<form class="form-horizontal luminateApi donation-form" ng-submit="form.submit()">
  <div class="panel panel-default">
    <div class="panel-heading">Donation Information</div>
    <div class="panel-body">
      <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label">Donation amount:</label>
        <div class="col-xs-10 col-sm-4">
          <div class="radio">
            <label>
              <input type="radio" name="level_id" value="13162" ng-model="form.donate.amount"> $100
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="level_id" value="13164" ng-model="form.donate.amount"> $50
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="level_id" value="13161" ng-model="form.donate.amount"> $20
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" id="level-other" name="level_id" value="13163" ng-model="form.donate.amount"> Other amount:
            </label>
          </div>
          <div class="input-group" id="other-amount-input-group">
            <span class="input-group-addon">$</span>
            <input type="text" class="form-control" id="other-amount" name="other_amount" ng-disabled="form.donate.amount!='13163'">
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">Billing Information</div>
    <div class="panel-body">
      <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label">First Name:</label>
        <div class="col-sm-8 col-md-6">
          <input type="text" class="form-control" ng-model="form.donate.first_name" name="billing.name.first"> 
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label">Last Name:</label>
        <div class="col-sm-8 col-md-6">
          <input type="text" class="form-control" name="billing.name.last"> 
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label">Street 1:</label>
        <div class="col-sm-8 col-md-6">
          <input type="text" class="form-control" name="billing.address.street1"> 
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label">Street 2:</label>
        <div class="col-sm-8 col-md-6">
          <input type="text" class="form-control" name="billing.address.street2"> 
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label">City:</label>
        <div class="col-sm-8 col-md-6">
          <input type="text" class="form-control" name="billing.address.city"> 
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label">State:</label>
        <div class="col-sm-8 col-md-6">
          <select class="form-control" name="billing.address.state">
            <option>State</option>
            <option value="AK">AK</option>
            <option value="AL">AL</option>
            <option value="AR">AR</option>
            <option value="AZ">AZ</option>
            <option value="CA">CA</option>
            <option value="CO">CO</option>
            <option value="CT">CT</option>
            <option value="DC">DC</option>
            <option value="DE">DE</option>
            <option value="FL">FL</option>
            <option value="GA">GA</option>
            <option value="HI">HI</option>
            <option value="IA">IA</option>
            <option value="ID">ID</option>
            <option value="IL">IL</option>
            <option value="IN">IN</option>
            <option value="KS">KS</option>
            <option value="KY">KY</option>
            <option value="LA">LA</option>
            <option value="MA">MA</option>
            <option value="MD">MD</option>
            <option value="ME">ME</option>
            <option value="MI">MI</option>
            <option value="MN">MN</option>
            <option value="MO">MO</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="NC">NC</option>
            <option value="ND">ND</option>
            <option value="NE">NE</option>
            <option value="NH">NH</option>
            <option value="NJ">NJ</option>
            <option value="NM">NM</option>
            <option value="NV">NV</option>
            <option value="NY">NY</option>
            <option value="OH">OH</option>
            <option value="OK">OK</option>
            <option value="OR">OR</option>
            <option value="PA">PA</option>
            <option value="RI">RI</option>
            <option value="SC">SC</option>
            <option value="SD">SD</option>
            <option value="TN">TN</option>
            <option value="TX">TX</option>
            <option value="UT">UT</option>
            <option value="VA">VA</option>
            <option value="VT">VT</option>
            <option value="WA">WA</option>
            <option value="WI">WI</option>
            <option value="WV">WV</option>
            <option value="WY">WY</option>
            <option value="AS">AS</option>
            <option value="FM">FM</option>
            <option value="GU">GU</option>
            <option value="MH">MH</option>
            <option value="MP">MP</option>
            <option value="PR">PR</option>
            <option value="PW">PW</option>
            <option value="VI">VI</option>
            <option value="AA">AA</option>
            <option value="AE">AE</option>
            <option value="AP">AP</option>
            <option value="AB">AB</option>
            <option value="BC">BC</option>
            <option value="MB">MB</option>
            <option value="NB">NB</option>
            <option value="NL">NL</option>
            <option value="NS">NS</option>
            <option value="NT">NT</option>
            <option value="NU">NU</option>
            <option value="ON">ON</option>
            <option value="PE">PE</option>
            <option value="QC">QC</option>
            <option value="SK">SK</option>
            <option value="YT">YT</option>
            <option value="None">None</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label">ZIP Code:</label>
        <div class="col-sm-3 col-md-2">
          <input type="text" class="form-control" name="billing.address.zip"> 
        </div>
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">Email</div>
    <div class="panel-body">
      <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label">Email Address:</label>
        <div class="col-sm-8 col-md-6">
          <input type="email" class="form-control" name="donor.email">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-md-offset-2 col-sm-8 col-md-6">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="donor.email_opt_in" value="true" checked> Yes, I'd like to receive email from American Health Society
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">Payment Information</div>
    <div class="panel-body">
      <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label">Card Number:</label>
        <div class="col-sm-8 col-md-6">
          <input type="text" class="form-control" name="card_number">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label">CVV:</label>
        <div class="col-sm-2 col-md-1">
          <input type="text" class="form-control" name="card_cvv">
        </div>
      </div>
      <div class="form-group date-form-group">
        <label class="col-sm-3 col-md-2 control-label">Expiration Date:</label>
        <div class="col-sm-3 col-md-2">
          <select class="form-control" name="card_exp_date_month">
            <option>Month</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
        </div>
        <div class="col-sm-3 col-md-2">
          <select class="form-control" name="card_exp_date_year">
            <option>Year</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2019">2020</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Complete Donation</button>
</form>