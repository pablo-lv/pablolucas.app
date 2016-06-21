@extends('admin.layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-heading">Crear Nuevo Post</div>
            <div class="panel-body">
                <form action="{{ route('post.store') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Título</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" class="form-control" placeholder="A some Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-8">
                            <textarea name="description" class="form-control" id="" cols="30" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-sm-2 control-label">Contenido</label>
                        <div class="col-sm-12">
                            <textarea name="content" class="ckeditor form-control" id="" cols="30" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">Guardar Post</button>
                        <button class="btn btn-default" type="submit">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop