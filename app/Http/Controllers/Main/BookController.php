<?php

namespace App\Http\Controllers\Main;

use App\Models\Book;
use App\Models\Room;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    //
    public function make_book(Request $request)
    {
        $data = request()->all();
        $validator = Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => '',
            "email" => '',
            'phone' => '',
            'room_id' => 'required|exists:App\Models\Room,id',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $room = Room::findOrFail($data['room_id']);
        $room['booked'] = Book::where('room_id', $room['id'])->where('end_date', '>', Carbon::today())->count();
        $room['free_rooms'] = $room['quantity'] -  $room['booked'];
        // return $room;
        if ($room['free_rooms'] <= 0) {
            return response()->json(["error" => "No free room found"], 400);
        }
        // return $data;
        $customer = Customer::create(
            array_merge(
                $data
            )
        );

        $customer_id = ['customer_id' => $customer['id']];

        $book = Book::create(
            array_merge(
                $data,
                $customer_id
            )
        );
        return response(["message" => "Created Successfully", "data" => $book]);
    }

    public function free_rooms()
    {
        $rooms = Room::get();

        foreach ($rooms as $room) {
            // $room['non_booked'] = Book::where('room_id', $room['id'])->where('end_date', '<', Carbon::today())->get();
            $room['image'] = 'http://127.0.0.1:8000/storage/' . $room->image;
            $room['booked'] = Book::where('room_id', $room['id'])->where('end_date', '>', Carbon::today())->count();
            $room['free_rooms'] = $room['quantity'] -  $room['booked'];
        }

        $rooms = $rooms->where('free_rooms', '>', 0)->values();

        return view('main.free_rooms', compact('rooms'));
        // return $rooms;
    }
}