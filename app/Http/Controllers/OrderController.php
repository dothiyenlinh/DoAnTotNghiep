<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Feeship;
use App\Shipping;
use App\Order;
use App\OrderDetails;
use App\Customer;
use App\Coupon;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function manage_order()
    {
        $order = Order::orderby('created_at', 'DESC')->get();
        return view('admin.manage_order')->with(compact('order'));
    }
    public function view_order($order_code)
    {
        $order_details = OrderDetails::where('order_code', $order_code)->get();
        $order = Order::where('order_code', $order_code)->get();
        foreach ($order as $key => $ord) {
            $customer_id = $ord->customer_id;
            $shipping_id = $ord->shipping_id;
        }
        $customer = Customer::where('customer_id', $customer_id)->first();
        $shipping = Shipping::where('shipping_id', $shipping_id)->first();

        $order_details_product = OrderDetails::with('product')->where('order_code', $order_code)->get();

        foreach ($order_details_product as $key => $order_d) {

            $product_coupon = $order_d->product_coupon;
        }
        if ($product_coupon != 'no') {
            $coupon = Coupon::where('coupon_code', $product_coupon)->first();
            $coupon_condition = $coupon->coupon_condition;
            $coupon_number = $coupon->coupon_number;
        } else {
            $coupon_condition = 2;
            $coupon_number = 0;
        }

        return view('admin.view_order')->with(compact('order_details', 'customer', 'shipping', 'order_details', 'coupon_condition', 'coupon_number', 'order'));
    }

    public function delete_order($order_code){
		$order = Order::where('order_code',$order_code)->delete();
		$order_details = OrderDetails::where('order_code',$order_code)->delete();
        return Redirect::to('manage-order');
    }

    public function update_order_qty(Request $request){
		//update order
		$data = $request->all();
		$order = Order::find($data['order_id']);
		$order->order_status = $data['order_status'];
		$order->save();
		//send mail confirm
		$now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
		$title_mail = "Đơn hàng đã đặt được xác nhận".' '.$now;
		$customer = Customer::where('customer_id',$order->customer_id)->first();
		// $data['email'][] = $customer->customer_email;
	  	//lay san pham
		// foreach($data['order_product_id'] as $key => $product){
		// 		$product_mail = Product::find($product);
		// 		foreach($data['quantity'] as $key2 => $qty){

		// 		 	if($key==$key2){

		// 			$cart_array[] = array(
		// 				'product_name' => $product_mail['product_name'],
		// 				'product_price' => $product_mail['product_price'],
		// 				'product_qty' => $qty
		// 			);

		// 		}
		// 	}
		// }
	  	//lay shipping
	  	$details = OrderDetails::where('order_code',$order->order_code)->first();

		$fee_ship = $details->product_feeship;
		// $coupon_mail = $details->product_coupon;

	  	$shipping = Shipping::where('shipping_id',$order->shipping_id)->first();

		$shipping_array = array(
			'fee_ship' =>  $fee_ship,
			'customer_name' => $customer->customer_name,
			'shipping_name' => $shipping->shipping_name,
			'shipping_email' => $shipping->shipping_email,
			'shipping_phone' => $shipping->shipping_phone,
			'shipping_address' => $shipping->shipping_address,
			'shipping_notes' => $shipping->shipping_notes,
			'shipping_method' => $shipping->shipping_method

		);
	  	//lay ma giam gia, lay coupon code
		$ordercode_mail = array(
			// 'coupon_code' => $coupon_mail,
			'order_code' => $details->order_code
		);

		//order date
		$order_date = $order->order_date;
		$statistic = Statistic::where('order_date',$order_date)->get();
		if($statistic){
			$statistic_count = $statistic->count();
		}else{
			$statistic_count = 0;
		}

		if($order->order_status==2){
			//them
			$total_order = 0;
			$sales = 0;
			$profit = 0;
			$quantity = 0;

			// foreach($data['order_product_id'] as $key => $product_id){
			// 	$product = Product::find($product_id);
			// 	$product_quantity = $product->product_quantity;
			// 	$product_sold = $product->product_sold;
			// 	//them
			// 	$product_price = $product->product_price;
			// 	$product_cost = $product->price_cost;
			// 	$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

			// 	foreach($data['quantity'] as $key2 => $qty){

			// 		if($key==$key2){
			// 			$pro_remain = $product_quantity - $qty;
			// 			$product->product_quantity = $pro_remain;
			// 			$product->product_sold = $product_sold + $qty;
			// 			$product->save();
			// 			//update doanh thu
			// 			$quantity+=$qty;
			// 			$total_order+=1;
			// 			$sales+=$product_price*$qty;
			// 			$profit = $sales - ($product_cost*$qty);
			// 		}

			// 	}
			// }
			//update doanh so db
			if($statistic_count>0){
				$statistic_update = Statistic::where('order_date',$order_date)->first();
				$statistic_update->sales = $statistic_update->sales + $sales;
				$statistic_update->profit =  $statistic_update->profit + $profit;
				$statistic_update->total_order = $statistic_update->total_order + $total_order;
				$statistic_update->save();

			}else{

				$statistic_new = new Statistic();
				$statistic_new->order_date = $order_date;
				$statistic_new->sales = $sales;
				$statistic_new->profit =  $profit;
				$statistic_new->total_order = $total_order;
				$statistic_new->save();
			}
		}
	}

}
