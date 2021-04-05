@extends('home_caterogy')
@section('content1')


<section id="cart_items">
		<h2 class="title text-center">{{__('Giỏ hàng của bạn')}}</h2>
			<div class="table-responsive cart_info">
				<?php
				$content = Cart::content();
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">{{__('Hình ảnh')}}</td>
							<td class="description">{{__('Tên sản phẩm')}}</td>
							<td class="price">{{__('Giá')}}</td>
							<td class="quantity">{{__('Số lượng')}}</td>
							<td class="total">{{__('Tổng tiền')}}</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $v_content)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" height="100" width="70" alt="" /></a>
							</td>
							<td class="cart_description">
								<h4 style="margin-bottom: 23px"><a href="">{{$v_content->name}}</a></h4>

							</td>
							<td class="cart_price">
								<p>{{number_format($v_content->price).' '.'VNĐ'}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form style="margin-bottom: 10px" action="{{URL::to('/update-cart-quantity')}}" method="POST">
										{{csrf_field() }}

										<input style="margin-right: 10px" class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}" autocomplete="off" size="2">
										<input type="hidden" name="rowId_cart" value="{{$v_content->rowId}}" class="form-control">
										<input type="submit" name="update_qty" value="{{__('Cập nhật')}} " class="btn btn-default btn-sm">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									<?php
									$subtotal = $v_content->price * $v_content->qty;
									echo number_format($subtotal).' '.'VNĐ';
									?>
								</p>
							</td>
							<td class="cart_delete">
								<a style="margin-right: 10px" class="cart_quantity_delete" href="{{URL::to('/delete-to-cart',$v_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<section id="do_action">
				<div class="col-sm-6">
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>{{__('Tổng')}} <span>{{Cart::subtotal().' '.'VNĐ'}}</span></li>

							<li>{{__('Phí vận chuyển')}}<span>Free</span></li>
							<li>{{__('Tổng tiền')}} <span>{{Cart::total().' '.'VNĐ'}}</span></li>
						</ul>
							<?php
                                $customer_id = Session::get('customer_id');
                                if($customer_id!=NULL){
                                ?>
                                 <a style="margin-left: 73%" class="btn btn-default check_out" href="{{URL::to('/checkout')}}">{{__('Thanh Toán')}}</a>
                            <?php
                                }else{
                                    ?>
                                    <a style="margin-left: 73%" class="btn btn-default check_out" href="{{URL::to('/login')}}">{{__('Thanh Toán')}}</a>
                                    <?php
                                }
                            ?>
					</div>
				</div>
			</section>
		</div>
	</section> <!--/#cart_items-->

@endsection
