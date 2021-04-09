@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm mã giảm giá
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="insert-coupon-code" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên mã giảm giá</label>
                            <input type="text" name="coupon_name" class="form-control" id="exampleInputEmail1" placeholder="Tên mã">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mã giảm giá</label>
                            <input type="text" name="coupon_code" class="form-control" id="exampleInputEmail1" placeholder="Mã">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số lượng</label>
                            <input type="text" name="coupon_time" class="form-control" id="exampleInputEmail1" placeholder="Số lượng">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Cách thức giảm </label>
                            <select name="coupon_condition" class="form-control input-sm m-bot15">
                                <option value="0">Giảm theo %</option>
                                <option value="1">Giảm theo số tiền</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nhập số tiền hoặc % giảm</label>
                            <input type="text" name="coupon_number" class="form-control" id="exampleInputEmail1" placeholder="Số lượng">
                        </div>

                        <button type="submit" name="add_coupon" class="btn btn-info">Thêm mã giảm giá</button>
                    </form>
                    <div>

                    </div>
                </div>

            </div>
        </section>

    </div>
    @endsection
