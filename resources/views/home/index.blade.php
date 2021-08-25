@extends('layout.layout')
@section('title','Trang chủ')
@section('content')
    <div class="header_section">
        <div class="">
            <div class="container-fluid">
                <section class="slide-wrapper">
                    <div class="container-fluid">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-sm-2 padding_0">
                                            <p class="mens_taital">Men Shoes</p>
                                            <div class="page_no">0/2</div>
                                            <p class="mens_taital_2">Men Shoes</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="banner_taital">
                                                <h1 class="banner_text">New Running Shoes </h1>
                                                <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                                <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <button class="buy_bt">Buy Now</button>
                                                <button class="more_bt">
                                                    <a type="button" href="{{route('page_product',0)}}" >
                                                        See More
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="shoes_img"><img src="{{asset('public/home/img/running-shoes.png')}}"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-2 padding_0">
                                            <p class="mens_taital">Men Shoes</p>
                                            <div class="page_no">0/2</div>
                                            <p class="mens_taital_2">Men Shoes</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="banner_taital">
                                                <h1 class="banner_text">New Running Shoes </h1>
                                                <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                                <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <button class="buy_bt">Buy Now</button>

                                                <button class="more_bt">
                                                    <a type="button" href="{{route('page_product',0)}}" >
                                                        See More
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="shoes_img"><img src="{{asset('public/home/img/running-shoes.png')}}"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-2 padding_0">
                                            <p class="mens_taital">Men Shoes</p>
                                            <div class="page_no">0/2</div>
                                            <p class="mens_taital_2">Men Shoes</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="banner_taital">
                                                <h1 class="banner_text">New Running Shoes </h1>
                                                <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                                <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <button class="buy_bt">Buy Now</button>
                                                <button class="more_bt">
                                                    <a type="button" href="{{route('page_product',0)}}" >
                                                        See More
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="shoes_img"><img src="{{asset('public/home/img/running-shoes.png')}}"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-2 padding_0">
                                            <p class="mens_taital">Men Shoes</p>
                                            <div class="page_no">0/2</div>
                                            <p class="mens_taital_2">Men Shoes</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="banner_taital">
                                                <h1 class="banner_text">New Running Shoes </h1>
                                                <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                                <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <button class="buy_bt">Buy Now</button>
                                                <button class="more_bt">
                                                    <a type="button" href="{{route('page_product',0)}}" >
                                                        See More
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="shoes_img"><img src="{{asset('public/home/img/running-shoes.png')}}"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<div class="layout_padding collection_section">
    <div class="container">
        <h1 class="new_text"><strong>New Collection</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        <div class="collection_section_2">
            <div class="row">
                @foreach($product as $products)
                    <div class="col-md-6">
                        <div class="about-img">
                            <button class="new_bt">New</button>
                            <div class="shoes-img">
                                @foreach((array)json_decode($products->product_image, true) as $image)
                                    <a href="{{route('product_detail',$products->id)}}">
                                        <img src="{{asset('public/home/img/'.$image)}}" alt="">
                                    </a>
                                    @break
                                @endforeach

                            </div>
                            <p class="sport_text">{{$products -> product_name}}</p>
                            <div class="dolar_text">
                                <strong style="color: #f12a47;">{{number_format($products->product_price)}} </strong>
                            </div>
                            <div class="star_icon">
                                <ul>
                                    <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                    <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                    <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                    <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                    <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                </ul>
                            </div>
                        </div>
                        {{--                    <a class="btn btn-danger btn-lg" href="{{ url('product-detail') }}" role="button" style="margin-top: 10px;"> See More</a>--}}
                        {{-- <button class="seemore_bt">See More</button> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="collection_section">
    <div class="container">
        <h1 class="new_text"><strong>Racing Boots</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    </div>
</div>
<div class="collectipn_section_3 layuot_padding">
    <div class="container">
        <div class="racing_shoes">
            <div class="row">
                <div class="col-md-8">
                    <div class="shoes-img3"><img src="{{asset('public/home/img/shoes-img3.png')}}"></div>
                </div>
                <div class="col-md-4">
                    <div class="sale_text"><strong>Sale <br><span style="color: #0a0506;">JOGING</span> <br>SHOES</strong></div>
                    <div class="number_text"><strong>$ <span style="color: #0a0506">100</span></strong></div>
                    <a class="btn btn-danger btn-lg" href="{{ url('product-detail') }}" role="button" style="margin-top: 10px;"> See More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="collection_section layout_padding">
    <div class="container">
        <h1 class="new_text"><strong>New Arrivals Products</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    </div>
</div>
<!-- new collection section end -->
<!-- New Arrivals section start -->
<div class="layout_padding gallery_section">
    <div class="container">
        <div class="row">
            @foreach($product as $products)
                <div class="col-sm-4">
                    <div class="best_shoes">
                        <p class="best_text"><a href="{{ url('product-detail') }}" style="color: red;">{{$products->product_name}}</a> </p>
                        <div class="shoes_icon">
                            @foreach((array)json_decode($products->product_image, true) as $image)
                                <a href="{{route('product_detail',$products->id)}}">
                                    <img src="{{asset('public/home/img/'.$image)}}" alt="">
                                </a>
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
            @endforeach
        </div>
        <div class="buy_now_bt"><a class="btn btn-dark btn-lg" href="{{route('page_product',0)}}" role="button" style="margin-top: 10px;"> See More</a>
        </div>
    </div>
</div>
<div class="layout_padding contact_section">
    <div class="container">
        <h1 class="new_text"><strong>Contact Now</strong></h1>
    </div>
    <div class="container-fluid ram">
        <div class="row">
            <div class="col-md-6">
                <div class="email_box">
                    <div class="input_main">
                        <div class="container">
                            <form action="/action_page.php">
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Name" name="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Phone Numbar" name="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Email" name="Email">
                                </div>

                                <div class="form-group">
                                    <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="send_btn">
                            <button class="main_bt">Send</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="shop_banner">
                    <div class="our_shop">
                        <button class="out_shop_bt">Our Shop</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   <!-- New Arrivals section end -->
   <!-- contact section start -->
    <script>
        var msg = '{{Session::get('order_success')}}';
        var exist = '{{Session::has('order_success')}}';
        if (exist) {
            swal({
                title: "Đặt hàng thành công",
                text: "",
                type: "success",
                timer: 1000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
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
@endsection
