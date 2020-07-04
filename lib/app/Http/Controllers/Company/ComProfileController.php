<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class ComProfileController extends Controller
{
    //
    public function getComProfile(){
        $com_id= auth()->user()->id_com;
        $data['item']= User::find($com_id);
        return view('backend.companyprofile',$data);//->with(['com_id'=>$com_id]);
    }
    public function getEditComProfile($id){
        $data['profile']= User::find($id);
        return view('backend.editprofilecompany',$data);
        
    }

    public function postEditComProfile(Request $request,$id){
        $company = new User; 
       
        $arr['username']= $request->Username;
        $arr['companyname']=$request->Companyname;
        $arr['email']=$request->Email;
        $arr['phone']=$request->Phone;
        $arr['location']=$request->Location;
        
        /*
        if($request->hasFile('img')){
            $img= $request->img->getClientOriginalName();
            $arr['logo']= $img;
            $request->img->storeAs('avatar'.$img);
        }
        */
        if($request->hasFile('img')){
    		$img=$request->img->getClientOriginalName();
    		$arr['logo']= $img;
    		$request->img->storeAs('avatar',$img);
        }
        if($request->Introduction!=null){
            $arr['introduction']=$request->Introduction;
        }
        $company::where('id_com',$id)->update($arr);
        return redirect('company/profile');
    }
}
