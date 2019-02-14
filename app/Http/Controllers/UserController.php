<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{ User, Activitylog};
use App\Repositories\Repository;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
       // set the model
       $this->model = new Repository($user);
    }

    public function index()
    {
        $user = $this->model->all();
        
        return view('admin.user.create')->with([
            "user" => $user,
        ]);
    }
    
    public function store(Request $request)
    {

        $this->validate($request, [
            'email' =>'required|min:5|max:255|unique:users',
            'name' => 'required|min:1|max:255',
            'password' => 'required|min:1|max:10',
            'is_admin' => 'required|string|min:1|max:225',
            'status' => 'nullable',
        ]);

        if(User::where("email", $request->input("email"))->exists()){
           return redirect()->back()->with("error", "The E-Mail is In Use By Another User");
        }
        $user_email = Auth::user()->email;
        $data = ([
            "user" => new User,
            "email" => $request->input("email"),
            "name" => $request->input("name"),
            "password" => Hash::make($request->input("password")),
            "is_admin" => $request->input("is_admin"),
            "status" => 1,
        ]);

        $log = new activitylog([
            "action" => "Added User ".$request->input("email"),
            "user_details" => $user_email,
        ]);

        if($log->save() AND ($this->model->create($data))){
            return redirect()->route("user.create")->with("success", "You Have Added User " .$request->input("email"). " The User List Successfully");
        } 
               
    }

    public function edit($id)
    {
         $used =  $this->model->show($id);  
         $user = $this->model->all();
         return view('admin.user.edit')->with([
            "user" => $user,
            "used" =>$used,
         ]);
    }

     public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' =>'required|min:5|max:255|unique:users',
            'name' => 'required|min:1|max:255',
            'password' => 'nullable|min:1|max:10',
            'is_admin' => 'required|string|min:1|max:225',
            'status' => 'nullable',
        ]);

        
        $user_email = Auth::user()->email;
        $data = ([
            "user" => $this->model->show($id),
            "email" => $request->input("email"),
            "name" => $request->input("name"),
            "password" => Hash::make($request->input("password")),
            "is_admin" => $request->input("is_admin"),
            "status" => 1,
        ]);

        $log = new activitylog([
            "action" => "Updated User ".$request->input("email"). "Details",
            "user_details" => $user_email,
        ]);
        if($log->save() AND ($this->model->update($data, $id))){
            return redirect()->route("user.create")->with("success", "You Have Updated ". $request->input("email")  ."Successfully");
        } 
    }

    public function destroy($id)
    { 
        $user =  $this->model->show($id);  
        $user_email = Auth::user()->email;
        $log = new Activitylog([
            "action" => "Deleted User ". $user->email. " From The User List",
            "user_details" => $user_email,
        ]);

        if($log->save() AND ($user->delete($id))){
            return redirect()->back()->with("success", "You Have Deleted ". $user->email. " From The User List Successfully");
        } 
        
    }


    public function gueststore(Request $request)
    {

        $this->validate($request, [
            'email' =>'required|min:5|max:255|unique:users',
            'name' => 'required|min:1|max:255',
            'password' => 'required|min:1|max:10',
            'is_admin' => 'required|string|min:1|max:225',
            'status' => 'nullable',
        ]);

        if(User::where("email", $request->input("email"))->exists()){
           return redirect()->back()->with("error", "The E-Mail is In Use By Another User");
        }
        $data = ([
            "user" => new User,
            "email" => $request->input("email"),
            "name" => $request->input("name"),
            "password" => Hash::make($request->input("password")),
            "is_admin" => $request->input("is_admin"),
            "status" => 1,
        ]);

        $log = new activitylog([
            "action" => "Registered Account",
            "user_details" => $request->input("email"),
        ]);

        if($log->save() AND ($this->model->create($data))){
            return redirect()->route("admin.login")->with("success", $request->input("name")." You Have Registered Your Account Successfully");
        } 
               
    }

    public function guestregistration()
    {
        return view('website.register');
    }

    public function forgotpassword()
    {
        return view('website.resetpassword');
    }

    public function retrieveAccount(Request $request)
    {
        $this->validate($request, [
            'email' =>'required|min:5|max:255',
        ]);

        $user = User::where('email',$request->input('email'))->get();
        if (!is_null($user)) {
            $details = DB::table('users')->where('email', $request->input('email'))->first();
            if($details->is_admin !="Guest"){
                return redirect()->back()->with("error", $request->input('email'). " You Can Not Change Your Password, Please Kindly Contact The ICT Department");
            }else{
                return view('website.updatepassword')->with([
                    "details" => $details,
                    "name" => $details->name,
                    "email" => $details->email,
                    "id" => $details->id,
                    "success" => $details->name ." Please Kindly Update Your Details Below",
                     
                ]);
           } 
        }else{
            return redirect()->back()->with("error", $request->input('email'). " Does Not Exist");
        }
    }

   public function guestUpdatestore(Request $request, $id)
    {

        $this->validate($request, [
            'email' =>'required|min:5|max:255',
            'name' => 'required|min:1|max:255',
            'password' => 'required|min:1|max:10',
            'is_admin' => 'required|string|min:1|max:225',
            'status' => 'nullable',
        ]);
       // $user =  $this->model->show($id); 

        $data = ([
            "user" => $this->model->show($id),
            "email" => $request->input("email"),
            "name" => $request->input("name"),
            "password" => Hash::make($request->input("password")),
            "is_admin" => $request->input("is_admin"),
            "status" => 1,
        ]);

        $log = new activitylog([
            "action" => "Updated Account",
            "user_details" => $request->input("email"),
        ]);

        if($log->save() AND ($this->model->update($data, $id))){
            return redirect()->route("admin.login")->with("success", $request->input("name")." You Have Updated Your Account Successfully");
        } 
               
    }


   
}
