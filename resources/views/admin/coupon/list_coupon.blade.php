@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách mã giảm giá
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped b-t b-light">
            <thead>
                <tr>
                    <th>Tên mã giảm giá</th>
                    <th>Mã giảm giá</th>
                    <th>Số lượng mã</th>
                    <th>Cách thức giảm</th>
                    <th>Giá giảm</th>
                </tr>
            </thead>
            <tbody>
                @foreach($coupon as $key =>$cou)
                <tr>
                    <td>{{$cou->coupon_name}}</td>
                    <td>{{$cou->coupon_code}}</td>
                    <td>{{$cou->coupon_time}}</td>
                    <td><span class="text-ellipsis">
                            <?php
                            if ($cou->coupon_condition == 0) {
                                echo 'Theo %';
                            } else {
                                echo "Theo tiền";
                            }
                            ?>
                        </span></td>
                    <td><span class="text-ellipsis">
                            <?php
                            if ($cou->coupon_condition == 0) {
                            ?>
                                {{$cou->coupon_number}} %
                            <?php
                            } else {
                            ?>
                                {{$cou->coupon_number}} VND
                            <?php
                            }
                            ?>
                        </span>
                    </td>

                    <td>
                        <a onclick="return confirm('bạn có thật sự muốn xóa?')" href="{{URL::to('/delete-coupon/'.$cou->coupon_id)}}" class="active styling-edit" ui-toggle-class="">
                            <i class="fa fa-times text-danger text"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer class="panel-footer">
        <div class="row">

            <div class="col-sm-5 text-center">
                <small class="text-muted inline m-t-sm m-b-sm">Xem thêm</small>
            </div>
            <div class="col-sm-7 text-right text-center-xs">
                <ul class="pagination pagination-sm m-t-none m-b-none">
                    <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</div>
@endsection
