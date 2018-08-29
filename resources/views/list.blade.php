@extends('layouts.web')
@section('title', 'Add New Staff')
@section('content')

<div>
    <a class="btn btn-primary" href="/create">ADD</a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Staff List</div>

                <div class="panel-body">
                    <table class=".table-striped display" style="width:100%" id="staffDatatable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Department</th>
                                <th>Image</th>
                                <th>salary</th>
                                <th>country</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#staffDatatable').DataTable({
        processing: true,
        serverSide: true,
        searching:false,
        "ajax":{
                     "url": "/getData",
                     "type": "get",
                     "data":{ _token: "{{csrf_token()}}"}
                   },
           "columns": [
                { "data": "id" ,sortable:false},
                { "data": "name",sortable:false },
                { "data": "gender",sortable:false },
                { "data": "department",sortable:false},
                { "data": "image",sortable:false},
                { "data": "salary",sortable:false},
                { "data": "country",sortable:false},
                { "data": "action",sortable:false},

            ]        
    });
});
</script>
@endsection