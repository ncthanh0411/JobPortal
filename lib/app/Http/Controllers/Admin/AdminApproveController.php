<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs;
use App\Categories;
class AdminApproveController extends Controller
{
    //]
    public function getDetail($id){
        $data['listjobs']= Jobs::find($id);
        return view('admin.watchjob',$data); 
    }
}
