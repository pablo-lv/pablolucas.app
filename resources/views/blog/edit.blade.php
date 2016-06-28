@extends('admin.layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-heading">Editar Post</div>
            <div class="panel-body">
                @include('admin.partials.errors')
                @include('admin.partials.success')
                <form action="{{ route('post.update', $post->slug) }}" method="POST" class="form-horizontal">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                        <label for="title" class="col-sm-2 control-label">Título</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" class="form-control" placeholder="A some Title" value="{{ old('title', $post->title) }}">
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                        <label for="description" class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-8">
                            <textarea name="description" class="form-control" id="" cols="30" rows="2">{{ old('description', $post->description) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                        <label for="content" class="col-sm-2 control-label">Contenido</label>
                        <div class="col-sm-12">
                            <textarea name="content" class="ckeditor form-control" id="" cols="30" rows="2">{{ old('content', $post->content) }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">Guardar Post</button>
                        <a href="{{ route('post.posts') }}" class="btn btn-default" type="button">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        $('div.alert').delay(3000).slideUp(300);
    </script>
@stop()