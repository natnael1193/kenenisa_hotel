 @extends('layouts.main')
 @section('content')
     <!-- Slider -->
     <header class="header slider-fade">
         <div class="owl-carousel owl-theme">
             <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
             <div class="text-center item bg-img" data-overlay-dark="2"
                 data-background="assets/main/img/slider/KenenisaWeb-23.jpg">
                 <div class="v-middle caption">
                     <div class="container">
                         <div class="row">
                             <div class="col-md-10 offset-md-1">
                                 <span>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                 </span>
                                 <h4>Luxury Hotel & Best Resort</h4>
                                 <h1>Enjoy a Luxury Experience</h1>
                                 <div class="butn-light mt-30 mb-30"> <a href="#" data-scroll-nav="1"><span>Rooms &
                                             Suites</span></a> </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="text-center item bg-img" data-overlay-dark="2"
                 data-background="assets/main/img/slider/KenenisaWeb-24.jpg">
                 <div class="v-middle caption">
                     <div class="container">
                         <div class="row">
                             <div class="col-md-10 offset-md-1">
                                 <span>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                 </span>
                                 <h4>Unique Place to Relax & Enjoy</h4>
                                 <h1>The Perfect Base For You</h1>
                                 <div class="butn-light mt-30 mb-30"> <a href="#" data-scroll-nav="1"><span>Rooms &
                                             Suites</span></a> </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="text-center item bg-img" data-overlay-dark="3"
                 data-background="assets/main/img/slider/KenenisaWeb-25.jpg">
                 <div class="v-middle caption">
                     <div class="container">
                         <div class="row">
                             <div class="col-md-10 offset-md-1">
                                 <span>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                 </span>
                                 <h4>The Ultimate Luxury Experience</h4>
                                 <h1>Enjoy The Best Moments of Life</h1>
                                 <div class="butn-light mt-30 mb-30"> <a href="#" data-scroll-nav="1"><span>Rooms &
                                             Suites</span></a> </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="text-center item bg-img" data-overlay-dark="3"
                 data-background="assets/main/img/slider/KenenisaWeb-26.jpg">
                 <div class="v-middle caption">
                     <div class="container">
                         <div class="row">
                             <div class="col-md-10 offset-md-1">
                                 <span>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                     <i class="star-rating"></i>
                                 </span>
                                 <h4>The Ultimate Luxury Experience</h4>
                                 <h1>Enjoy The Best Moments of Life</h1>
                                 <div class="butn-light mt-30 mb-30"> <a href="#" data-scroll-nav="1"><span>Rooms &
                                             Suites</span></a> </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- slider reservation -->
         <div class="reservation">
             <a href="tel:+251937981111">
                 <div class="icon d-flex justify-content-center align-items-center">
                     <i class="flaticon-call"></i>
                 </div>
                 <div class="call"><span>+251937981111</span> <br>Reservation</div>
             </a>
         </div>
     </header>
     <!-- Booking Search -->
     @include('shared.main.search_rooms')
     <!-- About -->
     @include('shared.main.about_hotel')
     <!-- Rooms -->
     {{-- <section class="rooms1 section-padding bg-cream" data-scroll-index="1">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-subtitle">The Cappa Luxury Hotel</div>
                     <div class="section-title">Rooms & Suites</div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-4">
                     <div class="item">
                         <div class="position-re o-hidden"> <img src="assets/main/img/rooms/1.jpg" alt="">
                         </div> <span class="category"><a href="rooms2.html">Book</a></span>
                         <div class="con">
                             <h6><a href="">150$ / Night</a></h6>
                             <h5><a href="">Junior Suite</a> </h5>
                             <div class="line"></div>
                             <div class="row facilities">
                                 <div class="col col-md-7">
                                     <ul>
                                         <li><i class="flaticon-bed"></i></li>
                                         <li><i class="flaticon-bath"></i></li>
                                         <li><i class="flaticon-breakfast"></i></li>
                                         <li><i class="flaticon-towel"></i></li>
                                     </ul>
                                 </div>
                                 <div class="col col-md-5 text-right">
                                     <div class="permalink"><a href="">Details <i class="ti-arrow-right"></i></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="item">
                         <div class="position-re o-hidden"> <img src="assets/main/img/rooms/2.jpg" alt="">
                         </div> <span class="category"><a href="rooms2.html">Book</a></span>
                         <div class="con">
                             <h6><a href="">200$ / Night</a></h6>
                             <h5><a href="">Family Room</a></h5>
                             <div class="line"></div>
                             <div class="row facilities">
                                 <div class="col col-md-7">
                                     <ul>
                                         <li><i class="flaticon-bed"></i></li>
                                         <li><i class="flaticon-bath"></i></li>
                                         <li><i class="flaticon-breakfast"></i></li>
                                         <li><i class="flaticon-towel"></i></li>
                                     </ul>
                                 </div>
                                 <div class="col col-md-5 text-right">
                                     <div class="permalink"><a href="">Details <i class="ti-arrow-right"></i></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="item">
                         <div class="position-re o-hidden"> <img src="assets/main/img/rooms/3.jpg" alt="">
                         </div> <span class="category"><a href="rooms2.html">Book</a></span>
                         <div class="con">
                             <h6><a href="">250$ / Night</a></h6>
                             <h5><a href="">Double Room</a></h5>
                             <div class="line"></div>
                             <div class="row facilities">
                                 <div class="col col-md-7">
                                     <ul>
                                         <li><i class="flaticon-bed"></i></li>
                                         <li><i class="flaticon-bath"></i></li>
                                         <li><i class="flaticon-breakfast"></i></li>
                                         <li><i class="flaticon-towel"></i></li>
                                     </ul>
                                 </div>
                                 <div class="col col-md-5 text-right">
                                     <div class="permalink"><a href="">Details <i class="ti-arrow-right"></i></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="item">
                         <div class="position-re o-hidden"> <img src="assets/main/img/rooms/4.jpg" alt="">
                         </div> <span class="category"><a href="rooms2.html">Book</a></span>
                         <div class="con">
                             <h6><a href="">300$ / Night</a></h6>
                             <h5><a href="">Deluxe Room</a></h5>
                             <div class="line"></div>
                             <div class="row facilities">
                                 <div class="col col-md-7">
                                     <ul>
                                         <li><i class="flaticon-bed"></i></li>
                                         <li><i class="flaticon-bath"></i></li>
                                         <li><i class="flaticon-breakfast"></i></li>
                                         <li><i class="flaticon-towel"></i></li>
                                     </ul>
                                 </div>
                                 <div class="col col-md-5 text-right">
                                     <div class="permalink"><a href="">Details <i class="ti-arrow-right"></i></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="item">
                         <div class="position-re o-hidden"> <img src="assets/main/img/rooms/7.jpg" alt="">
                         </div> <span class="category"><a href="rooms2.html">Book</a></span>
                         <div class="con">
                             <h6><a href="">150$ / Night</a></h6>
                             <h5><a href="">Superior Room</a></h5>
                             <div class="line"></div>
                             <div class="row facilities">
                                 <div class="col col-md-7">
                                     <ul>
                                         <li><i class="flaticon-bed"></i></li>
                                         <li><i class="flaticon-bath"></i></li>
                                         <li><i class="flaticon-breakfast"></i></li>
                                         <li><i class="flaticon-towel"></i></li>
                                     </ul>
                                 </div>
                                 <div class="col col-md-5 text-right">
                                     <div class="permalink"><a href="">Details <i class="ti-arrow-right"></i></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section> --}}
     @include('shared.main.rooms')
     <!-- Pricing -->
     {{-- <section class="pricing section-padding bg-black">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <div class="section-subtitle"><span>Best Prices</span></div>
                     <div class="section-title"><span>Extra Services</span></div>
                     <p class="color-2">The best prices for your relaxing vacation. The utanislen quam nestibulum ac
                         quame odion elementum sceisue the aucan.</p>
                     <p class="color-2">Orci varius natoque penatibus et magnis disney parturient monte nascete
                         ridiculus mus nellen etesque habitant morbine.</p>
                     <div class="reservations mb-30">
                         <div class="icon"><span class="flaticon-call"></span></div>
                         <div class="text">
                             <p class="color-2">For information</p> <a href="tel:855-100-4444">855 100 4444</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-8">
                     <div class="owl-carousel owl-theme">
                        @include('shared.main.extra_service_rooms')
                         
                     </div>
                 </div>
             </div>
         </div>
     </section> --}}
     <!-- Promo Video -->
     <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="3"
         data-background="assets/main/img/rooms/KenenisaWeb-13.jpg">
         <div class="container">
             <div class="row">
                 <div class="col-md-8 offset-md-2 text-center">
                     <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i
                             class="star-rating"></i><i class="star-rating"></i></span>
                     <div class="section-subtitle"><span>The Cappa Luxury Hotel</span></div>
                     <div class="section-title"><span>Promotional Video</span></div>
                 </div>
             </div>
             <div class="row">
                 <div class="text-center col-md-12">
                     <a class="vid" href="https://www.youtube.com/watch?v=k-djf447R9M">
                         <div class="vid-butn">
                             <span class="icon">
                                 <i class="ti-control-play"></i>
                             </span>
                         </div>
                     </a>
                 </div>

             </div>
         </div>
     </section>
     <!-- Facilties -->
     <section class="facilties section-padding">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-subtitle">Our Services</div>
                     <div class="section-title">Hotel Facilities</div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-4">
                     <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                         <span class="flaticon-world"></span>
                         <h5>Pick Up & Drop</h5>
                         <p>We’ll pick up from airport while you comfy on your ride, mus nellentesque habitant.</p>
                         <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                         <span class="flaticon-car"></span>
                         <h5>Parking Space</h5>
                         <p>Fusce tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.</p>
                         <div class="facility-shape"> <span class="flaticon-car"></span> </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                         <span class="flaticon-bed"></span>
                         <h5>Room Service</h5>
                         <p>Room tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.</p>
                         <div class="facility-shape"> <span class="flaticon-bed"></span> </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                         <span class="flaticon-swimming"></span>
                         <h5>SPA</h5>
                         <p>Swimming pool tincidunt nise ace park norttito sit space, mus nellentesque habitant.</p>
                         <div class="facility-shape"> <span class="flaticon-swimming"></span> </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                         <span class="flaticon-wifi"></span>
                         <h5>Fibre Internet</h5>
                         <p>Wifi tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.</p>
                         <div class="facility-shape"> <span class="flaticon-wifi"></span> </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                         <span class="flaticon-breakfast"></span>
                         <h5>Breakfast</h5>
                         <p>Eat tincidunt nisa ace park norttito sit amet space, mus nellentesque habitant</p>
                         <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Testiominals -->
     <section class="testimonials">
         <div class="background bg-img bg-fixed section-padding pb-0" data-background="assets/main/img/slider/KenenisaWeb-24.jpg"
             data-overlay-dark="3">
             <div class="container">
                 <div class="row">
                     <div class="col-md-8 offset-md-2">
                         <div class="testimonials-box">
                             <div class="head-box">
                                 <h6>Testimonials</h6>
                                 <h4>What Client's Say?</h4>
                                 <div class="line"></div>
                             </div>
                             <div class="owl-carousel owl-theme">
                                 <div class="item">
                                     <span class="quote"><img src="assets/main/img/quot.png" alt=""></span>
                                     <p>The staff were very polite and very helpful. The room was clean with a great view. It offers airport shuttle, WiFi works very well</p>
                                     <div class="info">
                                         <div class="author-img"> <img src="https://lh3.googleusercontent.com/a-/AD5-WCnn9382MbFwb9lJmyptLvtsOyz3slhNcQjtwDLRpw=s40-c-c0x00000000-cc-rp-mo-ba3-br100" alt="">
                                         </div>
                                         <div class="cont"> <span><i class="star-rating"></i><i
                                                     class="star-rating"></i><i class="star-rating"></i><i
                                                     class="star-rating"></i><i class="star-rating"></i></span>
                                             <h6>Tonderai Muchenje</h6> <span>Guest review</span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="item">
                                     <span class="quote"><img src="assets/main/img/quot.png" alt=""></span>
                                     <p>A clean modern and great self contained with a restaurant, bar and disco club. Located in a perfect location with shopping malls around. It has a nice view of Bole city and next to a synagogue.</p>
                                     <div class="info">
                                         <div class="author-img"> <img src="https://lh3.googleusercontent.com/a-/AD5-WCm5hJ1Q63_50D6Res7E-nKtYkZThVZHlpwv3_XWRQ=w75-h75-p-rp-mo-ba3-br100" alt="">
                                         </div>
                                         <div class="cont"> <span><i class="star-rating"></i><i
                                                     class="star-rating"></i><i class="star-rating"></i><i
                                                     class="star-rating"></i><i class="star-rating"></i></span>
                                             <h6>Emmanuel Wandera</h6> <span>Guest review</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Services -->
     @include('shared.main.services')
     <!-- News -->
     {{-- <section class="news section-padding bg-black">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-subtitle"><span>Hotel Blog</span></div>
                     <div class="section-title"><span>Our News</span></div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-12">
                     <div class="owl-carousel owl-theme">
                         <div class="item">
                             <div class="position-re o-hidden"> <img src="assets/main/img/news/1.jpg" alt="">
                                 <div class="date">
                                     <a href="post.html"> <span>Dec</span> <i>02</i> </a>
                                 </div>
                             </div>
                             <div class="con"> <span class="category">
                                     <a href="news.html">Restaurant</a>
                                 </span>
                                 <h5><a href="post.html">Historic restaurant renovated</a></h5>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"> <img src="assets/main/img/news/2.jpg" alt="">
                                 <div class="date">
                                     <a href="post.html"> <span>Dec</span> <i>04</i> </a>
                                 </div>
                             </div>
                             <div class="con"> <span class="category">
                                     <a href="news.html">Spa</a>
                                 </span>
                                 <h5><a href="post.html">Benefits of Spa Treatments</a></h5>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"> <img src="assets/main/img/news/3.jpg" alt="">
                                 <div class="date">
                                     <a href="post.html"> <span>Dec</span> <i>06</i> </a>
                                 </div>
                             </div>
                             <div class="con"> <span class="category">
                                     <a href="news.html">Bathrooms</a>
                                 </span>
                                 <h5><a href="post.html">Hotel Bathroom Collections</a></h5>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"> <img src="assets/main/img/news/4.jpg" alt="">
                                 <div class="date">
                                     <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                                 </div>
                             </div>
                             <div class="con">
                                 <span class="category">
                                     <a href="news.html">Health</a>
                                 </span>
                                 <h5><a href="post.html">Weight Loss with Fitness Health Club</a></h5>
                             </div>
                         </div>

                         <div class="item">
                             <div class="position-re o-hidden"> <img src="assets/main/img/news/6.jpg" alt="">
                                 <div class="date">
                                     <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                                 </div>
                             </div>
                             <div class="con"> <span class="category">
                                     <a href="news.html">Design</a>
                                 </span>
                                 <h5><a href="post.html">Retro Lighting Design in The Hotels</a></h5>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"> <img src="assets/main/img/news/5.jpg" alt="">
                                 <div class="date">
                                     <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                                 </div>
                             </div>
                             <div class="con"> <span class="category">
                                     <a href="news.html">Health</a>
                                 </span>
                                 <h5><a href="post.html">Benefits of Swimming for Your Health</a></h5>
                             </div>
                         </div>


                     </div>
                 </div>
             </div>
         </div>
     </section> --}}
     <!-- Reservation & Booking Form -->
     <section class="testimonials">
         <div class="background bg-img bg-fixed section-padding pb-0" data-background="assets/main/img/rooms/KenenisaWeb-13.jpg"
             data-overlay-dark="2">
             <div class="container">
                 <div class="row">
                     <!-- Reservation -->
                     <div class="col-md-5 mb-30 mt-30">
                         <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i
                                 class="star-rating"></i></p>
                         <h5>Each of our guest rooms feature a private bath, wi-fi, cable television and include full
                             breakfast.</h5>
                         <div class="reservations mb-30">
                             <div class="icon color-1"><span class="flaticon-call"></span></div>
                             <div class="text">
                                 <p class="color-1">Reservation</p> <a class="color-1" href="tel:+251937981111">+251937981111</a>
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
