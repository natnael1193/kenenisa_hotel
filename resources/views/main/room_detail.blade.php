@extends('layouts.main')
@section('content')
    <!-- Room Page Slider -->
    <header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            @include('shared.main.room_detail_slider_images')
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    <!-- Room Content -->
    <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <!-- project content -->
            <div class="row">
                <div class="col-md-12">
                    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
                    <div class="section-subtitle">Luxury Hotel</div>
                    <div class="section-title">{{ $room->name }}</div>
                </div>
                <div class="col-md-6">
                    <p class="mb-30">{{ $room->description }}</p>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Amenities</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="flaticon-group"></span> </div>
                                    <div class="page-list-text">
                                        <p>1-2 Persons</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="flaticon-wifi"></span> </div>
                                    <div class="page-list-text">
                                        <p>Free Wifi</p>
                                    </div>
                                </li>
                                {{-- <li>
                                    <div class="page-list-icon"> <span class="flaticon-clock-1"></span> </div>
                                    <div class="page-list-text">
                                        <p>200 sqft room</p>
                                    </div>
                                </li> --}}
                                <li>
                                    <div class="page-list-icon"> <span class="flaticon-breakfast"></span> </div>
                                    <div class="page-list-text">
                                        <p>Breakfast</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="flaticon-towel"></span> </div>
                                    <div class="page-list-text">
                                        <p>Towels</p>
                                    </div>
                                </li>
                                {{-- <li>
                                    <div class="page-list-icon"> <span class="flaticon-swimming"></span> </div>
                                    <div class="page-list-text">
                                        <p>Swimming Pool</p>
                                    </div>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="butn-dark mt-15 mb-30"> <a href="rooms2.html"><span>Check Now</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    @include('shared.main.search_rooms_one')
                </div>
            </div>
        </div>
    </section>
    <!-- Similiar Room -->
    <section class="rooms1 section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Luxury Hotel</span></div>
                    <div class="section-title"><span>Similar Rooms</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        @include('shared.main.similar_rooms')
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Pricing -->
    {{-- <section class="pricing section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-subtitle"><span>Best Prices</span></div>
                    <div class="section-title">Extra Services</div>
                    <p>The best prices for your relaxing vacation. The utanislen quam nestibulum ac quame odion elementum
                        sceisue the aucan.</p>
                    <p>Orci varius natoque penatibus et magnis disney parturient monte nascete ridiculus mus nellen etesque
                        habitant morbine.</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>For information</p> <a href="tel:855-100-4444">855 100 4444</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme">
                        <div class="pricing-card">
                            <img src="assets/main/img/pricing/1.jpg" alt="">
                            <div class="desc">
                                <div class="name">Room cleaning</div>
                                <div class="amount">$50<span>/ month</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="assets/main/img/pricing/2.jpg" alt="">
                            <div class="desc">
                                <div class="name">Drinks included</div>
                                <div class="amount">$30<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="assets/main/img/pricing/3.jpg" alt="">
                            <div class="desc">
                                <div class="name">Room Breakfast</div>
                                <div class="amount">$30<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="assets/main/img/pricing/4.jpg" alt="">
                            <div class="desc">
                                <div class="name">Safe & Secure</div>
                                <div class="amount">$15<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Reservation & Booking Form -->
    <section class="testimonials mt-5 mb-5">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="../assets/main/img/slider/KenenisaWeb-25.jpg"
            data-overlay-dark="2">
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
                                <p class="color-1">Reservation</p> <a class="color-1" href="tel:855-100-4444">855 100
                                    4444</a>
                            </div>
                        </div>
                        <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>
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
