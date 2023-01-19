@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="row p-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="color: black">First Name</th>
                        <th scope="col" style="color: black">Last Name</th>
                        <th scope="col" style="color: black">Phone</th>
                        <th scope="col" style="color: black">Email</th>
                        <th scope="col" style="color: black">Room</th>
                        <th scope="col" style="color: black">Price</th>
                        <th colspan="2" style="color: black">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td style="color: black">{{ $book->customer->first_name }}</td>
                            <td style="color: black">{{ $book->customer->last_name }}</td>
                            <td style="color: black">{{ $book->customer->phone_number }}</td>
                            <td style="color: black">{{ $book->customer->email }}</td>
                            <td style="color: black">{{ $book->room->name }}</td>
                            <td style="color: black">{{ $book->room->price }}</td>
                            <td> <button type="submit"
                                    class="btn btn-xs btn-primary btn-flat show-alert-delete-box btn-sm mt-3"
                                    data-toggle="tooltip" title='Delete'>Edit</button> <button type="submit"
                                    class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm mt-3"
                                    data-toggle="tooltip" title='Delete'>Delete</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
