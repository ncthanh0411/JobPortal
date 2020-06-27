<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class ComLoginController extends Controller
{
    //
    public function getLogin(){
        return view('backend.login');
    }
    public function postLogin(Request $request){
        //$arr= ['com_email'=> $request->username, 'com_pass'=> $request->password];
        if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password])){
            return redirect()->intended('admin/home');
        }else{
            return back()->withInput()->with('error','wrong password or email!!!');
        }
    }
    
}
