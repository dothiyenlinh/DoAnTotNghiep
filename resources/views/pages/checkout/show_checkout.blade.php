@extends('home_caterogy')
@section('content1')

<section id="cart_items">
    <div class="row" style="margin-bottom: 5%;">
        <div class="col-sm-5">
            <div>
                <div class="col-sm-12 clearfix">
                    <div>
                        <h3 style="margin-bottom: 4%; margin-top: -0%; color: #696763; font-size: 20px; text-align: center;">Chọn nơi nhận hàng</h3>
                        <form>
                            @csrf
                            <div class="form-group">
                                <!-- <label for="exampleInputPassword1">Tỉnh</label> -->
                                <select name="city" id="city" class="form-control input-sm m-bot15 choose city">
                                    <option value="">--Tỉnh--</option>
                                    @foreach($city as $key => $ci)
                                    <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <!-- <label for="exampleInputPassword1">Thành phố</label> -->
                                <select name="province" id="province" class="form-control input-sm m-bot15 province choose">
                                    <option value="">--Thành phố--</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <!-- <label for="exampleInputPassword1">Phường</label> -->
                                <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                                    <option value="">--Phường--</option>
                                </select>
                            </div>
                            <input type="button" class="form-control calculate_delivery" name="calculate_order" value="Tính phí vận chuyển">
                        </form>
                    </div>
                    <div class="bill-to">
                        <h3 style="margin-bottom: 4%; margin-top: 20%; color: #696763; font-size: 20px; text-align: center;">Điền thông tin người nhận</h3>
                        <form method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control shipping_email" name="shipping_email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control shipping_name" name="shipping_name" placeholder="Họ và tên">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control shipping_address" name="shipping_address" placeholder="Địa chỉ">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control shipping_phone" name="shipping_phone" placeholder="Số diện thoại">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control shipping_notes" name="shipping_notes" placeholder="Ghi chú đơn hàng">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="order_fee" class="order_fee" value="{{Session::get('fee')}}">
                            </div>
                            @if(Session::get('coupon'))
                            @foreach(Session::get('coupon') as $key => $cou)
                            <input type="hidden" name="order_coupon" class="order_coupon" value="{{$cou['coupon_code']}}">
                            @endforeach
                            @else
                            <input type="hidden" name="order_coupon" class="order_coupon" value="no">
                            @endif
                            <div class="form-group">
                                <select name="payment_select" class="form-control input-sm m-bot15 payment_select">
                                    <option value=" ">Chọn hình thức thanh toán</option>
                                    <option value="0">Chuyển khoản</option>
                                    <option value="1">Tiền mặt</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="button" class="form-control send_order" name="send_order" value="Xác nhận đơn hàng">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="review-payment">
                <h2 style="text-align: center;margin-top: -1%;">Xem lại giỏ hàng</h2>
            </div>

            <div class="table-responsive cart_info">

                <form action="{{url('/update-cart')}}" method="POST">
                    @csrf
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">{{__('Hình ảnh')}}</td>
                                <td class="description">{{__('Tên sản phẩm')}}</td>
                                <td class="price">{{__('Giá sản phẩm')}}</td>
                                <td class="quantity">{{__('Số lượng')}}</td>
                                <td class="total">{{__('Thành tiền')}}</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @if(Session::get('cart')==true)
                            @php
                            $total = 0;
                            @endphp
                            @foreach(Session::get('cart') as $key => $cart)
                            @php
                            $subtotal = $cart['product_price']*$cart['product_qty'];
                            $total+=$subtotal;
                            @endphp

                            <tr>
                                <td class="cart_product">
                                    <img src="{{asset('public/uploads/product/'.$cart['product_image'])}}" width="90" alt="{{$cart['product_name']}}" />
                                </td>
                                <td class="cart_description">
                                    <h4><a href=""></a></h4>
                                    <p>{{$cart['product_name']}}</p>
                                </td>
                                <td class="cart_price">
                                    <p>{{number_format($cart['product_price'],0,',','.')}}đ</p>
                                </td>
                                <td>
                                    <input style="width: 80px; border: none; text-align: center; color: #696763;" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}">
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">
                                        {{number_format($subtotal,0,',','.')}}đ
                                    </p>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>
                                    <li>Tổng tiền :<span>{{number_format($total,0,',','.')}}đ</span></li>
                                    @if(Session::get('coupon'))
                                    <li>
                                        @foreach(Session::get('coupon') as $key => $cou)
                                        @if($cou['coupon_condition']==0)
                                        Mã giảm : {{$cou['coupon_number']}} %
                                        <!-- <p> -->
                                            @php
                                            $total_coupon = ($total*$cou['coupon_number'])/100;

                                            @endphp
                                        <!-- </p> -->
                                        <!-- <p> -->
                                            @php
                                            $total_after_coupon = $total-$total_coupon;
                                            @endphp
                                        <!-- </p> -->
                                        @elseif($cou['coupon_condition']==1)
                                        Mã giảm : {{number_format($cou['coupon_number'],0,',','.')}} k
                                        <!-- <p> -->
                                            @php
                                            $total_coupon = $total - $cou['coupon_number'];

                                            @endphp
                                        <!-- </p> -->
                                        @php
                                        $total_after_coupon = $total_coupon;
                                        @endphp
                                        @endif
                                        @endforeach
                                    </li>

                                    @endif

                                    @if(Session::get('fee'))
                                    <li>
                                        Phí chuyển: <span>{{number_format(Session::get('fee'),0,',','.')}}đ</span></li>
                                    <?php $total_after_fee = $total + Session::get('fee'); ?>
                                    @endif
                                    <li>Tổng còn:
                                        @php
                                        if(Session::get('fee') && !Session::get('coupon')){
                                        $total_after = $total_after_fee;
                                        echo number_format($total_after,0,',','.').'đ';
                                        }elseif(!Session::get('fee') && Session::get('coupon')){
                                        $total_after = $total_after_coupon;
                                        echo number_format($total_after,0,',','.').'đ';
                                        }elseif(Session::get('fee') && Session::get('coupon')){
                                        $total_after = $total_after_coupon;
                                        $total_after = $total_after + Session::get('fee');
                                        echo number_format($total_after,0,',','.').'đ';
                                        }elseif(!Session::get('fee') && !Session::get('coupon')){
                                        $total_after = $total;
                                        echo number_format($total_after,0,',','.').'đ';
                                        }
                                        @endphp
                                    </li>
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td colspan="5">
                                    <center>
                                        @php
                                        echo "";
                                        @endphp
                                    </center>
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
