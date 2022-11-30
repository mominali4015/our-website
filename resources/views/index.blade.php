@extends('partials.main')
@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active first-slide">
                <img src="{{ asset('Images/office.webp') }}" alt="office" class="image1">
                <img src="{{ asset('Images/half.png') }}" alt="half" class=" image2">
            </div>
{{--            <div class="carousel-item">--}}
{{--                fjdbjjhgfghjklkjhg--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                fcvccvclkjhgfdfghj--}}
{{--                <img src=".." class="d-block w-100" alt="...">--}}
{{--            </div>--}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
