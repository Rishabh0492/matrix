<?php

namespace App;
use File;
use Storage;
use Illuminate\Database\Eloquent\Model;
class Staff extends Model
{
   protected $fillable = ['name','gender','department','image'];

   	public function details()
   	{
		return $this->hasOne('App\StaffDetail');   		
   	}
   public function saveData($data)
   {
   	    	$newImageName="";
		$folderPath = 'staff_image/';
		if($data->hasFile('image')){

			$file=$data->file('image');
			$newImageName = rand().'_'.$file->getClientOriginalName();
			$file->move($folderPath, $newImageName);
		}

    	$staff = Staff::create([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'department' => $data['department'],
            'image'=>$newImageName
        ]);

        return $staff;


   }

   public function updateData($data)
   {
   	    $staff = Staff::find($data['id']);
        $staff->name = $data['name'];
        $staff->gender = $data['gender'];
        $staff->department = $data['department'];
        if($data->hasFile('image')){
			$file=$data->file('image');
			$newImageName = rand().'_'.$file->getClientOriginalName();
			$file->move($folderPath, $newImageName);
			$staff->image=$newImageName;
		}
        $staff->save();

   }

}
