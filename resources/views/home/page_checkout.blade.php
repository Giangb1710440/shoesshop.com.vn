@extends('layout.layout2')
@section('title','Thanh Toán')
@section('content')

<style>
    table.shop_table {
    border-bottom: 1px solid #ddd;
    border-right: 1px solid #ddd;
    margin-bottom: 50px;
    width: 100%;
    }
    table.shop_table th, table.shop_table td {
        border-left: 1px solid #ddd;
        border-top: 1px solid #ddd;
        padding: 15px;
        text-align: center;
    }
    table.shop_table th {
        background: none repeat scroll 0 0 #f4f4f4;
        font-size: 15px;
        text-transform: uppercase;
    }
</style>

<div class="collection_text">Checkout</div> 
<div class="single-product-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="customer_details" class="col2-set">
                    <div class="col-1">
                        <div class="woocommerce-billing-fields"><br><br>
                            <h3><b>INFORMATION</b> </h3>
                            <label class="" for="billing_country">
                                <b style="font-size: 20px">
                                    <p>FullName: Nguyễn Văn A</p>
                                    <p>Contact: 012345678</p>
                                    <p>Email: nguyenvana@gmail.com</p>
                                    <p>Address: Hòa An, Hậu Giang</p>
                                    <a href="{{ url('page-infor-user') }}" class="btn btn-default" style="background-color: #DB5660;color: white;" >
                                        Change Information
                                    </a>
                                </b>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form action="#" class="checkout" method="post">
                            @csrf
                            <h3 id="order_review_heading"><br><br><b>RECEIPT</b> </h3>
                            <div id="order_review" style="position: relative;">
                                <table class="shop_table">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th class="product-image">Hình ảnh</th>
                                            <th class="product-name">Tên sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quality">Số lượng</th>
                                            <th class="product-total">Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr class="cart_item">
                                                <td>1 </td>
                                                <td class="product-image">
                                                    <a href="#">
                                                        <img class="shop_thumbnail" src="{{asset('public/home/img/shoes-img5.png')}}" width="145" height="145">
                                                    </a>
                                                </td>

                                                <td data-label="Tên sản phẩm">
                                                    <a href="#" style="color:#1abc9c ">
                                                        Sản phẩm
                                                    </a>
                                                </td>
                                                <td data-label="Giá sản phẩm" >
                                                    <span class="amount" >500.000 VND</span>
                                                </td>
                                                <td data-label="Số lượng">
                                                    10
                                                </td>
                                                <td data-label="Tổng đơn hàng">
                                                    
                                                    <span class="amount">500.000 VND</span>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3><b>PAYMOND METHOD</b> </h3>
                                    </div>
                                    <div class="col-md-8">
                                        <div  class="dropdown show">
                                            <a style="background-color: #db5660;" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Choose Method
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Cash</a>
                                              <a class="dropdown-item" href="#">Online Checkout</a>
                                          </div>
                                    </div>
                                </div>
                                <br><br>
                                <table class="shop_table" style="width:100%;" >
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <td>
                                                <strong>Tổng phụ giỏ hàng</strong>
                                            </td>
                                            <td>
                                                <span>
                                                    50.000 VND
                                                </span>
                                            </td>
                                        </tr>

                                        <tr class="shipping">
                                            <td>
                                                <strong>Vận chuyển và xử lí</strong>
                                            </td>
                                            <td>
                                                    <input type="hidden" value="500000" name="inputDelivery">
                                            </td>
                                        </tr>

                                        <tr class="order-total">
                                            <td>
                                                <strong>Tổng đơn hàng</strong>
                                            </td>

                                            <td data-label="Tổng đơn hàng">
                                                    <strong><span class="amount">500.000 VND</span></strong>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td class="actions">
                                                    <input type="submit" value="Đặt hàng" class="btn btn-default" name="update_cart" style="background-color: #DB5660;color: white;">
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection