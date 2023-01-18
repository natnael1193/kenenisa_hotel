<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<div class="col-xl-6 col-xxl-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Image</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">

                <div class="form-group">
                    <input type="file" class="fomr-control" name="image"
                        value='@if (Route::current()->getName() == 'room.create') @elseif (Route::current()->getName() == 'room.edit')  {{ $room->image }} @else @endif'>
                </div>
            </div>
        </div>

    </div>
    <div class="card">
        {{-- <p>{{ Route::current()->getName()}}</p> --}}
        @if (Route::current()->getName() == 'room.edit')
            <img class="image-fluid" src=" {{ $room->room_image }}" />
        @endif
    </div>
</div>


<div class="col-xl-6
            col-xxl-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Datas</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <div class="form-group">
                    <div class="">
                        Name
                    </div>
                    <input type="text" class="form-control input-default" name="name"
                        value='@if (Request::url() == 'http://127.0.0.1:8000/room/create') @else {{ $room->name }} @endif' placeholder="Name">
                </div>
                <div class="form-group">
                    <div class="">
                        Price
                    </div>
                    <input type="text" class="form-control input-default" name="price"
                        value='@if (Request::url() == 'http://127.0.0.1:8000/room/create') @else {{ $room->price }} @endif' placeholder="Price">
                </div>
                <div class="form-group">
                    <div class="">
                        Quantity
                    </div>
                    <input type="text" class="form-control input-default" name="quantity"
                        value='@if (Request::url() == 'http://127.0.0.1:8000/room/create') @else {{ $room->quantity }} @endif'
                        placeholder="Quantity">
                </div>
                <div class="form-group">
                    <div class="">
                        Description
                    </div>
                    <textarea type="text" class="form-control input-default" name="description" placeholder="Name">
                            @if (Request::url() == 'http://127.0.0.1:8000/room/create')
@else
{{ $room->description }}
@endif
                    </textarea>
                </div>
                <div class="form-group col-lg-12 col-md-12">
                    <label for="my-input">Images</label>

                    @include('shared.admin.room.multiple_image_form')
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>


@section('scripts')
    <script>
        $('thead').on('click', '.addRow', function() {
            var tr = '<tr>' +
                // '<td><input type="text" name="name[]" id="name" class="form-control"></td>' +
                '<input type="file" name="images[]" id="image" class="form-control">' +
                // '<td><input type="hidden" name="user_id[]" id="user_id" class="form-control"></td>' +
                '<td><input type="hidden" name="service_id[]" id="service_id" class="form-control"></td>' +
                // '<td><a href="javascritp:;" class="btn btn-danger deleteRow" >Delete - </a></td>' +
                '</tr>';
            $('tbody').append(tr);

        });
        $('tbody').on('click', '.deleteRow', function() {
            $(this).parent().parent().remove();
        })
    </script>
@endsection
