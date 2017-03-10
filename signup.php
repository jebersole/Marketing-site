<?php include("header.html"); ?>
<link href="signup.css" rel="stylesheet">
<link href="common.css" rel="stylesheet">
<script src="signup.js"></script>
    <div id="topper">
        <div class="container" id="topcont">
            <img class="img-responsive" id="topimg" src="assets/signup.jpg" style=
            "max-height: 100%; max-width: 100%;">
            <div id="topcap">
                <h1>Sign Up Now</h1>
                <p>Free, painless activation</p>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div aria-labelledby="myModalLabel" class="modal fade" id="windowModal" role="dialog" tabindex=
    "-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" class="close" data-dismiss="modal" type=
                    "button"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Legal Agreement</h4>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button class="btn btn-default close-btn" data-dismiss="modal" type=
                    "button">Close</button> <button class="btn btn-primary confirm-btn" type=
                    "button">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="ContentProviderAgreement hidden">
        <div class="babelsans">
            Legal text would be placed here.
        </div>
    </div>
    <!-- Start Register Form section -->
    <div class="register-form-section">
        <div class="container">
            <!-- Start Form -->
            <form action='' class="register-request-form" method='post'>
                <input name='go' type='hidden'>
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control" id="firstname" placeholder="First Name" type=
                        "text">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" id="lastname" placeholder="Last Name" type=
                        "text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control" id="email" placeholder="Email Address" type=
                        "text">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" id="username" placeholder="Username" type=
                        "text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control pass-input text-input" id="password" name="pwd1"
                        onkeyup="passwordStrength(this.value)" placeholder="Password" type=
                        "password" value=''>
                        <div class="containerpassword">
                            <label class="passwordStrength" for="passwordStrength">Password
                            Strength:</label> <label id="passwordDescription"></label><br>
                            <div class="strength0" id="passwordStrength"></div><input id=
                            "passwordpower" name="passwordpower" type="hidden" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control conf-pass-input text-input" id="repassword"
                        name="pwd2" placeholder="Confirm Password" type="password" value=''>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 user-agreements">
                        <p><label style="width: 100% !important;"><input name="accepted" style=
                        "margin: 30px 0px 15px 10px !important;" type="checkbox"> I agree to the
                        <a class="read-agreements" data-type="ContentProviderAgreement" href=
                        "javascript:void(0)">TOS</a> agreements.</label></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="text-align: center">
                        <button class="get-content-btn" type="submit">Sign Up</button>
                    </div>
                </div>
            </form>
            <!-- END Form -->
        </div>
    </div>
    <!-- END Register Form section -->
    <!-- START A FEATURETTE -->
    <div>
        <div class="row featurette" style="background: #ebeff2;">
            <div class="container">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Get Instant Support. <span class=
                    "text-muted">Yeah.</span></h2>
                    <p class="lead">A team of highly trained specialists is here to take care of
                    you. Not only will they answer your questions, but they will help you design a
                    plan to really succeed. Day and night!</p>
                </div>
                <div class="col-md-5"><img class="featurette-image img-responsive center-block"
                src="assets/sup.png"></div>
            </div>
        </div>
    </div>
    <!-- END THE FEATURETTE -->
    <script src="banner.js"></script>
    <?php include("footer.html"); ?>
