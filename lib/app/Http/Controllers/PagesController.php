<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Jobs;
use App\Categories;
use DB;
use Auth;
use App\Manage_apply;

class PagesController extends Controller
{
    public function index(){
        $com = User::all();
        $job = DB::table('jobs')->orderBy('id_job','desc')->join('company_users', 'jobs.company_id', '=', 'company_users.id_com')
        ->join('categories', 'jobs.categories_id', '=', 'categories.id_cate')->paginate(5);
        //return view('pages.index')->with('com1', $com);
        return view('pages.index', compact('job','com'));
    }

    public function about(){
        $title = 'Welcome to about!';
        return view('pages.about')->with('title',$title);
    }
    public function choose(){
       
        return view('backend.chooseuser');
    }


}
