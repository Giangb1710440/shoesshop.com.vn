@extends('layout.layout')
@section('title','Trang Sản Phẩm')
@section('content')

<div class="collection_text" >Cửa Hàng</div>
<div class="collection_section layout_padding">
    <div class="container">
        <h1 class="new_text"><strong>New Arrivals Products</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    </div>
</div>
<div class="layout_padding gallery_section" style="background-color: #333;">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="best_shoes">
                    <p class="best_text"><a href="{{ url('product-detail') }}" style="color: red;">Tên Sản Phẩm</a> </p>
                    <div class="shoes_icon">
                            <a href="#"><img src="{{asset('public/home/img/shoes-img7.png')}}"></a>
                         </div>
                    <div class="star_text">
                        <div class="left_part">
                            <ul>
                                <li><a class="btn btn-outline-danger" href="#"><i class="fa fa-shopping-cart"> Add to cart</i> </a></li>
                            </ul>
                        </div>
                        <div class="right_part">
                            <div class="shoes_price"><span style="color: black; font-size:16px;">500.000 VND/Đôi</span></div>
                        </div>
                    </div>
<<<<<<< HEAD
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="best_shoes">
                                <p class="best_text"><a href="{{ url('product-detail') }}" style="color: red;">{{ucwords($products->product_name)}}</a> </p>
                                <div class="shoes_icon">
                                    @foreach((array)json_decode($products->product_image, true) as $image)
                                        <a href="{{route('product_detail',$products->id)}}"><img src="{{asset('public/home/img/'.$image)}}" alt=""></a>
                                    @break
                                        {{--                                            <img  class="card-img-top" src="{{ \TCG\Voyager\Facades\Voyager::image($image) }}" alt="">--}}
                                    @endforeach
                                </div>
                                <div class="star_text">
                                    <div class="left_part">
                                        <ul>
                                            <li><a class="btn btn-outline-danger" href="{{route('product_detail',$products->id)}}">Xem chi tiết</a></li>
                                        </ul>
                                    </div>
                                    <div class="right_part">
                                        <div class="shoes_price"><span style="color: black; font-size:20px;">{{number_format($products->product_price)}} VND</span></div>
                                    </div>
                                </div>
                            </div>
=======
                </div>
            </div>
            <div class="col-sm-4">
                <div class="best_shoes">
                    <p class="best_text"><a href="{{ url('product-detail') }}" style="color: red;">Tên Sản Phẩm</a> </p>
                    <div class="shoes_icon">
                            <a href="#"><img src="{{asset('public/home/img/shoes-img7.png')}}"></a>
                         </div>
                    <div class="star_text">
                        <div class="left_part">
                            <ul>
                                <li><a class="btn btn-outline-danger" href="#"><i class="fa fa-shopping-cart"> Add to cart</i> </a></li>
                            </ul>
                        </div>
                        <div class="right_part">
                            <div class="shoes_price"><span style="color: black; font-size:16px;">500.000 VND/Đôi</span></div>
>>>>>>> 0373a41dcc156aae4a71ff4948b5bc95a331c280
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="best_shoes">
                    <p class="best_text"><a href="{{ url('product-detail') }}" style="color: red;">Tên Sản Phẩm</a> </p>
                    <div class="shoes_icon">
                            <a href="#"><img src="{{asset('public/home/img/shoes-img7.png')}}"></a>
                         </div>
                    <div class="star_text">
                        <div class="left_part">
                            <ul>
                                <li><a class="btn btn-outline-danger" href="#"><i class="fa fa-shopping-cart"> Add to cart</i> </a></li>
                            </ul>
                        </div>
<<<<<<< HEAD
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="best_shoes">
                                    <p class="best_text"><a href="{{ url('product-detail') }}" style="color: red;">{{ucwords($products->product_name)}}</a> </p>
                                    <div class="shoes_icon">
                                        @foreach((array)json_decode($products->product_image, true) as $image)
                                            <a href="{{route('product_detail',$products->id)}}"><img src="{{asset('public/home/img/'.$image)}}" alt=""></a>
                                            @break
                                        @endforeach
                                    </div>
                                    <div class="star_text">
                                        <div class="left_part">
                                            <ul>
                                                <li><a class="btn btn-outline-danger" href="{{route('product_detail',$products->id)}}">Xem chi tiết</a></li>
                                            </ul>
                                        </div>
                                        <div class="right_part">
                                            <div class="shoes_price"><span style="color: black; font-size:20px;">{{number_format($products->product_price)}} VND</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
=======
                        <div class="right_part">
                            <div class="shoes_price"><span style="color: black; font-size:16px;">500.000 VND/Đôi</span></div>
>>>>>>> 0373a41dcc156aae4a71ff4948b5bc95a331c280
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="best_shoes">
                    <p class="best_text"><a href="{{ url('product-detail') }}" style="color: red;">Tên Sản Phẩm</a> </p>
                    <div class="shoes_icon">
                            <a href="#"><img src="{{asset('public/home/img/shoes-img7.png')}}"></a>
                         </div>
                    <div class="star_text">
                        <div class="left_part">
                            <ul>
                                <li><a class="btn btn-outline-danger" href="#"><i class="fa fa-shopping-cart"> Add to cart</i> </a></li>
                            </ul>
                        </div>
                        <div class="right_part">
                            <div class="shoes_price"><span style="color: black; font-size:16px;">500.000 VND/Đôi</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection