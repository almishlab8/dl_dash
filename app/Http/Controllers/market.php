<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marketing;
use Auth;
class market extends Controller

{
    //
    public function index(){
        $market = Marketing::all();
        $arr=Array('market' => $market);
    
        return view('categories.marketing.index' , $arr);
    }
    public function addmarket(Request $request){

        if($request->isMethod('post')){
            $new=new Marketing();
            $new->title=$request->input('title');
            $new->description=$request->input('description');
            $new->user_id=Auth::user()->id;
            $new->save();
            // $phone = Important_phone::all();
            // $arr=Array('phone' => $phone);
            return redirect('marketing');
        }
    }
    public function delete_market($id){
        $del = Marketing::find($id);
        $del->delete();
    
        
              return redirect('marketing');
    }
}
