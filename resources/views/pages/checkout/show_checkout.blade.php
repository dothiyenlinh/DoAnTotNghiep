@extends('home_caterogy')
@section('content1')

<section id="cart_items">
    <form method="POST" action="{{URL::to('/order-place')}}">
        <div class="row">
            <div class="col-sm-5">
                <div>
                    <div class="col-sm-12 clearfix">
                        <div class="bill-to">
                            <h3 style="margin-bottom: 4%; margin-top: -0%; color: #696763; font-size: 20px; text-align: center;">Điền thông tin người nhận</h3>
                             {{csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control" name="shipping_name" placeholder="Họ và tên">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="shipping_address" placeholder="Địa chỉ">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="shipping_phone" placeholder="Số diện thoại">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="shipping_notes" placeholder="Ghi chú đơn hàng">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="review-payment">
                    <h2 style="text-align: center;margin-top: -1%;">Xem lại giỏ hàng</h2>
                </div>

                <div class="table-responsive cart_info">
                    <?php
                    $content = Cart::content();
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Hình ảnh</td>
                                <td class="description">Sản phẩm</td>
                                <td class="quantity">Số lượng</td>
                                <td class="total">Tổng tiền</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($content as $v_content)
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" width="50" alt="" /></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="">{{$v_content->name}}</a></h4>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                            {{csrf_field() }}
                                            <p>{{$v_content->qty}}</p>
                                        </form>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">
                                        <?php
                                        $subtotal = $v_content->price * $v_content->qty;
                                        echo number_format($subtotal) . ' ' . 'VNĐ';
                                        ?>
                                    </p>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <h4 style="margin: 40px 0; font-size: 20px">Chọn hình thức thanh toán</h4>

                {{csrf_field()}}
                <div class="payment-options">
                    <span>
                        <label><input name="payment_option" value="1" type="checkbox"> Thanh toán qua thẻ</label>
                    </span>
                    <span>
                        <label><input name="payment_option" value="2" type="checkbox"> Thanh toán tiền mặt</label>
                    </span>
                    <input style="border-radius: 5px;height: 35px; width: 100px;" type="submit" name="send_order_place" value="Đặt hàng" class="btn btn-primary btn-sm">
                </div>

            </div>



        </div>
    </form>
</section>
<!--/#cart_items-->

@endsection
