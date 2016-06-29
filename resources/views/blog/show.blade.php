@extends('layout.main')

@section('content')
    <section id="blog" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix">
                    <div class="col-sm-12 col-md-8 col-md-offset-1">
                        <article class="">
                            <h2 class="title-post"><a href="{{ route('site.post', $post->slug) }}">{{ $post->title }}</a></h2>
                            <div class="data-post">
                                <p>
                                    <i class="mdi mdi-account"></i>
                                    <span>{{ Auth::user()->name }}</span>
                                    <i class="mdi mdi-calendar"></i>
                                    <span>{{ $post->created_at->format('Y-d-m') }}</span>
                                </p>
                            </div>
                            {{--<p><a href=""><img src="../img/traslasierra.jpg" alt="" width="100%" height="150px"></a></p>--}}
                            <p class="post-description">{{ $post->description }}</p>
                            <div class="post-content"> {!! $post->content !!}</div>
                            <div class="sharing">
                                <h3 class="share-text">Por favor comparte:</h3>
                                <a href="http://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}&title={{$post->title}}" class="waves-effect waves-light  btn blue darken-4" target="_blank">
                                    <i class="mdi mdi-facebook"></i>
                                </a>
                                <a href="http://twitter.com/intent/tweet?status={{$post->title}}+{{ Request::url() }}" class="waves-effect waves-light  btn blue " target="_blank">
                                    <i class="mdi mdi-twitter"></i>
                                </a>
                                <a href="https://plus.google.com/share?url={{ Request::url() }}" class="waves-effect waves-light  btn red darken-3" target="_blank">
                                    <i class="mdi mdi-google-plus"></i>
                                </a>
                                {{--<div class="fb-share-button"--}}
                                     {{--data-href="{{ Request::url() }}"--}}
                                     {{--data-layout="button" data-mobile-iframe="false">--}}
                                    {{--<a class="fb-xfbml-parse-ignore" target="_blank"--}}
                                       {{--href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartir--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            </div>
                        </article>
                    </div>
                    <div class="widget-recent-entries col-sm-12 col-md-3">
                        <ul class="collection with-header">
                            <li class="collection-header">
                                <h4>Entradas Recientes</h4>
                            </li>
                            @foreach($recentPost as $post)

                            <li class="collection-item">
                                <a href="{{ route('site.post', $post->slug) }}">{{ $post->title }}</a>
                                <span class="post-date">{{ $post->created_at->format('Y-d-m') }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>
@stop
@section('styles')
    <link rel="stylesheet" href="{{ asset('/vendors/ckeditor/plugins/codesnippet/lib/highlight/styles/monokai_sublime.css') }}">
@stop
@section('scripts')
    <script src="{{ asset('/vendors/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@stop

