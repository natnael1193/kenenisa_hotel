@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($rooms as $room)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <img src="{{ $room->image }}" class="img-responsive" alt="" />
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4>{{ $room->name }}</h4>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center mt-2">
                                <div class="col-4">
                                    <button type="button" class="btn btn-info text-white">View</button>
                                </div>
                                <div class="col-4">
                                    <a href="/room/{{ $room->id }}/edit">
                                        <button type="button" class="btn btn-primary">Edit</button>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <form method="POST" action="{{ url('room', $room->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit"
                                            class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm"
                                            data-toggle="tooltip" title='Delete'>Delete</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
