@extends('welcome')
@section('content')
<div class="features_items">
    <!--features_items-->
    <h2 class="title text-center">{{__('Sản phẩm mới nhất')}}</h2>
    @foreach($all_product as $key =>$product)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <form>
                        @csrf
                        <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                        <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                        <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                        <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                        <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">
                        <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}">
                            <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" height="320" width="50" alt="" />
                            <p>{{($product->product_name)}}</p>
                            <h2>{{number_format($product->product_price).' '.'VNĐ'}}</h2>
                        </a>
                        <button type="button" class="btn btn-default add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart">
                        <i class="fa fa-shopping-cart"></i>{{__('Thêm vào giỏ hàng')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!--features_items-->
<div style="margin-top: 2%; margin-bottom: 2%; margin-left: 95%;" class="fb-share-button" data-href="http://localhost:8080/trasuatoco/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>

@endsection
