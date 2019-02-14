<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User, Guest, HotelFacility, Payment, Reservation, Room, RoomType, RoomStatus, RoomFacility, Activitylog, Service};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Repository;
class AdministratorController extends Controller
{
   
    public function show()
    {
       $data = [
            "guest" => Guest::all(),
            "hotel_facility" => HotelFacility::all(),
            "payment" => Payment::all(),
            "reservation" => Reservation::all(),
            "room" => Room::all(),
            "room_type" => RoomType::all(),
            "room_status" => RoomStatus::all(),
            "room_facility" => RoomFacility::all(),
            "user" => User::all(),
            "log" =>Activitylog::all(),
            "part" => RoomType::orderBy("id", "desc")->take(4)->get(),
            "service" => Service::all(),
        ];
        return view("admin.dashboard")->with($data);
    }

    

    public function updatePassword(Request $request)
    {
        $validate = $request->validate([
            "password" => 'required|confirmed'
        ]);

        User::where("id", Auth::id())->update([
            "password" => Hash::make($request->password)
        ]);
        return redirect()->back()->with("success", "Password changed");
    }
}
