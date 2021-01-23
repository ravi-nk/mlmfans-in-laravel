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

            <div class="col-xs-9"></div>
            <div class="col-xs-2 mb-2" > <a href="/admin/bannerAdd" class="btn btn-default"><i class="fa fa-plus"></i> Add Banner Image</a></div>
            <div class="col-xs-1"></div>

			<div class="col-xs-12">
				<div class="box-content">
					<div class="table-responsive" data-pattern="priority-columns">
						<table id="tech-companies-1" class="table table-small-font table-bordered table-striped">
							<thead>
								<tr>
									<th data-priority="1">ID</th>
									<th data-priority="2">Image</th>
									<th data-priority="3">Title</th>
									<th data-priority="4">Description</th>
									<th data-priority="5">Status</th>
									<th data-priority="6">Action</th>
								</tr>
                            </thead>
                            @foreach ($allbanners as $b)
							<tbody>
								<tr>
									<td>{{$b->id}}</td>
                                    <td><img src="{{asset('uploads/banners')}}/{{$b->image}}" alt="" width="50"></td>
									<td>{{$b->title}}</td>
									<td>{{$b->description}}</td>
									
									<td><button  id="{{$b->id}}" data-status="{{$b->status}}" class="dot active" style=" @if($b->status == 1)background-color:green; @else background-color:red; @endif" ></button></td>
								
									
                                    <td><a href="/admin/bannerupdate/{{$b->id}}"><i class="fa fa-edit"></i></a>
                                  <a href="/admin/bannerdelete/{{$b->id}}">  <i class="fa fa-trash"></i></a></td>
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
		url:"{{route('admin.bannerStatus')}}",
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
@endsection
