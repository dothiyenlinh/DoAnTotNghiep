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
                        <h3>{{__('Đăng ký với')}} <strong>ToCoToCo</strong></h3>
                        <form action="{{URL::to('/add-customer')}}" method="POST" style="margin-top: 10%;">
                            {{csrf_field()}}
                            <div class="form-group first">
                                <label for="username">{{__('Họ tên')}}</label>
                                <input name="customer_name" class="form-control" placeholder="Full Name">
                            </div>
                            <div class="form-group last mb-3">
                                <label>{{__('Địa chỉ email')}}</label>
                                <input type="email" name="customer_email" class="form-control" placeholder="abc@gmail.com">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">{{__('Mật khẩu')}}</label>
                                <input type="password" name="customer_password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group first">
                                <label for="username">{{__('Số điện thoại')}}</label>
                                <input type="number" name="customer_phone" class="form-control" placeholder="Phone">
                            </div>

                            <input style="margin-top: 10%;" type="submit" value="Đăng ký" class="btn btn-block btn-primary">
                            </br>
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
