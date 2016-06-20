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
                                    <span>Author</span>
                                    <i class="mdi mdi-calendar"></i>
                                    <span>{{ $post->created_at }}</span>
                                </p>
                            </div>
                            <p><a href=""><img src="../img/traslasierra.jpg" alt="" width="100%" height="150px"></a></p>
                            <p class="post-description">{{ $post->description }}</p>
                            <p> {{ $post->content }}</p>
                            <div class="sharing">
                                <h3 class="share-text">Por favor comparte:</h3>
                                <a href="" class="waves-effect waves-light  btn blue darken-4">
                                    <i class="mdi mdi-facebook"></i>
                                </a>
                                <a href="" class="waves-effect waves-light  btn blue ">
                                    <i class="mdi mdi-twitter"></i>
                                </a>
                                <a href="" class="waves-effect waves-light  btn red darken-3">
                                    <i class="mdi mdi-google-plus"></i>
                                </a>
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
                                <span class="post-date">{{ $post->created_at }}</span>
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