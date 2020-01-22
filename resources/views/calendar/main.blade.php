@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-4 col-sm-6">
            @include('calendar.form')
        </div>
        <div class="col-md-8 col-sm-6">
            @include('calendar.calendar')
        </div>
    </div>
@endsection
@section('js')
    @include('calendar.js')
@endsection