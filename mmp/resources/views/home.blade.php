<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrab4/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrab4/css/uikit.min.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">


    <!-- CSS -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <title>Laravel</title>
</head>
<body>

<!--  start upper Bar -->
<div class="upper-bar  ">
    <div class="container text-center">
        <div class="row">
            <div class=" info col-sm text-md-left ">
                <form class="form-inline   ">
                    <input class="form-control " type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger ml-lg-3" type="submit">Search</button>
                </form>

            </div>

            <div class=" info col-sm text-md-right">
                <a class="ml-3"><span><i class="fa fa-sign-in"></i> SignIn</span></a>
                <a class="ml-3"><span><i class="fa fa-user-plus"></i> SignUp</span></a>
            </div>
        </div>
    </div>
</div>

<!--   End upper Bar -->

<!--   start navBar -->
<nav class="navbar navbar-expand-lg navbar-light  ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <span>MM</span><span>P</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Mosque</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Library</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Human resource</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<!--   end navBar -->

<!--   start slider  -->


<div class="slider">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main_slider" data-slide-to="0" class="active"></li>
            <li data-target="#main_slider" data-slide-to="1"></li>
            <li data-target="#main_slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <h1> We're an Independent shoping and <span> markiting </span> Agency </h1>
            <div class="overlay"></div>
            <?php $a = "myphoto/11.jpeg"; ?>
            <?php $b = "myphoto/11.jpeg"; ?>
            <?php $c = "myphoto/11.jpeg"; ?>
            <div style="background-image: url(<?php echo $a;?>) ; " class="carousel-item  carousel-one active">

            </div>
            <div style="background-image: url(<?php echo $b;?>); " class="carousel-item carousel-tow">

            </div>
            <div style="background-image: url(<?php echo $c;?>); " class="carousel-item carousel-three">

            </div>
        </div>


    </div>
</div>
<!--   end slider  -->

<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->


<!-- Tab panes -->


<!-- AaaAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
<!--  start features -->
<div class="features text-center">
    <div class="container">

        <div class="row">

            <div class="col box-style">
                <li class="fa fa-home fa-3x rounded-circle"></li>
                <h3> Great shop</h3>
                <p> make shop now and take the beast price and descount</p>
            </div>

            <div class="col box-style">
                <li class="fa fa-home  fa-3x rounded-circle"></li>
                <h3> Great shop</h3>
                <p> make shop now and take the beast price and descount</p>
            </div>

            <div class="col box-style">
                <li class="fa fa-home  fa-3x rounded-circle"></li>
                <h3> Great shop</h3>
                <p> make shop now and take the beast price and descount</p>
            </div>

            <div class="col box-style">
                <li class="fa fa-home  fa-3x rounded-circle"></li>
                <h3> Great shop</h3>
                <p> make shop now and take the beast price and descount</p>
            </div>

        </div>

        <div class="row">

            <div class="col box-style">
                <li class="fa fa-book fa-3x rounded-circle"></li>
                <h3> library</h3>
                <p> make shop now and take the beast price and descount</p>
            </div>

            <div class="col box-style">
                <li class="fa fa-home  fa-3x rounded-circle"></li>
                <h3> Great shop</h3>
                <p> make shop now and take the beast price and descount</p>
            </div>

            <div class="col box-style">
                <li class="fa fa-hand-rock-o  fa-3x rounded-circle"></li>
                <h3>Friendship of Islam </h3>

                <p> make shop now and take the beast price and descount</p>
            </div>

            <div class="col box-style">
                <li class="fa fa-user  fa-3x rounded-circle"></li>
                <h3> Great persons</h3>
                <p> make shop now and take the beast price and descount</p>
            </div>


        </div>

    </div>


</div>
<!--  end features -->


