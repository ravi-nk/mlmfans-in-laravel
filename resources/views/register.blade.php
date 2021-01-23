@extends('layouts.site_app')

@section('content')

<main class="main">
	<nav aria-label="breadcrumb" class="breadcrumb-nav">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
				<li class="breadcrumb-item active" aria-current="page">REGISTER</li>
			</ol>
		</div><!-- End .container -->
	</nav>

	<div class="container">
		<div class="row">


			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="heading">
					<h2 class="title">REGISTER</h2>
					@if(session()->has('error'))
					<div class="alert alert-danger">
						{{ session()->get('error') }}
					</div>
					@endif
				</div><!-- End .heading -->

				<form action="register" method="post" enctype="multipart/form-data">
					@csrf
					<input type="text" class="form-control" id="sponsorid" name="spid" placeholder="spid" required>
					<p class="spresult"> </p>
					<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control" name="name" placeholder="Name" required>
						</div>
						<div class="col-md-6">
							<input type="email" class="form-control" name="email" placeholder="Email Address" required>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control" name="mobile" placeholder="mobile">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="address" placeholder="address">
						</div>
					</div>
					<select class="form-control" id="sel1" name="is_showlist">
						<option>-Select List User-</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
					<input type="file" class="form-control" name="image" placeholder="choose image">

					<div class="row">
						<div class="col-md-6">
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
						<div class="col-md-6">
							<input type="password" class="form-control" name="cnf_password" placeholder="Confirm Password" required>
						</div>
					</div>
					<div class="form-footer">
						<button type="submit" class="btn btn-primary">REGSTER</button>
					</div>
				</form>
				<p>If User Already Registered <a href="login" class="forget-pass"> Login</a></p>

			</div><!-- End .col-md-6 -->

		</div><!-- End .row -->
	</div><!-- End .container -->

</main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type=text/javascript>
	$(document).ready(function() {
		$('#sponsorid').on('change', function() {
			var spval = $(this).val();
			$.ajax({
				type: "GET",
				url: "{{route('checkSponsor')}}",
				data: { id : spval},
				success: function(data) {
				if(data > 0) {
					$(".spresult").html('Valid Sponsor');
					$(".spresult").css('color', 'blue');
				} else {
					$(".spresult").html('Sponsor Not Valid');
					$(".spresult").css('color', 'red');
				}
					
				}
			});
		});
	});
</script>

@endsection