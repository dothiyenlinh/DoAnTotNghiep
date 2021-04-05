<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Seo meta -->
    <meta name="description" content={{$meta_desc}}>
    <meta name="keywords" content={{$meta_keywords}} />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="" />
    <!-- Seo meta -->

    <meta property="og:site_name" content="http://localhost:8080/trasuatoco/" />

    <title>{{$meta_title}}</title>
    <base href="{{asset('')}}">
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/responsive.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="public/frontend/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <header id="header">
        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li>
                                        <?php
                                        $customer_id = Session::get('customer_id');
                                        if ($customer_id != NULL) {
                                        ?>
                                    <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> {{__('Đăng xuất')}}</a></li>
                                <?php
                                        } else {
                                ?>
                                    <li><a href="{{URL::to('/login')}}"><i class="fa fa-lock"></i> {{__('Đăng nhập')}}</a></li>
                                <?php
                                        }
                                ?></li>
                                <li><a href="https://www.facebook.com/dolinh179/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/dtyl_in/?hl=vi"><i class="fa fa-linkedin"></i></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="trang-chu" class="active">{{__('Trang Chủ')}}</a></li>

                                    <li><a href="san-pham">{{__('Sản Phẩm')}}</a></li>
                                    <li><a href="contact">{{__('Liên Hệ')}}</a></li>

                                    <li><a href="{{URL::to('/show-cart')}}">{{__('Giỏ Hàng')}}</a></li>
                                    <li class="dropdown"><a href="#">{{__('Ngôn Ngữ')}}<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="{{URL::to('language',['vi'])}}">{{__('Tiếng Việt')}}</a></li>
                                            <li><a href="{{URL::to('language',['en'])}}">{{__('Tiếng Anh')}}</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section style="margin-top: 2%;" id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                        <div class="item active">
                                <div class="col-sm-6">
                                    <img style="height: 290px; width: 1024px;" src="public/frontend/images/tcsoi.jpg" class="girl img-responsive" alt="" />
                                </div>
                                <div class="col-sm-6">
                                    <h1><span></span>Welcome Tocotoco</h1>
                                    <h2>{{__('TocoToco – Trà sữa của hạnh phúc')}}</h2>
                                    <p>{{__('Với sứ mệnh mang tới niềm vui và hạnh phúc, TocoToco hy vọng sẽ tạo nên một nét văn hóa giải trí bên cạnh ly trà sữa Ngon – sạch – tươi ')}}</p>
                                    <img src="public/frontend/images/icon_ts.jpg" alt="" />
                                </div>
                            </div>
                            <div class="item">

                                <div class="col-sm-6">
                                    <img style="height: 290px; width: 1024px;" src="public/frontend/images/banner5.jpg" class="girl img-responsive" alt="" />
                                </div>
                                <div class="col-sm-6">
                                    <h1><span></span>Welcome Tocotoco</h1>
                                    <h2>{{__('TocoToco – Trà sữa của hạnh phúc')}}</h2>
                                    <p>{{__('Với sứ mệnh mang tới niềm vui và hạnh phúc, TocoToco hy vọng sẽ tạo nên một nét văn hóa giải trí bên cạnh ly trà sữa Ngon – sạch – tươi ')}}</p>
                                    <img src="public/frontend/images/icon_ts.jpg" alt="" />
                                </div>
                            </div>

                            <div class="item">

                                <div class="col-sm-6">
                                    <img style="height: 290px; width: 1024px;" src="public/frontend/images/banner1.png" class="girl img-responsive" alt="" />
                                </div>
                                <div class="col-sm-6">
                                    <h1><span></span>Welcome Tocotoco</h1>
                                    <h2>{{__('TocoToco – Trà sữa của hạnh phúc')}}</h2>
                                    <p>{{__('Với sứ mệnh mang tới niềm vui và hạnh phúc, TocoToco hy vọng sẽ tạo nên một nét văn hóa giải trí bên cạnh ly trà sữa Ngon – sạch – tươi ')}}</p>
                                    <img src="public/frontend/images/icon_ts.jpg" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--/slider-->

    <section style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                @yield('content1')
            </div>
    </section>

    <footer id="footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-right">Designed by <span><a target="_blank" href="">Linh</a></span></p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->



    <script src="public/frontend/js/jquery.js"></script>
    <script src="public/frontend/js/bootstrap.min.js"></script>
    <script src="public/frontend/js/jquery.scrollUp.min.js"></script>
    <script src="public/frontend/js/price-range.js"></script>
    <script src="public/frontend/js/jquery.prettyPhoto.js"></script>
    <script src="public/frontend/js/main.js"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="OV0nTRfv"></script>
</body>

</html>
