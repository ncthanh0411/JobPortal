<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class ComHomeController extends Controller
{
    //
    public function getHome(){
        return view('backend.index');
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->intended('login');
    }
}
