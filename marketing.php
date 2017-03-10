<?php include("header.html"); ?>
    <div class="carousel slide" data-ride="carousel" id="myCarousel">
        <!-- Indicators -->
        <div class="container">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
                <li data-slide-to="1" data-target="#myCarousel"></li>
                <li data-slide-to="2" data-target="#myCarousel"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img alt="First slide" class="first-slide" src="assets/slide1.jpg">
                    <div class="carousel-caption">
                        <h1>Stand Out from the Crowd</h1>
                        <p>At International Consultants, hit your target on the first try!</p>
                        <p><a class="btn btn-lg btn-primary" href="signup.php" role="button">Sign
                        up today</a></p>
                    </div>
                </div>
                <div class="item">
                    <img alt="Second slide" class="second-slide" src="assets/slide2.jpg">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Real Time Connectivity</h1>
                            <p>No matter where you are, stay connected and on top of the
                            project!</p>
                            <p><a class="btn btn-lg btn-primary" href="about.php" role=
                            "button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img alt="Third slide" class="third-slide" src="assets/slide3.jpg">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Bring In More Talent, Effortlessly</h1>
                            <p>The right specialist is always available at the press of a
                            button!</p>
                            <p><a class="btn btn-lg btn-primary" href="about.php" role=
                            "button">Find out how</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="left carousel-control" data-slide="prev" href="#myCarousel" role=
        "button"><span aria-hidden="true" class="glyphicon glyphicon-chevron-left" style=
        "margin-left: 15px;"></span> <span class="sr-only">Previous</span></a> <a class=
        "right carousel-control" data-slide="next" href="#myCarousel" role=
        "button"><span aria-hidden="true" class="glyphicon glyphicon-chevron-right" style=
        "margin-right: 15px;"></span> <span class="sr-only">Next</span></a>
    </div>
    <!-- End Carousel -->
    <!-- Begin Featurettes -->
    <div id="main">
        <div class="row featurette" style="background: #ebeff2;">
            <div class="container">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Increase Productivity. <span class=
                    "text-muted">Really.</span></h2>
                    <p class="lead">Send your quarterly results through the roof. Reduce overhead.
                    Boost morale. Gain a competitive advantage. Your company is capable of much
                    more, with us!</p>
                </div>
                <div class="col-md-5"><img class="featurette-image img-responsive center-block"
                src="assets/s1.png"></div>
            </div>
        </div>
        <div class="row featurette" style="background: #2d384a; color: #BEC9D2;">
            <div class="container">
                <div class="col-md-7 col-md-push-5">
                    <h2 class="featurette-heading" id="feature2">Get the whole world talking about
                    you. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Our integrated web and mobile technology transcends national
                    and cultural boundaries. We're new and cutting edge. We're super effective. And
                    we're cool.</p>
                </div>
                <div class="col-md-5 col-md-pull-7"><img class=
                "featurette-image img-responsive center-block" src="assets/s2.png"></div>
            </div>
        </div>
        <div class="row featurette" style="background: #ebeff2;">
            <div class="container">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Increase your profits sky-high. <span class=
                    "text-muted">Never look back.</span></h2>
                    <p class="lead">Our talent pool will take your business even further than the
                    next level. Quality employees produce quality results, and your balance sheets
                    will amply reflect this.</p>
                </div>
                <div class="col-md-5"><img class="featurette-image img-responsive center-block"
                src="assets/s3.png"></div>
            </div>
        </div>
    </div>
    <!-- END THE FEATURETTES -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="carousel.js"></script>
    <?php include("footer.html"); ?>
