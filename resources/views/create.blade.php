@extends('layouts.web')
@section('title', 'Add New Staff')
@section('content')
{!! Form::open(array('url' => '/store','id'=>'createForm','class'=>'form-signin','enctype="multipart/form-data"')) !!}
   {{ csrf_field() }}
   <div class="container">
   	<div class="row">
   		<div class="col-lg-6 col-lg-offset-3">
   			
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Add New Staff</h1>
      </div>

      <div class="form-label-group">
        <input type="text" name="name" class="form-control" placeholder="Name" required autofocus>
        <label for="inputEmail">Name</label>
      </div>

      <div class="form-label-group">
        <input type="text" name="department" class="form-control">
        <label for="department"> Department</label>
      </div>
      <div class="form-label-group">
    <label><b>Gender</b></label><br>
  <input type="radio" name="gender"value="male" > Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
</div>
<div class="form-label-group">
        <input type="text" name="country" class="form-control" placeholder="country" required autofocus>
        <label for="country">country</label>
      </div>
<div class="form-label-group">
        <input type="text" name="salary" class="form-control" placeholder="Salary" required autofocus>
        <label for="inputEmail">Salary</label>
      </div>
<div class="form-label-group"><br>
<input type="file" name="image" id="image" value="">
	<label>Select image to upload:</label>
</div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>
   		</div>
   	</div>
   </div>
{!! Form::close() !!}
@endsection