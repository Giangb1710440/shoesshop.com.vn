@extends('home.profile_user.layout_profile')
@section('content-profile-col-9')

<h4 class="blue">
    <span class="middle">Nguyễn Hà Giang</span> &emsp;&emsp;
    <span class="label label-purple arrowed-in-right" style="color: green;">
        <i class="fa fa-circle"></i>
        online
    </span>
</h4>

<div class="profile-user-info">
    <div class="profile-info-row">
        <div class="profile-info-name"> Tên tài khoản </div>

        <div class="profile-info-value">
            <span> User Name</span>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> Giới tính </div>

        <div class="profile-info-value">
            <span> Gender</span>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> Nơi ở </div>

        <div class="profile-info-value">
            <i class="fa fa-map-marker light-orange bigger-110"></i>
            <span>Address</span>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name">Email </div>

        <div class="profile-info-value">
            <span>trinhbaominh@gmail.com</span>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> Đã tham gia</div>

        <div class="profile-info-value">
            <span>20/11/2020</span>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> Đã online </div>

        <div class="profile-info-value">
            <span>3 giờ trước</span>
        </div>
    </div>
</div>

<div class="hr hr-8 dotted"></div>

<div class="profile-user-info">
    <div class="profile-info-row">
        <div class="profile-info-name"> Trang web </div>

        <div class="profile-info-value">
            <a href="{{url('/')}}" target="_blank">www.shoesshop.com.vn</a>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name">
            <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
        </div>

        <div class="profile-info-value">
            <a href="https://www.facebook.com/" target="_blank">Tìm tôi trên facebook</a>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name">
            <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
        </div>

        <div class="profile-info-value">
            <a href="https://twitter.com/" target="_blank">Theo dõi tôi trên Twitter</a>
        </div>
    </div>
</div>
@endsection
