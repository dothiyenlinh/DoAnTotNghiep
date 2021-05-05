<!DOCTYPE html>

<head>
    <title>Welcome Admin ToCo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('public/backend/logincss/images/icons/favicon.ico') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/logincss/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/logincss/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/logincss/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/logincss/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/logincss/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/logincss/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/logincss/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/logincss/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/logincss/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/logincss/css/main.css') }}">
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('public/backend/logincss/images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Admin Login
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" action="{{URL::to('/admin-dashboard')}}" method="post">
                {{ csrf_field() }}
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="admin_email" placeholder="User name">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="admin_password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn" name="login">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <!-- <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Đăng Nhập</h2>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">', $message . '</span>';
                $message = Session::put('message', null);
            }
            ?>
            <form action="{{URL::to('/admin-dashboard')}}" method="post">
                {{ csrf_field() }}
                <input type="text" class="ggg" name="admin_email" placeholder="E-mail" required="">
                <input type="password" class="ggg" name="admin_password" placeholder="Password" required="">
                <div class="clearfix"></div>
                <input type="submit" value="Đăng nhập" name="login">
            </form>
        </div>
    </div>
    <script src="public/backend/js/bootstrap.js"></script>
    <script src="public/backend/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="public/backend/js/scripts.js"></script>
    <script src="public/backend/js/jquery.slimscroll.js"></script>
    <script src="public/backend/js/jquery.nicescroll.js"></script>
     <script src="js/jquery.scrollTo.js"></script> -->
</body>

</html>
