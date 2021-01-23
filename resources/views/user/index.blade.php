@extends('layouts.site_app')
   
@section('content')
<!-- <main class="main"> -->
<style>
    .cat{
        font-size:10px;
        position: relative;
        top:5px;
        left: 20px;
    }
    .link{
        color:white;background:#337ab7; padding:5px; font-size:12px;
    }
</style>
			
			@if(!empty ($bannerAll))
				<div class="container-fluid">
					<div class="row">
						@if(!empty($bannerAll))
					@foreach ($bannerAll as $banner)
						<div class="col-md-12 mb-1">
							@if($banner->status == 1)
							<img class="owl-lazy slide-bg" src="{{ isset($banner->image) ? asset('uploads/banners/'.$banner->image) : '' }} " alt="slider image" style="width:100%;max-height:150px;">
						@endif
						</div>
						@endforeach
						@endif
					</div>
				</div>
				@endif

				@if(!empty ($topten))
				<div class="container-fluid">
				 <div class="row">
				 <div class="col-md-12 text-center">
				 	<h4 class="text-primary">TOP 10 SPONSOR</h4>
				 </div>
				 @if(!empty($topten))
				 @foreach ($topten as $top)
				 @if($top->is_admin != 1)
						<div class="col-md-1 col-3">
							<a href="#">
									<div class="itembox">
										<img src="{{ isset($top->img) ? asset('uploads/user/'.$top->img) : asset('uploads/dummyImg.png') }}" class="img-thumbnail" style="background-color:none; max-width:100px;">
										<h6 class="text-center">{{$top->name}}</h6> 
									</div> 
								</a>
						</div>
						@endif
						@endforeach
						@endif
					</div>
                </div>
				@endif

				{{-- sponsers section --}}
				{{-- <section style="background: #fff;">
					<div class="container">
						<div class="section-heading pt-3 pb-2">
							<h4 class="title-section text-uppercase text-center">Top Users</h4>
						</div>
						<div class="row text-center">
							@if(!empty($sponsers))
							@foreach($sponsers as $sponser)
											<div class="col-md-1 col-4">

											<a href="#"><article class="h-100">
											<figure class="itembox text-center">
												<img src="{{asset('uploads/user').'/'.$sponser->img}}" class="img-thumbnail rounded-circle" style="background-color:none;">
												<figcaption class="text-wrap">
													<h6 class="title">Groceries/Provisions</h6> 
												</figcaption>
											</figure> 
										</article></a>
								</div>
										@endforeach
										@endif
											
									</div>
					</div>
				</section> --}}
				{{-- end sponser section --}}

				<!-- animation section -->
	<div class="container-fluid">
    	<div class="row mt-3">
				@if(!empty ($postAll))
				@foreach ($postAll as $posts)

				<div class="col-md-6 mb-1">
							<div class="border border-dark rounded animate" >
								<div class="cat">
									<i class="fa fa-list pr-1"></i><span>{{$posts->subtitle}}</span>
								</div>  
								<h5 class="pl-3" style="font-size:20px;"><b>{{$posts->title}}</b></h5>
								<p style="font-size:15px;padding:0px 15px;text-size-adjust:100%;">{{$posts->description}}</p>
								<div style="border-top:1px solid #E6E9ED;"  >
								
									<div class="pt-2 pl-2 pb-2"  style="background-color:#F2F5F7"><a href=" {{$posts->url}}" class="link " target="_blank"><i class="fa fa-link"></i> CLICK HERE - Watch Video</a></div>
								</div>
							</div>
					</div>	
					<!-- <div class="col-md-6" >
						<div class="row border border-dark rounded animate">
							<div class="col-md-4">
								<img class="owl-lazy slide-bg pt-1" src="{{ isset($posts->image) ? asset('uploads/post/'.$posts->image) : '' }} " alt="slider image" style="width:100%; max-height:150px;">
							</div>
							<div class="col-md-8">
							<div style="float:right;">{{$posts->created_at}}</div>

								<div class="h4 mt-1">{{$posts->title}}</div>
								<div style="font-size:10px;">
									<i class="fa fa-list"></i><span> {{$posts->subtitle}} </span>
								</div> 
							</div>
							<div class="p-3">
								<p class="mt-1">{{$posts->description}}</p>
								<div style="border-top:1px solid #E6E9ED;"  >
									<div class="pt-2 pl-2 pb-2" >
										<a href=" {{$posts->url}}" class="link" target="_blank"><i class="fa fa-link"></i> CLICK HERE - Watch Video</a>
									</div>
								</div>
							</div>
							</div>
						</div> -->
					
					@endforeach
				@endif
				</div>
			</div>

@endsection