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
                                <h1 class="home-title">Hola soy <span>Pablo Lucas</span></h1>
                                <h2 class="home-subtitle">Ing. Tecnologás de la Información y Comunicación</h2>
                                <a href="{{ route('site.contact') }}" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">
                                     CONTACTO
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
                            <h3 class="about-subtitle">Sobre Mi</h3>
                            <p>Hola, Soy guitarrista por convicción y desarrollador web de profesión, apasionado de la tecnología y de la mejora continua.</p>
                            <a href="" class="waves-effect waves-light btn-large brand-bg white-text">
                                <i class="mdi mdi-package-down left"></i> Descarga CV
                            </a>
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
                                            <span class="card-title">Misión</span>
                                        </div>
                                        <div class="card-content">
                                            <p>
                                                Soy una persona comprometida en todos los aspectos de mi vida, enfocado en contribuir a la solución de problemas mediante el uso de la programación.
                                                <br>
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="https://d13yacurqjgara.cloudfront.net/users/2733/screenshots/741958/dribbble-foxes.jpg">
                                            <span class="card-title">Visión</span>
                                        </div>
                                        <div class="card-content">
                                            <p>
                                                Adquirir nuevo conocimientos en tecnologias de desarrollo web y poder aplicarlas a mi trabajo, ser una persona innovadora a tráves de la práctica de mis conocimientos.
                                                <br>
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="https://d13yacurqjgara.cloudfront.net/users/2733/screenshots/741958/dribbble-foxes.jpg">
                                            <span class="card-title">Filosofía</span>
                                        </div>
                                        <div class="card-content">
                                            <p>
                                                Programming is not a zero-sum game. Teaching something to a fellow programmer doesn't take it away from you.
                                                I'm happy to share what I can, because I'm in it for the love of programming.
                                                <br>
                                                <strong>John Carmack</strong>
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

