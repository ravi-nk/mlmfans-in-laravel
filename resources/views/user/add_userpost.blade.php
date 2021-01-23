@extends('layouts.site_app')
   
@section('content')

<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Users Post</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="row">
            

                <div class="col-md-3"></div>

					<div class="col-md-6">
						<div class="heading">
							<h2 class="title">ADD USER POST</h2>
							@if(session()->has('error'))
								<div class="alert alert-danger">
									{{ session()->get('error') }}
								</div>
							@endif
						</div>

						<form action="{{route('user.storePost')}}" method="post" enctype="multipart/form-data">
							@csrf
							
								<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <div>
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Post Title" required>
                                    </div>
                               
                               
                            <div>
                                <label>Post Description</label>
                            <textarea class="form-control" id="desc" name="description" placeholder="Post Description" > </textarea>
                            <div>
                            <div>
                                <label>Image</label>
                            <input type="file" class="form-control" name="image" placeholder="Post Image">
                            <div>
                           
							<div class="form-footer">
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>

		</main>

@endsection
