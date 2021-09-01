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
                                <th>MSP</th>
                                <th>Tên sản phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Hình ảnh</th>
                                <th>Đơn giá</th>
                                <th>Mô tả</th>
                                <th>Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($showproduct as $showp)
                                <tr class="odd gradeX">
                                    <td>{{$showp->id}}</td>
                                    <td><a href="{{route('product_detail',$showp->id)}}">{{$showp->product_name}}</a></td>
                                    <td>
                                        @foreach($cate_product as $catep)
                                            @if($catep->id == $showp->category_id )
                                                {{$catep->category_name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{$showp->product_quality}}</td>
                                    <td>
                                        @foreach((array)json_decode($showp->product_image, true) as $image)
                                            <img style="height: 15%;width: 12%" src="{{asset('public/home/img/'.$image)}}" alt="">
{{--                                            <img  class="card-img-top" src="{{ \TCG\Voyager\Facades\Voyager::image($image) }}" alt="">--}}
                                        @endforeach
                                    </td>
                                    <td>{{number_format($showp->product_price)}} VNĐ</td>
                                    <td>{{$showp->product_discribe}}</td>
                                    <td>
                                        <a title="Edit sản phẩm" href="{{route('edit_product',$showp->id)}}" type="button"><i style="font-size: 25px" class="fas fa-edit"></i> </a>
                                        <a title="Delete" href="{{route('delete_item',$showp->id)}}" type="button"><i style="font-size: 25px" class="fas fa-trash-alt"></i>  </a>
                                    </td>

                                </tr>
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
    <script>
        var msg1 = '{{Session::get('delete_product')}}';
        var exist1 = '{{Session::has('delete_product')}}';
        if (exist1) {
            swal({
                title: "Đã xóa sản phẩm",
                text: "",
                type: "delete",
                timer: 2000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
@endsection
