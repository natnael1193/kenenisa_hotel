<section class="rooms1 section-padding bg-cream" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">The Cappa Luxury Hotel</div>
                <div class="section-title">Rooms & Suites</div>
            </div>
        </div>
        <div class="row">
            @foreach ($rooms as $room)
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ $room->image }}" alt="">
                        </div> <span class="category"><a href="{{ url('room_detail', $room->id) }}">Book</a></span>
                        <div class="con">
                            <h6><a href="{{ url('room_detail', $room->id) }}">{{ $room->price }}$ / Night</a></h6>
                            <h5><a href="{{ url('room_detail', $room->id) }}">{{ $room->name }}</a> </h5>
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
                                    <div class="permalink"><a href="{{ url('room_detail', $room->id) }}">Details <i
                                                class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-md-12">
                <div class="item">
                    <div class="position-re o-hidden"> <img src="{{ $last_room->images }}" alt="">
                    </div> <span class="category"><a href="{{ url('room_detail', $last_room->id) }}">Book</a></span>
                    <div class="con">
                        <h6><a href="{{ url('room_detail', $last_room->id) }}">{{ $last_room->price }}$ / Night</a>
                        </h6>
                        <h5><a href="{{ url('room_detail', $last_room->id) }}">{{ $last_room->name }}</a></h5>
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
                                <div class="permalink"><a href="{{ url('room_detail', $last_room->id) }}">Details <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6">
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
            </div> --}}
        </div>
    </div>
</section>
