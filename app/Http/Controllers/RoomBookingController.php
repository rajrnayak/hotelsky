<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\room_categories;
use App\Models\room_booking;
use App\Models\room_history;
use Illuminate\Http\Request;

class RoomBookingController extends Controller
{
    // public function RoomBooking()
    // {
    //     // $roomcategory = room_categories::all();
    //     // $room = room::all();
    //     return view('room_booking_page');
    // }

    public function RoomHistory()
    {
        $viewbooking = room_booking::all();
        return view('room_history_page',compact('viewbooking'));
    }    

    public function GetDetails($room_id)
    {
        $viewbooking = room_booking::all();
        $roomcategory = room_categories::all();
        $selectroom = room::where('room_id','=',$room_id)->first();
        return view('room_booking_page',compact('selectroom','roomcategory','viewbooking'));  
    }

    public function InsertRoomBooking(request $request)
    {
        // dd($request);
        $addroombooking = new room_booking();
        $addroombooking -> room_booking_room_category_id = $request -> roombookingcategoryid;
        $addroombooking -> room_booking_room_id = $request -> roombookingroomid;
        $addroombooking -> customer_name = $request -> customername;
        $addroombooking -> customer_email = $request -> customeremail;
        $addroombooking -> customer_phoneno = $request -> customernumber;
        $addroombooking -> customer_address = $request -> customeraddress;
        $addroombooking -> customer_members = $request -> customermembers;
        $addroombooking -> checkin_date = $request -> checkin;
        $addroombooking -> checkout_date = $request -> checkout;

        $addroombooking -> save();
        return view('dashboard');
    }
}