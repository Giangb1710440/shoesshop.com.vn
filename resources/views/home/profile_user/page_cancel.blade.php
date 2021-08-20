@extends('home.profile_user.layout_profile')
@section('content-profile-col-9')

<div class="table-responsive-sm">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Đơn hàng 00032</b></div>
            <div class="panel-body" style="padding:1px 1px;">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên SP</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Tùy chọn</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="STT">1</td>
                            <td data-label="Hình ảnh">
                                <a href="#">
                                    <img class="shop_thumbnail" src="{{asset('public/home/img/running-shoes1.png')}}" width="50" height="50" >
                                </a>
                            </td>
                            <td data-label="Tên SP">
                                Product Name
                            </td>
                            <td data-label="Giá">
                               500.000 VND
                            </td>
                            <td data-label="Số lượng">
                               3
                            </td>
                            <td data-label="Tổng tiền">
                                500.000 VND
                            </td>
                            <td>
                                <a class="btn btn-danger" href="#" role="button" onclick="return confirm('Bạn có muốn hủy đơn hàng không ?');">
                                    <i class="fa fa-close"></i> Repurchase
                                </a>
                            </td>
                        </tr>
                    <tr>
                        <td colspan="6">
                            Tổng thanh toán:
                        </td>
                        <td colspan="2">
                            500.000 VND
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>

@endsection