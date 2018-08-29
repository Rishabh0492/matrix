<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffDetail extends Model
{
	protected $fillable=['staff_id','country','salary'];
    public function saveDetails($staff_id ,$data)
    {
    $staff = StaffDetail::create([
            'staff_id' => $staff_id,
            'country' => $data['country'],
            'salary' => $data['salary'],
        ]);
    }

    public function updateDetails($data)
    {
    	$staff = StaffDetail::find($data->staff_detail_id);
        $staff->country = $data->country;
        $staff->salary = $data->salary;
        $staff->save();
        
    }
}
