@extends('layouts.app')
@section('title', 'Locations')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('locations.create') }}"> Create New Location</a>
            </div>
        </div>
    </div>


    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($locations as $location)
                <tr>
                    <td>{{ $location->id }}</td>
                    <td>{{ $location->name }}</td>
                    <td>
                        <a href="" class="edit-ajax" data-toggle="modal" data-target="#ajax_edit"
                           data-ajax="{{$location->id}}">
                            <i class="fa fa-pencil-alt"
                               style="opacity: 0.9;font-size: 16px;margin: 0 5px;color: #808080;"></i>
                        </a>
                        <a class="delete-ajax" data-toggle="modal" data-target="#ajax_delete"
                           data-ajax="{{$location->id}}" style="cursor: pointer;">
                            <i class="fa fa-trash"
                               style="opacity: 0.9;font-size: 16px;margin: 0 5px;margin: 0 5px;color: #808080;"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    <!--
    delete modal view using by ajax
-->

    <div id="ajax_delete" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete User</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body" id="ajax_delete_content">
                    @csrf
                    <h4 class="mb-3">Do you want delete this location</h4>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" id="delete">Delete</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        {{--$(document).ready(function () {--}}
        {{--    var _id = 0;--}}
        {{--    $(document).on('click', '.delete-ajax', function () {--}}
        {{--        console.log($(this).data('ajax'));--}}
        {{--        _id = $(this).data('ajax');--}}
        {{--    });--}}
        {{--    $(document).on('click', '#ajax_delete_content #delete', function () {--}}
        {{--        $.ajax({--}}
        {{--            url:  '{{url("")}}/locations/' + _id,--}}
        {{--            type: 'delete',--}}
        {{--            data: {--}}
        {{--                _token: $('#ajax_delete_content [name=_token]').val(),--}}
        {{--            },--}}
        {{--            success: function (data) {--}}
        {{--                toastr.success(data.success, 'Success Alert', {timeOut: 10000, closeButton: true, progressBar: true});--}}
        {{--                $('#ajax_delete').modal('toggle');--}}

        {{--                $('.buttons-reload').trigger("click");--}}
        {{--            }--}}
        {{--        });--}}
        {{--    });--}}
        {{--});--}}
    </script>

    <script type="text/javascript" src="{{ asset('dashboard/js/scripts.js') }}"></script>

@endsection
