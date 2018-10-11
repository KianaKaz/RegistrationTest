<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="/css/registration.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>

        </div>
    </div>
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <form role="form" method="post" action="/register/store/step2">
                    <h3>If you have more than one address add it if not press next.</h3>
                    <div class="form-group">
                        <label class="control-label">City</label>
                        <input maxlength="200" type="text" class="form-control" placeholder="Enter City" name="city" id="city" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Street Name</label>
                        <input maxlength="200" type="text" class="form-control" placeholder="Enter Street Name" name="St" id="St"  />
                    </div>
                    <div class="form-group">
                        <label class="control-label">House Number</label>
                        <input maxlength="200" type="text" class="form-control" placeholder="Enter House Number" name="NO" id="NO"  />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Zip</label>
                        <input maxlength="200" type="text" class="form-control" placeholder="Enter Zip" name="zip" id="zip"  />
                    </div>
                    <div class="form-group">
                        <input maxlength="200" type="hidden" value="<?php echo e(user()['id']); ?>" class="form-control" name="user_id" id="user_id"   />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                    <button class="btm btn-success btn-lg pull-left" type="submit">Add</button>
                </form>

            </div>
        </div>
    </div>
        <div class="row setup-content" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12">
                        <form action="/register/store/step3/<?php echo e(user()['id']); ?>" method="post">
                    <h3>Payment Information</h3>
                    <div class="form-group">
                        <label class="control-label">Acount Owner</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Acount Owner" name="Acount_owner" id="Acount_owner"  />
                    </div>
                    <div class="form-group">
                        <label class="control-label">IBAN</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter IBAN" name="IBAN" id="IBAN"  />
                    </div>
                            <div class="form-group">
                                <input maxlength="200" type="hidden" required="required" class="form-control" value="<?php echo e(user()['id']); ?>" name="user_id" id="user_id"  />
                            </div>
                    <button class="btn btn-success nextBtn btn-lg pull-right" type="submit" >save</button>
                            </form>
                </div>
            </div>
        </div>

</div>

<script src="/js/registeration.js"></script>