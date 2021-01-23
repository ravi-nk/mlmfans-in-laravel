@extends('layouts.site_app')
   
@section('content')

<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">User List</li>
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
										<th><b>Action</b></th>
									</tr>
								</thead>
								<tbody>

                                @foreach ($activeuser as $u)
							<tbody>
								<tr>
									<td>{{$u->id}}</td>
                                    <td><img src="{{ isset($u->img) ? asset('uploads/user/'.$u->img) : asset('uploads/dummyImg.png') }} " alt="" width="50"></td>
									<td>{{$u->name}}</td>
									<td>{{$u->email}}</td>
									<td>{{$u->mobile}}</td>
									<td>{{$u->address}}</td>
                                    <td><a href="../user/profile/{{$u->id}}" class="btn btn-primary btn-sm">Contact <br> Member</a></td>
                                   
                                </tr>     
                            </tbody>
                       
                            @endforeach
								</tbody>
							</table>

                            <nav class="toolbox toolbox-pagination">
                                <div class="toolbox-item toolbox-show">
                                    <label>Show:</label>

                                    <div class="select-custom">
                                        <select name="count" class="form-control">
                                            <option value="12">12</option>
                                            <option value="24">24</option>
                                            <option value="36">36</option>
                                        </select>
                                    </div>
                                </div>
								{{$activeuser->links()}}
						</nav>

						</div>
					</div>
				</div>
			</div>

		</main>

        @endsection 