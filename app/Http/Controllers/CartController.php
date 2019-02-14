<?php

namespace App\Http\Controllers;
use App\{User, Guest, HotelFacility, Payment, Reservation, Room, RoomType, RoomStatus, RoomFacility, Activitylog, Service, Cart};
use Illuminate\Support\Facades\Auth;
//use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
class CartController extends Controller
{

    public function index(Request $request)
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
        return view("website.cart")->with($data);
    }


    // public function create(Request $request)
    // {        
    //     $cart = session()->put('cart');
    //     $id = $request->input('room_number');
    //     $type_name =  $request->input('type_name');
    //     $price =  $request->input('amount');
    //     $check_in =  $request->input('check_in');
    //     $check_out =  $request->input('check_out');
    //     $room_number = $request->input('room_number');


    //    // Cart::add($id, $request->input('type_name'), 1, $price, ["check_in" => $check_in, "check_out" => $check_out, "room_number" => $room_number])->associate("App\RoomType");
    //     $cart =Cart::add(
    //         [
    //             'id' => $room_number, 
    //             'name' => $type_name, 
    //             'qty' => 1, 
    //             'price' => $amount, 
    //             'check_out' => $check_out, 
    //             'check_in'=>$check_in

    //         ]
    //     );
       
    //     return redirect()->route('cart.index')->with('success',"Room added Room ".$request->input('room_number'). " to cart successfully!");
    // }

    public function addToCart(Request $request, $id)
    {
        $room = Room::find($id);
        //$user_email = Auth::user()->email;
        if(!$room) {
            return redirect()->back()->with('error', 'Please Select Your Room!');
        }
        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                $id => [
                    "roomnumber" => $room->room_number,
                    "quantity" => 1,
                    "type_name" =>$request->input('type_name'),
                    "price" => $request->input('amount'),
                    "check_in" => $request->input('check_in'),
                    "check_out" => $request->input('check_out'),
                    "room_number" => $request->input('room_number'),
                ]
            ];
 
            session()->put('cart', $cart);
            return redirect()->back()->with('success',"You Have Added Room" .$request->input('room_number'). " to cart successfully!");
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
           return redirect()->back()->with('success',"Room added Room " .$request->input('room_number'). " to cart successfully!");
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart = [
            $id => [
            "roomnumber" => $room->room_number,
            "quantity" => 1,
            "type_name" =>$request->input('type_name'),
            "price" => $request->input('amount'),
            "check_in" => $request->input('check_in'),
            "check_out" => $request->input('check_out'),
            "full_name" =>$request->input('full_name'),
            "phone_number" => $request->input('phone_number'),
            "email" => $request->input('email'),
            "room_number" => $request->input('room_number'),
        ]
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Room added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return redirect()->back()->with('success',"Room Removed successfully!");
        }
    }

    // public function remove($rowId)
    // {
    //     Cart::remove($rowId);
    //     return back()->with('success', 'Item has been removed!');
    // }

    public function destroy()
    {
        Cart::destroy();
        return redirect()->route('roomcategories')->with('success',"Your Bookings Cart is Empty!");
    }
}
