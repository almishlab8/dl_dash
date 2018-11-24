<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Auth;
use Illuminate\Support\Facades\Input;
class jobs extends Controller
{
    //
    public function index(){
        $jobs= Job::all();
        $arr=Array('jobs' => $jobs);
    
          return view('categories.jobs.index' , $arr);
       
    }
    public function addjobs(Request $request){
        if($request->isMethod('post')){
            $addjobs = new Job();
            $addjobs->user_id= Auth::user()->id;
            $addjobs->title = $request->input('title');
            $addjobs->age = $request->input('age');
            $addjobs->gender = $request->input('gender');
            $addjobs->specialization = $request->input('specialization');
            $addjobs->experiences = $request->input('experiences');

            
            $addjobs->save();
            
        }
        $jobs= Job::all();
        $arr=Array('jobs' => $jobs);
    
          return view('categories.jobs.index' , $arr);
       

    }
    public function delete_jobs($id){
      
            $del = Job::find($id);
            $del->delete();
            return redirect('job');
    }

public function edit_jobs($id  , Request $request){
    if($request->isMethod('post')){
        $editjobs = Job::find($id);
        echo $editjobs;
        $editjobs->title = $request->input('title');
        $editjobs->age = $request->input('age');
        $editjobs->gender = $request->input('gender');
        $editjobs->specialization = $request->input('specialization');
        $editjobs->experiences = $request->input('experiences');
        $editjobs->save();

        return redirect('job');
    }else{
    $jobs= Job::all();
    $arr=Array('jobs' => $jobs);

      return view('categories.jobs.edit' , $arr);
   
    }
}
}
