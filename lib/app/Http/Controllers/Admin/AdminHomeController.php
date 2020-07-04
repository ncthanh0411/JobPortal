<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Jobs;
use App\Categories;
use Auth;
class AdminHomeController extends Controller
{
    //
    public function getHome(){
        return view('admin.adminhome');
        
    }
    public function getJob(){
        $data['joblist']= DB::table('jobs')->join('categories','jobs.categories_id','=','categories.id_cate')->get();
        return view('admin.adminhome',$data);
    }
    public function getLogout(){
        Auth::guard('admin')->logout();
        return redirect()->intended('/');
    }
}
