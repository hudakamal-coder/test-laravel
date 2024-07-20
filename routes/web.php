<?php

use App\Http\Controllers\infoController;
use App\Models\info;
use App\Models\user;
use App\Models\post;
use App\Models\category;
use App\Models\user_info;
use Illuminate\Support\Facades\Route;
Route::get('/story',function(){
    return view('/story');
})->name('story');
 

Route::resource('/index',infoController::class);


Route::get('/relation',function(){
    $posts=post::with('category')->get();
    return view('relation',['data'=>$posts]);
});