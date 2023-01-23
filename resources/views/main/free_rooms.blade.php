@extends('layouts.main')
@section('content')
 <!-- Header Banner -->
 <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="assets/main/img/slider/KenenisaWeb-24.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 caption mt-90">
                <span>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                </span>
                <h5>The Cappa Luxury Hotel</h5>
                <h1>Rooms & Suites</h1>
            </div>
        </div>
    </div>
</div>

@include('shared.main.free_rooms')

@endsection