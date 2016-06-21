@extends('admin.layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-heading">Crear Nuevo Post</div>
            <div class="panel-body">
                <form action="" method="" class="form-horizontal">
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

                </form>
            </div>
        </div>
    </div>
@stop