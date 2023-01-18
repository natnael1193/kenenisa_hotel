<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\RoomImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rooms = Room::get();
        foreach ($rooms as $room) {
            $room['image'] = 'http://127.0.0.1:8000/storage/' . $room->image;
        }
        return view('/admin.room.room_list', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.room.add_room');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->all();
        $validator = Validator::make($data, [
            'name' => 'required|unique:rooms',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'required',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('rooms', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"));
            // $image = Image::make(public_path("storage/{$imagePath}"));
            $image->save();
            $imageArray = ['image' => $imagePath];
        }


        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $room = Room::create(
            array_merge(
                $data,
                $imageArray ?? []
            )
        );

        if (!empty($request->images)) {
            foreach ($request->images as $item => $v) {
                $post2 = array(
                    'images' => $request->images[$item],
                    // 'user_id' => auth()->user()->id,
                    'room_id' => $room->id,
                );

                RoomImages::create(array_merge(
                    // $data,
                    $post2
                ));
            }
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $room = Room::findOrFail($id);
        $room->images = RoomImages::where('room_id', $id)->get();
        $room->room_image = 'http://127.0.0.1:8000/storage/' . $room->image;
        foreach ($room->images as $images) {
            $images['images'] = 'http://127.0.0.1:8000/storage/' . $images->images;
        }

        // return $room;
        return view('admin.room.edit_room', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = request()->all();
        $room = Room::findOrFail($id);

        $validator = Validator::make($data, [
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        if (Room::findOrFail($id)->name  !== $request['name']) {
            $validator = Validator::make($data, [
                'name' => 'required|unique:rooms',
                'price' => 'required',
                'quantity' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors());
            }
        }

        if (request('image')) {
            Storage::delete("/public/{$room->image}");
            $imagePath = request('image')->store('uploads', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"));
            $image->save();
            $imageArray = ['image' => $imagePath];
        }

        $room->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        if (!empty($request->images)) {
            foreach ($request->images as $item => $v) {
                $post2 = array(
                    'images' => $request->images[$item],
                    // 'user_id' => auth()->user()->id,
                    'room_id' => $room->id,
                );

                RoomImages::create(array_merge(
                    // $data,
                    $post2
                ));
            }
        }

        return redirect()->back();
        // return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $room = Room::findOrFail($id);
        $room->images = RoomImages::where('room_id', $id)->get();
        // return $room;
        Storage::delete("/public/{$room->image}");
        if ($room->images !== []) {
            foreach ($room->images as $room_image) {
                Storage::delete("/public/{$room_image->images}");
            }
            // return 'sucess';
        }
        RoomImages::where('room_id', $id)->delete();
        $room->delete();
        return redirect()->back();
    }
    public function imageup(Request $request)
    {
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                //            $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $folder = uniqid() . '-' . now()->timestamp;
                $path = $file->store('room_images', 'public');
                $data[] = $path;
                return $path;
            }
        }
        return '';
    }

    public function single_upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $path = $file->store('service_images', 'public');
            return $path;
        }
    }
}