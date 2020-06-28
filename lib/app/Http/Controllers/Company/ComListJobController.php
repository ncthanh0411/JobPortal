<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class ComListJobController extends Controller
{
    //
    public function getListJob(){
        return view('backend.listjobs');
    }

}
