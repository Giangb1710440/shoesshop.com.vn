@extends('layout.layout')
@section('title','Cừa Hàng')
@section('content')
<!-- New Arrivals section start -->
<div class="collection_text">
    @if($id == 0)
        Tất cả sản phẩm
    @else
        @foreach($cate as $cates)
            @if($cates->id == $id)
                {{$cates->category_name}}
            @endif
        @endforeach
    @endif
</div>

<div class="collection_section layout_padding">
    <div class="container">
        <h1 class="new_text"><strong>New Arrivals Products</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    </div>
</div>


    @if($id == 0)
        @foreach($product as $products)
            <div class="layout_padding gallery_section">
                <div class="container">
                    <div class="buy_now_bt">
                        <button class="buy_text">
                            @foreach($cate as $cates)
                                @if($cates->id == $products->category_id )
                                    {{ucwords($cates->category_name)}}

                                @endif
                            @endforeach
                        </button>
                    </div>
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
                                            <li><a class="btn btn-outline-danger" href="#">Add to cart</a></li>
                                        </ul>
                                    </div>
                                    <div class="right_part">
                                        <div class="shoes_price"><span style="color: black; font-size:20px;">{{number_format($products->product_price)}} VND</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        @foreach($product as $products)
            @if($products->category_id == $id)
                <div class="layout_padding gallery_section">
                    <div class="container">
                        <div class="buy_now_bt">
                            <button class="buy_text">
                                @foreach($cate as $cates)
                                    @if($cates->id == $products->category_id )
                                        {{ucwords($cates->category_name)}}

                                    @endif
                                @endforeach
                            </button>
                        </div>
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
                                                <li><a class="btn btn-outline-danger" href="{{route('addCard', $products->id) }}">Add to cart</a></li>
                                            </ul>
                                        </div>
                                        <div class="right_part">
                                            <div class="shoes_price"><span style="color: black; font-size:20px;">{{number_format($products->product_price)}} VND</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endif

<script>
    var msg = '{{Session::get('add_cart_success')}}';
    var exist = '{{Session::has('add_cart_success')}}';
    if (exist) {
        swal({
            title: "Đã thêm vào giỏ hàng",
            text: "",
            type: "success",
            timer: 1200,
            showConfirmButton: false,
            position: 'top-end',
        });
    }
</script>
<script>
    var msg = '{{Session::get('error_login')}}';
    var exist = '{{Session::has('error_login')}}';
    if (exist) {
        swal({
            title: "Hãy đăng nhập !",
            text: "",
            type: "success",
            timer: 1200,
            showConfirmButton: false,
            position: 'top-end',
        });
    }
</script>

   <!-- New Arrivals section end -->
@endsection
