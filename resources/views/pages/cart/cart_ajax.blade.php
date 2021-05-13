@extends('home_caterogy')
@section('content1')


<section id="cart_items">
    <h2 class="title text-center">{{__('Giỏ hàng của bạn')}}</h2>

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
                        <td>{{__('Xóa')}}</td>
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
                        <td class="cart_price">
                            <input style="width: 80px; border: none; text-align: center; color: #696763;" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}">
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">
                                {{number_format($subtotal,0,',','.')}}đ
                            </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{url('/del-product/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>
                            <input style="width: 150px;" type="submit" value="Cập nhật" name="update_qty" class="btn btn-default check-out">
                        </td>
                        <td>
                            <a style="width: 150px;" class="btn btn-default check-out" href="{{url('/del-all-product')}}">Xóa tất cả</a>
                        </td>
                        <td>
                            <?php
                            $customer_id = Session::get('customer_id');
                            if ($customer_id != NULL) {
                            ?>
                                <a style="width: 150px;" class="btn btn-default check-out" href="{{url('/checkout')}}">Thanh toán</a>

                            <?php
                            } else {
                            ?>
                                <a style="width: 150px;" class="btn btn-default check-out" href="{{url('/login')}}">Thanh toán</a>
                            <?php
                            }
                            ?>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <p>Tổng tiền :<span>{{number_format($total,0,',','.')}}đ</span></p>
                            @if(Session::get('coupon'))
                            <p>
                                @foreach(Session::get('coupon') as $key => $cou)
                                @if($cou['coupon_condition']==0)
                                Mã giảm : {{$cou['coupon_number']}} %
                            <p>
                                @php
                                $total_coupon = ($total*$cou['coupon_number'])/100;
                                echo '
                            <p>
                            <p>Tổng giảm :'.number_format($total_coupon,0,',','.').'đ</p>
                            </p>';
                            @endphp
                            </p>
                            <p>
                                Tổng đã giảm :{{number_format($total-$total_coupon,0,',','.')}}đ
                            </p>
                            @elseif($cou['coupon_condition']==1)
                            Mã giảm : {{number_format($cou['coupon_number'],0,',','.')}} đ
                            <p>
                                @php
                                $total_coupon = $total - $cou['coupon_number'];

                                @endphp
                            </p>
                            <p>
                            <p>Tổng đã giảm :{{number_format($total_coupon,0,',','.')}}đ</p>
                            </p>
                            @endif
                            @endforeach
                            </p>
                            @endif
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
        @if(Session::get('cart'))
        <tr>
            <td>
                <form method="POST" action="{{url('/check-coupon')}}">
                    @csrf
                    <input style="width: 150px; margin-left: 7px;" class="form-control" type="text" name="coupon" placeholder="Nhập mã"></br>
                    <input style="width: 150px; margin-left: 7px;" type="submit" class="btn btn-default check_coupon" name="check_coupon" value="Tính giảm giá">
                    @if(Session::get('coupon'))
                    <a style="margin-left: 65px;" class="btn btn-default check-out" href="{{url('/unset-coupon')}}">Xóa mã giảm giá</a>
                    @endif
                </form>
            </td>
        </tr>
        @endif
    </div>
</section>
@endsection
