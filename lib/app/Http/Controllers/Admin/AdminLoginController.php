<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    //
    public function getLogin(){
        return view('backend.login');
    }
    public function postLogin(Request $request){
        if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=> $request->password])){
            //return redirect()->intended('admin/dashboard');
            dd("thanhcong");
        }else{
            return back()->withInput()->with('error','wrong password or email!!!');
        }
    }
}
