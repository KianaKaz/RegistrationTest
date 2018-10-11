<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="/css/registration.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
        </div>
    </div>
        <div class="row setup-content" id="step-1">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <form role="form" method="post" action="/register/store/step1">
                    <h3>Personal Information</h3>
                    <div class="form-group">
                        <label class="control-label">First Name</label>
                        <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  name="first_name" id="first_name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Last Name</label>
                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" name="last_name" id="last_name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Telephone</label>
                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Telephone" name="tell" id="tell" />
                    </div>
                        <button class="btn btn-primary btn-lg pull-right" type="submit" >Next</button>
                    </form>

                </div>
            </div>
        </div>

</div>

<script src="/js/registeration.js"></script>