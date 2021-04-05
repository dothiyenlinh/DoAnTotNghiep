<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ToCoToCo</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/frontend/logincss/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/logincss/css/owl.carousel.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/logincss/css/bootstrap.min.css')}}">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('public/frontend/logincss/css/style.css')}}">
    <style>
        .content {
            height: 80vh !important;
            padding: 0 !important;
        }
    </style>
</head>

<body>

    <div class="d-lg-flex half">

        <div class="bg order-1 order-md-2" style="background-image: url('public/frontend/logincss/images/bg_3.jpg'); height: 100vh !important;padding: 0 !important; "></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>{{__('Đăng nhập với')}} <strong>ToCoToCo</strong></h3>
                        <p class="mb-4">{{__('Chào mừng đến với cửa hàng của chúng tôi - chúc các bạn có trải nghiệm vui vẻ tại trang web')}}</p>
                        <form action="{{URL::to('/login-customer')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group first">
                                <label for="username">{{__('Tài khoản')}}</label>
                                <input type="email" name="email_account" class="form-control" placeholder="your-email@gmail.com">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">{{__('Mật khẩu')}}</label>
                                <input type="password" name="password_account" class="form-control" placeholder="Your Password">
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">{{__('Nhớ mật khẩu')}}</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">{{__('Quên mật khẩu')}}</a></span>
                            </div>

                            <input type="submit" value="Đăng nhập" class="btn btn-block btn-primary">
                            </br>
                            <div style="margin-left: 20%;">
                                <p style="margin-top: 2%;">{{__('Bạn chưa có tài khoản?')}} <a style="margin-left: 2%;" href="{{URL::to('/register')}}" class="forgot-pass">{{__('Đăng kí')}}</a> </p>
                            </div>
                            <!-- @if(session('alert'))
                            <section class="btn btn-success">{{session('alert')}}</section>
                            @endif -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
