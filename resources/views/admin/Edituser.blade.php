@extends('layouts.admin_app')
@section('content') 
<div id="wrapper">
    
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Edit Users</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form method="post" action="../useredit/{{$user->id}}" enctype="multipart/form-data">
							@csrf	
							<div class="form-group">
								<label for="title">Name</label>
								<input type="text" class="form-control" id="name" placeholder="User Name" name="name" value="{{$user->name}}">
							</div>
							<div class="form-group">
								<label for="title">Email</label>
								<input type="text" class="form-control" id="name" placeholder="User Email" name="email" value="{{$user->email}}">
							</div>
							<div class="form-group">
								<label for="title">Contact</label>
								<input type="text" class="form-control" id="mobile" placeholder="User Mobile" name="mobile" value="{{$user->mobile}}">
							</div>
						
							<div class="form-group">
								<label for="title">Address</label>
								<input type="text" class="form-control" id="address" placeholder="User Address" name="address" value="{{$user->address}}">
							</div>
							<div class="form-group">
								<label for="is_active">User Status</label>
								<select name="is_active" id="is_active" class="form-control">
									
								<option value="1" @if(isset($user->is_active) AND $user->is_active==1) selected @endif>Active</option>
								<option value="0" @if(isset($user->is_active) AND $user->is_active==0) selected @endif>InActive</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
            </div>
        </div>
    </div>
</div>
@endsection