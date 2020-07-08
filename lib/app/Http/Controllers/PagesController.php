<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function index(){
        $com = User::all();
        return view('pages.index')->with('com1', $com);
    }

    public function about(){
        $title = 'Welcome to about!';
        return view('pages.about')->with('title',$title);
    }
    public function choose(){
       
        return view('backend.chooseuser');
    }


}
