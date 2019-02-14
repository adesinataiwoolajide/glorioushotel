<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "PagesController@show")->name('index');
Route::get('/roomcategories', "PagesController@categories")->name('roomcategories');
Route::get('/roomdetails/{id}', "PagesController@roomdetails")->name('roomdetails');
Route::get('/faciities', "PagesController@categories")->name('webfacilities');
Route::get('/aboutus', "PagesController@aboutus")->name('aboutus');
Route::get('/contactus', "PagesController@contactus")->name('contactus');
Route::get('/gallery', "PagesController@gallery")->name('gallery');

Route::post('/addToCart/{id}', "CartController@addToCart")->name('addToCart');
Route::post('/addToCart/{id}', "CartController@create")->name('addCart');
Route::get('/cart', "CartController@index")->name('cart.index');
Route::get('/remove-from-cart/{id}', 'CartController@remove')->name('cart.remove');
Route::get('/destroycart', 'CartController@destroy')->name('cart.destroy');
Route::patch('/update-cart', 'CartController@update')->name('cart.update');


//Route::get('/registration', "PagesController@categories")->name('registration');
Route::get('/guestregistration', "UserController@guestregistration")->name('guest.registration');
Route::post('/saveregistration', "UserController@gueststore")->name('guest.save');
Route::get('/resetpassword', "UserController@forgotpassword")->name('guest.reset');
Route::post('/getdetails', "UserController@retrieveAccount")->name('guest.details');
Route::get('/updatingpassword', "UserController@updatingAccount")->name('guest.uppassword');
Route::post('/changepassword/{id}', "UserController@guestUpdatestore")->name('guest.confirm');

Auth::routes();
//Route::get('/login', 'HomeController@showLogin')->name('login');
Route::post("/login", "AccountController@login")->name("admin.login");

//Logout the administrator
Route::get("/logout", "AccountController@logout")->name("admin.logout");

Route::group(["prefix" => "admin", "middleware" => "auth"], function(){
    Route::get("/dashboard", "AdministratorController@show")->name("admin.dashboard");

    Route::group(["prefix" => "user"], function(){
        Route::get("/create", "UserController@index")->name("user.create");
        Route::get("/activity", "ActivitylogController@index")->name("user.activity");
        Route::post("/save", "UserController@store")->name("user.save");
        Route::get("/edit/{id}", "UserController@edit")->name("user.edit");   
        Route::get("/delete/{id}", "UserController@destroy")->name("user.delete");   
    });

     Route::group(["prefix" => "roomtype"], function(){
        Route::get("/create", "RoomTypeController@index")->name("type.create");
        Route::post("/save", "RoomTypeController@store")->name("type.save");
        Route::get("/delete/{id}", "RoomTypeController@destroy")->name("type.delete");  
    });

    Route::group(["prefix" => "room"], function(){
        Route::get("/create", "RoomController@index")->name("room.create");
        Route::post("/save", "RoomController@store")->name("room.save");
        Route::get("/delete/{id}", "RoomController@destroy")->name("room.delete");  
    });

    Route::group(["prefix" => "facility"], function(){
        Route::get("/create", "HotelFacilityController@index")->name("facility.create");
        Route::post("/save", "HotelFacilityController@store")->name("facility.save");
        Route::get("/delete/{id}", "HotelFacilityController@destroy")->name("facility.delete");  
    });

    Route::group(["prefix" => "services"], function(){
        Route::get("/create", "ServiceController@index")->name("services.create");
        Route::post("/save", "ServiceController@store")->name("services.save");
        Route::get("/delete/{id}", "ServiceController@destroy")->name("services.delete");  
    });

   
});
