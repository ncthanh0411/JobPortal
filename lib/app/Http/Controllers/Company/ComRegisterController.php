<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Hash;

class ComRegisterController extends Controller
{
    //
    public function getRegister(){
        return view('backend.Register');
    }
    public function postRegister(Request $request){
        $this->validate($request,
            [
                'email'=>'required|email|unique:company_users,email',
                'password'=>'required|min:6|max:20',
                'username'=>'required',
                're_password'=>'required|same:password',
                'companyname'=>'required',
                'location'=>'required'
            ],
            [
                'email.required'=>'Please, enter your email',
                'email.email'=>'Wrong email structure',
                'email.unique'=>'email is already used',
                'password.required'=>'Please, enter your password',
                're_password.same'=>'Password is not similar',
                'password.min'=>'Minimum of six characters for password required',
                'companyname'=> 'Please, enter your companyname',
                'location'=> 'Please, enter your location'
            ]);
            $user= new User;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password= Hash::make($request->password);
            $user->companyname= $request->companyname;
            $user->location= $request->location;
            $user->phone='';
            $user->introduction='';
            $user->logo='';


            $user->save();

            return redirect()->back()->with('thanhcong','create successfull');



    }
}
