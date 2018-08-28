<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use yajra\Datatables\Datatables;
use App\Staff;
use view;


class StaffController extends Controller
{
    //
    public function show()
    {
    return view('list');

    }
//
    public function create(Request $data)
    {
      Staff::create([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'department' => $data['department'],
        ]);
             	return view('create');
    }
}
