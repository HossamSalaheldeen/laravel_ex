@extends('layouts.app')
@section('title', 'Locations')
@section('content')
    <form method="POST" action="{{route('dashboard.locations.update',$location->id)}}">
        @method("PUT")
        @csrf
        <div class="mb-3">
        <label for="name" class="form-label">Name *</label>
        <input type="text" id="name" name="name" class="form-control" value="{{$location->name}}"/>
        </div>
        <input type="submit" value="Save">
    </form>
@endsection
