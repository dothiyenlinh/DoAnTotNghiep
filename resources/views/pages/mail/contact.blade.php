@extends('home_caterogy')
@section('content1')

<div class="container">
    <div class="row">
        <div class="col-sm-7">
            <div class="left-sidebar">
                <form action="" method="POST" role="form">
                    <div style="margin-left: 5%; margin-bottom: 10%;">
                        <legend style="color: #FE980F;">Liên hệ</legend>
                        @csrf
                        <div class="form-group">
                            <label for="">Họ tên</label>
                            <input type="text" class="form-control" name="name" placeholder="Họ tên của bạn">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email của bạn">
                        </div>

                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input class="form-control" name="phone" placeholder="Số điện thoại của bạn">
                        </div>

                        <div class="form-group">
                            <label for="">Nội dung</label>
                            <textarea class="form-control" name="content" rows="3" placeholder="Nội dung bạn muốn gửi"></textarea>
                        </div>

                        <button style="border-radius: 5px;" type="submit" class="btn btn-primary"> Submit </button>

                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-5">
            <img style="height: 400px; width: 290px; margin-top: 5%; margin-left: 20%;" src="public/frontend/images/lienhe.jpg" alt="" />
        </div>
    </div>

    @endsection
