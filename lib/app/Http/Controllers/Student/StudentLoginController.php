<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class StudentLoginController extends Controller
{
    //
    public function getLogin(){
        return view('student.login');
    }
    public function postLogin(Request $request){
        if(Auth::guard('student')->attempt(['email'=> $request->email, 'password'=> $request->password])){
            $student_id= Auth::guard('student')->user()->id;
            return redirect()->intended('/');
        }else{
            return back()->withInput()->with('error','Wrong password or email !!!');
        }
    }
}
