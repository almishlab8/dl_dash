<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use App\Careerdetails;
use Auth;
use Illuminate\Support\Facades\Input;
class careers extends Controller
{
    public function index(){
       

         $careerDetails= Careerdetails::all();
         $career= Career::all();
       
         $arr=Array('career' => $career , 'careerDetails' => $careerDetails);
           
         return view('categories.career.index' , $arr);

   
      
       
    }
    public function addcareer(Request $request){
        if($request->isMethod('post')){
            $addCareerDetails = new Careerdetails();
            $addCareerDetails->user_id= Auth::user()->id;
            $addCareerDetails->location = $request->input('location');
            $addCareerDetails->phone_number = $request->input('tele');
            if(Input::hasFile('image')){
                $img = Input::file('image');
                $addCareerDetails->image =  $img->move('career_img', $img->getClientOriginalName());
            }
            $addCareerDetails->save();

            $addcareer = new Career();
            $addcareer->title=$request->input('title');
            $addcareer->subject=$request->input('subject');
            $addcareer->user_id=Auth::user()->id;
            $addcareer->careerdetails_id=  $addCareerDetails->id;
            $addcareer->save();
            
        }
        $career= Career::all();
        $arr=Array('career' => $career);
    
          return view('categories.career.index' , $arr);

    }
    public function delete_career($id){
      
            $comp = Career::find($id);
            $comp->delete();
            return redirect('career');
    }
    public function edit_career($id , Request $request){

        if($request->isMethod('post')){
            $career= Career::where('careerdetails_id', $id)->first();
            $careerdetails= Careerdetails::find($id);

            $career->title   = $request->input('title');
            $career->subject = $request->input('subject');

            $careerdetails->location = $request->input('location');
            $careerdetails->phone_number = $request->input('tele');
            if(Input::hasFile('image')){
                $img = Input::file('image');
                $$careerdetails->image =  $img->move('career_img', $img->getClientOriginalName());
            }

            $career->save();
            $careerdetails->save();
            return redirect('career');
        }
        $career= Career::where('careerdetails_id', $id)->get();
        $careerdetails= Careerdetails::find($id);
        $arr=Array('career' => $career ,
                   'careerdetails' => $careerdetails 
                );
    
        return view('categories.career.edit' , $arr);
        echo $career;
        echo   $careerdetails;
    }
}
