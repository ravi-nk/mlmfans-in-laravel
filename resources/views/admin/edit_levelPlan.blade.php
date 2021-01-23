@extends('layouts.admin_app')
@section('content') 
<div id="wrapper">

	

	<div class="main-content">
		<div class="row small-spacing">

			<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Edit LevelPlan</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form method="post" action="../updatePlan/{{$plan->id}}" enctype="multipart/form-data">
							@csrf	
							<div class="form-group">
								<label for="level">Level</label>
								<input type="text" class="form-control" id="level" placeholder="Level" name="level" value="{{$plan->level}}">
							</div>
							<div class="form-group">
								<label for="percentage">Percentage</label>
								<input type="text" class="form-control" id="percentage" placeholder="Percentage" name="per" value="{{$plan->percentage}}">
							</div>
                            <div class="form-group">
								<label for="direct">Direct</label>
								<input type="text" class="form-control" id="direct" placeholder="Direct" name="direct" value="{{$plan->direct}}">
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