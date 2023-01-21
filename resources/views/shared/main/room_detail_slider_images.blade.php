@if ($room['images']->isEmpty())
    <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{ $room->image }}"></div>
@else
    @foreach ($room->images as $room_images)
        <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{ $room_images->images }}"></div>
    @endforeach
@endif
