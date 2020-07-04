<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs;
use App\Categories;
use DB;
class AdminApproveController extends Controller
{
    //]
    public function getDetail($id){
        //$data['listjobs']= Jobs::find($id);
        $data['joblist']= DB::table('jobs')->join('categories','jobs.categories_id','=','categories.id_cate')->where('id_job', $id)->get();
        return view('admin.watchjob',$data); 
    }

    public function postDetail(Request $request,$id){
        $app = new Jobs;
        $arr['Status']= 1;
        $app::where('id_job',$id)->update($arr);
        return redirect('admin/home');
    }
}
