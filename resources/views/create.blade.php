
{!! Form::open(array('url' => '/store','id'=>'createForm')) !!}
   {{ csrf_field() }}
Name<br>
<input type="text" name="name"><br>
				<br>
<label><b>Gender</b></label><br>
 <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <br>

 Department<br> <input type="text" name="department">

<p><button>Submit</button></p>

{!! Form::close() !!}
