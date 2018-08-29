{!! Form::open(array('url' => 'show/update','id'=>'createForm','enctype="multipart/form-data"')) !!}
   {{ csrf_field() }}
Name<br>
<input type="text" name="name" value="{{$staff->name}}"><br>
<input type="hidden" name="id" value="{{$staff->id}}"><br>
				<br>
<label><b>Gender</b></label><br>
 <input type="radio" name="gender" @if($staff->gender=='male') checked="checked" @endif value="male"> Male<br>
  <input type="radio" name="gender"@if($staff->gender=='female') checked="checked" @endif value="female"> Female<br>
  <br>

 Department<br> <input type="text" name="department" value="{{$staff->department}}"><br>
<p>
<label>Select image to upload:<br>
<input type="file" name="image" id="image" value="">
<img src="staff_image/{{$staff->image}}">
</label>
</p>
<br>
<input type="hidden" name="staff_detail_id" value="{{$staff->details->id}}"><br>
<label>Country</label><br>
<input type="text" name="country" value="{{$staff->details->country}}"><br>
<label>Salary</label><br>
<input type="text" name="salary" value="{{$staff->details->salary}}">
<p><button>Update</button></p>

{!! Form::close() !!}
