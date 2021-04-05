<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register ToCoToCo</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/frontend/logincss/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/logincss/css/owl.carousel.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/logincss/css/bootstrap.min.css')}}">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('public/frontend/logincss/css/style.css')}}">
</head>
<body>
<div class="d-lg-flex half">

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h3 style="margin-top: 10%; text-align: center; margin-bottom: 5%;"><strong>{{__('ĐĂNG KÍ')}}</strong></h3>
            <form action="{{URL::to('/add-customer')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group first">
                <label for="username">{{__('Họ tên')}}</label>
                <input type="text" name="customer_name" class="form-control" placeholder="name">
              </div>
              <div class="form-group first">
                <label for="username">{{__('Địa chỉ email')}}</label>
                <input type="email" name="customer_email" class="form-control" placeholder="email">
              </div>
              <div class="form-group last mb-3">
                <label for="password">{{__('Mật khẩu')}}</label>
                <input type="password" name="customer_password" class="form-control" placeholder="password">
              </div>
              <div class="form-group first">
                <label for="username">{{__('Số điện thoại')}}</label>
                <input type="number" name="customer_phone" class="form-control" placeholder="phone">
              </div>

              <div class="d-flex mb-5 align-items-center">

              </div>

              <input type="submit" value="{{__('Đăng kí')}}" class="btn btn-block btn-primary">

            </form>
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
