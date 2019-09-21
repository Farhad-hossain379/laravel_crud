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

Route::get('/welcome', function () {
    return view('welcome');
    //Route::resource('shows', 'ShowController');
});
Route::get('/user/{id}', function ($id) {
    return view('user', ["user" => $id]);
    //Route::resource('shows', 'ShowController');
});
Route::get('/user', function () {
    return view('user', ['games' => ['Castlevania', 'Galaga', 'Ghosts n Goblins']]);
    //Route::resource('shows', 'ShowController');
});
Route:: redirect("/here","/welcome");// input "here" in browser it will redirect to welcome page
Route:: get("youtube","Youtube@index");
/*Route::get('/userview', function () {
    return view('userview');
    //Route::resource('shows', 'ShowController');
});*/
//Route:: get("/userview","UserController@userView");
//Route:: post("/usercontroller","UserController@formSubmit");
Route:: get("/departments","UserController@departments");
Route:: get("/create-department","UserController@createDepartment");
Route:: get("/edit-department/{department}","UserController@editDepartment");
/*Route::get('/',function (){ //this way will send to the method
    $controller = new \App\Http\Controllers\UserController();
    $controller ->createDepartment();
});*/
Route:: post("/create-department-post","UserController@createDepartmentPost");
Route:: post("/edit-department-post","UserController@editDepartmentPost");
Route:: get("/delete-department/{id}","UserController@deleteDepartment");
Route::get('/home', 'HomeController@index')->name('home');
