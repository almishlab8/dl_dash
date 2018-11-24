<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Important_phone;
use Auth;
class phones extends Controller
{
    public function index(Request $request){
        $phone = Important_phone::all();
        $arr=Array('phone' => $phone);
     //echo print_r(session('id'));
    return view('categories.phones.index' , $arr);
    }
    public function addphones( Request $request ){
        if($request->isMethod('post')){
            $newphone=new Important_phone();
            $newphone->company_name=$request->input('company_name');
            $newphone->phone_number=$request->input('phone_number');
            $newphone->user_id=Auth::user()->id;
            $newphone->save();
            // $phone = Important_phone::all();
            // $arr=Array('phone' => $phone);
            return redirect('phones');
        }

    }
    public function delete($id)
    {
        $del = Important_phone::find($id);
        $del->delete();
    
        
              return redirect('phones');
    }
}
