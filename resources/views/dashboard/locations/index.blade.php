@extends('layouts.app')
@section('title', 'Locations')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Laravel 8 CRUD Example from scratch </h2>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('dashboard.locations.create') }}"> Create New Location</a>
            </div>
        </div>
    </div>


    {{--    <div class="table-responsive">--}}
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($locations as $location)
            <tr>
                <td>{{ $location->name }}</td>
                <td>
                    <div class="icons">
                        <a href="{{ route('dashboard.locations.edit',$location->id) }}" class="edit-ajax">
                            <i class="fa fa-pencil-alt"
                               style="opacity: 0.9;font-size: 16px;margin: 0 5px;color: #808080;"></i>
                        </a>
                        <form id="delete-location-form" style="display: none"
                              action="{{route('dashboard.locations.destroy',$location->id)}}" method="POST">
                            @method("DELETE")
                            @csrf
                        </form>
                        <a href="javascript:function() { return false; }" onclick="$('#delete-location-form').submit()"
                           class="delete-ajax">
                            <i class="fa fa-trash"
                               style="opacity: 0.9;font-size: 16px;margin: 0 5px;color: #808080;"></i>
                        </a>
                        <a>
                            <i class="fas fa-eye"
                               style="opacity: 0.9;font-size: 16px;margin: 0 5px;color: #808080;"></i>
                        </a>
                        <a>
                            <i class="fas fa-toggle-on"
                               style="opacity: 0.9;font-size: 16px;margin: 0 5px;color: #808080;"></i>
                        </a>
                    </div>
                    <div class="dropdown dropstart d-none">
                        <button type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--    </div>--}}
    <script type="text/javascript" src="{{ asset('dashboard/js/scripts.js') }}"></script>

@endsection