<!--  start overview -->
<div class="overview text-center">
    <div class="container">
        <h1> company overview</h1>
        <p>We are Sitel, part of the Acticall Sitel Group. We are one of the world’s leading outsourcing providers of
            customer experience management and we would like to share something with you - our promise of
            experience. </p>
        <h4> let's shop today</h4>
        <button>View More</button>
    </div>

</div>
<!--  end overview -->
<!-- start news -->


<div class="testimonials-container">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-7 testimonial-list wow fadeInLeft" style="margin-top: 50px;">
                <h1>News</h1>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <div class="testimonial-image">
                            <img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et.
                                Lorem ipsum dolor sit amet, consectetur..."<br>
                                <a href="#">Lorem Ipsum, dolor.co.uk</a>
                            </p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane " id="tab2">
                        <div class="testimonial-image">
                            <img src="assets/img/testimonials/2.jpg" alt="" data-at2x="assets/img/testimonials/2.jpg">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                nisl ut aliquip
                                ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                ullamcorper suscipit
                                lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                <a href="#">Minim Veniam, nostrud.com</a>
                            </p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane " id="tab3">
                        <div class="testimonial-image">
                            <img src="assets/img/testimonials/3.jpg" alt="" data-at2x="assets/img/testimonials/3.jpg">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et.
                                Lorem ipsum dolor sit amet, consectetur..."<br>
                                <a href="#">Lorem Ipsum, dolor.co.uk</a>
                            </p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane " id="tab4">
                        <div class="testimonial-image">
                            <img src="assets/img/testimonials/4.jpg" alt="" data-at2x="assets/img/testimonials/4.jpg">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                nisl ut aliquip
                                ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                ullamcorper suscipit
                                lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                <a href="#">Minim Veniam, nostrud.com</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs right-nav" role="tablist">
                    <li class="nav-item ">
                        <a class="nav-link active" href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
                    </li>
                </ul>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-5">
                <div class="widget-sidebar">
                    <h2 class="title-widget-sidebar"> Most read</h2>
                    <div class="content-widget-sidebar">
                        <ul>
                            <li class="recent-post" >

                                <div class="row">
                                    <div class="col-sm-4 "  >
                                        <img src="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg"
                                             class="img-responsive">
                                    </div>
                                    <div class="col-sm " >
                                        <a href="#"><h5>The Curious Incident of the Dog in the Night-Time </h5></a>
                                        <a style="float: right;color: #ffffff" class="btn btn-sm btn-danger">Read</a>


                                        <p>
                                            <small><i class="fa fa-calendar" data-original-title="" title=""></i> 30
                                                Juni 2017
                                            </small>
                                        </p>
                                    </div>
                                </div>


                            </li>
                            <hr>

                            <li class="recent-post" >

                                <div class="row">
                                    <div class="col-sm-4 "  >
                                        <img src="https://lh3.googleusercontent.com/-ojLI116-Mxk/WM1ZIwdnuwI/AAAAAAAADeo/4K6VpwIPSfgsmlXJB5o0N8scuI3iW4OpwCJoC/w424-h318-n-rw/thumbnail6.jpg"
                                              class="img-responsive">
                                    </div>
                                    <div class="col-sm " >
                                        <a href="#"><h5>The Curious Incident of the Dog in the Night-Time </h5></a>
                                        <a style="float: right;color: #ffffff" class="btn btn-sm btn-danger">Read</a>


                                        <p>
                                            <small><i class="fa fa-calendar" data-original-title="" title=""></i> 30
                                                Juni 2017
                                            </small>
                                        </p>
                                    </div>
                                </div>


                            </li>
                            <hr>

                            <li class="recent-post" >

                                <div class="row">
                                    <div class="col-sm-4 " style="padding: 10px ;" >
                                        <img src="https://lh3.googleusercontent.com/-TrK1csbtHRs/WM1ZI1SIUNI/AAAAAAAADeo/OkiUjuad6skWl9ugxbiIA_436OwsWKBNgCJoC/w424-h318-n-rw/thumbnail3.jpg"
                                             class="img-responsive">
                                    </div>
                                    <div class="col-sm " style="padding: 10px ;">
                                        <a href="#"><h5>The Curious Incident of the Dog in the Night-Time </h5></a>
                                        <a style="float: right;color: #ffffff" class="btn btn-sm btn-danger">Read</a>


                                        <p>
                                            <small><i class="fa fa-calendar" data-original-title="" title=""></i> 30
                                                Juni 2017
                                            </small>
                                        </p>
                                    </div>
                                </div>


                            </li>
                            <hr>

                            <li class="recent-post" >

                                <div class="row">
                                    <div class="col-sm-4 " style="padding: 10px ;" >
                                        <img src="https://lh3.googleusercontent.com/-UKfIhJSBW9M/WM1ZI8ou34I/AAAAAAAADeo/vlLGY29147AYLaxUW29ZXJlun115BhkhgCJoC/w424-h318-n-rw/thumbnail7.jpg"
                                             class="img-responsive">
                                    </div>
                                    <div class="col-sm " style="padding: 10px ;">
                                        <a href="#"><h5>The Curious Incident of the Dog in the Night-Time </h5></a>
                                        <a style="float: right;color: #ffffff" class="btn btn-sm btn-danger">Read</a>


                                        <p>
                                            <small><i class="fa fa-calendar" data-original-title="" title=""></i> 30
                                                Juni 2017
                                            </small>
                                        </p>
                                    </div>
                                </div>


                            </li>


                        </ul>
                    </div>
                </div>


            </div>


        </div>
    </div>
