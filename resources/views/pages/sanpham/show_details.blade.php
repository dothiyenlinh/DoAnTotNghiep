@extends('welcome')
@section('content')
@foreach($product_details as $key => $value)
<div class="product-details">
    <!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <img src="{{URL::To('public/uploads/product/'.$value -> product_image)}}" alt="" />
        </div>
        <!-- <div style="margin-top: 4%;" class="fb-like" data-href="{{$url_canonical}}" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="false"></div> -->
    </div>
    <div class="col-sm-7">
        <div class="product-information">
            <!--/product-information-->
            <form action="{{URL::to('/save-cart')}}" method="POST">
                {{csrf_field()}}
                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                <h2>{{$value->product_name}}</h2>
                <img src="images/product-details/rating.png" alt="" />
                <span>
                    <span>{{number_format($value->product_price).' VNĐ'}}</span>
                    <label>{{__('Số lượng')}}:</label>
                    <input name="qty" type="number" min="1" value="1" />
                    <!-- <input name="productid_hidden" type="hidden" value="{{$value->product_id}}" /> -->
                    <input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">
                    <input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">
                    <input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">
                    <input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}">
                    <input type="hidden" value="1" class="cart_product_qty_{{$value->product_id}}">
                </span>
                <p><b>{{__('Tình trạng')}}: </b>{{__('Còn hàng')}} </p>
                <p><b>{{__('Điều kiện')}}: </b>{{__('Mới')}} </p>
                <p><b>{{__('Loại sản phẩm')}}: </b>{{$value->category_name}}</p>
                <p><b>{{__('Mô tả sản phẩm')}}: </b>{{$value->product_desc}}</p>
                <button style="margin-top: 30px; width: 200px; margin-left: -1px;" type="button" class="btn btn-default add-to-cartt" data-id_product="{{$value->product_id}}" name="add-to-cart">
                    <i class="fa fa-shopping-cart">{{__('Thêm vào giỏ hàng')}}</i>
                </button>
            </form>
            <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
        </div>
        <div id="similar-product" class="carousel slide" data-ride="carousel">
        </div>
        <div class="fb-comments" data-href="{{$url_canonical}}" data-width="10" data-numposts="10"></div>
        <!--/product-information-->
    </div>
</div>
@endforeach
@endsection
