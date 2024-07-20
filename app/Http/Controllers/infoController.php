<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class infoController extends Controller
{
   public function index(){
    $infos=info::all();
    return view('welcome',compact('infos'));
   }

   public function store(Request $request){
   // $this->Validate($request,[
       // 'title' => 'required|string|max:255',
        //'message'=>'required|string|max:225'
   // ]);
      info::create([
        'title'=>$request->title,
        'message'=>$request->message,
      ]);
      return redirect()->back();
   }
   public function edit($id){
    $infos=info::findOrFail($id);
    return view('welcom-edit',compact('infos'));
    
   }

   public function update(Request $request,$id){
    info::findOrFail($id)->update([
        'title'=>$request->title,
        'message'=>$request->message
    ]);
    return redirect()->back();
   }
   public function destroy($id){
    info::findOrFail($id)->delete();
    return redirect()->back();
 }
}
