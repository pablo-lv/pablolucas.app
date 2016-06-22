@extends('admin.layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                Posts
            </div>
            <div class="panel-body">
                <table id="zctb" class="display table table-hover dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Descripción</th>
                            <th>Creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th>{{ $post->id }}</th>
                                <th style="font-weight: normal;">{{ $post->title }}</th>
                                <th style="font-weight: normal;">{{ $post->description }}</th>
                                <th style="font-weight: normal;">{{ $post->created_at }}</th>
                                <th style="font-weight: normal;">
                                    <a href="#">Actuaizar</a>
                                    <a href="#">Eliminar</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop