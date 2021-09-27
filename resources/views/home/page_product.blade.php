@extends('layout.layout')
@section('title','Cừa Hàng')
@section('content')

<link rel="stylesheet" href="{{ url('public/home/css/product.css') }}">
<!-- New Arrivals section start -->
<div class="collection_text">
        Tất cả sản phẩm
</div>

<div class="collection_section layout_padding">
    <div class="container">
        <h1 class="new_text"><strong>New Arrivals Products</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    </div>
</div>
    @if($id == 0)
        @foreach($product as $products)
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
        @endforeach
    @endif            
                    <div class="row">
                            <div class="card">
                                <div class="imgBx">
                                    <img src="{{ asset('public/uploads/shoes-img9.png') }}">
                                    <h2>Nike Shoes</h2>
                                </div>
                                <div class="content">
                                    <div class="size">
                                        <h3>Size: </h3>
                                            <span>7</span>
                                            <span>8</span>
                                            <span>9</span>
                                            <span>10</span>
                                    </div>
                                    <div class="color">
                                        <h3>Color: </h3>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                    </div>
                                    <a href="#">Buy Now</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="imgBx">
                                    <img src="{{ asset('public/uploads/shoes-img9.png') }}">
                                    <h2>Nike Shoes</h2>
                                </div>
                                <div class="content">
                                    <div class="size">
                                        <h3>Size: </h3>
                                            <span>7</span>
                                            <span>8</span>
                                            <span>9</span>
                                            <span>10</span>
                                    </div>
                                    <div class="color">
                                        <h3>Color: </h3>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                    </div>
                                    <a href="#">Buy Now</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="imgBx">
                                    <img src="{{ asset('public/uploads/shoes-img9.png') }}">
                                    <h2>Nike Shoes</h2>
                                </div>
                                <div class="content">
                                    <div class="size">
                                        <h3>Size: </h3>
                                            <span>7</span>
                                            <span>8</span>
                                            <span>9</span>
                                            <span>10</span>
                                    </div>
                                    <div class="color">
                                        <h3>Color: </h3>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                    </div>
                                    <a href="#">Buy Now</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="imgBx">
                                    <img src="{{ asset('public/uploads/shoes-img9.png') }}">
                                    <h2>Nike Shoes</h2>
                                </div>
                                <div class="content">
                                    <div class="size">
                                        <h3>Size: </h3>
                                            <span>7</span>
                                            <span>8</span>
                                            <span>9</span>
                                            <span>10</span>
                                    </div>
                                    <div class="color">
                                        <h3>Color: </h3>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                    </div>
                                    <a href="#">Buy Now</a>
                                </div>
                            </div>
                </div>
            </div>

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
