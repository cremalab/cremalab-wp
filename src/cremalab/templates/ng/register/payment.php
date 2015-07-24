<form>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <div class="form-inline">
          <label>Billing Name:</label>
          <div class="pull-right">
            <label>
              <input type="checkbox" value="" ng-model="model.copy_name">
              Use registration name?
            </label>
          </div>
        </div>
        <input type="text" class="form-control" id="billing_name" name="billing_name" ng-disabled="model.copy_name" ng-model="model.billing_name" />
      </div>
      <div class="form-group">
        <div class="form-inline">
          <label>Email</label>
          <div class="pull-right">
            <label>
              <input type="checkbox" value="" ng-model="model.copy_email">
              Use registration email?
            </label>
          </div>
        </div>
        <input type="email" class="form-control" id="billing_email" name="billing_email" ng-disabled="model.copy_email" ng-model="model.billing_email" />
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label>Billing Address</label>
            <input type="text" class="form-control" ng-model="model.billing_address" />
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>City</label>
            <input type="text" class="form-control" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-7">
          <div class="form-group">
            <label>State</label>
            <select class="form-control">
              <option>Kansas</option>
            </select>
          </div>
        </div>
        <div class="col-xs-5">
          <div class="form-group">
            <label>Zip</label>
            <input type="text" class="form-control" />
          </div>
        </div>
      </div>
      <!--<div class="form-group">
        <label>Country</label>
        <input type="text" class="form-control" />
      </div>-->
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <h3 class="panel-title pull-left">Payment</h3>
          <div class="pull-right">
            <img src="<?php echo get_bloginfo('template_directory') ?>/dist/images/cards/visa_small.gif" alt="Visa" />
            <img src="<?php echo get_bloginfo('template_directory') ?>/dist/images/cards/mastercd_small.gif" alt="Mastercard" />
            <img src="<?php echo get_bloginfo('template_directory') ?>/dist/images/cards/discovercard_sm.gif" alt="Discover" />
            <img src="<?php echo get_bloginfo('template_directory') ?>/dist/images/cards/amex_small.gif" alt="American Express" />
          </div>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label>CC Number</label>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="row">
            <div class="col-xs-3">
              <div class="form-group">
                <label>CVV</label>
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-xs-8">
              <div class="form-group">
                <label>Expiration</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="MM" />
                  <span class="input-group-addon">/</span>
                  <input type="text" class="form-control" placeholder="YY" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Submit Registration</button>
      </div>
    </div>
  </div>
</form>