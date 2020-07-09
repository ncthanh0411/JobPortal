<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Jobs;
use App\Categories;
use App\User;
use DB;
use Auth;
use App\Manage_apply;

class CateController extends Controller
{
    
    //Get categories
    public function getCate($name)
    {
        $job = DB::table('jobs')->join('company_users', 'jobs.company_id', '=', 'company_users.id_com')
        ->join('categories', 'jobs.categories_id', '=', 'categories.id_cate')
        ->where('name', $name)
        ->orderBy('id_job','desc')->get();
        $categories = Categories::all();
        
        return view('jobs.index', compact('job','categories'));
    }

    public function search(Request $request){
        $search = $request->get('search');
        
        $job = DB::table('jobs')->join('company_users', 'jobs.company_id', '=', 'company_users.id_com')
        ->join('categories', 'jobs.categories_id', '=', 'categories.id_cate')
        ->where('title', 'like','%'.$search.'%')
        ->orderBy('id_job','desc')->get();

        $categories = Categories::all();
        
        return view('jobs.index', compact('job','categories'));
    }

}