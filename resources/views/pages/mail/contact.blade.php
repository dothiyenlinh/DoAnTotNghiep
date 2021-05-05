@extends('home_caterogy')
@section('content1')

<div class="container">
    <div class="row">
        <div class="col-sm-7">
            <div class="left-sidebar">
                <form action="" method="POST" role="form">
                    <div style="margin-left: 5%; margin-bottom: 10%;">
                        <legend style="color: #FE980F;">{{__('Liên hệ')}}</legend>
                        @csrf
                        <div class="form-group">
                            <label for="">{{__('Họ tên')}}</label>
                            <input type="text" class="form-control" name="name" placeholder="{{__('Nhập họ tên của bạn')}}">
                        </div>

                        <div class="form-group">
                            <label for="">{{__('Email')}}</label>
                            <input type="email" class="form-control" name="email" placeholder="{{__('Nhập email của bạn')}}">
                        </div>

                        <div class="form-group">
                            <label for="">{{__('Số điện thoại')}}</label>
                            <input class="form-control" name="phone" placeholder="{{__('Nhập số điện thoại của bạn')}}">
                        </div>

                        <div class="form-group">
                            <label for="">{{__('Nội dung')}}</label>
                            <textarea class="form-control" name="content" rows="3" placeholder="{{__('Nhập nội dung bạn muốn gửi')}}"></textarea>
                        </div>

                        <button style="border-radius: 5px;" type="submit" class="btn btn-primary">{{__('Chấp nhận')}}</button>

                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-5">
            <img style="height: 400px; width: 290px; margin-top: 5%; margin-left: 20%;" src="public/frontend/images/lienhe.jpg" alt="" />
        </div>
    </div>

    @endsection
