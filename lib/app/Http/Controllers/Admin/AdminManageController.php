<?php



namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs;
use App\Categories;
use App\User;
use DB;
use Auth;
use App\Manage_apply;
class AdminManageController extends Controller
{
    public function geManage(){
        // $com_id = auth()->user()->id_com;
        $CV = DB::table('manage_applies')->join('jobs', 'manage_applies.jobs_id', '=', 'jobs.id_job')
        ->join('company_users', 'jobs.company_id', '=', 'company_users.id_com')
        ->join('students', 'manage_applies.student_id', '=', 'students.id_stu')
        ->orderBy('id_apply','desc')->get();
        return view('admin.manage_apply') -> with('data',$CV);
    }
}
