<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Staffs;
use App\Models\FacebookStaffs;
use App\Models\Departments;
use App\Models\StaffsJobs;
use DB;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['jobs'] 	     = StaffsJobs::all();
        $data['departments'] = Departments::all();

        $data['staffs'] = DB::table('staffs')
                            ->join('facebook_staffs', 'staffs.facebook_id', '=', 'facebook_staffs.facebook_id')
                            ->select('staffs.*', 'facebook_staffs.avatar')
                            ->get();
    	
    	return view('admin/registration/staff/show_all_staffs', $data);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
    }

    public function chooseViewDepartment(){
        $data['departments'] = Departments::all();
        return view('admin/registration/staff/choose_view_department')->with($data);
    }

    public function listStaffInDepartment($dept, Request $request){
        $data['currentDepartment'] = Departments::where('id', $dept)->first();
        $data['departments'] = Departments::all();
        $data['staffs'] = StaffsJobs::join('staffs', 'staffs_jobs.student_id', '=', 'staffs.student_id')
            ->join('facebook_staffs', 'staffs.facebook_id', '=', 'facebook_staffs.facebook_id')
            ->where('staffs_jobs.dept_id', '=', $dept)
            ->get();
        return view('admin/registration/staff/show_all_staffs_in_department')->with($data);
    }
}
