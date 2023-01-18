@extends('layouts.admin')
@section('content')
    <form action="{{ url('room', $room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            @csrf
            @include('shared.admin.room.room_form')
        </div>
    </form>

    <div class="row">
        @csrf
        @include('shared.admin.room.rooms_list')
    </div>
@endsection
