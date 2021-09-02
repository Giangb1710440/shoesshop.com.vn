@extends('layout.layout')
@section('title','Detail-product')
@section('content')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

<style>
    .sidebar-title {
    color: #db5660;
    font-size: 25px;
    margin-bottom: 30px;
    text-transform: uppercase;
    }

    .single-sidebar {
    margin-bottom: 50px;
    }
    input[type="text"], input[type="password"], input[type="email"], textarea {
        border: 1px solid #ddd;
        padding: 10px;
    }
    input[type="submit"], button[type=submit] {
        background: none repeat scroll 0 0 #db5660;
        border: medium none;
        color: #fff;
        padding: 11px 20px;
        text-transform: uppercase;
    }
    input[type="submit"]:hover, button[type=submit]:hover {background-color: #222}
    .single-sidebar input[type="text"] {
        margin-bottom: 10px;
        width: 100%;
    }
    .product-inner-price {
    margin-bottom: 25px;
    }
    .product-inner-price > ins {
        color: #db5660;
        font-weight: 700;
        margin-right: 10px;
        text-decoration: none;
    }
    .product-inner-category {
    margin-bottom: 30px;
    }
    .add_to_cart_button {
        background: none repeat scroll 0 0 #db5660;
        border: medium none;
        color: #fff;
        padding: 6px 25px;display: inline-block
    }
    .add_to_cart_button:hover {background-color: #222;color: #fff;text-decoration: none}
    .quantity {
    float: left;
    margin-right: 15px;
    }
    .quantity input[type="number"] {
        border: 1px solid #db5660;
        padding: 5px;
        width: 50px;
    }
    .product-tab {
    border-bottom: 1px solid #ddd;
    list-style: outside none none;
    margin: 0 0 30px;
    padding: 0;
    text-align: center;
    }
    .product-tab li {
        display: inline-block;
    }
    .product-tab li.active {
        background: none repeat scroll 0 0 #db5660;
    }
    .product-tab li.active a {
        color: #fff;
    }
    .product-tab li a {
        color: #222;
        display: block;
        font-size: 16px;
        padding: 10px 30px;
    }
    .product-tab li a:hover {
        text-decoration: none;
    }
    .product-tab li a:focus {
        text-decoration: none;
    }
    .tab-content h2 {
    font-size: 20px;
    }
    .tab-content {
        margin-bottom: 30px;
    }
    .product-tab li.active {
    background: none repeat scroll 0 0 #db5660;
    }
    .product-tab li.active a {
        color: #fff;
    }
</style>

<div class="collection_text">Product Details</div>
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title"><br><br>Tìm kiếm sản phẩm</h2>
                        <form action="">
                            <input type="text" placeholder="Nhập thông tin tìm kiếm...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                </div>

                {{--Hiển thị thông tin chi tiết sản phẩm--}}
                @foreach($product as $products)
                    <div class="col-md-8">
                        <div class="product-content-right">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-images">
                                        <div class="product-main-img"><br><br>
                                            @foreach((array)json_decode($products->product_image, true) as $image)
                                               <img src="{{asset('public/home/img/'.$image)}}" alt="">
                                                @break
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="product-inner"><br><br>
                                        <h2 class="product-name">{{$products->product_name}}</h2>
                                        <div class="product-inner-price">
                                            <ins> {{number_format($products->product_price)}} VND</ins>
                                        </div>
                                           <div class="quantity">
                                               <input type="number" size="10" class="input-text qty text" value="1" name="quality" min="1" step="1">
                                           </div>
                                        <a class="add_to_cart_button" type="button" href="{{route('addCard', $products->id) }}">Thêm vào giỏ hàng</a>

                                        <div class="product-inner-category"><br>
                                            <p> Loại:
                                                    @php($cate = DB::table('categorys')->get())
                                                    @foreach($cate as $cates)
                                                        @if($cates->id == $products->category_id )
                                                        <a href="{{route('page_product',$cates->id)}}">{{ucwords($cates -> category_name)}}</a>
                                                            @break
                                                        @endif
                                                    @endforeach
                                            </p>
                                        </div>
                                        <div role="tabpanel">
                                            <ul class="product-tab" role="tablist">
                                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô tả</a></li>
                                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Nhà cung cấp</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                    <h2>Mô tả</h2>
                                                    <p>{{$products->product_discribe}}</p>
                                                </div>

                                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                                    <p><b style="font-size: 20px">Nhập nhà cung cấp</b>  </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        @foreach($product as $products)
{{--            <div class="container">--}}

{{--            </div>--}}
           <div class="container" style="padding-bottom: 40px">
               <div class="row mt-4">
                   <div class="col-md-6">
                       <div id="fb-root"></div>
                       <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script>
                       <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#http://http://localhost/shoesshop.com.vn/product-detail/{{ $products->id }}"
                            data-width="500" data-numposts="5"></div>
{{--                       <div class="post-comments" style="padding-top: 6px">--}}
{{--                           <form action="#" method="POST">--}}
{{--                               @csrf--}}
{{--                               <div class="form-group">--}}
{{--                                   <label for="comment">Bình luận</label>--}}
{{--                                   <textarea name="input_comment_content" class="form-control" rows="5" placeholder="Nhập bình luận..."></textarea>--}}
{{--                               </div>--}}
{{--                               <button type="submit" class="btn btn-default">Gửi</button>--}}
{{--                           </form>--}}
{{--                           <br>--}}
{{--                       </div>--}}
                   </div>

                   <div class="col-md-6">
                       @if(Auth()->check())
                           <style>
                               .rating_circle{
                                   width: 180px;
                                   height: 180px;
                                   border-radius: 50%;
                                   border: 1px none;
                                   font-size: 50px;
                                   font-weight: bold;
                               }
                               .rating_text{
                                   margin-top:1px;
                                   font-size: 20px;
                               }

                               /* Stylingand links*/
                               .starrating > input {display: none;}
                               .starrating > label:before {
                                   content: "\f005";
                                   margin: 5px;
                                   font-size:40px;
                                   font-family: FontAwesome, serif;
                                   display: inline-block;
                               }
                               .starrating > label{color: #4a5568;}
                               .starrating > input:checked ~ label{ color: #ffca08 ; }
                               .starrating > input:hover ~ label{ color: #ffca08 ;  }
                           </style>
                           <div class="card pb-0 mt-5">
                               <div class="card-body pb-0">
                                   <div class="row">
                                       <div class="col-12 col-md-4">
                                           <button class="rating_circle">
                                               @php($avg_rating = DB::table('rating_stars')->where('product_id', $products->id)->avg('avg_number_star'))
                                               {{ round($avg_rating, 1) }} / <span class="text-warning">5 <i class="fa fa-star" style="color:#ffca08;"></i></span>
                                           </button>
                                       </div>
                                       <div class="col-10 col-md-6">
                                           <div class="progress mt-2" style="height:15px;">
                                               <div class="progress-bar bg-success" style="width:100%;height:15px;">5 Sao</div>
                                           </div>
                                           <div class="progress mt-3" style="height:15px;">
                                               <div class="progress-bar bg-info" style="width:80%;height:15px;">4 Sao</div>
                                           </div>
                                           <div class="progress mt-3" style="height:15px;">
                                               <div class="progress-bar bg-primary" style="width:60%;height:15px;">3 Sao</div>
                                           </div>
                                           <div class="progress mt-3" style="height:15px;">
                                               <div class="progress-bar bg-warning" style="width:40%;height:15px;">2 Sao</div>
                                           </div>
                                           <div class="progress mt-3" style="height:15px;">
                                               <div class="progress-bar bg-danger" style="width:20%;height:15px;">1 Sao</div>
                                           </div>
                                       </div>
                                       <div class="col-2 col-md-2 mt-0">
                                           <div class="row">
                                               <b class="rating_text">
                                                   @php($count_5 = DB::table('rating_stars')->where([['product_id','=',$products->id],['avg_number_star', '=',5]])->count())
                                                   {{ $count_5 }}
                                               </b>
                                           </div>
                                           <div class="row">
                                               <b class="rating_text">
                                                   @php($count_4 = DB::table('rating_stars')->where([['product_id','=',$products->id],['avg_number_star', '=',4]])->count())
                                                   {{ $count_4 }}
                                               </b>
                                           </div>
                                           <div class="row">
                                               <b class="rating_text">
                                                   @php($count_3 = DB::table('rating_stars')->where([['product_id','=',$products->id],['avg_number_star', '=',3]])->count())
                                                   {{ $count_3 }}
                                               </b>
                                           </div>
                                           <div class="row">
                                               <b class="rating_text">
                                                   @php($count_2 = DB::table('rating_stars')->where([['product_id','=',$products->id],['avg_number_star','=',2]])->count())
                                                   {{ $count_2 }}
                                               </b>
                                           </div>
                                           <div class="row">
                                               <b class="rating_text">
                                                   @php($count_1 = DB::table('rating_stars')->where([['product_id','=',$products->id],['avg_number_star','=',1]])->count())
                                                   {{ $count_1 }}
                                               </b>
                                           </div>
                                       </div>
                                   </div>

                                   @if (Auth::check())
                                       <form action="{{ route('postRatingStar', [Auth::user()->id, $products->id]) }}" method="post" id="FormSubmit">
                                           @csrf
                                           <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                               <input type="radio" id="star5" name="rating" value="5" onclick="return SubmitFormFunction();"/><label for="star5" title="5 star"></label>
                                               <input type="radio" id="star4" name="rating" value="4" onclick="return SubmitFormFunction();"/><label for="star4" title="4 star"></label>
                                               <input type="radio" id="star3" name="rating" value="3" onclick="return SubmitFormFunction();"/><label for="star3" title="3 star"></label>
                                               <input type="radio" id="star2" name="rating" value="2" onclick="return SubmitFormFunction();"/><label for="star2" title="2 star"></label>
                                               <input type="radio" id="star1" name="rating" value="1" onclick="return SubmitFormFunction();"/><label for="star1" title="1 star"></label>
                                           </div>
                                       </form>
                                   @else
                                       <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                           <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star" onclick="MessageFunction()"></label>
                                           <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star" onclick="MessageFunction()"></label>
                                           <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star" onclick="MessageFunction()"></label>
                                           <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star" onclick="MessageFunction()"></label>
                                           <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star" onclick="MessageFunction()"></label>
                                       </div>
                                   @endif
                               </div>
                           </div>
                       @endif
                   </div>
               </div>
           </div>
        @endforeach



        <a href="javascript:void(0);" class="likebtn" rel="2209835"><i class="icon-like"></i></a>

        <!-- Product Details Section End -->
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

        <script>
            $('.hero__categories__all').on('click', function(){
                $('.hero__categories ul').slideToggle(400);
            });
        </script>

        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
                alert(msg);
            }
        </script>


        <script>
            $('[data-toggle="collapse"]').on('click', function() {
                var $this = $(this),
                    $parent = typeof $this.data('parent')!== 'undefined' ? $($this.data('parent')) : undefined;
                if($parent === undefined) { /* Just toggle my  */
                    $this.find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
                    return true;
                }

                /* Open element will be close if parent !== undefined */
                var currentIcon = $this.find('.glyphicon');
                currentIcon.toggleClass('glyphicon-plus glyphicon-minus');
                $parent.find('.glyphicon').not(currentIcon).removeClass('glyphicon-minus').addClass('glyphicon-plus');

            });
        </script>

        <script>
            $(document).ready(function(){
                $('[data-toggle="popover"]').popover();
            });

            function MessageFunction() {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Đăng nhập để đánh giá sao',
                    showConfirmButton: false,
                    timer: 1500
                });
                setTimeout(function() {
                    location.href = "{{ url('/login') }}";
                }, 2000);
            }

            function SubmitFormFunction() {
                document.getElementById("FormSubmit").submit();
            }
        </script>


@endsection