</div>


<!-- end news -->


<!-- start most read  -->

<!--  end most read -->


<!--  start latest-posts


 <div class="latest-posts ">
    <div class="container">
        <h1 class="text-center"> Latest Posts</h1>
        <p class=" latest-par text-center">We are Sitel, part of the Acticall Sitel Group. We are one of the world’s
            leading outsourcing providers of
            customer experience management and we would like to share something with you - our promise of
            experience. </p>
        <div class="row  cards card-deck ">
            <div class="card col-md-4 uk-card uk-card-hover uk-inline-clip uk-transition-toggle">
                <img class="card-img-top uk-transition-scale-up uk-transition-opaque " src="myphoto/l1.jpg"
                     alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">8jun-2015</h6>
                    <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                    </p>
                    <a href="#!" class="card-link">Read more</a>
                </div>
            </div>
            <div class="card col-md-4 uk-card uk-card-hover uk-inline-clip uk-transition-toggle">
                <img class="card-img-top uk-transition-scale-up uk-transition-opaque " src="myphoto/l1.jpg"
                     alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">8jun-2015</h6>
                    <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                    </p>
                    <a href="#!" class="card-link">Read more</a>
                </div>
            </div>
            <div class="card col-md-4 uk-card uk-card-hover uk-inline-clip uk-transition-toggle">
                <img class="card-img-top uk-transition-scale-up uk-transition-opaque " src="myphoto/l1.jpg"
                     alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">8jun-2015</h6>

                    <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                    </p>
                    <a href="#!" class="card-link">Read more</a>
                </div>
            </div>

        </div>
    </div>
</div>
 -->


<!--  end latest-posts -->

<!--  start Testimonials -->

<div class="testimonials uk-background-fixed">
    <div class="overlay"></div>
    <a class="carousel-control-prev" href="#testimonials" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#testimonials" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <div class="container">
        <div id="testimonials" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials" data-slide-to="1"></li>
                <li data-target="#testimonials" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner text-center">


                <div class="carousel-item  carousel-one active">
                    <div class="carousel-caption d-none d-block">
                        <img class=" rounded-circle" src="myphoto/cm.png " alt="Circle image">
                        <h3>Second slide label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item carousel-tow">
                    <div class="carousel-caption d-none d-block">
                        <img class=" rounded-circle" src="myphoto/cm.png " alt="Circle image">

                        <h3>Second slide label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item carousel-three">
                    <div class="carousel-caption d-none d-block">
                        <img class=" rounded-circle" src="myphoto/cm.png " alt="Circle image">

                        <h3>Second slide label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
