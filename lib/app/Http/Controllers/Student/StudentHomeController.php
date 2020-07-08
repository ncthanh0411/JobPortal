<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use DB;

class StudentHomeController extends Controller
{
    function getLogout(){
        Auth::guard('student')->logout();
        return redirect()->intended('/');
    }
    function getCompany($id){
        $data['company'] = DB::table('company_users')->where('id_com', $id)->get();
        return view('jobs.company', $data);
    }
}
