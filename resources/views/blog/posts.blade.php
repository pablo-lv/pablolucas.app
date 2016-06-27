@extends('admin.layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                Posts
            </div>
            @include('admin.partials.success')
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
                                    <a href="{{ route('site.post',$post->slug) }}" class="btn btn-xs btn-success" target="_blank"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('post.edit', $post) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                    {{--<button class="btn btn-xs btn-danger delete-post" data-url="{{ url('dashboard/blog', $post) }}" data-method="delete" data-token="{{ csrf_token() }}"><i class="fa fa-close"></i></button>--}}
                                    {{--<form name="delete" method="POST" action="{{ route('post.destroy', $post) }}">--}}
                                        {{--{{ csrf_field() }}--}}
                                        {{--<input type="hidden" name="_method" value="DELETE">--}}
                                        {{--<button type="submit">Delete</button>--}}
                                    {{--</form>--}}
                                    <a href="{{ url('dashboard/blog', $post) }}" class="btn btn-xs btn-danger" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"><i class="fa fa-close"></i></a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        (function(window, $, undefined) {

            var Laravel = {
                initialize: function() {
                    this.methodLinks = $('a[data-method]');
                    this.token = $('a[data-token]');
                    this.registerEvents();
                },

                registerEvents: function() {
                    this.methodLinks.on('click', this.handleMethod);
                },

                handleMethod: function(e) {
                    e.preventDefault()

                    var link = $(this)
                    var httpMethod = link.data('method').toUpperCase()
                    var form

                    // If the data-method attribute is not PUT or DELETE,
                    // then we don't know what to do. Just ignore.
                    if ($.inArray(httpMethod, ['PUT', 'DELETE']) === -1) {
                        return false
                    }

                    Laravel
                            .verifyConfirm(link)
                            .done(function () {
                                form = Laravel.createForm(link)
                                form.submit()
                            })
                },

                verifyConfirm: function(link) {
                    var confirm = new $.Deferred();

                    swal({
                                title: "Are you sure?",
                                text: "You will not be able to recover this post!",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "Yes, delete it!",
                                cancelButtonText: "No, cancel plx!",
                                closeOnConfirm: false,
                                closeOnCancel: false
                            },
                            function(isConfirm, method) {
                                if (isConfirm) {
                                    confirm.resolve(link);
                                    swal(
                                            "Deleted!",
                                            "Your post has been deleted.",
                                            "success");
                                } else {
                                    confirm.reject(link);
                                    swal(
                                            "Cancelled",
                                            "Your post is safe :)",
                                            "error");
                                } });

                    return confirm.promise()
                },

                createForm: function(link) {
                    var form =
                            $('<form>', {
                                'method': 'POST',
                                'action': link.attr('href')
                            });

                    var token =
                            $('<input>', {
                                'type': 'hidden',
                                'name': '_token',
                                'value': link.data('token')
                            });

                    var hiddenInput =
                            $('<input>', {
                                'name': '_method',
                                'type': 'hidden',
                                'value': link.data('method')
                            });

                    return form.append(token, hiddenInput)
                            .appendTo('body');
                }
            };

            Laravel.initialize();

        })(window, jQuery);
    </script>
@stop