<div class="row p-5">
    @foreach ($room->images as $room_image)
        <div class="col-lg-4 col-md-6 col-12 mt-5">
            <img class="img-fluid" src="{{ $room_image->images }}" />
            <form method="POST" action="{{ url('room_images', $room_image->id) }}">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm mt-3"
                    data-toggle="tooltip" title='Delete'>Delete</button>
            </form>
        </div>
    @endforeach
</div>
