@extends('admin_layout.master')
@section('title','Danh sách sản phẩm')
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
                                <th>Code</th>
                                <th>Tên sản phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Hình ảnh</th>
                                <th>Đơn giá</th>
                                <th>Giảm giá</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd gradeX">
                                <td>Trident</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td>Trident</td>
                                <td> <img style="height: 15%;width: 12%" src="{{asset('public/home/img/shoes-img8.png')}}" alt="">
                                    <img style="height: 15%;width: 12%" src="{{asset('public/home/img/shoes-img8.png')}}" alt="">
                                    <img style="height: 15%;width: 12%" src="{{asset('public/home/img/shoes-img8.png')}}" alt="">
                                    <img style="height: 15%;width: 12%" src="{{asset('public/home/img/shoes-img8.png')}}" alt="">
                                    <img style="height: 15%;width: 12%" src="{{asset('public/home/img/shoes-img8.png')}}" alt="">
                                </td>
                                <td>150000 vndddddd</td>
                                <td>Win 95+</td>


                            </tr>

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

@endsection
