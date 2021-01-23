@extends('layouts.site_app')
   
@section('content')


<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Login</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="row">

                <div class="col-md-3"></div>

					<div class="col-md-6">
						<div class="heading">
							<h2 class="title">LOGIN</h2>
						</div><!-- End .heading -->

						<form action="login" method="post">
                            @csrf
							<input type="email" class="form-control" name="email" placeholder="Email Address" required>
							<input type="password" class="form-control" name="password" placeholder="Password" required>

							<div class="form-footer">
								<button type="submit" class="btn btn-primary">LOGIN</button>
								<a href="#" class="forget-pass"> Forgot your password?</a>
							</div><!-- End .form-footer -->
						</form>
						<a href="register" class="forget-pass"> Register</a>
					</div><!-- End .col-md-6 -->

				</div><!-- End .row -->
			</div><!-- End .container -->

		</main>


@endsection
