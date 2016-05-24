@extends('layout.main')
@section('scripts')
    <style>
        .image-main {
            background: url('./img/Mountainous_View_by_Sven_Scheuermeier.jpg') no-repeat fixed center center / cover;
        }
        .image-main .sec-overlay {
            background: rgba(0,0,0, .7);
            width: 100%;
            height: 100%;
        }
        .home-inner {
            display: table;
            height: calc(100vh - 50px);
            padding-top: 80px;
            width: 100%;
        }
        .home-content {
            color: #fff;
            display: table-cell;
            vertical-align: middle;
        }
        .home-title {
            font-size: 72px;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: uppercase;
        }
        .home-title span {
            color: #ff4081;
        }
        .home-subtitle {
            font-size: 18px;
            font-weight: 300;
            margin-bottom: 38px;
            text-transform: uppercase;
        }
        .home-content > a.btn-large {
            padding-right: 15px;
            padding-left: 15px;
        }
        .home-content > a.btn-large {
            height: 45px;
            line-height: 45px;
        }
        .brand-bg {
            text-transform: uppercase;
        }
        .brand-bg, .sweet-alert button {
            background-color: #ff4081 !important;
        }
    </style>
@stop
@section('content')
    <section class="image-main">
        <div class="sec-overlay">
            <div class="container">
                <div class="row" style="margin-bottom: 0;">
                    <div class="col-sm-12">
                        <div class="home-inner">
                            <div class="center-align home-content">
                                <h1 class="home-title">HI! I'm <span>Pablo Lucas</span></h1>
                                <h2 class="home-subtitle">Backend Developer</h2>
                                <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Hire Me
                                    <i class="medium left material-icons">mail</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop