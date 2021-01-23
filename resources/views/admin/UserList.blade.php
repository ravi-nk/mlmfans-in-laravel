@extends('layouts.admin_app')
@section('content')
<style>
	.dot {
	  height: 15px;
	  width: 15px;
	  border-radius: 50%;
	  border: none;
	  display: inline-block;
	}
	</style>
<div id="wrapper">

    
	<div class="main-content">
		<div class="row small-spacing">
            <!-- <div class="col-xs-9"></div>
            <div class="col-xs-2 mb-2" > <a href="" class="btn btn-default"><i class="fa fa-plus"></i> Add New News</a></div>
            <div class="col-xs-1"></div> -->
			<div class="col-xs-12">
				<div class="box-content">
					<div class="table-responsive" data-pattern="priority-columns">
						<table id="tech-companies-1" class="table table-small-font table-bordered table-striped">
							<thead>
								<tr>
									<th data-priority="1">ID</th>
									<th data-priority="1">UID</th>
									<th data-priority="2">Name</th>
									<th data-priority="3">Email</th>
									<th data-priority="4">Contact</th>
									<th data-priority="5">Address</th>
									<th data-priority="6">Status</th>
									<th data-priority="7">Action</th>
								</tr>
                            </thead>
                            
                            @foreach ($alluser as $user)
                                
                           
							<tbody>
                            
								<tr>
									<td>{{$user->id}}</td>
									<td>{{$user->UID}}</td>
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->mobile}}</td>
									<td>{{$user->address}}</td>
									<td><button  id="{{$user->id}}" data-status="{{$user->is_active}}" class="dot active" style=" @if($user->is_active == 1)background-color:green; @else background-color:red; @endif" ></button></td>
                                    <td><a href="/admin/edit/{{$user->id}}"><i class="fa fa-edit"></i></a>
                                  <a href="/admin/userdelete/{{$user->id}}">  <i class="fa fa-trash"></i></a></td>
                                </tr>     
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	
$(document).ready(function(){
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(".active").click(function(){
var id =$(this).attr("id");
var status = $(this).data('status');

if(status == 1){
	status = 0;
}
else{
	status = 1;
}


	$.ajax({
		url:"{{route('admin.userStatus')}}",
		method:"post",
		data:{id:id,status:status},
		cache:false,
		success:function(data){
	   location.reload();
		}
	})
})
	});
	</script>