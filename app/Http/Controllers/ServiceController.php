<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Service, User, Activitylog };
use App\Repositories\Repository;
use DB;
use Illuminate\Support\Facades\Auth;
class ServiceController extends Controller
{
    protected $model;

    public function __construct(Service $service)
    {
       // set the model
       $this->model = new Repository($service);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service= $this->model->all();
        return view('admin.services.create')->with([
            "service" => $service
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'service_name' =>'required|min:3|max:255|unique:services',
            'service_category' =>'required|min:3|max:255',
            'amount' => 'required|min:2|max:255',
        ]);

        if(Service::where("service_category", $request->input("service_name"))->exists()){
            return redirect()->back()->with("error", "You Have Added A". $request->input('room_number'). " To The Service List Before");
        }

       
        $data = [
            'service' => new Service,
            "service_name" => $request->input('service_name'),
            "service_category" => $request->input('service_category'),
            "amount" => $request->input('amount'),
        ];

        $user_email = Auth::user()->email;
        $log = new activitylog([
            "action" => "Added Hotel Service ".$request->input("service_name"),
            "user_details" => $user_email,
        ]);

        if($log->save() AND ($this->model->create($data))){
            return redirect()->route("services.create")->with("success", "You Have Added Service " . $request->input("service_name"). " To The Service List Successfully");
        } 

    }

    public function destroy($id)
    {
        $service =  $this->model->show($id); 
        $user_email = Auth::user()->email;
        $log = new Activitylog([
            "action" => "Deleted ". $service->service_name. " From The Service List",
            "user_details" => $user_email,
        ]);

        if($log->save() AND ($service->delete($id))){
            return redirect()->back()->with("success", "You Have Deleted ". $service->service_name. " From The Service List Successfully");
        } 
    }

}