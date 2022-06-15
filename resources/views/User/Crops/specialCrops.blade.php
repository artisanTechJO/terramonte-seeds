@extends('layouts.User.userLayout')
@section('head')
    <style>
        .product-container
        {
            margin-top:20px;
        }
        .product-item{
            margin-top:20px;
        }
        .product-item .product-thumb img{
            width:100%;
            height:200px;
            background-size: cover;
            background-position: center;

        }
        @media(min-width:300px) and (max-width:991px){
            .product-item .product-thumb img{
                height:150px;
            }
        }
    </style>
@stop
@section('content')
    <div class="container product-container">
        <div class="header-container">
            @if(count($products) > 0)
                <h1 class="text-center">Special Crops</h1>
                <div class="row" style="margin-bottom: 50px">
                    @foreach($products as $product)
                        <div class="col-6 col-md-3">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <img src="{{$product->getMedia('main_image_seed')->first()->getUrl()}}" style="height: 250px; width: 250px " alt="product">
                                    <span class="batch sale">Special</span>
                                </div>
                                <div class="product-content">
                                    <h6><a href="/products/{{$product->id}}"

                                            class="product-title">{{$product->name}}</a></h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{$products->links()}}
            @else
                <div class="alert alert-primary" style="background: #6BD640;color:#fff;border:1px solid #fff;">
                    <p class="text-center">Coming soon</p>
                </div>
            @endif
        </div>
    </div>
@stop
