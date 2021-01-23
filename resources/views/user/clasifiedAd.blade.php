@extends('layouts.site_app')

@section('content')

<style>
    .corner {
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 0;
        z-index: 9999;
    }

    .corner-bg {
        position: absolute;
        top: 0;
        left: 10px;
        width: 0;
        height: 0;
        border-top: 80px solid #08c;
        border-right: 80px solid transparent;
    }

    .corner-span {
        position: absolute;
        top: 17px;
        left: 10px;
        text-align: center;
        font-size: 15px;
        font-family: arial;
        transform: rotate(-43deg);
        display: block;
        color: white;
    }
    .gridstyle {
        border: 1px solid #0088cc;
        background-color: #f4f4f4;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="product-single-gallery popup-gallery">
                <div class="row">

                    <div class="col-md-6 product-item">
                        <div class="inner gridstyle">
                            <!-- <img src="assets/images/products/zoom/product-1.jpg" data-zoom-image="assets/images/products/zoom/product-1-big.jpg" alt="product name"> -->
                            <div class="corner">
                                <div class="corner-bg"></div>
                                <div class="corner-span">Pay</div>
                            </div>
                            <h1 class="text-danger text-center">$10</h1>
                            <div class="text-center p-2">
                                <!-- <a href="{{route('user.adsPackage')}}"> -->
                                    <button class="btn btn-lg btn-outline-primary"> Pay Now </button>
                                <!-- </a> -->
                            </div>

                            <span class="prod-full-screen">
                                <i class="icon-plus"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 product-item">
                        <div class="inner gridstyle">
                            <!-- <img src="assets/images/products/zoom/product-2.jpg" data-zoom-image="assets/images/products/zoom/product-2-big.jpg" alt="product name"> -->
                            <div class="corner">
                                <div class="corner-bg"></div>
                                <div class="corner-span">Pay</div>
                            </div>
                            <h1 class="text-danger text-center">$10</h1>
                            <div class="text-center p-2">
                                <!-- <a href="{{route('user.adsPackage')}}"> -->
                                    <button class="btn btn-lg btn-outline-primary"> Pay Now </button>
                                <!-- </a> -->
                            </div>

                            <span class="prod-full-screen">
                                <i class="icon-plus"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6 product-item mt-1">
                        <div class="inner gridstyle">
                            <div class="corner">
                                <div class="corner-bg"></div>
                                <div class="corner-span">Pay</div>
                            </div>
                            <h1 class="text-danger text-center">$10</h1>
                            <div class="text-center p-2">
                                <!-- <a href="{{route('user.adsPackage')}}"> -->
                                    <button class="btn btn-lg btn-outline-primary"> Pay Now </button>
                                <!-- </a> -->
                            </div>

                            <span class="prod-full-screen">
                                <i class="icon-plus"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 product-item mt-1 mb-3">
                        <div class="inner gridstyle">
                            <div class="corner">
                                <div class="corner-bg"></div>
                                <div class="corner-span">Pay</div>
                            </div>
                            <h1 class="text-danger text-center">$10</h1>
                            <div class="text-center p-2">
                                <!-- <a href="{{route('user.adsPackage')}}"> -->
                                    <button class="btn btn-lg btn-outline-primary"> Pay Now </button>
                                <!-- </a> -->
                            </div>

                            <span class="prod-full-screen">
                                <i class="icon-plus"></i>
                            </span>
                        </div>
                    </div>
@foreach($ads as $ad)

 {{-- <h4 class="text-center"> {{$ad->name}}</h4> --}}

<div class="product-item @if($ad->size == '33.3%') col-md-4 @elseif($ad->size == '50%') col-md-6 @else col-md-12 @endif">
    <div class="inner gridstyle">
        <!-- <img src="assets/images/products/zoom/product-1.jpg" data-zoom-image="assets/images/products/zoom/product-1-big.jpg" alt="product name"> -->
        <div class="corner">
            <div class="corner-bg" style="border-top-color:{{$ad->color}}"></div>
            <div class="corner-span">{{$ad->name}}</div>
        </div>
        <h1 class="text-danger text-center">{{$ad->currency.$ad->amount}}</h1>
        <div class="text-center p-2">
            <!-- <a href="{{route('user.adsPackage')}}"> -->
                <button class="btn btn-lg btn-outline-primary"> Pay Now </button>
            <!-- </a> -->
        </div>

        <span class="prod-full-screen">
            <i class="icon-plus"></i>
        </span>
    </div>
</div>



@endforeach


                    

                </div><!-- End .row -->
            </div><!-- End .product-single-gallery -->
        </div>

    </div>
</div>


@endsection