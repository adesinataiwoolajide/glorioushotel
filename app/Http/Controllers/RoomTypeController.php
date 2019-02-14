<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{ RoomType, User, Activitylog };
use App\Repositories\Repository;
use DB;
use Illuminate\Support\Facades\Auth;

class RoomTypeController extends Controller
{
    protected $model;

    public function __construct(RoomType $type)
    {
       // set the model
       $this->model = new Repository($type);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $type= $this->model->all();
        return view('admin.roomtype.create')->with('type', $type);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type= $this->model->all();
        return view('admin.roomtype.create')->with('type', $type);
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
            'type_name' =>'required|min:5|max:255|unique:room_types',
            'type_banner' => 'file|required|mimes:jpeg,bmp,png,PNG,jpg,JPEG|max:1999',
            'amount' =>'required|min:3|max:255',
            'description' =>'required|min:3|max:255',
            'max_guest' =>'required|min:1|max:255',
        ]);

        if($request->hasFile('type_banner')){
            //Getting File Name With Extension
            $filenameWithExt = $request->file('type_banner')->getClientOriginalName();
            // Get Just File Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('type_banner')->getClientOriginalExtension();
            // file name to store
            $cut = str_replace(" ", "_", $filename);
            $cutting = str_replace("-", "_", $cut);
            $fileNameToStore = $cutting.time().'.'.$extension;
            //upload the image
            $path=$request->file('type_banner')->move('room_types', $fileNameToStore);
        }else{
            $fileNameToStore = 'NoFile.png';
        }

        if(RoomType::where("type_name", $request->input("type_name"))->exists()){
            return redirect()->back()->with("error", "You Have Added The Room Type Before");
        }

        $data = [
            'type' => new RoomType,
            "type_name" => $request->input('type_name'),
            "type_banner" =>  $fileNameToStore,
            "max_guest" => $request->input('max_guest'),
            "amount" => $request->input('amount'),
            "description" => $request->input('description'),
        ];

        $user_email = Auth::user()->email;
        $log = new activitylog([
            "action" => "Added Room Type ".$request->input("type_name"),
            "user_details" => $user_email,
        ]);

        if($log->save() AND ($this->model->create($data))){
            return redirect()->route("type.create")->with("success", "You Have Added ". $request->input("type_name"). " To The Room Type Successfully");
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
        $category =  $this->model->show($id);  
        $user_email = Auth::user()->email;
        $log = new Activitylog([
            "action" => "Deleted Room Type". $category->type_name. " From The Room Type List",
            "user_details" => $user_email,
        ]);

        if($log->save() AND ($category->delete($id))){
            return redirect()->back()->with("success", "You Have Deleted Room Type ". $category->type_name. " From The Room Type Successfully");
        } 
       
    }
}
