@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" id="homeWelcomeBox">
                <img src = "{{ asset('images/italy_vineyard.jpg') }}"
                    class="img-fluid w-100" id="homeWelcomePic" alt = "An Italy Vineyard">
            </div>
        </div>
    </div>

    <div class="mt-4 container-md">
        <div class="row text-center">
            <div class="col">
                <picture>
                <img src = "{{ asset('images/red_wine.jpg') }}"
                     class="img-fluid img-detail" alt = "two bottles of red wine">
                </picture>
                <h2>Red Wine</h2>
                <p>Imado just took a shower</p>
            </div>
            <div class="col">
                <img src = "{{ asset('images/white_wine.jpg') }}"
                     class="img-fluid img-detail" alt = "a bottle of white wine with two high glasses">
                <h2>Withe Wine</h2>
                <p>Imado is insterested in the camera</p>
            </div>
            <div class="col">
                <img src = "{{ asset('images/wine_cork.jpg') }}"
                     class="img-fluid img-detail" alt = "five wine corks put on the ground alongside a bottle of white wine">
                <h3>Wine Cork</h3>
                <p>Imado is enjoying the sunshine</p>
            </div>
        </div>
    </div>
@endsection
