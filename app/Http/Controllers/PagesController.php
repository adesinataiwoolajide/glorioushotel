<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User, Guest, HotelFacility, Payment, Reservation, Room, RoomType, RoomStatus, RoomFacility, Activitylog, Service, Pages, Cart};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Repository;
class PagesController extends Controller
{
   
    public function show()
    {
       $data = [
            "guest" => Guest::all(),
            "hotel_facility" => HotelFacility::all(),
            "payment" => Payment::all(),
            "reservation" => Reservation::all(),
            "room" => Room::all(),
            "room_type" => RoomType::orderBy("type_name", "asc")->get(),
            "hotel_facility_lim" => HotelFacility::orderBy("id", "desc")->take(5)->get(),
             "hotel_faciliti_lim" => HotelFacility::orderBy("facility_name", "asc")->take(5)->get(),
            "room_status" => RoomStatus::all(),
            "room_facility" => RoomFacility::all(),
            "user" => User::all(),
            "log" =>Activitylog::all(),
            "part" => RoomType::orderBy("id", "desc")->take(9)->get(),
            "service" => Service::all(),
            "cart" => session()->get('cart'),
        ];
        return view("website.index")->with($data);
    }

    public function categories()
    {
       $data = [
            
           "guest" => Guest::all(),
            "hotel_facility" => HotelFacility::all(),
            "payment" => Payment::all(),
            "reservation" => Reservation::all(),
            "room" => Room::all(),
            "room_types" => RoomType::orderBy("id", "desc")->paginate(9),
            "room_status" => RoomStatus::all(),
            "room_facility" => RoomFacility::all(),
            "user" => User::all(),
            "log" =>Activitylog::all(),
            "part" => RoomType::orderBy("id", "desc")->take(9)->get(),
            "service" => Service::all(),
            "room_type" => RoomType::orderBy("type_name", "asc")->get(),
            "cart" => session()->get('cart'),
        ];
        return view("website.categories")->with($data);
    }

     public function roomdetails($id)
    {
         $data = [
            "roomdetails" => RoomType::findorFail($id),
            "guest" => Guest::all(),
            "hotel_facility" => HotelFacility::orderBy("facility_name", "asc")->take(6)->get(),
            "hotel_faci" => HotelFacility::orderBy("id", "desc")->take(6)->get(),
            "payment" => Payment::all(),
            "reservation" => Reservation::all(),
            "room" => Room::all(),
            "room_types" => RoomType::orderBy("amount", "desc")->paginate(8),
            "room_status" => RoomStatus::all(),
            "room_facility" => RoomFacility::all(),
            "user" => User::all(),
            "log" =>Activitylog::all(),
            "part" => RoomType::orderBy("id", "desc")->take(9)->get(),
            "service" => Service::all(),
            "room_type" => RoomType::orderBy("type_name", "asc")->get(),
            "cart" => session()->get('cart'),
        ];
        return view("website.roomdetails")->with($data);
        
    }

    public function aboutus()
    {
       $data = [
            
           "guest" => Guest::all(),
            "hotel_facility" => HotelFacility::all(),
            "payment" => Payment::all(),
            "reservation" => Reservation::all(),
            "room" => Room::all(),
            "room_types" => RoomType::orderBy("amount", "desc")->paginate(8),
            "room_status" => RoomStatus::all(),
            "room_facility" => RoomFacility::all(),
            "user" => User::all(),
            "log" =>Activitylog::all(),
            "part" => RoomType::orderBy("id", "desc")->take(9)->get(),
            "service" => Service::all(),
            "room_type" => RoomType::orderBy("type_name", "asc")->get(),
            "cart" => session()->get('cart'),
        ];
        return view("website.aboutus")->with($data);
    }

    public function contactus()
    {
       $data = [
            
           "guest" => Guest::all(),
            "hotel_facility" => HotelFacility::all(),
            "payment" => Payment::all(),
            "reservation" => Reservation::all(),
            "room" => Room::all(),
            "room_types" => RoomType::orderBy("amount", "desc")->paginate(8),
            "room_status" => RoomStatus::all(),
            "room_facility" => RoomFacility::all(),
            "user" => User::all(),
            "log" =>Activitylog::all(),
            "part" => RoomType::orderBy("id", "desc")->take(9)->get(),
            "service" => Service::all(),
            "room_type" => RoomType::orderBy("type_name", "asc")->get(),
            "cart" => session()->get('cart'),
        ];
        return view("website.contactus")->with($data);
    }

    public function gallery()
    {
       $data = [
            
           "guest" => Guest::all(),
            "hotel_facility" => HotelFacility::all(),
            "payment" => Payment::all(),
            "reservation" => Reservation::all(),
            "room" => Room::all(),
            "room_types" => RoomType::orderBy("amount", "desc")->paginate(8),
            "room_status" => RoomStatus::all(),
            "room_facility" => RoomFacility::all(),
            "user" => User::all(),
            "log" =>Activitylog::all(),
            "part" => RoomType::orderBy("id", "desc")->take(9)->get(),
            "service" => Service::all(),
            "room_type" => RoomType::orderBy("type_name", "asc")->get(),
            "cart" => session()->get('cart'), 
        ];
        return view("website.gallery")->with($data);
    }


}
