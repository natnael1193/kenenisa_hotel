 @foreach ($rooms as $room)
  <div class="pricing-card">
                             <img src="{{$room->image}}" alt="">
                             <div class="desc">
                                 <div class="name">Drinks included</div>
                                 <div class="amount">${{ $room->price }}<span>/ daily</span></div>
                                 <ul class="list-unstyled list">
                                     <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                     <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                     <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                 </ul>
                             </div>
                         </div>
                         @endforeach