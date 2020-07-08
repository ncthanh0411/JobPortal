<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\Categories;
use App\User;
use DB;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $jobss = Jobs::orderBy('title','desc')->get();
        
        $data['job'] = DB::table('jobs')->join('company_users', 'jobs.company_id', '=', 'company_users.id_com')
        ->join('categories', 'jobs.categories_id', '=', 'categories.id_cate')->get();
        $categories = Categories::all();
        return view('jobs.index', $data);
        
        //return view('jobs.index', compact('data','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $jobs = new Jobs([
           
            'title' => $request->get('name'),
            'Salary' => $request->get('price'),
            'Job_Description' => $request->get('description'),
            'Requirement' => $request->get('requirement'),
            'Expired_date' => $request->get('ex_date'),
            'company_id' => auth()->user()->id_com,
            'categories_id' => (int)$request->get('cate')
        ]);
        $jobs->save();
        return redirect() -> intended('company/listjob')->with('success','New Jobs added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['job'] = DB::table('jobs')->join('company_users', 'jobs.company_id', '=', 'company_users.id_com')
        ->join('categories', 'jobs.categories_id', '=', 'categories.id_cate')->where('id_job', $id)->get();
        return view('jobs.detail-job', $data);


        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $job_update = new Jobs;
        $jobs['title'] = $request->get('name');
        $jobs['Salary'] = $request->get('price');
        $jobs['Job_Description'] = $request->get('description');
        $jobs['Requirement'] = $request->get('requirement');
        $jobs['Expired_date'] = $request->get('ex_date');
        $jobs['company_id'] = auth()->user()->id_com;
        $jobs['categories_id'] = (int)$request->get('cate');
        $job_update::where('id_job',$id)->update($jobs);
        return redirect() -> intended('company/listjob')->with('success_update','Jobs updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $job = Jobs::find($id);
        $job->delete();
        return back();
    }
}
