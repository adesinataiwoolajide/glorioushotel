<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{HotelFacility, User, Activitylog };
use App\Repositories\Repository;
use DB;
use Illuminate\Support\Facades\Auth;
class HotelFacilityController extends Controller
{
    protected $model;

    public function __construct(HotelFacility $facility)
    {
       // set the model
       $this->model = new Repository($facility);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$type = RoomType::orderBy("type_name", "asc")->get();
        $facility= $this->model->all();
        
        return view('admin.facility.create')->with([
           // "type" => $type,
            "facility" => $facility,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'facility_name' =>'required|min:3|max:255|unique:hotel_facilities',
            'facility_category' => 'required|min:1|max:255',
        ]);

        if(HotelFacility::where("facility_name", $request->input("facility_name"))->exists()){
            return redirect()->back()->with("error", "You Have Added A Facility With This Name Before");
        }
       
        $data = [
            'facility' => new HotelFacility,
            "facility_name" => $request->input('facility_name'),
            "facility_category" => $request->input('facility_category'),
        ];

        $user_email = Auth::user()->email;
        $log = new Activitylog([
            "action" => "Added ".$request->input("facility_name"). " To The Facility List",
            "user_details" => $user_email,
        ]);

        if($log->save() AND ($this->model->create($data))){
            return redirect()->route("facility.create")->with("success", "You Have Added " .$request->input('facility_name'). " To The Facility List Successfully");
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
        $facility =  $this->model->show($id);
        $user_email = Auth::user()->email;
        $log = new Activitylog([
            "action" => "Deleted ". $facility->facility_name. " From The Facility List",
            "user_details" => $user_email,
        ]);

        if($log->save() AND ($facility->delete($id))){
            return redirect()->back()->with("success", "You Have Deleted $facility->facility_name From The Facility Successfully");
        }
        
    }
}
