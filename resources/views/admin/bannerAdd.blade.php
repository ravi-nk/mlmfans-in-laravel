@extends('layouts.admin_app')
@section('content') 
<div id="wrapper">

	

	<div class="main-content">
		<div class="row small-spacing">

		<div class="col-xs-9"></div>
            <div class="col-xs-2 mb-2" > <a href="/admin/bannerList" class="btn btn-default"><i class="fa fa-list"></i> List Banner Image</a></div>
            <div class="col-xs-1"></div>

			<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Add Banner</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form method="post" action="{{route('admin.bannerAdd')}}" enctype="multipart/form-data">
							@csrf	
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control" id="title" placeholder="Title" name="title">
							</div>
							<div class="form-group">
								<label for="desc" class="control-label">Description</label>
								
									<textarea class="form-control" id="desc" placeholder="Description" name="description"></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Image</label>
								<input type="file" id="exampleInputFile" name="image">
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