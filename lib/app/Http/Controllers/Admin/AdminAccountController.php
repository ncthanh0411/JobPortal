<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use Hash;
use DB;
use Mail;

class AdminAccountController extends Controller
{
    //

    public function getAccount(){
        $data['studentlist']= DB::table('students')->get();
        return view('admin.adminaccount',$data);

    }
    public function getCreateAccount(){
        return view('admin.addaccount');
    }
    public function postCreateAccount(Request $request){
        $this->validate($request,
            [
                'email'=>'required|email|unique:students,email',
                'password'=>'required|min:6|max:20',
                'studentname'=>'required',
                're_password'=>'required|same:password',
                'studentmajor'=>'required',
                
            ],
            [
                'email.required'=>'Please, enter your email.',
                'email.email'=>'Wrong email structure.',
                'email.unique'=>'email is already used.',
                'password.required'=>'Please, enter your password.',
                're_password.same'=>'Password is not similar.',
                'password.min'=>'Minimum of six characters for password required.',
                'studentmajor'=> 'Please, enter student major.',
                
            ]);
        $user= new Student;
        $user->name = $request->studentname;
        $user->email = $request->email;
        $user->password= Hash::make($request->password);
        $user->major= $request->studentmajor;
        $user->phone='';
        $user->CV='';
        $user->save();

        $data['info']= $request->all();
        $email= $request->email;
        $name= $request->studentname;
        
        Mail::send('admin.email',$data, function($message) use ($email,$name){
    		$message->from('jobportal.tdtu@gmail.com','JobPortal Admin');
    		$message->to($email,$name);
    		$message->cc('ltuanminh049@gmail.com','Tuan Minh');
    		$message->subject('confirm to active account for student in JobPortal');
    	});
    	//return redirect('complete');
    
        return redirect()->back()->with('thanhcong','Created and send successfully !!!');
        
    }
}
