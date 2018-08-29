<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use yajra\Datatables\Datatables;
use App\Staff;
use App\StaffDetail;
use File;
use Storage;
use DB;



class StaffController extends Controller
{
    //


         public function __construct()
      {
          $this->staff  = new Staff();
          $this->StaffDetail  = new StaffDetail();

      }

    public function getData()
    {
    $staff= DB::table('staff')
    ->join('staff_details', 'staff_details.staff_id', '=', 'staff.id')
    ->select('staff.id','staff.name','image','staff.department','staff_details.salary','staff_details.country','staff.gender');
    return Datatables::of($staff)
    ->addColumn('image', function($staff){
     return "<img width='60'  height='60' src='staff_image/" . $staff->image . "' ></a>";
            })

    ->addColumn('action', function($staff){
                 return "<a href='show/" . $staff->id . "/edit' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'></i> Edit</a><a href='show/delete/" . $staff->id . "' class='btn btn-xs btn-danger'><i class='glyphicon glyphicon-delete'></i> Delete</a>";
            })->rawColumns(['image','action'])->make(true);

    }
    public function show()
    {

    return view('list');

    }
//
    public function create()
    {
      return view('create');
    }

    public function store(Request $data)
    {
    	$staff = $this->staff->saveData($data);
    	$this->StaffDetail->saveDetails($staff->id,$data);
        return redirect('/show');
    } 
    public function edit($id)
    {
    	$staff=Staff::find($id);
    	return view('edit', compact('staff'));
    }

    public function update(Request $request)
    {
    	$this->staff->updateData($request);
    	$this->StaffDetail->updateDetails($request);
        return redirect('/show');

    }
    public function destroy($id)
    {
    	$staff = Staff::find($id)	;
         $staff->delete();
         return redirect()->back();
    }
}
