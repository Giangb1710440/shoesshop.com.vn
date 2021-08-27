@extends('admin_layout.master')
@section('title','Tình trạng đơn hàng')
@section('admin_show_product')

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sản phẩm đã thêm</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Sản phẩm đã thêm vào cơ sở dữ liệu
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">

                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Code_order</th>
                                <th>Khách hàng</th>
                                <th>SĐT</th>
                                <th>Địa chỉ giao</th>
                                <th>Tổng tiền</th>
                                <th>tình trạng đơn hàng</th>
                                <th>Cập nhật trạng thái</th>
                                <th style="width: 20%">Cập nhật</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order as $orders)
                                <form action="{{route('post_status_order',$orders->id)}}"  method="post" >
                                    @csrf
                                    <tr class="odd gradeX">
                                        <td>Order_{{$orders->id}}</td>
                                        <td>
                                            @foreach($user as $users)
                                                @if($users->id == $orders->user_id)
                                                    {{ucwords($users->name)}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($user as $users)
                                                @if($users->id == $orders->user_id)
                                                    {{ucwords($users->phone)}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($user as $users)
                                                @if($users->id == $orders->user_id)
                                                    {{ucwords($users->address)}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            {{number_format($orders->total_price)}}
                                        </td>
                                        <td>
                                            {{$orders->order_status}}
                                        </td>
                                        <td>
                                            <select id="trangthai" name="trangthai">
                                                <option value="">--Cập nhật Trạng thái...</option>
                                                <option value="Đã thanh toán">Đã Thanh Toán</option>
                                                <option value="Hủy đơn">Hủy đơn</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-xs"> <i class="fas fa-cart-plus"></i> Cập nhật </button>
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
    <script>
        var msg = '{{Session::get('stt_success')}}';
        var exist = '{{Session::has('stt_success')}}';
        if(exist){
            swal({
                title: "Đã cập nhật",
                text: "",
                type: "success",
                timer: 1000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
    <script>
        var msg1 = '{{Session::get('success_add_product')}}';
        var exist1 = '{{Session::has('success_add_product')}}';
        if (exist1) {
            swal({
                title: "Đã thêm thành công.",
                text: "",
                type: "success",
                timer: 2000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
    <script>
        var msg1 = '{{Session::get('success_edit_product')}}';
        var exist1 = '{{Session::has('success_edit_product')}}';
        if (exist1) {
            swal({
                title: "Đã cập nhật.",
                text: "",
                type: "success",
                timer: 2000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
@endsection
