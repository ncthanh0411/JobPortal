<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use Auth;
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
