<?php

namespace App\Http\Controllers;

use App\Models\room_categories;
use Illuminate\Http\Request;

class RoomCategoryController extends Controller
{
    public function RoomCategory()
    {
        return view('room_category_page');
    }
    public function ViewCategory()
    {
        $viewcategory = room_categories::all();
        return view('view_category_page',compact('viewcategory'));
    }
    public function InsertRoomCaregory(Request $request)
    {
        // dd($request);
        $room_categories = new room_categories();
        $room_categories -> room_category_type = $request-> category;
        $room_categories -> room_category_price = $request-> price;
        $room_categories -> save();

        return view('dashboard');
    }
    public function EditCategory($category_id)
    {
        $selectcategory = room_categories::where('room_category_id','=',$category_id)->first();

        return view('edit_category_page',compact('selectcategory'));
    }

    public function UpdatetRoomCategory(request $request)
    {
        room_categories::where('room_category_id', $request->categoryid)
        ->update(['room_category_type' => $request->category,'room_category_price' => $request->price]);
        return view('dashboard');
    }
    public function DeleteRoomCategory($category_id)
    {
        room_categories::where('room_category_id', $category_id)->delete();
        return view('dashboard');
    }
}