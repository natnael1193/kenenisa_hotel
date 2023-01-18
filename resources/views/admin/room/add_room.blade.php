@extends('layouts.admin')
@section('content')
    <form action="{{ url('room') }}" method="POST" enctype="multipart/form-data">
        <div class="row">
            @csrf
            @include('shared.admin.room.room_form')

        </div>
    </form>
@endsection
