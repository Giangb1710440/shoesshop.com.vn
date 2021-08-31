
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
                            <a class="nav-item nav-link" href="{{ url('/') }}">Home</a>
{{--                            <a class="nav-item nav-link" href="{{ url('page-product') }}">Shop</a>--}}
                            <ul>
                                <li class="dropdown">
                                    <a class="dropdown-toggle nav-item nav-link" data-toggle="dropdown" href="#">
                                        Shop
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <a href="{{route('page_product',0)}}">
                                            <i class="fa fa-check"></i>
                                            Tất cả sản phẩm
                                        </a>
                                        @php($cate = DB::table('categorys')->get())

                                        @foreach($cate as $cates)
                                            <li>
                                                <a href="{{route('page_product',$cates->id)}}">
                                                    <i class="fa fa-check"></i>
                                                    {{ucwords($cates->category_name)}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                            <a class="nav-item nav-link" href="{{ url('page-news') }}">News</a>
                            <a class="nav-item nav-link" href="{{ url('page-contact') }}">Contact</a>

                            <a class="nav-item nav-link last" href="#"><img src="{{asset('public/home/img/search_icon.png')}}"></a>
                            @if(Auth::check())
                                <a class="nav-item nav-link last" href="{{ url('page-cart') }}">
                                    <img src="{{asset('public/home/img/shop_icon.png')}}">
                                </a>
                            @else
                                <a onclick="return   nonlogin('Bạn cần đăng nhập trước !!')"
                                   href="{{ route('page_login') }}"
                                   class="nav-item nav-link last">
                                    <img src="{{asset('public/home/img/shop_icon.png')}}">
                                </a>
                            @endif


                            <ul>
                                @if (Auth::check())
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            {{ucwords(Auth::user()->name)}}
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
                                    <li><i class="fa fa-sign-in" style="color: white;"></i><a style="color:white;" href="{{ url('page-login') }}"> Log in</a></li>
                                    <li><i class="fa fa-check-square-o"  style="color: white;"></i><a style="color:white;" href="{{ url('page-signup') }}"> Sign up</a></li>
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


