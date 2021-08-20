@extends('layout.layout2')
@section('title','Thanh Toán')
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
<div class="collection_text">Produt Details</div>
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
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img"><br><br>
                                        <img src="{{asset('public/home/img/shoes-img1.png')}}" >
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner"><br><br>
                                    <h2 class="product-name">Product Name</h2>
                                    <div class="product-inner-price">
                                        <ins> Product Price VND / Unit </ins>
                                    </div>

                                    <form action="#" class="cart" method="post">
                                        @csrf

                                        <div class="quantity">
                                            <input type="number" size="10" class="input-text qty text" value="1" name="quality" min="1" step="1">
                                        </div>

                                        <button class="add_to_cart_button" type="submit">Thêm vào giỏ hàng</button>
                                        
                                    </form>

                                    <div class="product-inner-category"><br>
                                        <p> Loại:
                                                <a href="#">
                                                    Category
                                                </a>
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
                                                <p>Nhập mô tả....</p>
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
            </div>
        </div>

        <div class="container">
            <div class="post-comments">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="comment">Bình luận</label>
                        <textarea name="input_comment_content" class="form-control" rows="5" placeholder="Nhập bình luận..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Gửi</button>
                </form>
                <br>
            </div>
            </div>

    </div>

        <a href="javascript:void(0);" class="likebtn" rel="2209835"><i class="icon-like"></i></a>

        <!-- Product Details Section End -->

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

@endsection