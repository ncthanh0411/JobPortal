<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StudentHomeController extends Controller
{
    function getLogout(){
        Auth::guard('student')->logout();
        return redirect()->intended('/');
    }
}
