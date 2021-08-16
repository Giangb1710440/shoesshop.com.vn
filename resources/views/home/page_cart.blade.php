@extends('layout.layout2')
@section('title','Cừa Hàng')
@section('content')

<style>
    .image-product{
            max-width: 100px;
            height: auto;
            width: 100%;
            border-radius: 5px;
        }
        .input-text{
            width: 55px;
            height: 35px;
            text-align: center;
            border-radius:5px;
            font-size: 16px;
        }
        .btn-delete {
            background-color: red;
            color: white;
            padding: 8px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
        }
        table {
            padding: 0;
            width: 100%;
            table-layout: auto;
        }
        table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .10em;
        }
        table th, table td{
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 15px;
        }
        table th {
            font-size: 12px;
            text-transform: uppercase;
            color: black;
            font-weight: bold;
        }
        tr:hover {background-color:#f5f5f5;}
</style>

<div class="collection_text">Shopping Cart</div>
<table class="table table-bordered" style="max-width: 60%; margin: auto;">
    <thead>
      <tr>
        <th>Tên Sản Phẩm</th>
        <th>Hình Ảnh</th>
        <th>Giá</th>
        <th>Số Lượng</th>
        <th >Tổng Tiền</th>
        <th scope="col" colspan="2">Tùy chọn</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Nike</th>
        <td>
            <a href="#">
                <img class="image-product" src="{{asset('public/home/img/shoes-img5.png')}}" width="145" height="145" >
            </a>
        </td>
        <td>3.000.000 VND</td>
        <td> <input type="number" size="4" class="input-text qty text" name="inputQty"
            value="1" min="0" step="1">
        </td>
        <td> <input type="submit" class="btn btn-success" value="Cập nhật" name="update_cart" class="button"></td>
        <td> <input type="submit" class="btn btn-danger" value="Xóa" name="delete_cart" class="button"></td>
      </tr>  
    </tbody>
  </table>
@endsection