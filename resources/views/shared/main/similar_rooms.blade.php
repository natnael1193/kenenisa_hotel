@foreach ($similar_rooms as $room)
    <div class="item">
        <div class="position-re o-hidden"> <img src="{{ $room->image }}" alt=""> </div> <span class="category"><a
                href="rooms2.html">Book</a></span>
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
                                class="ti-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
@endforeach
