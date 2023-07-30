<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\room_categories;
use Illuminate\Http\Request;

class AddRoomController extends Controller
{
    public function AddRoom()
    {
        $roomcategory = room_categories::all();
        // dd($roomcategory);

        return view('add_room_page',compact('roomcategory'));
    }

    public function ViewRoom()
    {
        $viewroom = room::all();
        return view('view_room_page',compact('viewroom'));
    }

    public function InsertRoom(Request $request)
    {
        $addroom = new room();
        $addroom -> room_no = $request -> roomno;
        $addroom -> room_room_category_id = $request -> room_category;
        $addroom -> save();
        return view('dashboard');
    }

    public function EditRoom($room_id)
    {
        $selectroom = room::where('room_id','=',$room_id)->first();
        $roomcategory = room_categories::all();
        return view('edit_room_page',compact('selectroom','roomcategory'));  
    }

    public function UpdateRoom(Request $request)
    {
        // dd($request);
        room::where('room_id', $request->roomid)
        ->update(['room_no' => $request->roomno,'room_status' => $request->roomstatus,'room_room_category_id' => $request->roomcategory]);
        return view('dashboard');
    }

    public function DeleteRoom($room_id)
    {
        room::where('room_id', $room_id)->delete();
        return view('dashboard');
    }

}
