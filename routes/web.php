<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect("/infos");
});



Route::group([  'middleware' =>['web']  ], function(){

    Route::resource('/plaintes','admin');

});
Route::group([  'middleware' =>['web']  ], function(){

    Route::resource('/form','formulaire');

});
Route::group([  'middleware' =>['web']  ], function(){

    Route::resource('/requete','Mesrequete');

});
Route::group([  'middleware' =>['web']  ], function(){

    Route::resource('/infos','Infos');

});