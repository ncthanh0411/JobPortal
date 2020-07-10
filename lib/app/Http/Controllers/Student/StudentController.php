<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use Auth;
use Hash;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProfile()
    {   
        
        $student_id= Auth::guard('student')->user()->id_stu;
        $student = Student::find($student_id);
        return view('student.profile')->with('st',$student);
    }

    public function getPwd()
    {   
        
        $student_id= Auth::guard('student')->user()->id_stu;
        $student = Student::find($student_id);
        return view('student.changePwd')->with('st',$student);
    }
    public function getWishlist()
    {   
        
        $student_id= Auth::guard('student')->user()->id_stu;
        $student = Student::find($student_id);
        return view('student.Wishlist')->with('st',$student);
    }
    public function getCv()
    {   
        
        $student_id= Auth::guard('student')->user()->id_stu;
        $student = Student::find($student_id);
        return view('student.Cv')->with('st',$student);
    }

    public function postCv( Request $request, $id){
        $student = new Student;
        if($request->hasFile('cv')){
    		$cv=$request->cv->getClientOriginalName();
    		$arr['cv']= $cv;
    		$request->cv->storeAs('cv',$cv);
        }
        $student::where('id_stu',$id)->update($arr);
        return redirect() -> intended('student/Cv')->with('success','Profile updated');

    }

    public function changePwd(Request $request){
        if(!(Hash::check($request->get('currentpass'),Auth::guard('student')->user()->password))){
            return back()->with('error','Your current password does not match with what you provided');
        }
        if(strcmp($request->get('currentpass'),$request->get('newpass')) == 0){
            return back()->with('error','Your current password cannot be same with the new password');
        }
        $request->validate([
            'currentpass' =>'required',
            'newpass' => 'required',
            'verifypass' => 'required|same:newpass',

        ]);
        $user = Auth::guard('student')->user();
        $user->password = Hash::make($request->get('newpass'));

        $user->save();
        return back()->with('message','Password changed successfully');

        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = new Student;
        if($request->get('first_name')){
            $arr['name']= $request->get('first_name');
        }

        if($request->get('phone')){
            $arr['phone']= $request->get('phone');
        }

        // if($request->hasFile('cv')){
    	// 	$cv=$request->cv->getClientOriginalName();
    	// 	$arr['cv']= $cv;
    	// 	$request->cv->storeAs('cv',$cv);
        // }
        $student::where('id_stu',$id)->update($arr);
        return redirect() -> intended('student/profile')->with('success','Profile updated');
    }


}
