<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manage_apply;

class AddCVController extends Controller
{
    public function index(Request $request){
        $CV = new Manage_apply([
            'jobs_id' => $request->get('jobID'),
            'student_id' => $request->get('studentID'),
        ]);
        $CV->save();
        return redirect() -> back()->with('success','CV added');
    }



}