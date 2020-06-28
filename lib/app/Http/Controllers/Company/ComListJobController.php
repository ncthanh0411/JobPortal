<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Jobs;
class ComListJobController extends Controller
{
    //
    public function getListJob(){
        $com_id = auth()->user()->id;
        $data = Jobs::where('company_id',$com_id)->get();
        return view('backend.listjobs')->with('data',$data);
    }

}
