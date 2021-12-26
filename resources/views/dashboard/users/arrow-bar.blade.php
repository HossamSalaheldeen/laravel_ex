@extends('layouts.app')
@section('title', 'Arrow-Bar')
@section('style')
    <link rel="stylesheet" href="{{asset('dashboard/css/arrow-bar.css')}}">
@endsection
@section('content')
    <div class="container">
        <!-- Responsive Arrow Progress Bar -->
        <pre>




        </pre>
        <div class="arrow-steps clearfix">
            <div class="step current"> <span> <a href="#" >1</a></span> </div>
            <div class="step"> <span><a href="#" >2</a></span> </div>
            <div class="step"> <span><a href="#" >3</a><span> </div>
            <div class="step"> <span><a href="#" >4</a><span> </div>
            <div class="step"> <span><a href="#" >5</a><span> </div>
        </div>
        <!-- end Responsive Arrow Progress Bar -->
        <div class="nav clearfix">
            <a href="#" class="prev">Previous</a> |
            <a href="#" class="next pull-right">Next</a>
        </div>
    </div>
@endsection
