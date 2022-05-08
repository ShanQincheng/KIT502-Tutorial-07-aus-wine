@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>KIT502 Self Study for Laravel</h1>

        <div class="row">
            <div class="col-lg-4">
                <img class="img-responsive" src="{{url('../images/stationery_green.jpg')}}"
                     alt="what would our like to use as an value for this attribute?">
            </div>
            <div class="col-lg-4">
                <img class="img-responsive" src="{{url('../images/stationery.jpg')}}"
                     alt="this is image of stationery">
            </div>
            <div class="col-lg-4">
                <img class="img-responsive" src="{{url('../images/note_pencil.jpg')}}"
                     alt="guess what">
            </div>
        </div>
    </div>

@endsection