<!--  end Testimonials -->

<!--  start Pricing-table -->

<!--  end Pricing-table -->
<!--  start Choose Us -->

<!--  end Choose Us -->

<!--  start statistics -->

<div class="statistics text-center  ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <li class="fa fa-user fa-5x  "></li>
                <span class="num">155</span>
                <p>users</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <li class="fa fa-heart fa-5x  "></li>
                <span class="num">155</span>
                <p>user happy</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <li class="fa fa-briefcase fa-5x  "></li>
                <span class="num">155</span>
                <p>user share</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <li class="fa fa-comment fa-5x  "></li>
                <span class="num">155</span>
                <p>user comment</p>
            </div>


        </div>
    </div>
</div>
<!--  end sStatistics-->


<!--  start Contact Us  -->

<div class="contact-us    ">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-8 text-left">
                <p>We are Sitel, part of the Acticall part of the Acticall </p>
            </div>
            <div class="col-sm-4 text-right">
                <a class="contact"> contact us</a>
            </div>
        </div>
    </div>
</div>
<!--  end Contact Us-->

<!--  start footer  -->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class=" main col-md-4">
                <h1><span>Gaza</span> <span>shop</span></h1>
                <p>We are Sitel, part of the Acticall Sitel Group. We are one of the world’s leading outsourcing
                    providers of
                    customer experience management and we would like to share something with you - our promise of</p>
                <a href="#"> Reed More</a>
            </div>
            <div class=" help-links col-md-4">
                <h3>Helpful link</h3>
                <div class="row help-link">
                    <div class="col">
                        <ul class="list-unstyled">
                            <li>Home</li>
                            <li>About us</li>
                            <li>Last product</li>
                            <li>shipping</li>
                            <li>contact us</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-unstyled">
                            <li>Home</li>
                            <li>About us</li>
                            <li>Last product</li>
                            <li>shipping</li>
                            <li>contact us</li>


                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="contact">
                    <h3>Countact us</h3>
                    <ul class="list-unstyled">
                        <li>5656 , palistin , Gaza alshohada st.</li>
                        <li>phone: 0597750636</li>
                        <li>Email:<a href="mailto:aboserage.2015@gmail.com?Subject=Hello%20again" target="_top">
                                aboserage.2015@gmail
                                .com</a></li>

                    </ul>
                </div>
            </div>
        </div>


    </div>
</div>

<!--  end footer-->

<!--  start copyright  -->

<div class="copyright text-center">
    <div class="container">
        <div class="row">
            <div class="col text-left">
                copyright 2017 Gaza shop <span class=" fa fa-copyright"></span> all right reciverd
            </div>

            <div class="col text-right">
                <ul>
                    <li class="fa fa-facebook"></li>
                    <li class="fa fa-twitter">
                    </li>
                    <li class="fa fa-youtube"></li>
                    <li class="fa fa-instagram"></li>


                </ul>
            </div>

        </div>
    </div>
</div>
<!--  end copyright-->
<script src="bootstrab4/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="bootstrab4/js/popper.js" type="text/javascript"></script>
<script src="bootstrab4/js/bootstrap.min.js" type="text/javascript"></script>
<script src="bootstrab4/js/uikit.min.js" type="text/javascript"></script>
<script src="bootstrab4/js/uikit-icons.min.js" type="text/javascript"></script>
<script src="{{asset('js/main.js')}}" type="text/javascript"></script>

<script>
    $(document).ready(function () {
        $('.navbar-nav li').click(function () {
            $('.navbar-nav li').each(function () {
                $(this).removeClass('active');
            });
            $(this).addClass('active');
        });
    });

</script>


</body>


</html>
