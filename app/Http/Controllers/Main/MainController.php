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
        foreach ($rooms as $room) {
            $room['image'] = 'http://127.0.0.1:8000/storage/' . $room->image;
            // $room['images'] = RoomImages::where('room_id', $room->id)->get();
            // foreach ($room['images'] as $room_image) {
            //     $room_image['images'] = 'http://127.0.0.1:8000/storage/' . $room_image->images;
            // }
        }
        // return $rooms;
        return view('main.home', compact('rooms'));
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
        return view('main.room');
    }
}