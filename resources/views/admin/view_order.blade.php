@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">

    <div class="panel panel-default">
        <div class="panel-heading">
            Thông tin đăng nhập
        </div>

        <div class="table-responsive">
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>

                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>

                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>{{$customer->customer_name}}</td>
                        <td>{{$customer->customer_phone}}</td>
                        <td>{{$customer->customer_email}}</td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>
</div>
<br>
<div class="table-agile-info">

    <div class="panel panel-default">
        <div class="panel-heading">
            Thông tin vận chuyển hàng
        </div>


        <div class="table-responsive">
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Tên người vận chuyển</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Ghi chú</th>
                        <th>Hình thức thanh toán</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$shipping->shipping_name}}</td>
                        <td>{{$shipping->shipping_address}}</td>
                        <td>{{$shipping->shipping_phone}}</td>
                        <td>{{$shipping->shipping_email}}</td>
                        <td>{{$shipping->shipping_notes}}</td>
                        <td>@if($shipping->shipping_method==0) Chuyển khoản @else Tiền mặt @endif</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="table-agile-info">

    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt kê chi tiết đơn hàng
        </div>

        <div class="table-responsive">
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Mã giảm giá</th>
                        <th>Phí ship hàng</th>
                        <th>Số lượng</th>
                        <th>Giá sản phẩm</th>
                        <th>Tổng tiền</th>

                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 0;
                    $total = 0;
                    @endphp
                    @foreach($order_details as $key => $details)

                    @php
                    $i++;
                    $subtotal = $details->product_price*$details->product_sales_quantity;
                    $total+=$subtotal;
                    @endphp
                    <tr>

                        <td><i>{{$i}}</i></td>
                        <td>{{$details->product_name}}</td>
                        <td>@if($details->product_coupon!='no')
                            {{$details->product_coupon}}
                            @else
                            Không mã
                            @endif
                        </td>
                        <td>{{number_format($details->product_feeship ,0,',','.')}}đ</td>
                        <td>{{$details->product_sales_quantity}}</td>
                        <td>{{number_format($details->product_price ,0,',','.')}}đ</td>
                        <td>{{number_format($subtotal ,0,',','.')}}đ</td>
                    </tr>
                    @endforeach
                    <tr>
                        <!-- <td colspan="2">
                            @php
                            $total_coupon = 0;
                            @endphp
                            @if($coupon_condition==1)
                            @php
                            $total_after_coupon = ($total*$coupon_number)/100;
                            echo 'Tổng giảm :'.number_format($total_after_coupon,0,',','.').'</br>';
                            $total_coupon = $total - $total_after_coupon + $details->product_feeship;
                            @endphp
                            @else
                            @php
                            echo 'Tổng giảm :'.number_format($coupon_number,0,',','.').'đ'.'</br>';
                            $total_coupon = $total - $coupon_number + $details->product_feeship;

                            @endphp
                            @endif

                            Phí ship : {{number_format($details->product_feeship,0,',','.')}}đ</br>
                            Thanh toán: {{number_format($total_coupon,0,',','.')}}đ
                        </td> -->
                        <td colspan="2">
                            Tổng giá sản phẩm :{{number_format($total ,0,',','.')}} VND<br>
                            Mã giảm giá :
                            @if($details->product_coupon!='no')
                            {{$details->product_coupon}}
                            @else
                            Không có mã giảm giá
                            @endif
                            <br>
                            @php
                            $total_coupon = 0;
                            @endphp
                            @if($coupon_condition==0)
                            @php
                            $total_after_coupon = ($total*$coupon_number)/100;
                            echo 'Giảm giá : '.number_format($total_after_coupon,0,',','.').' VND'.'</br>';
                            $total_coupon = $total - $total_after_coupon + $details->product_feeship;
                            @endphp
                            @else
                            @php
                            echo 'Giảm giá : '.number_format($coupon_number,0,',','.').' VND'.'</br>';
                            $total_coupon = $total - $coupon_number + $details->product_feeship;

                            @endphp
                            @endif
                            Phí ship : {{number_format($details->product_feeship,0,',','.')}} VND<br>
                            Tổng tiền đơn hàng: {{number_format($total_coupon,0,',','.')}} VND
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            @foreach($order as $key => $or)
                            @if($or->order_status==1)
                            <form>
                                @csrf
                                <select class="form-control linh">
                                    <option id="{{$or->order_id}}" value="1">Chưa xử lý</option>
                                    <option id="{{$or->order_id}}" value="2">Đã giao hàng</option>
                                </select>
                            </form>

                            @else($or->order_status==2)
                            <form>
                                @csrf
                                <select class="form-control linh">
                                    <option id="{{$or->order_id}}" value="1">Chưa xử lý</option>
                                    <option id="{{$or->order_id}}" selected value="2">Đã giao hàng</option>
                                </select>
                            </form>
                            @endif
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
