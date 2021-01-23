@extends('layouts.admin_app')
@section('content') 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.2.0/css/bootstrap-colorpicker.css">


<div id="wrapper">

	<div class="main-content">
		<div class="row small-spacing">

			<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Add Package</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form method="post" action="{{route('admin.storePackage')}}" >
                            @csrf	
                       
                            			
							<div class="form-group">
								<label for="name">Package Name</label>
								<input type="text" class="form-control" id="name" placeholder="Package Name" name="name">
                            </div>
                            
                            <div class="form-group">
								<label for="amount">Amount</label>
								<input type="text" class="form-control" id="amount" placeholder="Amount" name="amount">
                            </div>
                            <div class="form-group">
                             
                                <label for="color">Colour</label>
								<input type="color" class="form-control" id="color" placeholder="Color" name="color" style="width:30%;">
                                
                            </div>

                            <div class="form-group">
								<label for="max_days">Max Days</label>
								<input type="number" class="form-control" id="max_days" placeholder="Max Days" name="max_days" min="1">
                            </div>
                            <div class="form-group">
								<label for="min_days">Min Days</label>
								<input type="number" class="form-control" id="min_days" placeholder="Min Days" name="min_days" min="1">
                            </div>
                            
                            <div class="form-group">
								<label for="max_ads">Max Ads</label>
								<input type="number" class="form-control" id="max_ads" placeholder="Max Ads" name="max_ads" min="1">
                            </div>

                            <div class="form-group">
								<label for="size">Size</label>
                                <select name="size" id="size" class="form-control">
                                    <option value="33.3%">33.3%</option>
                                    <option value="50%">50%</option>    
                                    <option value="100%">100%</option>
                                </select>       
							</div>
							
							<div class="form-group">
								<label for="currency">Currency</label>
                                <select name="currency" id="currency" class="form-control">
                                    <option value="₹">Rupee</option>
                                    <option value="$">Dollar</option>    
                                   
                                </select>       
                            </div>

							<div class="form-group">
								<label for="desc">Description</label>
								<textarea name="description" id="desc" class="form-control"></textarea>
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
