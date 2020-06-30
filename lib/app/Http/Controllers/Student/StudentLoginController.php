<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class StudentLoginController extends Controller
{
    //
    public function getLogin(){
        return view('backend.login');
    }
    public function postLogin(Request $request){
        if(Auth::guard('student')->attempt(['email'=> $request->email, 'password'=> $request->password])){
            return redirect()->intended('/');
            //dd('thanhcong');
        }else{
            return back()->withInput()->with('error','wrong password or email!!!');
        }
    }
}
