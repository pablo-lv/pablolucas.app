@extends('layout.main')

@section('content')
    <section id="blog" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix">
                    <div class="col-sm-12 col-md-8 col-md-offset-2">
                        @foreach ($posts as $post)
                            <article class="card-panel">
                                <h2 class="title-post"><a href="{{ route('site.post', $post->slug) }}">{{ $post->title }}</a></h2>
                                <div class="data-post">
                                    <p>
                                        <i class="mdi mdi-account"></i>
                                        <span>{{ Auth::user()->name }}</span>
                                        <i class="mdi mdi-calendar"></i>
                                        <span>{{ $post->created_at }}</span>
                                    </p>
                                </div>
                                {{--<p><a href=""><img src="./img/traslasierra.jpg" alt="" width="100%" height="150px"></a></p>--}}
                                <p class="post-description">{{ $post->description }}</p>
                                <a href="{{ route('site.post', $post->slug) }}" class="post-link">Ver post <i class="mdi mdi-arrow-right"></i></a>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>
@stop