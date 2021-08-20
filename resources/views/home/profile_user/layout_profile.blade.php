@extends('layout.layout2')
@section('title','Thông tin admin')
@section('content')


<link rel="stylesheet" href="{{ asset('public/home/css/style_profile_user.css') }}">

    <style>
        .list-group{
            display: none;
        }
        .tabbable .nav-tabs{
            display: inline-block;
            margin-bottom: 10px;
        }

       
    </style>
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <br>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ url('page-infor-user') }}"><i class="fa fa-user" style="color: green;"></i>&nbsp;Profile </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('wait-payment') }}"><i class="fa fa-credit-card" style="color: red;"></i>&nbsp;Wait Payment</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('page-delivery') }}"><i class="fa fa-truck" style="color: orange;"></i>&nbsp; Delivery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('page-cancel') }}"><i class="fa fa-times" style="color: red;"></i>&nbsp; Cancel</a>
                    </li>
                    
                </ul>

                <div id="user-profile-2" class="user-profile">
                    <div class="tabbable">
                        <br>

                        <div class="tab-content no-border padding-0">
                            <div id="home" class="tab-pane in active">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3 center">
                                        <span class="profile-picture">
                                            <img class="img-responsive" alt="Avatar" id="avatar2 "
                                            src="{{url('public/home/img/demo.jpg')}}"
                                            style="width: 100%;">
                                        </span>
                                        <div class="space space-4"></div> <br>
                                        <a href="#" class="btn btn-info btn-block">
                                            <i class="fa fa-info-circle"></i> <b>Update</b>
                                        </a>

                                        <a href="#" class="btn btn-warning btn-block">
                                            <i class="fa fa-key"></i><b>Change Pass</b>
                                        </a>
                                        <br>
                                    </div>
                                    <!-- /.col -->

                                    <div class="col-xs-12 col-sm-9">

                                        {{--  Thừa kế từ layout-profile-user  --}}
                                        @yield('content-profile-col-9')
                                        {{--  Thừa kế từ layout-profile-user  --}}

                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                                <div class="space-20"></div>

                            </div>
                            <!-- /#home -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
