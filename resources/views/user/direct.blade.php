@extends('layouts.site_app')
   
@section('content')

<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Direct User</li>
					</ol>
				</div>
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th><b>ID</b></th>
										<th><b>Image</b></th>
										<th><b>Name</b></th>
										<th><b>Email</b></th>
										<th><b>Mobile</b></th>
										<th><b>Address</b></th>
									</tr>
								</thead>
								<tbody>
                                @if($results != '')
                                @foreach ($results as $d)
							<tbody>
								<tr>
									<td>{{$d->id}}</td>
                                    <td><img src="{{ isset($d->img) ? asset('uploads/user/'.$d->img) : asset('uploads/dummyImg.png') }} " alt="" width="50"></td>
									<td>{{$d->name}}</td>
									<td>{{$d->email}}</td>
									<td>{{$d->mobile}}</td>
									<td>{{$d->address}}</td>
                                   
                                </tr>     
                            </tbody>
                       
                            @endforeach
                            @endif
								</tbody>
							</table>


						</div>
					</div>
				</div>
			</div>

		</main>

        @endsection 