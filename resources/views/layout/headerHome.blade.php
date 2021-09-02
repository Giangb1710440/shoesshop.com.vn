<style>
    #user{
        margin-left: 20px;
    }
    #name{
        color: #fff; 
        font-size: 17px; 
        font-weight: bold;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo"><a href="{{route('home')}}"><img src="{{asset('public/home/img/logo.png')}}"></a></div>
            </div>
            <div class="col-sm-10">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="{{ url('/') }}">TRANG CHỦ</a>
                            <a class="nav-item nav-link" href="{{url('page-product')}}">CỬA HÀNG</a>
                            <a class="nav-item nav-link" href="{{ url('page-news') }}">TIN TỨC</a>
                            <a class="nav-item nav-link" href="{{ url('page-contact') }}">LIÊN HỆ</a>

                            @if(Auth::check())
                                <a class="nav-item nav-link " href="{{ url('page-cart') }}">
                                    Giỏ Hàng&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a>
                            @else
                                <a onclick="return nonlogin('Bạn cần đăng nhập trước !!')" href="{{ route('page_login') }}" class="nav-item nav-link ">
                                    Giỏ Hàng <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a>
                            @endif


                            <ul id="user">
                                @if (Auth::check())
                                    <li class="dropdown" style="margin-top: 12px;">
                                            <a id="name" class="dropdown-toggle" data-toggle="dropdown" href="#" >
                                                <i class="fa fa-user">&nbsp;</i>{{ucwords(Auth::user()->name)}}
                                            </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li style="font-size: 18px;">
                                        <i class="fa fa-sign-in" style="color: white;"></i>
                                        <a style="color:white;" href="{{ url('page-login') }}"> Log in</a>
                                    </li>
                                    <li style="font-size: 18px;">
                                        <i class="fa fa-check-square-o"  style="color: white;"></i>
                                        <a style="color:white;" href="{{ url('page-signup') }}"> Sign up</a>
                                    </li>
                                @endif
                            </ul>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>

    <script>
        function nonlogin(msg){
            if(window.confirm(msg)){
                return true;
            }
            return false;
        }
    </script>


