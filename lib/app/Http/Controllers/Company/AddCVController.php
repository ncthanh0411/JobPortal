<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs;
use App\Categories;
use App\User;
use DB;
use Auth;
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

    public function companyIndex(){
        $com_id = auth()->user()->id_com;
        $CV = DB::table('manage_applies')->join('jobs', 'manage_applies.jobs_id', '=', 'jobs.id_job')
        ->join('company_users', 'jobs.company_id', '=', 'company_users.id_com')
        ->join('students', 'manage_applies.student_id', '=', 'students.id_stu')
        ->where('id_com', $com_id)->orderBy('id_apply','desc')->get();
        return view('backend.Cvcommanage') -> with('data',$CV);
    }
    public function getStudent($id){
        $com_id = auth()->user()->id_com;
        $CV = DB::table('manage_applies')->join('jobs', 'manage_applies.jobs_id', '=', 'jobs.id_job')
        ->join('company_users', 'jobs.company_id', '=', 'company_users.id_com')
        ->join('students', 'manage_applies.student_id', '=', 'students.id_stu')
        ->where([['id_com','=' ,$com_id] , ['id_stu', '=', $id] ])->first();


        return view('backend.Studentcv')-> with('data',$CV);
    }



}