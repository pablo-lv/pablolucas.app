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
                                <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Hire Me <i class="mdi-content-send left"></i>
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
                            <h3 class="about-subtitle">My Story</h3>
                            <p>Hello, I’m a UI/UX Designer &amp; Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University. <br>
                                And scrambled it to make a type specimen book. It has survived not only five centuries</p>
                            <a class="waves-effect waves-light btn-large brand-bg white-text"><i class="mdi-content-archive left"></i> Download Resume</a>
                        </div>
                    </div>
                    <!-- about me description -->

                    <div class="col-sm-6 col-md-4">
                        <div class="person-img wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                            <img class="z-depth-1" src="img/person.jpg" alt="">
                        </div>
                    </div>
                    <!-- about me image -->

                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>
@stop
@section('scripts')
    <script !src="">
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

