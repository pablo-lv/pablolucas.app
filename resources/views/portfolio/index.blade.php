@extends('layout.main')
@section('styles')
    <style>


        .down-page {
            position: absolute;
            top: 10px;
            left: 50%;
            width: 24px;
            height: 24px;
            margin-left: -12px;
            border-left: 2px solid #00bcd4;
            border-bottom: 2px solid #00bcd4;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            box-sizing: border-box;
        }
    </style>
@stop
@section('content')
    <section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
        <div class="sec-overlay">
            <div class="container">
                <div class="row" style="margin-bottom: 0">
                    <div class="col-sm-12">
                        <div class="home-inner">
                            <div class="center-align home-content">
                                <h1 class="home-title">HI! I'm <span>John Doe</span></h1>
                                <h2 class="home-subtitle">UX/UI Designer from Dhaka, Bangladesh</h2>
                                <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">
                                    Hire Me
                                    <i class="mdi mdi-send left">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .container end -->
            <div class="section-call-to-area">
                <div class="container">
                    <div class="row">
                        <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-show" data-section="#about">
                            <span class="down-page"></span>
                        </a>
                    </div>
                </div>
                <!-- .container end -->
            </div>
        </div>
    </section>
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix about-inner">
                    <div class="col-sm-12 col-md-8">
                        <div class="person-about">
                            <h3 class="about-subtitle">About Me</h3>
                            <p>Hello, I’m a UI/UX Designer &amp; Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University. <br>
                                And scrambled it to make a type specimen book. It has survived not only five centuries</p>
                            <a class="waves-effect waves-light btn-large brand-bg white-text"><i class="mdi mdi-package-down left"></i> Download Resume</a>
                        </div>
                    </div>
                    <!-- about me description -->

                    <div class="col-sm-12 col-md-4">
                        <div class="person-img center" style="visibility: visible; animation-name: fadeIn;">
                            <img class="z-depth-1 responsive-img" src="https://avatars0.githubusercontent.com/u/16660388?v=3&s=460" width="360" height="360" alt="">
                        </div>
                    </div>
                    <!-- about me image -->

                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>

    <section id="personal" class="scroll-section root-sec padd-tb-60 about-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix about-inner">
                    <div class="col-sm-12 col-md-12">
                        <div class="personal-goals">
                            <h3 class="personal-subtitle">Personal</h3>
                            <div class="row">
                                <div class="col-sm-4 col-md-4">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="https://d13yacurqjgara.cloudfront.net/users/2733/screenshots/741958/dribbble-foxes.jpg">
                                            <span class="card-title">My Philosophy</span>
                                        </div>
                                        <div class="card-content">
                                            <p>
                                                Treat your password like your toothbrush. Don't let anybody else use it, and get a new one every six months.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="https://d13yacurqjgara.cloudfront.net/users/2733/screenshots/741958/dribbble-foxes.jpg">
                                            <span class="card-title">My Mission</span>
                                        </div>
                                        <div class="card-content">
                                            <p>
                                                Treat your password like your toothbrush. Don't let anybody else use it, and get a new one every six months.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="https://d13yacurqjgara.cloudfront.net/users/2733/screenshots/741958/dribbble-foxes.jpg">
                                            <span class="card-title">My Vission</span>
                                        </div>
                                        <div class="card-content">
                                            <p>
                                                Treat your password like your toothbrush. Don't let anybody else use it, and get a new one every six months.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>
@stop
@section('scripts')
    <script>
        $(function() {
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
@stop

