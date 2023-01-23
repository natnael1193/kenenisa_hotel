@extends('layouts.main')
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="assets/main/img/slider/KenenisaWeb-25.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Discover</h5>
                    <h1>Our Services</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Services -->
    @include('shared.main.services')
    <!-- Reservation & Booking Form -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0"
            data-background="assets/main/img/slider/KenenisaWeb-26.jpg" data-overlay-dark="2">
            <div class="container">
                <div class="row">
                    <!-- Reservation -->
                    <div class="col-md-5 mb-30 mt-30">
                        <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i
                                class="star-rating"></i><i class="star-rating"></i></p>
                        <h5>Each of our guest rooms feature a private bath, wi-fi, cable television and include full
                            breakfast.</h5>
                        <div class="reservations mb-30">
                            <div class="icon color-1"><span class="flaticon-call"></span></div>
                            <div class="text">
                                <p class="color-1">Reservation</p> <a class="color-1" href="tel:+251937981111">+251937981111</a>
                            </div>
                        </div>
                        {{-- <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p> --}}
                    </div>
                    <!-- Booking From -->
                    <div class="col-md-5 offset-md-2">
                        @include('shared.main.search_rooms_one')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    {{-- <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7 owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="assets/main/img/clients/1.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="assets/main/img/clients/2.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="assets/main/img/clients/3.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="assets/main/img/clients/4.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="assets/main/img/clients/5.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="assets/main/img/clients/6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
