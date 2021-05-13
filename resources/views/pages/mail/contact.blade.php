@extends('home_caterogy')
@section('content1')

<div class="container">
    <div style="margin-left: 3%;" class="row">
        <div class="col-sm-5">
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
        <!-- <div class="col-sm-1"></div> -->
        <div style="margin-top: 2%; margin-left: 3%;" class="col-sm-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.890612187856!2d106.66259491411792!3d10.971628658561965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d1464b6edfd3%3A0xeb9cc53cf56cee35!2zVG9jb1RvY28gVGjhu6cgROG6p3UgTeG7mXQ!5e0!3m2!1svi!2s!4v1620453188367!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <!-- <img style="height: 400px; width: 290px; margin-top: 5%; margin-left: 20%;" src="public/frontend/images/lienhe.jpg" alt="" /> -->
        </div>
    </div>

    @endsection
