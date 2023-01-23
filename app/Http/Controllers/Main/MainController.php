<?php

namespace App\Http\Controllers\Main;

use App\Models\Room;
use App\Models\RoomImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    //
    public function index(Request $request)
    {
        $rooms = Room::limit(3)->get();
        $last_room = Room::get()->last();
        $last_room['image'] = 'http://127.0.0.1:8000/storage/' . $last_room->image;
        $last_room['images'] = 'http://127.0.0.1:8000/storage/' . RoomImages::where('room_id', $last_room['id'])->first()->images;
        // return $last_room;
        foreach ($rooms as $room) {
            $room['image'] = 'http://127.0.0.1:8000/storage/' . $room->image;
            // $room['images'] = RoomImages::where('room_id', $room->id)->get();
            // foreach ($room['images'] as $room_image) {
            //     $room_image['images'] = 'http://127.0.0.1:8000/storage/' . $room_image->images;
            // }
        }
        // return $rooms;
        return view('main.home', compact('rooms', 'last_room'));
    }

    public function about(Request $request)
    {
        return view('main.about');
    }
    public function contact(Request $request)
    {
        return view('main.contact');
    }

    public function service(Request $request)
    {
        return view('main.service');
    }
    public function room(Request $request)
    {
        $rooms = Room::limit(3)->get();
        $last_room = Room::get()->last();
        $last_room['image'] = 'http://127.0.0.1:8000/storage/' . $last_room->image;
        $last_room['images'] = 'http://127.0.0.1:8000/storage/' . RoomImages::where('room_id', $last_room['id'])->first()->images;
        // return $last_room;
        foreach ($rooms as $room) {
            $room['image'] = 'http://127.0.0.1:8000/storage/' . $room->image;
            // $room['images'] = RoomImages::where('room_id', $room->id)->get();
            // foreach ($room['images'] as $room_image) {
            //     $room_image['images'] = 'http://127.0.0.1:8000/storage/' . $room_image->images;
            // }
        }
        return view('main.room', compact('rooms', 'last_room'));
    }
    public function room_detail(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $similar_rooms = Room::where('id', '!=', $id)->get();
        $room['image'] = 'http://127.0.0.1:8000/storage/' . $room->image;
        $room['images'] = RoomImages::where('room_id', $id)->get();
        foreach ($room['images'] as $room_image) {
            $room_image['images'] = 'http://127.0.0.1:8000/storage/' . $room_image->images;
        }
        foreach ($similar_rooms as $similar_room) {
            $similar_room['image'] = 'http://127.0.0.1:8000/storage/' . $similar_room->image;
        }
        // return $room;
        return view('main.room_detail', compact('room', 'similar_rooms'));
    }
}