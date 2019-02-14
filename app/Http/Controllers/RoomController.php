<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Room, RoomType, User, Activitylog };
use App\Repositories\Repository;
use DB;
use Illuminate\Support\Facades\Auth;
class RoomController extends Controller
{
    protected $model;

    public function __construct(Room $room)
    {
       // set the model
       $this->model = new Repository($room);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = RoomType::orderBy("type_name", "asc")->get();
        $room= $this->model->all();
        
        return view('admin.room.create')->with([
            "type" => $type,
            "room" => $room,
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
                    "full_name" =>$request->input('full_name'),
                    "phone_number" => $request->input('phone_number'),
                    "email" => $request->input('email'),
                    "room_number" => $request->input('room_number'),
                ]
            ];
 
            session()->put('cart', $cart);
            return redirect()->back()->with('success',"Room added" .$request->input('type_name'). "to cart successfully!");
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Room added to cart successfully!');
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            // "name" => $product->name,
            // "quantity" => 1,
            // "price" => $product->price,
            // "photo" => $product->photo

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
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Room added to cart successfully!');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'room_number' =>'required|min:3|max:255|unique:rooms',
            'type_id' => 'required|min:1|max:255',
        ]);

        if(Room::where("room_number", $request->input("room_number"))->exists()){
            return redirect()->back()->with("error", "You Have Added A Room With This Number Before");
        }

       
        $data = [
            'room' => new Room,
            "room_number" => $request->input('room_number'),
            "type_id" => $request->input('type_id'),
        ];

        $user_email = Auth::user()->email;
        $log = new activitylog([
            "action" => "Added Room ".$request->input("room_number"),
            "user_details" => $user_email,
        ]);

        if($log->save() AND ($this->model->create($data))){
            return redirect()->route("room.create")->with("success", "You Have Added Room " . $request->input("room_number"). " Room List Successfully");
        } 

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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room =  $this->model->show($id); 
        $user_email = Auth::user()->email;
        $log = new Activitylog([
            "action" => "Deleted Room". $room->room_number. " From The Room List",
            "user_details" => $user_email,
        ]);

        if($log->save() AND ($room->delete($id))){
            return redirect()->back()->with("success", "You Have Deleted Room ". $room->room_number. " From The Room Successfully");
        } 
    }
}
